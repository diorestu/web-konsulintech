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


<section class="tj-project-section section-gap">
<div class="container">
<div class="row row-gap-4">
@forelse($portfolios as $portfolio)
<div class="col-xl-4 col-md-6">
<div class="project-item wow fadeInUp" data-wow-delay=".1s">
<div class="project-img"><img src="{{ asset('storage/'.$portfolio->thumbnail) }}" alt="{{ $portfolio->title }}" loading="lazy" style="aspect-ratio: 4 / 3; object-fit: cover;"></div>
<div class="project-content">
<span class="categories">{{ $portfolio->category }}</span>
<div class="project-text">
<h4 class="title"><a href="{{ route('site.portfolio.show', ['locale' => $locale, 'portfolio' => $portfolio]) }}">{{ $portfolio->title }}</a></h4>
<a class="project-btn" href="{{ route('site.portfolio.show', ['locale' => $locale, 'portfolio' => $portfolio]) }}" aria-label="{{ $portfolio->title }}"><i class="tji-arrow-right-big"></i></a>
</div>
</div>
</div>
</div>
@empty
<div class="col-12"><p class="text-center">{{ request('q') ? __('site.no_projects') : __('site.portfolio_empty') }}</p></div>
@endforelse
</div>
<div class="mt-5">{{ $portfolios->links('pagination::bootstrap-5') }}</div>
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
