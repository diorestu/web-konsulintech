<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;

    public function test_five_pages_render_in_both_languages_with_localized_navigation(): void
    {
        foreach (['id' => 'Tentang Kami', 'en' => 'About Us'] as $locale => $label) {
            foreach (['', '/about', '/services', '/portfolio', '/contact'] as $path) {
                $this->get('/'.$locale.$path)->assertOk()
                    ->assertSee('lang="'.$locale.'"', false)
                    ->assertSee($label)->assertSee('/assets/css/main.css', false)
                    ->assertDontSee('index.html', false)->assertDontSee('View demo');
            }
        }
    }

    public function test_root_redirects_and_unsupported_languages_are_rejected(): void
    {
        $this->get('/')->assertRedirect('/id');
        $this->get('/fr/about')->assertNotFound();
        $this->get('/id/shop')->assertNotFound();
    }

    public function test_language_links_preserve_the_active_page(): void
    {
        $this->get('/id/portfolio')->assertSee('href="http://localhost/en/portfolio"', false);
        $this->get('/en/services')->assertSee('href="http://localhost/id/services"', false);
    }

    public function test_whatsapp_uses_configured_number_and_localized_message(): void
    {
        config(['site.whatsapp_number' => '+62 812-3456-7890']);
        $this->get('/id')->assertSee('https://wa.me/6281234567890?', false)->assertSee('WhatsApp');
        config(['site.whatsapp_number' => '']);
        $this->get('/id')->assertDontSee('https://wa.me/', false)->assertSee('class="whatsapp-float"', false);
    }

    public function test_contact_form_validates_before_redirecting_to_whatsapp(): void
    {
        config(['site.whatsapp_number' => '6281234567890']);
        $this->from('/id/contact')->post('/id/contact', [])->assertSessionHasErrors(['conName', 'conEmail', 'conMessage']);
        $response = $this->post('/en/contact', [
            'conName' => 'Test Client', 'conEmail' => 'client@example.com',
            'conPhone' => '08123456789', 'conSubject' => 'IT Support & Maintenance', 'conMessage' => 'Discuss a website project.',
        ]);
        $response->assertRedirect();
        $this->assertStringStartsWith('https://wa.me/6281234567890?text=', $response->headers->get('Location'));
        $this->assertStringContainsString(rawurlencode('Discuss a website project.'), $response->headers->get('Location'));
    }

    public function test_unconfigured_whatsapp_returns_an_honest_form_error(): void
    {
        config(['site.whatsapp_number' => '']);
        $this->from('/id/contact')->post('/id/contact', [
            'conName' => 'Test', 'conEmail' => 'test@example.com', 'conPhone' => '08123456789', 'conMessage' => 'Hello',
        ])->assertRedirect('/id/contact')->assertSessionHasErrors('contact');
    }

    public function test_main_products_are_linked_from_home_and_services_in_both_languages(): void
    {
        foreach (['id', 'en'] as $locale) {
            foreach (['', '/services'] as $path) {
                $response = $this->get('/'.$locale.$path)->assertOk()->assertSee('id="products"', false);
                foreach (['https://humi.my.id', 'https://paperwork.biz.id', 'https://mavapos.id'] as $url) {
                    $response->assertSee('href="'.$url.'"', false);
                }
                foreach (['HUMI HRIS', 'Paperwork', 'Mava POS'] as $product) {
                    $response->assertSee($product);
                }
            }
        }
    }

    public function test_accounting_finance_and_tax_services_are_removed_from_all_pages(): void
    {
        foreach (['id', 'en'] as $locale) {
            foreach (['', '/about', '/services', '/portfolio', '/contact'] as $path) {
                $html = $this->get('/'.$locale.$path)->assertOk()->getContent();
                $this->assertDoesNotMatchRegularExpression('/accounting|finance services|akuntansi|pembukuan|tax services|pajak/i', $html);
            }
        }
    }
}
