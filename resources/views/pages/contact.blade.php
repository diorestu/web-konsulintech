@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
<div class="space-for-header"></div>

<section class="tj-page-header section-gap-x" @if (is_file(public_path('assets/images/bg/pheader-bg.webp'))) data-bg-image="{{ asset('assets/images/bg/pheader-bg.webp') }}" @endif>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tj-page-header-content text-center">
<h1 class="tj-page-title">{{ __('site.contact_us') }}</h1>
<div class="tj-page-link">
<span><i class="tji-home"></i></span>
<span>
<a href="{{ route('site.home', ['locale' => $locale]) }}">{{ __('site.home') }}</a>
</span>
<span><i class="tji-arrow-right"></i></span>
<span>
<span>{{ __('site.contact_us') }}</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="page-header-overlay" @if (is_file(public_path('assets/images/shape/pheader-overlay.webp'))) data-bg-image="{{ asset('assets/images/shape/pheader-overlay.webp') }}" @endif></div>
</section>


<div class="tj-contact-area section-gap">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center">
<span class="sub-title wow fadeInUp" data-wow-delay=".1s"><i class="tji-box"></i>{{ __('site.contact_info_2') }}</span>
<h2 class="sec-title title-anim"><span>{{ __('site.reach') }}</span> {{ __('site.out_to_us') }}</h2>
</div>
</div>
</div>
<div class="row row-gap-4">
<div class="col-xl-3 col-lg-6 col-sm-6">
<div class="contact-item style-2 wow fadeInUp" data-wow-delay=".3s">
<div class="contact-icon">
<i class="tji-location-3"></i>
</div>
<h3 class="contact-title">{{ __('site.our_location') }}</h3>
<p>{{ config('site.address') }}</p>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-6">
<div class="contact-item style-2 wow fadeInUp" data-wow-delay=".5s">
<div class="contact-icon">
<i class="tji-envelop"></i>
</div>
<h3 class="contact-title">{{ __('site.email_us') }}</h3>
<ul class="contact-list">
<li><a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a></li>
<li><a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-6">
<div class="contact-item style-2 wow fadeInUp" data-wow-delay=".7s">
<div class="contact-icon">
<i class="tji-phone"></i>
</div>
<h3 class="contact-title">{{ __('site.call_us') }}</h3>
<ul class="contact-list">
<li><a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a></li>
<li><a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a></li>
</ul>
</div>
</div>
<div class="col-xl-3 col-lg-6 col-sm-6">
<div class="contact-item style-2 wow fadeInUp" data-wow-delay=".9s">
<div class="contact-icon">
<i class="tji-chat"></i>
</div>
<h3 class="contact-title">{{ __('site.live_chat') }}</h3>
<ul class="contact-list">
<li><a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a></li>
<li class="active"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.need_help') }}</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="tj-contact-section-2 section-bottom-gap">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="contact-form wow fadeInUp" data-wow-delay=".1s">
<h3 class="title">{{ __('site.feel_free_to_get_in_touch_or_visit') }}</h3>
<form action="{{ route('site.contact.send', ['locale' => $locale]) }}" id="website-contact-form" method="post">@csrf
@include('partials.form-errors')
<div class="row">
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.name') }}" maxlength="100" name="conName" placeholder="{{ __('site.full_name_2') }}" required="" type="text" value="{{ old('conName') }}"/>
</div>
</div>
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.email') }}" maxlength="254" name="conEmail" placeholder="{{ __('site.email_address_2') }}" required="" type="email" value="{{ old('conEmail', request('email')) }}"/>
</div>
</div>
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.phone') }}" maxlength="30" name="conPhone" placeholder="{{ __('site.phone_number_2') }}" required="" type="tel" value="{{ old('conPhone') }}"/>
</div>
</div>
<div class="col-sm-6">
<div class="form-input">
<div class="tj-nice-select-box">
<div class="tj-select">
<select aria-label="{{ __('site.subject') }}" maxlength="100" name="conSubject">
<option value="" @selected(old('conSubject') === '')>{{ __('site.choose_a_service') }}</option>
<option value="IT Consulting" @selected(old('conSubject') === 'IT Consulting')>{{ __('site.service_it_title') }}</option>
<option value="Website Development" @selected(old('conSubject') === 'Website Development')>{{ __('site.service_website_title') }}</option>
<option value="Custom Software Development" @selected(old('conSubject') === 'Custom Software Development')>{{ __('site.service_software_title') }}</option>
<option value="Mobile App Development" @selected(old('conSubject') === 'Mobile App Development')>{{ __('site.service_mobile_title') }}</option>
<option value="Legal &amp; Business Consulting" @selected(old('conSubject') === 'Legal & Business Consulting')>{{ __('site.service_legal_title') }}</option>
<option value="Konsulin Tech Products" @selected(old('conSubject') === 'Konsulin Tech Products')>{{ __('site.service_products_title') }}</option>
</select>
</div>
</div>
</div>
</div>
<div class="col-sm-12">
<div class="form-input message-input">
<textarea aria-label="{{ __('site.message') }}" id="message" maxlength="2000" name="conMessage" placeholder="{{ __('site.type_message_2') }}" required="">{{ old('conMessage') }}</textarea>
</div>
</div>
<div class="submit-btn">
<button aria-label="{{ __('site.continue') }}" class="tj-primary-btn" type="submit">
<span class="btn-text"><span>{{ __('site.continue_to_whatsapp_2') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</button>
</div>
</div>
</form>
</div>
</div>
<div class="col-lg-6">
<div class="map-area wow fadeInUp" data-wow-delay=".3s">
<iframe loading="lazy" src="https://maps.google.com/maps?q={{ rawurlencode(config('site.address')) }}&amp;output=embed" title="{{ __('site.location_map') }}"></iframe>
</div>
</div>
</div>
</div>
</section>


<section class="tj-cta-section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="cta-area">
<div class="cta-content">
<h2 class="title title-anim">{{ __('site.let_s_build_future_together') }}</h2>
<div class="cta-btn wow fadeInUp" data-wow-delay=".6s">
<a class="tj-primary-btn btn-dark" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.get_started_now') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
<div class="cta-img">
<img alt="" src="{{ asset('assets/images/cta/cta-bg.webp') }}"/>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
@endsection
