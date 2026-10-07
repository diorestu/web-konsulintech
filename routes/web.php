<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('site.home', ['locale' => in_array(config('app.locale'), ['id', 'en']) ? config('app.locale') : 'id']));

Route::prefix('{locale}')->where(['locale' => 'id|en'])->name('site.')->group(function () {
    foreach (['home' => '/', 'about' => '/about', 'services' => '/services', 'portfolio' => '/portfolio', 'contact' => '/contact'] as $page => $path) {
        Route::get($path, [WebsiteController::class, 'page'])->defaults('page', $page)->name($page);
    }
    Route::get('/portfolio/{portfolio}', [WebsiteController::class, 'portfolio'])->whereNumber('portfolio')->name('portfolio.show');
    Route::post('/contact', [WebsiteController::class, 'contact'])->middleware('throttle:10,1')->name('contact.send');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'create'])->name('login');
        Route::post('/login', [AuthController::class, 'store'])->middleware('throttle:20,1')->name('login.store');
    });
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/', fn () => redirect()->route('admin.portfolios.index'))->name('home');
        Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
        Route::resource('portfolios', PortfolioController::class)->except('show');
    });
});
