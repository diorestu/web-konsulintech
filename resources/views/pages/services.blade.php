@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
<div class="space-for-header"></div>

<section class="tj-page-header section-gap-x" @if (is_file(public_path('assets/images/bg/pheader-bg.webp'))) data-bg-image="{{ asset('assets/images/bg/pheader-bg.webp') }}" @endif>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tj-page-header-content text-center">
<h1 class="tj-page-title">{{ __('site.service') }}</h1>
<div class="tj-page-link">
<span><i class="tji-home"></i></span>
<span>
<a href="{{ route('site.home', ['locale' => $locale]) }}">{{ __('site.home') }}</a>
</span>
<span><i class="tji-arrow-right"></i></span>
<span>
<span>{{ __('site.service') }}</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="page-header-overlay" @if (is_file(public_path('assets/images/shape/pheader-overlay.webp'))) data-bg-image="{{ asset('assets/images/shape/pheader-overlay.webp') }}" @endif></div>
</section>


<section class="tj-service-section service-4 section-gap">
<div class="container">
<div class="row row-gap-4">
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay=".1s">
<div class="service-icon">
<i class="tji-service-1"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.service_it_title') }}</a></h4>
<p class="desc">{{ __('site.service_it_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay=".3s">
<div class="service-icon">
<i class="tji-service-2"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.service_website_title') }}</a></h4>
<p class="desc">{{ __('site.service_website_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay=".5s">
<div class="service-icon">
<i class="tji-service-5"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.service_legal_title') }}</a></h4>
<p class="desc">{{ __('site.service_legal_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay=".7s">
<div class="service-icon">
<i class="tji-service-3"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.service_software_title') }}</a></h4>
<p class="desc">{{ __('site.service_software_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay=".9s">
<div class="service-icon">
<i class="tji-service-4"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.service_mobile_title') }}</a></h4>
<p class="desc">{{ __('site.service_mobile_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="service-item style-4 wow fadeInUp" data-wow-delay="1s">
<div class="service-icon">
<i class="tji-service-6"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.services', ['locale' => $locale]).'#products' }}">{{ __('site.service_products_title') }}</a></h4>
<p class="desc">{{ __('site.service_products_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


@include('partials.products')

<section class="tj-contact-section section-gap section-gap-x">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="global-map wow fadeInUp" data-wow-delay=".3s">
<div class="global-map-img">
<img alt="Image" src="{{ asset('assets/images/bg/map.svg') }}"/>
<div class="location-indicator loc-1">
<div class="location-tooltip">
<span>{{ __('site.head_office') }}</span>
<p>{{ config('site.address') }}</p>
<a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
<a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
<div class="location-indicator loc-2">
<div class="location-tooltip">
<span>{{ __('site.regional_office') }}</span>
<p>{{ config('site.address') }}</p>
<a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
<a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
<div class="location-indicator loc-3">
<div class="location-tooltip">
<span>{{ __('site.regional_office') }}</span>
<p>{{ config('site.address') }}</p>
<a href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
<a href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="contact-form style-2 wow fadeInUp" data-wow-delay=".4s">
<div class="sec-heading">
<span class="sub-title text-white"><i class="tji-box"></i>{{ __('site.get_in_touch') }}</span>
<h2 class="sec-title title-anim">{{ __('site.drop_us_a') }} <span>{{ __('site.line') }}</span></h2>
</div>
<form action="{{ route('site.contact.send', ['locale' => $locale]) }}" id="website-contact-form" method="post">@csrf
@include('partials.form-errors')
<div class="row wow fadeInUp" data-wow-delay=".5s">
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.name') }}" maxlength="100" name="conName" placeholder="{{ __('site.full_name') }}" required="" type="text" value="{{ old('conName') }}"/>
</div>
</div>
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.email') }}" maxlength="254" name="conEmail" placeholder="{{ __('site.email_address') }}" required="" type="email" value="{{ old('conEmail', request('email')) }}"/>
</div>
</div>
<div class="col-sm-6">
<div class="form-input">
<input aria-label="{{ __('site.phone') }}" maxlength="30" name="conPhone" placeholder="{{ __('site.phone_number') }}" required="" type="tel" value="{{ old('conPhone') }}"/>
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
<textarea aria-label="{{ __('site.message') }}" id="message" maxlength="2000" name="conMessage" placeholder="{{ __('site.type_message') }}" required="">{{ old('conMessage') }}</textarea>
</div>
</div>
<div class="submit-btn">
<button aria-label="{{ __('site.continue') }}" class="tj-primary-btn" type="submit">
<span class="btn-text"><span>{{ __('site.continue_to_whatsapp') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</button>
</div>
</div>
</form>
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
</section>


<section class="tj-pricing-section-2 section-top-gap">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center wow fadeInUp" data-wow-delay=".3s">
<span class="sub-title"><i class="tji-box"></i>{{ __('site.pricing_plan') }}</span>
<h2 class="sec-title">{{ __('site.our_pricing') }} <span>{{ __('site.plan') }}</span></h2>
</div>
</div>
</div>
<div class="row row-gap-4">
<div class="col-xl-4 col-md-6">
<div class="pricing-box wow fadeInUp" data-wow-delay=".5s">
<div class="pricing-header">
<h4 class="package-name">{{ __('site.basic_plan') }}</h4>
<div class="package-desc">
<p>{{ __('site.essential_business_services') }}</p>
</div>
<div class="package-price">
<span class="package-currency"></span>
<span class="price-number">{{ __('site.custom_quote') }}</span>
<span class="package-period">{{ __('site.per_month') }}</span>
</div>
<div class="pricing-btn">
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.discuss_plan') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
<div class="list-items">
<ul>
<li><i class="tji-list"></i>{{ __('site.access_to_core_services') }}</li>
<li><i class="tji-list"></i>{{ __('site.limited_customer_support_email') }}</li>
<li><i class="tji-list"></i>{{ __('site.1_project_per_month') }}</li>
<li><i class="tji-list"></i>{{ __('site.basic_reporting_and_analytics') }}</li>
<li><i class="tji-list"></i>{{ __('site.standard_templates_and_tools') }}</li>
<li><i class="tji-list"></i>{{ __('site.basic_performance_tracking') }}</li>
</ul>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="pricing-box active wow fadeInUp" data-wow-delay=".7s">
<div class="pricing-header">
<h4 class="package-name">{{ __('site.standard_plan') }}</h4>
<div class="package-desc">
<p>{{ __('site.complete_business_solutions') }}</p>
</div>
<div class="package-price">
<span class="package-currency"></span>
<span class="price-number">{{ __('site.custom_quote') }}</span>
<span class="package-period">{{ __('site.per_month') }}</span>
</div>
<div class="pricing-btn">
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.discuss_plan') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
<div class="list-items">
<ul>
<li><i class="tji-list"></i>{{ __('site.all_features_in_basic_plan') }}</li>
<li><i class="tji-list"></i>{{ __('site.priority_customer_support') }}</li>
<li><i class="tji-list"></i>{{ __('site.up_to_3_projects_per_month') }}</li>
<li><i class="tji-list"></i>{{ __('site.monthly_performance_reviews') }}</li>
<li><i class="tji-list"></i>{{ __('site.collaboration_tools_for_team') }}</li>
<li><i class="tji-list"></i>{{ __('site.custom_templates') }}</li>
</ul>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="pricing-box wow fadeInUp" data-wow-delay=".9s">
<div class="pricing-header">
<h4 class="package-name">{{ __('site.premium_plan') }}</h4>
<div class="package-desc">
<p>{{ __('site.advanced_business_services') }}</p>
</div>
<div class="package-price">
<span class="package-currency"></span>
<span class="price-number">{{ __('site.custom_quote') }}</span>
<span class="package-period">{{ __('site.per_month') }}</span>
</div>
<div class="pricing-btn">
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.discuss_plan') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
<div class="list-items">
<ul>
<li><i class="tji-list"></i>{{ __('site.all_features_in_standard_plan') }}</li>
<li><i class="tji-list"></i>{{ __('site.dedicated_account_manager') }}</li>
<li><i class="tji-list"></i>{{ __('site.tailored_strategy_sessions') }}</li>
<li><i class="tji-list"></i>{{ __('site.quarterly_performance_audits') }}</li>
<li><i class="tji-list"></i>{{ __('site.priority_support') }}</li>
<li><i class="tji-list"></i>{{ __('site.24_7_emergency_service') }}</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="tj-client-section client-section-gap-2 wow fadeInUp" data-wow-delay=".4s">
<div class="container-fluid client-container">
<div class="row">
<div class="col-12">
<div class="client-content">
<h5 class="sec-title">{{ __('site.join_over') }} <span class="client-numbers">3</span> {{ __('site.companies_with') }} <span class="client-text">{{ __('site.konsulin_tech') }}</span> {{ __('site.here') }} </h5>
</div>
<div class="swiper client-slider client-slider-1">
<div class="swiper-wrapper">
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-1.webp') }}"/>
</div>
</div>
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-2.webp') }}"/>
</div>
</div>
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-3.webp') }}"/>
</div>
</div>
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-4.webp') }}"/>
</div>
</div>
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-5.webp') }}"/>
</div>
</div>
<div class="swiper-slide client-item">
<div class="client-logo">
<img alt="" src="{{ asset('assets/images/brands/brand-6.webp') }}"/>
</div>
</div>
</div>
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
