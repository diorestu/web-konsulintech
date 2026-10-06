<footer class="tj-footer-section footer-1 section-gap-x">
<div class="footer-main-area">
<div class="container">
<div class="row justify-content-between">
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="footer-widget wow fadeInUp" data-wow-delay=".1s">
<div class="footer-logo">
<a class="brand-logo" href="{{ route('site.home', ['locale' => $locale]) }}">
@include('partials.brand')
</a>
</div>
<div class="footer-text">
<p>{{ __('site.developing_personalze_our_customer_journeys_to_increase_satisfaction') }} </p>
</div>
<div class="award-logo-area">
<div class="award-logo">
<img alt="" src="{{ asset('assets/images/footer/award-logo-1.webp') }}"/>
</div>
<div class="award-logo">
<img alt="" src="{{ asset('assets/images/footer/award-logo-2.webp') }}"/>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6">
<div class="footer-widget widget-nav-menu wow fadeInUp" data-wow-delay=".3s">
<h5 class="title">{{ __('site.services') }}</h5>
<ul>
<li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.service_it_title') }}</a></li>
<li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.service_website_title') }}</a></li>
<li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.service_software_title') }}</a></li>
<li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.service_mobile_title') }}</a></li>
<li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.service_legal_title') }}</a></li>
<li><a href="{{ route('site.services', ['locale' => $locale]).'#products' }}">{{ __('site.service_products_title') }}</a></li>
</ul>
</div>
</div>
<div class="col-xl-2 col-lg-4 col-md-6">
<div class="footer-widget widget-nav-menu wow fadeInUp" data-wow-delay=".5s">
<h5 class="title">{{ __('site.resources') }}</h5>
<ul><li><a href="{{ route('site.home', ['locale' => $locale]) }}">{{ __('site.home') }}</a></li><li><a href="{{ route('site.about', ['locale' => $locale]) }}">{{ __('site.about') }}</a></li><li><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.services') }}</a></li><li><a href="{{ route('site.portfolio', ['locale' => $locale]) }}">{{ __('site.portfolio') }}</a></li><li><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.contact') }}</a></li></ul>
</div>
</div>
<div class="col-xl-4 col-lg-5 col-md-6">
<div class="footer-widget widget-subscribe wow fadeInUp" data-wow-delay=".7s">
<h3 class="title">{{ __('site.discuss_your_needs') }}</h3>
<div class="subscribe-form">
<form action="{{ route('site.contact', ['locale' => $locale]) }}" method="get">
<input aria-label="{{ __('site.email') }}" name="email" placeholder="{{ __('site.enter_email') }}" required="" type="email"/>
<button aria-label="{{ __('site.continue') }}" type="submit"><i class="tji-plane"></i></button>
<label for="agree"><input id="agree" required="" type="checkbox"/>{{ __('site.contact_consent') }}</label>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tj-copyright-area">
<div class="container">
<div class="row">
<div class="col-12">
<div class="copyright-content-area">
<div class="footer-contact">
<ul>
<li>
<a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">
<span class="icon"><i class="tji-phone-2"></i></span>
<span class="text">{{ config('site.phone') }}</span>
</a>
</li>
<li>
<a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</li>
</ul>
</div>
<div class="social-links">
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
<div class="copyright-text">
<p>© <span>2026</span> <a href="{{ route('site.home', ['locale' => $locale]) }}">{{ config('site.name') }}</a> {{ __('site.all_right_reserved') }}</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="bg-shape-1">
<img alt="" src="{{ asset('assets/images/shape/pattern-2.svg') }}"/>
</div>
<div class="bg-shape-2">
<img alt="" src="{{ asset('assets/images/shape/pattern-3.svg') }}"/>
</div>
</footer>