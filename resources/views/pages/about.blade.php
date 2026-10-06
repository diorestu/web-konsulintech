@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
<div class="space-for-header"></div>

<section class="tj-page-header section-gap-x" @if (is_file(public_path('assets/images/bg/pheader-bg.webp'))) data-bg-image="{{ asset('assets/images/bg/pheader-bg.webp') }}" @endif>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tj-page-header-content text-center">
<h1 class="tj-page-title">{{ __('site.about_us') }}</h1>
<div class="tj-page-link">
<span><i class="tji-home"></i></span>
<span>
<a href="{{ route('site.home', ['locale' => $locale]) }}">{{ __('site.home') }}</a>
</span>
<span><i class="tji-arrow-right"></i></span>
<span>
<span>{{ __('site.about_us') }}</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="page-header-overlay" @if (is_file(public_path('assets/images/shape/pheader-overlay.webp'))) data-bg-image="{{ asset('assets/images/shape/pheader-overlay.webp') }}" @endif></div>
</section>


<section class="tj-choose-section section-gap" id="choose">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading-wrap">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.choose_the_best') }}</span>
<div class="heading-wrap-content">
<div class="sec-heading">
<h2 class="sec-title title-anim">{{ __('site.empowering_business_with') }} <span>{{ __('site.expertise') }}</span></h2>
</div>
<div class="btn-wrap wow fadeInUp" data-wow-delay=".6s">
<a class="tj-primary-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.request_a_call') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
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


<section class="tj-about-section-2 section-gap section-gap-x">
<div class="container">
<div class="row">
<div class="col-xl-6 col-lg-6 order-lg-1 order-2">
<div class="about-img-area style-2 wow fadeInLeft" data-wow-delay=".3s">
<div class="about-img overflow-hidden">
<img alt="" data-speed=".8" src="{{ asset('assets/images/about/about-5.webp') }}"/>
</div>
<div class="box-area style-2">
<div class="progress-box wow fadeInUp" data-wow-delay=".3s">
<h4 class="title">{{ __('site.business_progress') }}</h4>
<ul class="tj-progress-list">
<li>
<h6 class="tj-progress-title">{{ __('site.revenue') }}</h6>
<div class="tj-progress">
<span class="tj-progress-percent">82%</span>
<div class="tj-progress-bar" data-percent="82">
</div>
</div>
</li>
<li>
<h6 class="tj-progress-title">{{ __('site.satisfaction') }}</h6>
<div class="tj-progress">
<span class="tj-progress-percent">90%</span>
<div class="tj-progress-bar" data-percent="90">
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-xl-6 col-lg-6 order-lg-2 order-1">
<div class="about-content-area">
<div class="sec-heading">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.get_to_know_us') }}</span>
<h2 class="sec-title title-anim">{{ __('site.driving_innovation_and_excellence_for_sustainable_corporate_success') }} <span>{{ __('site.worldwide') }}</span>
</h2>
</div>
</div>
<div class="about-bottom-area">
<div class="mission-vision-box wow fadeInLeft" data-wow-delay=".5s">
<h4 class="title">{{ __('site.our_mission') }}</h4>
<p class="desc">{{ __('site.our_mission_is_empower_businesses_through_innovate_best') }} </p>
<ul class="list-items">
<li><i class="tji-list"></i>{{ __('site.innovation_excellence') }}</li>
<li><i class="tji-list"></i>{{ __('site.exceptional_customer') }}</li>
<li><i class="tji-list"></i>{{ __('site.business_growth') }}</li>
</ul>
</div>
<div class="mission-vision-box wow fadeInRight" data-wow-delay=".5s">
<h4 class="title">{{ __('site.our_vision') }}</h4>
<p class="desc">{{ __('site.our_vision_is_to_become_a_global_leader') }} </p>
<ul class="list-items">
<li><i class="tji-list"></i>{{ __('site.global_leadership') }}</li>
<li><i class="tji-list"></i>{{ __('site.transformative_impact') }}</li>
<li><i class="tji-list"></i>{{ __('site.sustainable_success') }}</li>
</ul>
</div>
</div>
<div class="about-btn-area wow fadeInUp" data-wow-delay=".6s">
<a class="tj-primary-btn" href="{{ route('site.about', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.learn_more_about_us') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
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


<section class="tj-testimonial-section-2 section-bottom-gap">
<div class="container">
<div class="row row-gap-3">
<div class="col-lg-6 order-lg-2">
<div class="testimonial-img-area wow fadeInUp" data-wow-delay=".3s">
<div class="testimonial-img">
<img alt="" src="{{ asset('assets/images/testimonial/testimonial-img.webp') }}"/>
<div class="sec-heading style-2">
<h2 class="sec-title title-anim">{{ __('site.hear_from_our') }} <span>{{ __('site.customer') }}</span></h2>
</div>
</div>
<div class="box-area">
<div class="rating-box wow fadeInUp" data-wow-delay=".5s">
<h2 class="title">4.9</h2>
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
<span class="rating-text">{{ __('site.80_clients_reviews') }}</span>
</div>
</div>
</div>
</div>
<div class="col-lg-6 order-lg-1">
<div class="testimonial-wrapper wow fadeInUp" data-wow-delay=".5s">
<div class="swiper testimonial-slider-2">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="testimonial-item">
<span class="quote-icon"><i class="tji-quote"></i></span>
<div class="desc">
<p>{{ __('site.working_with_konsulin_tech_has_been_a_game_2') }}</p>
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
</section>


<section class="tj-team-section-3 section-gap section-gap-x">
<div class="container">
<div class="row">
<div class="col-12">
<div class="sec-heading text-center">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i> {{ __('site.meet_our_team') }}</span>
<h2 class="sec-title title-anim">{{ __('site.success_2') }} <span>{{ __('site.stories') }}</span> {{ __('site.fuel_our_innovation') }}</h2>
</div>
</div>
</div>
<div class="row leftSwipeWrap">
<div class="col-lg-3 col-sm-6">
<div class="team-item left-swipe">
<div class="team-img">
<div class="team-img-inner">
<img alt="" src="{{ asset('assets/images/team/team-1.webp') }}"/>
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
</div>
<div class="team-content">
<h4 class="title"><a href="{{ route('site.about', ['locale' => $locale]) }}">{{ __('site.eade_marren') }}</a></h4>
<span class="designation">{{ __('site.chief_executive') }}</span>
<a class="mail-at" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="team-item left-swipe">
<div class="team-img">
<div class="team-img-inner">
<img alt="" src="{{ asset('assets/images/team/team-2.webp') }}"/>
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
</div>
<div class="team-content">
<h4 class="title"><a href="{{ route('site.about', ['locale' => $locale]) }}">{{ __('site.savannah_ngueen') }}</a></h4>
<span class="designation">{{ __('site.operations_head') }}</span>
<a class="mail-at" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="team-item left-swipe">
<div class="team-img">
<div class="team-img-inner">
<img alt="" src="{{ asset('assets/images/team/team-3.webp') }}"/>
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
</div>
<div class="team-content">
<h4 class="title"><a href="{{ route('site.about', ['locale' => $locale]) }}">{{ __('site.kristin_watson') }}</a></h4>
<span class="designation">{{ __('site.marketing_lead') }}</span>
<a class="mail-at" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="team-item left-swipe">
<div class="team-img">
<div class="team-img-inner">
<img alt="" src="{{ asset('assets/images/team/team-4.webp') }}"/>
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
</div>
<div class="team-content">
<h4 class="title"><a href="{{ route('site.about', ['locale' => $locale]) }}">{{ __('site.darlene_robertson') }}</a></h4>
<span class="designation">{{ __('site.business_director') }}</span>
<a class="mail-at" href="{{ 'mailto:'.config('site.email') }}">{{ config('site.email') }}</a>
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


<section class="tj-faq-section section-gap">
<div class="container">
<div class="row justify-content-between">
<div class="col-lg-4">
<div class="content-wrap">
<div class="sec-heading">
<span class="sub-title wow fadeInUp" data-wow-delay=".3s"><i class="tji-box"></i>{{ __('site.common_questions') }}</span>
<h2 class="sec-title title-anim">{{ __('site.need') }} <span>{{ __('site.help') }}</span> {{ __('site.start_here') }}</h2>
</div>
<p class="desc wow fadeInUp" data-wow-delay=".6s">{{ __('site.we_stay_ahead_of_curve_leveraging') }} <br/> {{ __('site.cutting_edge_are_technologies_and') }} <br/> {{ __('site.strategies_to_competitive') }}</p>
<div class="wow fadeInUp" data-wow-delay=".8s">
<a class="tj-primary-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<span class="btn-text"><span>{{ __('site.request_a_call') }}</span></span>
<span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
</a>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="accordion tj-faq" id="faqOne">
<div class="accordion-item active wow fadeInUp" data-wow-delay=".3s">
<button aria-expanded="true" class="faq-title" data-bs-target="#faq-1" data-bs-toggle="collapse" type="button">{{ __('site.what_services_does_konsulin_tech_offer_to_clients') }}</button>
<div class="collapse show" data-bs-parent="#faqOne" id="faq-1">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_1_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item wow fadeInUp" data-wow-delay=".4s">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-2" data-bs-toggle="collapse" type="button">{{ __('site.how_do_i_get_started_with_corporate_business') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-2">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_2_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item wow fadeInUp" data-wow-delay=".5s">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-3" data-bs-toggle="collapse" type="button">{{ __('site.how_do_you_ensure_the_success_of_a') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-3">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_3_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item wow fadeInUp" data-wow-delay=".6s">
<button aria-expanded="false" class="faq-title collapsed" data-bs-target="#faq-4" data-bs-toggle="collapse" type="button">{{ __('site.how_long_will_it_take_to_complete_my') }}</button>
<div class="collapse" data-bs-parent="#faqOne" id="faq-4">
<div class="accordion-body faq-text">
<p>{{ __('site.faq_4_answer') }}</p>
</div>
</div>
</div>
<div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
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
