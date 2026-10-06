
<div class="body-overlay"></div>

<div class="tj-preloader is-loading">
<div class="tj-preloader-inner">
<div class="tj-preloader-ball-wrap">
<div class="tj-preloader-ball-inner-wrap">
<div class="tj-preloader-ball-inner">
<div class="tj-preloader-ball"></div>
</div>
<div class="tj-preloader-ball-shadow"></div>
</div>
<div class="tj-preloader-text" id="tj-weave-anim">{{ __('site.loading') }}</div>
</div>
</div>
<div class="tj-preloader-overlay"></div>
</div>


<button type="button" id="tj-back-to-top" aria-label="{{ __('site.back_to_top') }}"><span id="tj-back-to-top-percentage" aria-hidden="true"></span></button>


<div class="search-popup-overlay"></div>


<div class="tj-offcanvas-area d-none d-lg-block">
<div class="hamburger_bg"></div>
<div class="hamburger_wrapper">
<div class="hamburger_inner">
<div class="hamburger_top d-flex align-items-center justify-content-between">
<div class="hamburger_logo">
<a class="mobile_logo brand-logo" href="{{ route('site.home', ['locale' => $locale]) }}">
@include('partials.brand')
</a>
</div>
<div class="hamburger_close">
<button aria-label="{{ __('site.menu') }}" class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
</div>
</div>
<div class="offcanvas-text">
<p>{{ __('site.developing_personalize_our_customer_journeys_to_increase_satisfaction') }}</p>
</div>
<div class="hamburger-search-area">
<h5 class="hamburger-title">{{ __('site.search_now') }}</h5>
<div class="hamburger_search">
<form action="{{ route('site.portfolio', ['locale' => $locale]) }}" method="get">
<button aria-label="{{ __('site.continue') }}" type="submit"><i class="tji-search"></i></button>
<input aria-label="{{ __('site.search_portfolio') }}" autocomplete="off" maxlength="100" name="q" placeholder="{{ __('site.search_here') }}" type="search" value=""/>
</form>
</div>
</div>
<div class="hamburger-infos">
<h5 class="hamburger-title">{{ __('site.contact_info') }}</h5>
<div class="contact-info">
<div class="contact-item">
<span class="subtitle">{{ __('site.phone') }}</span>
<a class="contact-link" href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
</div>
<div class="contact-item">
<span class="subtitle">{{ __('site.email') }}</span>
<a class="contact-link" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
<div class="contact-item">
<span class="subtitle">{{ __('site.location') }}</span>
<span class="contact-link">{{ config('site.address') }}</span>
</div>
</div>
</div>
</div>
<div class="hamburger-socials">
<h5 class="hamburger-title">{{ __('site.follow_us') }}</h5>
<div class="social-links style-3">
<ul>
<li><a href="https://www.facebook.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
</li>
<li><a href="https://www.instagram.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-instagram"></i></a>
</li>
<li><a href="https://x.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="hamburger-area d-lg-none">
<div class="hamburger_bg"></div>
<div class="hamburger_wrapper">
<div class="hamburger_inner">
<div class="hamburger_top d-flex align-items-center justify-content-between">
<div class="hamburger_logo">
<a class="mobile_logo brand-logo" href="{{ route('site.home', ['locale' => $locale]) }}">
@include('partials.brand')
</a>
</div>
<div class="hamburger_close">
<button aria-label="{{ __('site.menu') }}" class="hamburger_close_btn"><i class="fa-thin fa-times"></i></button>
</div>
</div>
<div class="hamburger_menu">
<div class="mobile_menu"></div>
</div>
<div class="hamburger-infos">
<h5 class="hamburger-title">{{ __('site.contact_info') }}</h5>
<div class="contact-info">
<div class="contact-item">
<span class="subtitle">{{ __('site.phone') }}</span>
<a class="contact-link" href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
</div>
<div class="contact-item">
<span class="subtitle">{{ __('site.email') }}</span>
<a class="contact-link" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
<div class="contact-item">
<span class="subtitle">{{ __('site.location') }}</span>
<span class="contact-link">{{ config('site.address') }}</span>
</div>
</div>
</div>
</div>
<div class="hamburger-socials">
<h5 class="hamburger-title">{{ __('site.follow_us') }}</h5>
<div class="social-links style-3">
<ul>
<li><a href="https://www.facebook.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
</li>
<li><a href="https://www.instagram.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-instagram"></i></a>
</li>
<li><a href="https://x.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
<li><a href="https://www.linkedin.com/" rel="noopener noreferrer" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
</li>
</ul>
</div>
</div>
</div>
</div>


<header class="header-area header-1 {{ $page === 'home' ? 'header-absolute' : '' }} section-gap-x">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="header-wrapper">

<div class="site_logo">
<a class="logo brand-logo" href="{{ route('site.home', ['locale' => $locale]) }}">@include('partials.brand')</a>
</div>

<div class="menu-area d-none d-lg-inline-flex align-items-center">
<nav class="mainmenu" id="mobile-menu">@include('partials.navigation')</nav>
</div>

<div class="header-right-item d-none d-lg-inline-flex">
<div class="header-search">
<button class="search">
<i class="tji-search"></i>
</button>
<button class="search_close_btn" type="button">
<svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M17 1L1 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M1 1L17 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</svg>
</button>
</div>
<div class="header-button">
<a class="tj-primary-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.let_s_talk') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
<div aria-label="{{ __('site.menu') }}" class="menu_bar menu_offcanvas d-none d-lg-inline-flex" role="button" tabindex="0">
<span></span>
<span></span>
<span></span>
</div>
</div>

<div aria-label="{{ __('site.menu') }}" class="menu_bar mobile_menu_bar d-lg-none" role="button" tabindex="0">
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>

<div class="search_popup">
<div class="container">
<div class="row justify-content-center">
<div class="col-8">
<div class="tj_search_wrapper">
<div class="search_form">
<form action="{{ route('site.portfolio', ['locale' => $locale]) }}" method="get">
<div class="search_input">
<div class="search-box">
<input aria-label="{{ __('site.search_portfolio') }}" class="search-form-input" maxlength="100" name="q" placeholder="{{ __('site.type_words_and_hit_enter') }}" required="" type="text"/>
<button aria-label="{{ __('site.continue') }}" type="submit">
<i class="tji-search"></i>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


<header class="header-area header-1 header-duplicate header-sticky section-gap-x">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="header-wrapper">

<div class="site_logo">
<a class="logo brand-logo" href="{{ route('site.home', ['locale' => $locale]) }}">@include('partials.brand')</a>
</div>

<div class="menu-area d-none d-lg-inline-flex align-items-center">
<nav class="mainmenu">@include('partials.navigation')</nav>
</div>

<div class="header-right-item d-none d-lg-inline-flex">
<div class="header-search">
<button class="search">
<i class="tji-search"></i>
</button>
<button class="search_close_btn" type="button">
<svg fill="none" height="18" viewbox="0 0 18 18" width="18" xmlns="http://www.w3.org/2000/svg">
<path d="M17 1L1 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
<path d="M1 1L17 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
</svg>
</button>
</div>
<div class="header-button">
<a class="tj-primary-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.let_s_talk') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
<div aria-label="{{ __('site.menu') }}" class="menu_bar menu_offcanvas d-none d-lg-inline-flex" role="button" tabindex="0">
<span></span>
<span></span>
<span></span>
</div>
</div>

<div aria-label="{{ __('site.menu') }}" class="menu_bar mobile_menu_bar d-lg-none" role="button" tabindex="0">
<span></span>
<span></span>
<span></span>
</div>
</div>
</div>
</div>
</div>

<div class="search_popup">
<div class="container">
<div class="row justify-content-center">
<div class="col-8">
<div class="tj_search_wrapper">
<div class="search_form">
<form action="{{ route('site.portfolio', ['locale' => $locale]) }}" method="get">
<div class="search_input">
<div class="search-box">
<input aria-label="{{ __('site.search_portfolio') }}" class="search-form-input" maxlength="100" name="q" placeholder="{{ __('site.type_words_and_hit_enter') }}" required="" type="text"/>
<button aria-label="{{ __('site.continue') }}" type="submit">
<i class="tji-search"></i>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</header>

