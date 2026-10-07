@extends('layouts.site')
@section('content')
<main class="site-main" id="primary">
    <div class="space-for-header"></div>
    <section class="tj-page-header section-gap-x">
        <div class="container"><div class="tj-page-header-content text-center">
            <h1 class="tj-page-title">{{ $portfolioEntry->title }}</h1>
            <div class="tj-page-link"><a href="{{ route('site.portfolio', ['locale' => $locale]) }}">{{ __('site.portfolio') }}</a><span><i class="tji-arrow-right"></i></span><span>{{ $portfolioEntry->category }}</span></div>
        </div></div>
    </section>
    <section class="section-gap">
        <div class="container"><div class="row justify-content-center"><article class="col-lg-9">
            <img class="w-100 mb-4 rounded" src="{{ asset('storage/'.$portfolioEntry->thumbnail) }}" alt="{{ $portfolioEntry->title }}" style="max-height: 560px; object-fit: cover;">
            <p>{{ $portfolioEntry->category }} · {{ $portfolioEntry->publish_at->format('d M Y') }}</p>
            <div style="white-space: pre-wrap; overflow-wrap: anywhere;">{{ $portfolioEntry->content }}</div>
            <a class="text-btn mt-5" href="{{ route('site.portfolio', ['locale' => $locale]) }}"><span class="btn-text">← {{ __('site.portfolio') }}</span></a>
        </article></div></div>
    </section>
</main>
@endsection
