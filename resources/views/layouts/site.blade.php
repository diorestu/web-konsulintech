<!doctype html>
<html class="no-js" lang="{{ $locale }}">
<head>

<meta charset="utf-8"/>
<meta name="facebook-domain-verification" content="abb7ilmja2pjaakqkpw6fyib85exdh" />
<meta content="ie=edge" http-equiv="x-ua-compatible"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="{{ __('site.description') }}" name="description"/>

<title>{{ ($portfolioEntry->title ?? __('site.'.$page)).' | '.config('site.name') }}</title>

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
<link rel="canonical" href="{{ isset($portfolioEntry) ? route('site.portfolio.show', ['locale' => $locale, 'portfolio' => $portfolioEntry]) : route('site.'.$page, ['locale' => $locale]) }}">
@foreach (['id', 'en'] as $language)
<link rel="alternate" hreflang="{{ $language }}" href="{{ isset($portfolioEntry) ? route('site.portfolio.show', ['locale' => $language, 'portfolio' => $portfolioEntry]) : route('site.'.$page, ['locale' => $language]) }}">
@endforeach
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1743406136755083');
fbq('init', '1798919638096503');
fbq('track', 'PageView');
</script>
<!-- End Meta Pixel Code -->
</head>
<body>
<noscript><img height="1" width="1" style="display:none" alt=""
src="https://www.facebook.com/tr?id=1743406136755083&ev=PageView&noscript=1"
/></noscript>
<noscript><img height="1" width="1" style="display:none" alt=""
src="https://www.facebook.com/tr?id=1798919638096503&ev=PageView&noscript=1"
/></noscript>
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
