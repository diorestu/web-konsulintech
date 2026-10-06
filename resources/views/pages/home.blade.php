@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
<div class="space-for-header"></div>

<section class="tj-banner-section section-gap-x">
<div class="banner-area">
<div class="banner-left-box">
<div class="banner-content">
<span class="sub-title wow fadeInDown" data-wow-delay=".2s">
<i class="tji-excellence"></i> {{ __('site.recognized_for_excellence') }} </span>
<h1 class="banner-title title-anim">{{ __('site.driving_excellence_through_evolution_and') }} <span>{{ __('site.trust') }}</span>
</h1>
<div class="banner-desc-area wow fadeInUp" data-wow-delay=".7s">
<a class="banner-link" href="{{ route('site.about', ['locale' => $locale]) }}">
<span><i class="tji-arrow-right-big"></i></span>
</a>
<div class="banner-desc">{{ __('site.represents_growth_expansion_and_modern_business_solution_present') }} </div>
</div>
</div>
<div class="banner-shape">
<img alt="" src="{{ asset('assets/images/shape/pattern-bg.webp') }}"/>
</div>
</div>
<div class="banner-right-box">
<div class="banner-img">
<img alt="{{ __('site.image_hero_alt') }}" data-speed="0.8" src="{{ asset('assets/images/landing/hero.png') }}" width="945" height="793" style="aspect-ratio: 945 / 793; object-fit: cover; object-position: 50% 15%; height: auto;"/>
</div>
<div class="box-area">
<div class="customers-box">
<div class="customers">
<ul>
<li class="wow fadeInLeft" data-wow-delay=".5s"><img alt="" src="{{ asset('assets/images/testimonial/client-1.webp') }}"/></li>
<li class="wow fadeInLeft" data-wow-delay=".6s"><img alt="" src="{{ asset('assets/images/testimonial/client-2.webp') }}"/></li>
<li class="wow fadeInLeft" data-wow-delay=".7s"><img alt="" src="{{ asset('assets/images/testimonial/client-3.webp') }}"/></li>
<li class="wow fadeInLeft" data-wow-delay=".8s"><span><i class="tji-plus"></i></span></li>
</ul>
</div>
<div class="customers-number wow fadeInUp" data-wow-delay=".5s">{{ __('site.30k') }}</div>
<h6 class="customers-text wow fadeInUp" data-wow-delay=".5s">{{ __('site.happy_customer_we_have_world_wide') }}</h6>
</div>
</div>
</div>
</div>
<div class="banner-scroll wow fadeInDown" data-wow-delay="2s">
<a class="scroll-down tj-scroll-btn" href="#choose">
<span><i class="tji-arrow-down-long"></i></span> {{ __('site.scroll_down') }} </a>
</div>
</section>


<section class="tj-choose-section section-gap" id="choose">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.choose_the_best') }}</span>
<h2 class="sec-title title-anim">{{ __('site.empowering_business_with') }} <span>{{ __('site.expertise') }}</span></h2>
</div>
</div>
</div>
<div class="row row-gap-4 rightSwipeWrap">
<div class="col-lg-4">
<div class="choose-box right-swipe">
<div class="choose-content">
<div class="choose-icon">
<i class="tji-innovative"></i>
</div>
<h4 class="title">{{ __('site.innovative_solutions') }}</h4>
<p class="desc">{{ __('site.we_stay_ahead_of_the_curve_leveraging_cutting') }}</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="choose-box right-swipe">
<div class="choose-content">
<div class="choose-icon">
<i class="tji-award"></i>
</div>
<h4 class="title">{{ __('site.proven_expertise') }}</h4>
<p class="desc">{{ __('site.our_experienced_team_is_committed_to_delivering_quality') }}</p>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="choose-box right-swipe">
<div class="choose-content">
<div class="choose-icon">
<i class="tji-support"></i>
</div>
<h4 class="title">{{ __('site.dedicated_support') }}</h4>
<p class="desc">{{ __('site.our_team_is_always_available_to_address_your') }}</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="tj-client-section client-section-gap wow fadeInUp" data-wow-delay=".4s">
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


<section class="tj-about-section section-gap">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 order-lg-1 order-2">
<div class="about-img-area wow fadeInLeft" data-wow-delay=".2s">
<div class="about-img overflow-hidden">
<img alt="{{ __('site.image_hero_alt') }}" data-speed="0.8" src="{{ asset('assets/images/landing/hero.png') }}" width="653" height="675" style="aspect-ratio: 653 / 675; object-fit: cover; object-position: 50% 15%; height: auto;"/>
</div>
<div class="box-area">
<div class="experience-box wow fadeInUp" data-wow-delay=".3s">
<span class="sub-title">{{ __('site.experiences') }}</span>
<div class="customers-number">03</div>
<h6 class="customers-text">{{ __('site.decades_of_experience_endless_innovation') }}</h6>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 order-lg-2 order-1">
<div class="about-content-area style-1 wow fadeInLeft" data-wow-delay=".2s">
<div class="sec-heading">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.get_to_know_us') }}</span>
<h2 class="sec-title title-anim">{{ __('site.empowering_businesses_with_innovation_expertise_and_for') }} <span>{{ __('site.success') }}</span>
</h2>
</div>
<div class="wow fadeInUp" data-wow-delay=".5s">
<a class="text-btn" href="{{ route('site.about', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
<div class="about-bottom-area">
<div class="client-review-cont wow fadeInUp" data-wow-delay=".7s">
<div class="rating-area">
<div class="star-ratings">
<div class="fill-ratings" style="width: 100%">
<span>★★★★★</span>
</div>
<div class="empty-ratings">
<span>★★★★★</span>
</div>
</div>
</div>
<p class="desc">{{ __('site.we_believe_in_building_lasting_relationships_with_our') }}</p>
<div class="client-info-area">
<div class="client-info">
<h6 class="title">{{ __('site.esther_howard') }}</h6>
<span class="designation">{{ __('site.co_founder') }}</span>
</div>
<span class="quote-icon"><i class="tji-quote"></i></span>
</div>
</div>
<div class="video-img wow fadeInUp" data-wow-delay=".9s">
<img alt="{{ __('site.image_legal_alt') }}" src="{{ asset('assets/images/landing/legal.png') }}" loading="lazy" width="224" height="234" style="aspect-ratio: 224 / 234; object-fit: cover; height: auto;"/>
<a class="video-btn video-popup" data-autoplay="true" data-maxwidth="1200px" data-vbtype="video" href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados">
<span><i class="tji-play"></i></span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="tj-service-section landing-service-fields overflow-hidden section-gap section-gap-x" id="service-fields">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center">
<span class="sub-title text-white"><i class="tji-box"></i>{{ __('site.our_solutions') }}</span>
<h2 class="sec-title text-white">{{ __('site.solutions_to_transform_your') }} <span>{{ __('site.business') }}</span></h2>
</div>
</div>
</div>
</div>
<div class="container-fluid p-0">
<div class="row">
<div class="col-12">
<div class="service-wrapper">
<div class="swiper service-slider" data-autoplay="false">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="service-item style-1">
<div class="service-img">
<img alt="{{ __('site.image_software_alt') }}" src="{{ asset('assets/images/landing/software.png') }}" loading="lazy" width="420" height="450" style="aspect-ratio: 420 / 450; object-fit: cover; height: auto;"/>
</div>
<div class="service-icon">
<i class="tji-service-1"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.pillar_it_title') }}</a></h4>
<p class="desc">{{ __('site.pillar_it_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="service-item style-1">
<div class="service-img">
<img alt="{{ __('site.image_software_alt') }}" src="{{ asset('assets/images/landing/software.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/>
</div>
<div class="service-icon">
<i class="tji-service-2"></i>
</div>
<div class="service-content">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.pillar_web_mobile_title') }}</a></h4>
<p class="desc">{{ __('site.pillar_web_mobile_description') }}</p>
<a class="text-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="service-item style-1">
<div class="service-img">
<img alt="{{ __('site.image_legal_alt') }}" src="{{ asset('assets/images/landing/legal.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/>
</div>
<div class="service-icon">
<i class="tji-service-3"></i>
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
<div class="swiper-slide">
<div class="service-item style-1">
<div class="service-img">
<img alt="{{ __('site.image_products_alt') }}" src="{{ asset('assets/images/landing/products.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/>
</div>
<div class="service-icon">
<i class="tji-service-4"></i>
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
<div class="swiper-pagination-area white-pagination"></div>
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
</section>


@include('partials.products')

<section class="tj-project-section section-gap">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading-wrap">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.proud_projects') }}</span>
<div class="heading-wrap-content">
<div class="sec-heading">
<h2 class="sec-title title-anim">{{ __('site.breaking_boundaries_building') }} <span>{{ __('site.dreams') }}</span></h2>
</div>
<p class="desc wow fadeInUp" data-wow-delay=".5s">{{ __('site.we_work_closely_with_our_clients_to_understand') }}</p>
<div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
<a class="tj-primary-btn" href="{{ route('site.portfolio', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.more_projects') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="project-area tj-arrange-container">
<div class="project-item tj-arrange-item">
<div class="project-img" role="img" aria-label="{{ __('site.image_software_alt') }}" data-bg-image="{{ asset('assets/images/landing/software.png') }}"></div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.connect') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.event_management_platform') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-long"></i>
</a>
</div>
</div>
</div>
<div class="project-item tj-arrange-item">
<div class="project-img" role="img" aria-label="{{ __('site.image_legal_alt') }}" data-bg-image="{{ asset('assets/images/landing/legal.png') }}"></div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.empower') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.digital_marketing_campaign') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-long"></i>
</a>
</div>
</div>
</div>
<div class="project-item tj-arrange-item">
<div class="project-img" role="img" aria-label="{{ __('site.image_software_alt') }}" data-bg-image="{{ asset('assets/images/landing/software.png') }}"></div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.support') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.interactive_learning_platform') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-long"></i>
</a>
</div>
</div>
</div>
<div class="project-item tj-arrange-item">
<div class="project-img" role="img" aria-label="{{ __('site.image_products_alt') }}" data-bg-image="{{ asset('assets/images/landing/products.png') }}"></div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.environmental_impact_dashboard') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-long"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="tj-countup-section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="countup-wrap">
<div class="countup-item">
<div class="inline-content">
<span class="odometer countup-number" data-count="6"></span>
<span class="count-plus"></span>
</div>
<span class="count-text">{{ __('site.projects_completed') }}</span>
<span class="count-separator" @if (is_file(public_path('assets/images/shape/separator.svg'))) data-bg-image="{{ asset('assets/images/shape/separator.svg') }}" @endif></span>
</div>
<div class="countup-item">
<div class="inline-content">
<span class="odometer countup-number" data-count="3"></span>
<span class="count-plus">{{ __('site.m') }}</span>
</div>
<span class="count-text">{{ __('site.reach_worldwide') }}</span>
<span class="count-separator" @if (is_file(public_path('assets/images/shape/separator.svg'))) data-bg-image="{{ asset('assets/images/shape/separator.svg') }}" @endif></span>
</div>
<div class="countup-item">
<div class="inline-content">
<span class="odometer countup-number" data-count="3"></span>
<span class="count-plus">{{ __('site.x') }}</span>
</div>
<span class="count-text">{{ __('site.faster_growth') }}</span>
<span class="count-separator" @if (is_file(public_path('assets/images/shape/separator.svg'))) data-bg-image="{{ asset('assets/images/shape/separator.svg') }}" @endif></span>
</div>
<div class="countup-item">
<div class="inline-content">
<span class="odometer countup-number" data-count="1"></span>
<span class="count-plus"></span>
</div>
<span class="count-text">{{ __('site.awards_archived') }}</span>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="tj-testimonial-section section-gap section-gap-x">
<div class="container">
<div class="row justify-content-between">
<div class="col-12">
<div class="sec-heading-wrap">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.clients_feedback') }}</span>
<div class="heading-wrap-content">
<div class="sec-heading">
<h2 class="sec-title title-anim">{{ __('site.success_2') }} <span>{{ __('site.stories') }}</span> {{ __('site.fuel_our_innovation') }}</h2>
</div>
<div class="slider-navigation d-inline-flex wow fadeInUp" data-wow-delay=".4s">
<div class="slider-prev">
<span class="anim-icon">
<i class="tji-arrow-left"></i>
<i class="tji-arrow-left"></i>
</span>
</div>
<div class="slider-next">
<span class="anim-icon">
<i class="tji-arrow-right"></i>
<i class="tji-arrow-right"></i>
</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="testimonial-wrapper wow fadeInUp" data-wow-delay=".5s">
<div class="swiper swiper-container testimonial-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-item">
<span class="quote-icon"><i class="tji-quote"></i></span>
<div class="desc">
<p>{{ __('site.working_with_konsulin_tech_has_been_a_game') }}</p>
</div>
<div class="testimonial-author">
<div class="author-inner">
<div class="author-img">
<img alt="" src="{{ asset('assets/images/testimonial/client-1.webp') }}"/>
</div>
<div class="author-header">
<h4 class="title">{{ __('site.guy_hawkins') }}</h4>
<span class="designation">{{ __('site.co_founder_2') }}</span>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-item">
<span class="quote-icon"><i class="tji-quote"></i></span>
<div class="desc">
<p>{{ __('site.the_results_we_ve_seen_after_partnering_with') }} </p>
</div>
<div class="testimonial-author">
<div class="author-inner">
<div class="author-img">
<img alt="" src="{{ asset('assets/images/testimonial/client-2.webp') }}"/>
</div>
<div class="author-header">
<h4 class="title">{{ __('site.ralph_edwards') }}</h4>
<span class="designation">{{ __('site.co_founder_2') }}</span>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="testimonial-item">
<span class="quote-icon"><i class="tji-quote"></i></span>
<div class="desc">
<p>{{ __('site.we_ve_been_working_with_konsulin_tech_for') }} </p>
</div>
<div class="testimonial-author">
<div class="author-inner">
<div class="author-img">
<img alt="" src="{{ asset('assets/images/testimonial/client-3.webp') }}"/>
</div>
<div class="author-header">
<h4 class="title">{{ __('site.devon_lane') }}</h4>
<span class="designation">{{ __('site.co_founder_2') }}</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="swiper-pagination-area"></div>
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
</section>


<section class="tj-faq-section section-gap tj-arrange-container-2">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-6">
<div class="faq-img-area tj-arrange-item-2">
<div class="faq-img overflow-hidden">
<img alt="{{ __('site.image_legal_alt') }}" src="{{ asset('assets/images/landing/legal.png') }}" loading="lazy" width="585" height="629" style="aspect-ratio: 585 / 629; object-fit: cover; height: auto;"/>
<h2 class="title">{{ __('site.need_help_start_here') }}</h2>
</div>
<div class="box-area">
<div class="call-box">
<h4 class="title">{{ __('site.get_started_free_call') }} </h4>
<span class="call-icon"><i class="tji-phone"></i></span>
<a class="number" href="{{ 'tel:'.preg_replace('/[^+0-9]/', '', config('site.phone')) }}">{{ config('site.phone') }}</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="accordion tj-faq tj-arrange-item-2" id="faqOne">
<div class="accordion-item active">
<button aria-expanded="true" class="faq-title" data-bs-target="#faq-1" data-bs-toggle="collapse" type="button">{{ __('site.what_services_does_konsulin_tech_offer_to_clients') }}</button>
<div class="collapse show" data-bs-parent="#faqOne" id="faq-1">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_1_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-2" data-bs-toggle="collapse" type="button">{{ __('site.how_do_i_get_started_with_corporate_business') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-2">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_2_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-3" data-bs-toggle="collapse" type="button">{{ __('site.how_do_you_ensure_the_success_of_a') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-3">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_3_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-4" data-bs-toggle="collapse" type="button">{{ __('site.how_long_will_it_take_to_complete_my') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-4">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_4_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-5" data-bs-toggle="collapse" type="button">{{ __('site.can_i_track_the_progress_of_my_project') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-5">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_5_answer') }}</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


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


<section class="tj-blog-section section-gap">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.insights_ideas') }}</span>
<h2 class="sec-title title-anim">{{ __('site.the_ultimate') }} <span>{{ __('site.resource') }}</span></h2>
</div>
</div>
</div>
<div class="row row-gap-4">
<div class="col-xl-4 col-md-6">
<div class="blog-item wow fadeInUp" data-wow-delay=".4s">
<div class="blog-thumb">
<a href="{{ route('site.services', ['locale' => $locale]) }}"><img alt="{{ __('site.image_software_alt') }}" src="{{ asset('assets/images/landing/software.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/></a>
<div class="blog-date">
<span class="date">01</span>
<span class="month">{{ __('site.service_label') }}</span>
</div>
</div>
<div class="blog-content">
<div class="blog-meta">
<span class="categories"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.services') }}</a></span>
<span>{{ __('site.by') }} <a href="{{ route('site.services', ['locale' => $locale]) }}">{{ config('site.name') }}</a></span>
</div>
<h4 class="title"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.innovative_solutions_for_every_business_success') }}</a>
</h4>
<a class="text-btn" href="{{ route('site.services', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.read_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="blog-item wow fadeInUp" data-wow-delay=".4s">
<div class="blog-thumb">
<a href="{{ route('site.services', ['locale' => $locale]) }}"><img alt="{{ __('site.image_legal_alt') }}" src="{{ asset('assets/images/landing/legal.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/></a>
<div class="blog-date">
<span class="date">02</span>
<span class="month">{{ __('site.service_label') }}</span>
</div>
</div>
<div class="blog-content">
<div class="blog-meta">
<span class="categories"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.services') }}</a></span>
<span>{{ __('site.by') }} <a href="{{ route('site.services', ['locale' => $locale]) }}">{{ config('site.name') }}</a></span>
</div>
<h4 class="title"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.harnessing_digital_transform_a_roadmap_businesses') }}</a>
</h4>
<a class="text-btn" href="{{ route('site.services', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.read_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="blog-item wow fadeInUp" data-wow-delay=".4s">
<div class="blog-thumb">
<a href="{{ route('site.services', ['locale' => $locale]) }}"><img alt="{{ __('site.image_products_alt') }}" src="{{ asset('assets/images/landing/products.png') }}" loading="lazy" width="870" height="450" style="aspect-ratio: 870 / 450; object-fit: cover; height: auto;"/></a>
<div class="blog-date">
<span class="date">03</span>
<span class="month">{{ __('site.service_label') }}</span>
</div>
</div>
<div class="blog-content">
<div class="blog-meta">
<span class="categories"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.services') }}</a></span>
<span>{{ __('site.by') }} <a href="{{ route('site.services', ['locale' => $locale]) }}">{{ config('site.name') }}</a></span>
</div>
<h4 class="title"><a href="{{ route('site.services', ['locale' => $locale]) }}">{{ __('site.mastering_change_management_lessons_for_businesses') }}</a>
</h4>
<a class="text-btn" href="{{ route('site.services', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.read_more') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
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
<img alt="{{ __('site.image_hero_alt') }}" src="{{ asset('assets/images/landing/hero.png') }}" loading="lazy" width="657" height="338" style="aspect-ratio: 657 / 338; object-fit: cover; object-position: 50% 15%; height: auto;"/>
</div>
</div>
</div>
</div>
</div>
</section>

</main>
@endsection
