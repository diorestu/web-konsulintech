<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('site.home', ['locale' => in_array(config('app.locale'), ['id', 'en']) ? config('app.locale') : 'id']));

Route::prefix('{locale}')->where(['locale' => 'id|en'])->name('site.')->group(function () {
    foreach (['home' => '/', 'about' => '/about', 'services' => '/services', 'portfolio' => '/portfolio', 'contact' => '/contact'] as $page => $path) {
        Route::get($path, [WebsiteController::class, 'page'])->defaults('page', $page)->name($page);
    }
    Route::post('/contact', [WebsiteController::class, 'contact'])->middleware('throttle:10,1')->name('contact.send');
});
