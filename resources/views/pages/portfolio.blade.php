@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
<div class="space-for-header"></div>

<section class="tj-page-header section-gap-x" @if (is_file(public_path('assets/images/bg/pheader-bg.webp'))) data-bg-image="{{ asset('assets/images/bg/pheader-bg.webp') }}" @endif>
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="tj-page-header-content text-center">
<h1 class="tj-page-title">{{ __('site.portfolio') }}</h1>
<div class="tj-page-link">
<span><i class="tji-home"></i></span>
<span>
<a href="{{ route('site.home', ['locale' => $locale]) }}">{{ __('site.home') }}</a>
</span>
<span><i class="tji-arrow-right"></i></span>
<span>
<span>{{ __('site.portfolio') }}</span>
</span>
</div>
</div>
</div>
</div>
</div>
<div class="page-header-overlay" @if (is_file(public_path('assets/images/shape/pheader-overlay.webp'))) data-bg-image="{{ asset('assets/images/shape/pheader-overlay.webp') }}" @endif></div>
</section>


<section class="tj-project-section section-gap" data-portfolio-projects data-no-results="{{ __('site.no_projects') }}">
<div class="container">
<div class="row row-gap-4">
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".1s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-6.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.event_management_platform') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".3s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-7.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.rebranding_strategy_for_a_growing_business') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".5s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-8.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.interactive_learning_platform') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".7s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-9.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.environmental_impact_dashboard') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".9s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-8.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.interactive_learning_platform') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay="1s">
<div class="project-img">
<img alt="" src="{{ asset('assets/images/project/project-7.webp') }}"/>
</div>
<div class="project-content">
<span class="categories"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.business_2') }}</a></span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.contact', ['locale' => $locale]) }}">{{ __('site.rebranding_strategy_for_a_growing_business') }}</a></h4>
<a class="project-btn" href="{{ route('site.contact', ['locale' => $locale]) }}">
<i class="tji-arrow-right-big"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="tj-pagination d-flex justify-content-center">
<ul>
<li>
<span aria-current="page" class="page-numbers current">1</span>
</li>
<li>
<a class="page-numbers" href="#">2</a>
</li>
<li>
<a class="page-numbers" href="#">3</a>
</li>
<li>
<a class="next page-numbers" href="#"><i class="tji-arrow-right-long"></i></a>
</li>
</ul>
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
