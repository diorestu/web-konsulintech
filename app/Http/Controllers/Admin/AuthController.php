<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function create()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $data = $request->validate(['email' => ['required', 'email', 'max:254'], 'password' => ['required', 'string', 'max:255']]);
        $key = 'admin-login:'.Str::lower($data['email']).'|'.$request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            throw ValidationException::withMessages(['email' => 'Terlalu banyak percobaan. Coba lagi dalam '.RateLimiter::availableIn($key).' detik.']);
        }
        if (! Auth::attempt([...$data, 'is_admin' => true])) {
            RateLimiter::hit($key, 60);
            throw ValidationException::withMessages(['email' => 'Email atau kata sandi tidak sesuai.']);
        }
        RateLimiter::clear($key);
        $request->session()->regenerate();

        return redirect()->intended(route('admin.portfolios.index'));
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
