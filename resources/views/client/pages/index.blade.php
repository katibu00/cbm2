@extends('client.layout.app')
@section('pageTitle','Home')
@section('content')

@include('client.layout.slider')


<!-- Product Area Start -->
<section class="product-area mb--50 mb-xl--40 mb-lg--25 mb-md--30 mb-sm--20 mb-xs--15">
    <div class="container">
        <div class="row mb--42">
            <div class="col-lg-5 col-sm-10">
                <h2 class="heading__secondary">NEW ARRIVALS</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor ipisci velit, sed quia non numquam
                    eius modi </p>
            </div>
        </div>
        <div class="row">
            @forelse($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 mb--65 mb-md--50">
                <div class="payne-product">
                    <div class="product__inner">
                        <div class="product__image">
                            <figure class="product__image--holder">
                                <img src="{{ $product->featuredImage ? asset('uploads/' . $product->featuredImage->image_path) : asset('/client/img/products/product-placeholder.jpg') }}" 
                                     alt="{{ $product->title }}">
                            </figure>
                            
                            <a href="{{ route('product.details', $product->slug) }}" class="product-overlay"></a>
                            <div class="product__action">
                                <a data-bs-toggle="modal" data-bs-target="#productModal-{{ $product->id }}" class="action-btn">
                                    <i class="fa fa-eye"></i>
                                    <span class="sr-only">Quick View</span>
                                </a>
                                <a href="{{ route('wishlist.add', $product->id) }}" class="action-btn">
                                    <i class="fa fa-heart-o"></i>
                                    <span class="sr-only">Add to wishlist</span>
                                </a>
                                <a href="{{ route('cart.add', $product->id) }}" class="action-btn">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="sr-only">Add To Cart</span>
                                </a>
                            </div>
                        </div>
                        <div class="product__info">
                            <div class="product__info--left">
                                <h3 class="product__title">
                                    <a href="{{ route('product.details', $product->slug) }}">{{ $product->title }}</a>
                                </h3>
                                <div class="product__price">
                                    <span class="money">{{ number_format($product->sale_price, 2) }}</span>
                                    <span class="sign">$</span>
                                </div>
                            </div>
                            <div class="product__info--right">
                                <span class="product__rating">
                                    {{-- You might want to add a rating system later --}}
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p>No products available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
<!-- Product Area End -->

<!-- Countdown Product Area Start -->
<div class="limited-product-area mb--11pt5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-md--40 mb-sm--45">
                <div class="limited-product__image">
                    <div class="limited-product__title">
                        <h2>{{ $featuredProduct->title ?? 'Featured Product' }}</h2>
                    </div>
                    <div class="limited-product__large-image">
                        <div class="element-carousel main-slider" data-slick-options='{
                            "slidesToShow": 1,
                            "asNavFor": ".nav-slider"
                        }'>
                            @foreach($featuredProduct->images as $image)
                                <div class="item">
                                    <figure>
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $featuredProduct->title }}">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="limited-product__nav-image">
                        <div class="element-carousel nav-slider" data-slick-options='{
                            "spaceBetween": 25,
                            "slidesToShow": 3,
                            "vertical": true,
                            "focusOnSelect": true,
                            "asNavFor": ".main-slider"
                        }' 
                        data-slick-responsive='[
                            {"breakpoint": 576, "settings": { "vertical": false }}
                        ]'>
                            @foreach($featuredProduct->images as $image)
                                <div class="item">
                                    <figure>
                                        <img src="{{ asset('uploads/' . $image->image_path) }}" alt="{{ $featuredProduct->title }}">
                                    </figure>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="limited-product__info">
                    <h2 class="limited-product__name">
                        <a href="{{ route('product.details', $featuredProduct->slug) }}">{{ $featuredProduct->title }}</a>
                    </h2>
                    <p class="limited-product__desc">{!! $featuredProduct->description !!}</p>
                    <div class="d-flex align-items-center">
                        <div class="limited-product__price">
                            <span class="money">{{ number_format($featuredProduct->sale_price, 2) }}</span>
                            <span class="sign">$</span>
                        </div>
                        <span class="limited-product__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </span>
                    </div>
                    <h3 class="limited-product__subtitle">BEST DEAL, LIMITED TIME OFFER GET YOUR’S NOW!</h3>
                    <div class="limited-product__countdown">
                        <div class="countdown-wrap">
                            <div class="countdown" data-countdown="2025/10/01" data-format="short">
                                <div class="countdown__item">
                                    <span class="countdown__time daysLeft"></span>
                                    <span class="countdown__text daysText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time hoursLeft"></span>
                                    <span class="countdown__text hoursText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time minsLeft"></span>
                                    <span class="countdown__text minsText"></span>
                                </div>
                                <div class="countdown__item">
                                    <span class="countdown__time secsLeft"></span>
                                    <span class="countdown__text secsText"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn-link">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Countdown Product Area End -->

<section class="method-area mb--11pt5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="sr-only">Methods</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-sm--50">
                <div class="method-box shipment-method">
                    <i class="flaticon-truck"></i>
                    <h3>Free Home Delivery</h3>
                </div>
            </div>
            <div class="col-md-4 mb-sm--50">
                <div class="method-box money-back-method">
                    <i class="flaticon-money"></i>
                    <h3>MONEY BACK GUARANTEE</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="method-box support-method">
                    <i class="flaticon-support"></i>
                    <h3>SUPORT 24/7</h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection