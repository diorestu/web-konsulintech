<section class="tj-service-section service-4 section-gap" id="products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sec-heading text-center wow fadeInUp" data-wow-delay=".1s">
                    <span class="sub-title text-dark"><i class="tji-box"></i>{{ __('site.products_label') }}</span>
                    <h2 class="sec-title">{{ __('site.products_heading') }}</h2>
                    <p>{{ __('site.products_intro') }}</p>
                </div>
            </div>
        </div>
        <div class="row row-gap-4">
            @foreach (config('site.products') as $key => $product)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item style-4 h-100 wow fadeInUp" data-product="{{ $key }}" data-wow-delay=".{{ $loop->iteration }}s">
                        <div class="service-icon"><i class="{{ $product['icon'] }}" aria-hidden="true"></i></div>
                        <div class="service-content">
                            <h4 class="title"><a href="{{ $product['url'] }}" target="_blank" rel="noopener noreferrer">{{ $product['name'] }}</a></h4>
                            <p class="desc">{{ __('site.product_'.$key.'_description') }}</p>
                            <a class="text-btn" href="{{ $product['url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ __('site.visit_product', ['product' => $product['name']]) }}">
                                <span class="btn-text"><span>{{ __('site.visit_website') }}</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long" aria-hidden="true"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
