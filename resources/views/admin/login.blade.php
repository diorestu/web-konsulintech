@extends('admin.layout')
@section('title', 'Login')
@section('content')
<div class="login-panel">
    <h1>Login admin</h1><p class="text-secondary mb-4">Kelola portofolio Konsulin Tech.</p>
    <form method="post" action="{{ route('admin.login.store') }}">@csrf
        <div class="mb-3"><label class="form-label" for="email">Email</label><input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" autofocus maxlength="254"></div>
        <div class="mb-4"><label class="form-label" for="password">Kata sandi</label><input class="form-control" id="password" type="password" name="password" required autocomplete="current-password"></div>
        <button class="btn btn-primary w-100" type="submit">Masuk</button>
    </form>
</div>
@endsection
