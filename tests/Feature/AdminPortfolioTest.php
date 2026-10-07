<?php

namespace Tests\Feature;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminPortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_access_requires_login_and_an_admin_account(): void
    {
        $this->get('/admin/portfolios')->assertRedirect('/admin/login');
        $this->actingAs(User::factory()->create())->get('/admin/portfolios')->assertForbidden();
        $this->post('/admin/portfolios', [])->assertForbidden();
    }

    public function test_admin_creation_command_creates_an_account_with_a_hashed_password(): void
    {
        $this->artisan('admin:create', ['email' => 'owner@example.com'])
            ->expectsQuestion('Nama admin', 'Owner')
            ->expectsQuestion('Kata sandi (minimal 12 karakter)', 'CommandTestPassword!')
            ->expectsQuestion('Ulangi kata sandi', 'CommandTestPassword!')
            ->assertExitCode(0);
        $user = User::where('email', 'owner@example.com')->firstOrFail();
        $this->assertTrue($user->is_admin);
        $this->assertTrue(Hash::check('CommandTestPassword!', $user->password));
    }

    public function test_only_admins_can_log_in_and_failed_attempts_are_limited(): void
    {
        $user = User::factory()->create(['email' => 'visitor@example.com', 'password' => 'LocalTestPassword!']);
        $this->post('/admin/login', ['email' => $user->email, 'password' => 'LocalTestPassword!'])->assertSessionHasErrors('email');
        $this->assertGuest();
        $admin = User::factory()->create(['is_admin' => true, 'email' => 'admin@example.com', 'password' => 'LocalTestPassword!']);
        $this->post('/admin/login', ['email' => $admin->email, 'password' => 'LocalTestPassword!'])->assertRedirect('/admin/portfolios');
        $this->assertAuthenticatedAs($admin);
        $this->post('/admin/logout')->assertRedirect('/admin/login');
        $this->assertGuest();
        for ($i = 0; $i < 6; $i++) {
            $this->post('/admin/login', ['email' => 'missing@example.com', 'password' => 'wrong'])->assertSessionHasErrors('email');
        }
    }

    public function test_admin_can_create_edit_and_soft_delete_a_portfolio(): void
    {
        Storage::fake('public');
        $this->actingAs(User::factory()->create(['is_admin' => true]));
        $this->get('/admin/portfolios/create')->assertOk();
        $this->post('/admin/portfolios', [
            'thumbnail' => UploadedFile::fake()->image('project.png'), 'title' => 'Website Perusahaan',
            'category' => 'Website', 'content' => 'Deskripsi proyek.', 'status' => 'draft',
        ])->assertRedirect('/admin/portfolios');
        $portfolio = Portfolio::firstOrFail();
        Storage::disk('public')->assertExists($portfolio->thumbnail);
        $this->get('/admin/portfolios/'.$portfolio->id.'/edit')->assertOk()->assertSee('Website Perusahaan');
        $this->put('/admin/portfolios/'.$portfolio->id, [
            'title' => 'Website Baru', 'category' => 'Website', 'content' => 'Hasil pengembangan.', 'status' => 'published',
        ])->assertRedirect('/admin/portfolios');
        $this->assertNotNull($portfolio->fresh()->publish_at);
        $this->get('/id/portfolio')->assertSee('Website Baru');
        $this->delete('/admin/portfolios/'.$portfolio->id)->assertRedirect('/admin/portfolios');
        $this->assertSoftDeleted($portfolio);
        Storage::disk('public')->assertExists($portfolio->thumbnail);
        $this->get('/id/portfolio/'.$portfolio->id)->assertNotFound();
    }

    public function test_drafts_and_future_publications_are_hidden_until_the_publish_time(): void
    {
        $this->travelTo(now()->startOfMinute());
        $draft = Portfolio::create(['thumbnail' => 'a.png', 'title' => 'Draft Secret', 'category' => 'Web', 'content' => 'Hidden', 'status' => 'draft', 'publish_at' => now()->subDay()]);
        $future = Portfolio::create(['thumbnail' => 'b.png', 'title' => 'Scheduled Secret', 'category' => 'Web', 'content' => 'Hidden', 'status' => 'published', 'publish_at' => now()->addHour()]);
        foreach (['id', 'en'] as $locale) {
            $this->get('/'.$locale.'/portfolio')->assertOk()->assertDontSee('Draft Secret')->assertDontSee('Scheduled Secret');
            $this->get('/'.$locale.'/portfolio/'.$draft->id)->assertNotFound();
            $this->get('/'.$locale.'/portfolio/'.$future->id)->assertNotFound();
        }
        $this->travel(61)->minutes();
        $this->get('/id/portfolio')->assertSee('Scheduled Secret')->assertDontSee('Draft Secret');
        $this->get('/en/portfolio/'.$future->id)->assertOk();
    }

    public function test_invalid_uploads_and_statuses_are_rejected_and_content_is_escaped(): void
    {
        $this->actingAs(User::factory()->create(['is_admin' => true]));
        $this->post('/admin/portfolios', ['thumbnail' => UploadedFile::fake()->create('script.svg', 2, 'image/svg+xml'), 'title' => 'Project', 'category' => 'Web', 'content' => 'Text', 'status' => 'invalid'])->assertSessionHasErrors(['thumbnail', 'status']);
        $portfolio = Portfolio::create(['thumbnail' => 'a.png', 'title' => 'Safe title', 'category' => 'Web', 'content' => '<script>alert(1)</script>', 'status' => 'published', 'publish_at' => now()]);
        $this->get('/id/portfolio/'.$portfolio->id)->assertOk()->assertSee('&lt;script&gt;alert(1)&lt;/script&gt;', false)->assertDontSee('<script>alert(1)</script>', false);
    }
}
