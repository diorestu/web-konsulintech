<!doctype html>
<html class="no-js" lang="{{ $locale }}">
<head>

<meta charset="utf-8"/>
<meta content="ie=edge" http-equiv="x-ua-compatible"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="{{ __('site.description') }}" name="description"/>

<title>{{ __('site.'.$page).' | '.config('site.name') }}</title>

<link href="{{ asset('assets/images/logos/konsulin-tech.png') }}" rel="shortcut icon" type="image/x-icon"/>

<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/font-awesome-pro.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/bexon-icons.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/venobox.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/odometer-theme-default.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/meanmenu.css') }}" rel="stylesheet"/>
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet"/>

<link rel="stylesheet" href="{{ asset('assets/css/site.css') }}">
<link rel="canonical" href="{{ route('site.'.$page, ['locale' => $locale]) }}">
@foreach (['id', 'en'] as $language)
<link rel="alternate" hreflang="{{ $language }}" href="{{ route('site.'.$page, ['locale' => $language]) }}">
@endforeach
</head>
<body>
@include('partials.header')
<div id="smooth-wrapper">
    <div id="smooth-content">
        @yield('content')
        @include('partials.footer')
    </div>
</div>
@include('partials.whatsapp')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.js') }}"></script>
<script src="{{ asset('assets/js/gsap-scroll-to-plugin.min.js') }}"></script>
<script src="{{ asset('assets/js/gsap-scroll-trigger.min.js') }}"></script>
<script src="{{ asset('assets/js/gsap-split-text.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/meanmenu.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/site.js') }}" defer></script>
</body>
</html>
