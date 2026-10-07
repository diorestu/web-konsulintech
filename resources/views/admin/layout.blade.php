<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <title>@yield('title', 'Portofolio') · Admin Konsulin Tech</title>
    <link rel="icon" href="{{ asset('assets/images/logos/konsulin-tech.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>
    <header class="admin-header">
        <a class="admin-brand" href="{{ auth()->check() ? route('admin.portfolios.index') : route('admin.login') }}"><img src="{{ asset('assets/images/logos/konsulin-tech.png') }}" alt="" width="40" height="40"><strong>Konsulin Tech</strong><span>Admin</span></a>
        @auth
            <div class="header-actions"><a href="{{ route('site.home', ['locale' => 'id']) }}" target="_blank" rel="noopener">Lihat website ↗</a><span>{{ auth()->user()->name }}</span><form method="post" action="{{ route('admin.logout') }}">@csrf<button class="btn btn-sm btn-outline-secondary" type="submit">Keluar</button></form></div>
        @endauth
    </header>
    <main class="admin-main">
        @if(session('success'))<div class="alert alert-success" role="status">{{ session('success') }}</div>@endif
        @if($errors->any())<div class="alert alert-danger" role="alert"><ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
        @yield('content')
    </main>
</body>
</html>
