<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', fn (Blueprint $table) => $table->boolean('is_admin')->default(false));
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail');
            $table->string('title', 180);
            $table->string('category', 100);
            $table->text('content');
            $table->string('status', 20)->default('draft');
            $table->timestamp('publish_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->index(['status', 'publish_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolios');
        Schema::table('users', fn (Blueprint $table) => $table->dropColumn('is_admin'));
    }
};
