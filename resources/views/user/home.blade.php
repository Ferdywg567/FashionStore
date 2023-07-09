@extends('user.layouts.app')
@push('styles')
    <style>

    </style>
@endpush
@section('user-content')
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div
                class="ec-slider swiper-container main-slider-nav main-slider-dot swiper-container-initialized swiper-container-horizontal">
                <!-- Main slider -->
                <div class="swiper-wrapper" id="swiper-wrapper-87f0d9d3ac29375f" aria-live="off"
                    style="transition: all 0ms ease 0s; transform: translate3d(-2832px, 0px, 0px);">
                    <div class="ec-slide-item swiper-slide d-flex slide-3 swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev"
                        data-swiper-slide-index="2" style="width: 708px;" role="group" aria-label="1 / 5">
                        <div class="container align-self-center">
                            <div class="row">
                                <div class="col-sm-12 align-self-center">
                                    <div class="ec-slide-content slider-animation">
                                        <h2 class="ec-slide-stitle">Trending accessories</h2>
                                        <h1 class="ec-slide-title">Modern Sunglasses</h1>
                                        <div class="ec-slide-desc">
                                            <p>starting at $ <b>15</b>.00</p>
                                            <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                    class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @forelse($listOfNewArrival as $data)
                        @php
                            $images = json_decode($data->images);
                        @endphp
                        <div class="ec-slide-item swiper-slide d-flex slide-1 swiper-slide-duplicate-active"
                            data-swiper-slide-index="0"
                            style="width: 708px;background-image: url({{ isset($images) ? $images[0] : '' }});" role="group"
                            aria-label="2 / 5">
                            <div class="container align-self-center">
                                <div class="row">
                                    <div class="col-sm-12 align-self-center">
                                        <div class="ec-slide-content slider-animation">
                                            <h2 class="ec-slide-stitle">Sale offer</h2>
                                            <h1 class="ec-slide-title">{{ $data->name }}</h1>
                                            <div class="ec-slide-desc">
                                                <p>starting at Rp. <b>{{ $data->price }}</b></p>
                                                <a href="/product/{{ $data->id }}" class="btn btn-lg btn-primary">Shop
                                                    Now <i class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div
                    class="swiper-pagination swiper-pagination-white swiper-pagination-clickable swiper-pagination-bullets">
                    <span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                        aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                        role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                        tabindex="0" role="button" aria-label="Go to slide 3"></span>
                </div>
                <div class="swiper-buttons">
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
                        aria-controls="swiper-wrapper-87f0d9d3ac29375f"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-87f0d9d3ac29375f"></div>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>

    <!--  category Section Start -->
    <!--  For developer (More icons find in https://www.svgrepo.com/) -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Top Category</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                    <div class="ec_cat_content ec_cat_content_1">
                        <div class="ec_cat_inner ec_cat_inner-1">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/dress-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>dress & frock <span title="Category Items">(53)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_2">
                        <div class="ec_cat_inner ec_cat_inner-2">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/coat-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>Winter wear <span title="Category Items">(58)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_3">
                        <div class="ec_cat_inner ec_cat_inner-3">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/glasses-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>glasses & lens <span title="Category Items">(76)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_4">
                        <div class="ec_cat_inner ec_cat_inner-4">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/shorts-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>shorts & jeans<span title="Category Items">(49)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_5">
                        <div class="ec_cat_inner ec_cat_inner-5">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/tee-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>T-shirts<span title="Category Items">(25)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_6">
                        <div class="ec_cat_inner ec_cat_inner-6">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/jacket-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>jacket<span title="Category Items">(35)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_7">
                        <div class="ec_cat_inner ec_cat_inner-7">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/watch-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>watch<span title="Category Items">(89)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content ec_cat_content_8">
                        <div class="ec_cat_inner ec_cat_inner-8">
                            <div class="ec-category-image">
                                <img src="assets/images/icons/hat-8.svg" class="svg_img" alt="drink" />
                            </div>
                            <div class="ec-category-desc">
                                <h3>hat & caps <span title="Category Items">(65)</span></h3>
                                <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i
                                        class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <div class="ec-side-cat-overlay"></div>
                <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                    <div class="cat-sidebar">
                        <div class="cat-sidebar-box">
                            <div class="ec-sidebar-wrap">
                                <!-- Sidebar Category Block -->
                                <div class="ec-sidebar-block">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Category
                                            <button class="ec-close">×</button>
                                        </h3>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/dress-8.svg" class="svg_img"
                                                        alt="drink" />Cothes
                                                </div>
                                                <ul style="display: block;">
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Shirt <span
                                                                    title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">shorts & jeans <span
                                                                    title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">jacket<span
                                                                    title="Available Stock">- 500</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">dress & frock <span
                                                                    title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/shoes-8.svg" class="svg_img"
                                                        alt="drink" />Footwear
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Sports <span
                                                                    title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Formal <span
                                                                    title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Casual <span
                                                                    title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">safety shoes <span
                                                                    title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/jewelry-8.svg" class="svg_img"
                                                        alt="drink" />jewelry
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Earrings <span
                                                                    title="Available Stock">- 50</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Couple Rings <span
                                                                    title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Necklace <span
                                                                    title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/perfume-8.svg" class="svg_img"
                                                        alt="drink" />perfume
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Clothes perfume<span
                                                                    title="Available Stock">- 4 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">deodorant <span
                                                                    title="Available Stock">- 52 pcs</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Flower fragrance
                                                                <span title="Available Stock">- 10 pack</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Air Freshener<span
                                                                    title="Available Stock">- 35 pack</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/cosmetics-8.svg" class="svg_img"
                                                        alt="drink" />cosmetics
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">shampoo<span
                                                                    title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Sunscreen<span
                                                                    title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">body wash<span
                                                                    title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">makeup kit<span
                                                                    title="Available Stock"></span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/glasses-8.svg" class="svg_img"
                                                        alt="drink" />glasses
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Sunglasses <span
                                                                    title="Available Stock">- 20</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Lenses <span
                                                                    title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ec-sb-block-content">
                                        <ul>
                                            <li>
                                                <div class="ec-sidebar-block-item"><img
                                                        src="assets/images/icons/bag-8.svg" class="svg_img"
                                                        alt="drink" />bags
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">shopping bag <span
                                                                    title="Available Stock">- 25</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">Gym backpack <span
                                                                    title="Available Stock">- 52</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">purse <span
                                                                    title="Available Stock">- 40</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="ec-sidebar-sub-item"><a
                                                                href="shop-left-sidebar-col-3.html">wallet <span
                                                                    title="Available Stock">- 35</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sidebar Category Block -->
                                <!-- Sidebar Price Block -->
                                <div class="ec-sidebar-block ec-price-clock">
                                    <div class="ec-sb-title">
                                        <h3 class="ec-sidebar-title">Price</h3>
                                    </div>
                                    <div class="ec-sb-block-content es-price-slider">
                                        <div class="ec-price-filter">
                                            <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                                data-max="250" data-step="5"></div>
                                            <div class="ec-price-input">
                                                <label class="filter__label"><input type="text"
                                                        class="filter__input"></label>
                                                <span class="ec-price-divider"></span>
                                                <label class="filter__label"><input type="text"
                                                        class="filter__input"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product area start -->
                <div class="col-lg-9 col-md-12">

                    <!-- ec New Arrivals, ec Trending, ec Top Rated Start -->
                    <div class="row">
                        <!-- ec New Arrivals -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30"
                            data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">New Arrivals</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                @forelse($listOfNewArrival as $data)
                                    <div class="col-sm-12 ec-all-product-block">
                                        <div class="ec-all-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="/product/{{ $data->id }}" class="image">
                                                        @php
                                                            $images = json_decode($data->images);
                                                        @endphp
                                                        @if (isset($images))
                                                            <img src='{{ asset($images[0]) }}' />
                                                        @else
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="/product/{{ $data->id }}">{{ $data->name }}</a></h5>
                                                <h6 class="ec-pro-stitle"><a
                                                        href="/product/{{ $data->id }}">{{ $data->brand->name }}</a>
                                                </h6>
                                                <div class="ec-pro-rat-price">
                                                    <div class="ec-pro-rat-pri-inner">
                                                        <span class="ec-price">
                                                            <span class="new-price">Rp. {{ $data->price }}</span>
                                                            <span class="qty">{{ $data->stock }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('add.to.cart', $data->id)}}" class="btn rounded btn-primary mt-3 w-100">Add To Cart</a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>Sorry Item Was Not Found</li>
                                        </ul>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <!-- ec Trending -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30"
                            data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Trending</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                @forelse($listOfNewArrival as $data)
                                    <div class="col-sm-12 ec-all-product-block">
                                        <div class="ec-all-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="/product/{{ $data->id }}" class="image">
                                                        @php
                                                            $images = json_decode($data->images);
                                                        @endphp
                                                        @forelse ($images as $item)
                                                            <img style="width:100px" src='{{ asset($item) }}' />
                                                        @empty
                                                        @endforelse
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="/product/{{ $data->id }}">{{ $data->name }}</a></h5>
                                                <h6 class="ec-pro-stitle"><a
                                                        href="/product/{{ $data->id }}">{{ $data->brand->name }}</a>
                                                </h6>
                                                <div class="ec-pro-rat-price">
                                                    <div class="ec-pro-rat-pri-inner">
                                                        <span class="ec-price">
                                                            <span class="new-price">Rp. {{ $data->price }}</span>
                                                            <span class="qty">{{ $data->stock }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('add.to.cart', $data->id)}}" class="btn rounded btn-primary mt-3 w-100">Add To Cart</a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>Sorry Item Was Not Found</li>
                                        </ul>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <!-- ec Top Rated -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto"
                            data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Top Rated</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                @forelse($listOfNewArrival as $data)
                                    <div class="col-sm-12 ec-all-product-block">
                                        <div class="ec-all-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="/product/{{ $data->id }}" class="image">
                                                        @php
                                                            $images = json_decode($data->images);
                                                        @endphp
                                                        @if (isset($images))
                                                            <img src='{{ asset($images[0]) }}' />
                                                        @else
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="/product/{{ $data->id }}">{{ $data->name }}</a></h5>
                                                <h6 class="ec-pro-stitle"><a
                                                        href="/product/{{$data->id}}">{{$data->brand->name}}</a></h6>
                                                <div class="ec-pro-rat-price">
                                                    <div class="ec-pro-rat-pri-inner">
                                                        <span class="ec-price">
                                                            <span class="new-price">Rp. {{ $data->price }}</span>
                                                            <span class="qty">{{ $data->stock }}</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="{{route('add.to.cart', $data->id)}}" class="btn rounded btn-primary mt-3 w-100">Add To Cart</a>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>Sorry Item Was Not Found</li>
                                        </ul>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <!-- ec New Arrivals, ec Trending, ec Top Rated end -->

                    <!-- Deal of the day Start -->
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Deal of the day</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                @forelse($listOfDeal as $data)
                                    <div class="ec-spe-product">
                                        <div class="ec-spe-pro-inner">
                                            <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                                <div class="ec-spe-pro-image">
                                                    @php
                                                        $images = json_decode($data->images);
                                                    @endphp
                                                    @if (isset($images))
                                                        <img src='{{ asset($item) }}' />
                                                    @else
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                                <div class="ec-spe-pro-rating">
                                                    <span class="ec-spe-rating-icon">
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star fill"></i>
                                                        <i class="ecicon eci-star"></i>
                                                        <i class="ecicon eci-star"></i>
                                                    </span>
                                                </div>
                                                <h5 class="ec-spe-pro-title"><a
                                                        href="/product/{{ $data->id }}">{{ $data->name }}</a></h5>
                                                <div class="ec-spe-pro-desc">
                                                    {{ $data->description }}
                                                </div>
                                                <div class="ec-spe-price">
                                                    <span class="new-price">Rp. {{ $data->price }}</span>
                                                </div>
                                                <div class="ec-spe-pro-btn">
                                                    <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                                </div>
                                                <div class="ec-spe-pro-progress">
                                                    <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                            <b>15</b></span><span>Available: <b>40</b></span></span>
                                                    <span class="ec-spe-pro-progressbar"></span>
                                                </div>
                                                <div class="countdowntimer">
                                                    <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                    <span id="ec-spe-count-1"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                        <!--  Special Section End -->
                    </div>
                    <!-- Deal of the day end -->

                    <!-- Product tab area start -->
                    <div class="row space-t-50">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">New Products</h2>
                            </div>
                        </div>

                        <!-- Tab Start -->
                        <div class="col-md-12 ec-pro-tab">
                            <ul class="ec-pro-tab-nav nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        href="#all">All</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#clothes">Clothes</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#cosmetics">Cosmetics</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#formal">Formal</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row">
                                        @forelse($listOfProduct as $data)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="/product/{{ $data->id }}" class="image">
                                                                @php
                                                                    $images = json_decode($data->images);
                                                                @endphp
                                                                @if (isset($images))
                                                                    <img src='{{ asset($images[0]) }}' />
                                                                @else
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="/product/{{$data->id}}"><h6 class="ec-pro-stitle">
                                                            {{$data->name}}</h6></a>
                                                        <h5 class="ec-pro-title"><a href="/product/{{$data->id}}">{{$data->brand->name}}</a></h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star"></i>
                                                                <i class="ecicon eci-star"></i>
                                                            </span>
                                                            <span class="ec-price">
                                                                <span class="new-price">Rp. {{ $data->price }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <!-- ec 1st Product tab end -->
                                <!-- ec 2nd Product tab start -->
                                <div class="tab-pane fade" id="clothes">
                                    <div class="row">
                                        @forelse($listOfClothes as $data)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="/product/{{ $data->id }}" class="image">
                                                                @php
                                                                    $images = json_decode($data->images);
                                                                @endphp
                                                                @if (isset($images[0]))
                                                                    <img src='{{ asset($images[0]) }}' />
                                                                @else
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="/product/{{$data->id}}"><h6 class="ec-pro-stitle">
                                                                {{$data->name}}</h6></a>
                                                        <h5 class="ec-pro-title"><a href="/product/{{$data->id}}">{{$data->brand->name}}</a></h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star"></i>
                                                                <i class="ecicon eci-star"></i>
                                                            </span>
                                                            <span class="ec-price">
                                                                <span class="new-price">Rp. {{ $data->price }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <!-- ec 2nd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="cosmetics">
                                    <div class="row">
                                        @forelse($listOfCosmetics as $data)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="/product/{{ $data->id }}" class="image">
                                                                @php
                                                                    $images = json_decode($data->images);
                                                                @endphp
                                                                @if (isset($images))
                                                                    <img src='{{ asset($images[0]) }}' />
                                                                @else
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="/product/{{$data->id}}"><h6 class="ec-pro-stitle">
                                                                {{$data->name}}</h6></a>
                                                        <h5 class="ec-pro-title"><a href="/product/{{$data->id}}">{{$data->brand->name}}</a></h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star"></i>
                                                                <i class="ecicon eci-star"></i>
                                                            </span>
                                                            <span class="ec-price">
                                                                <span class="new-price">Rp. {{ $data->price }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="formal">
                                    <div class="row">
                                        @forelse($listOfFormal as $data)
                                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                                <div class="ec-product-inner">
                                                    <div class="ec-pro-image-outer">
                                                        <div class="ec-pro-image">
                                                            <a href="/product/{{ $data->id }}" class="image">
                                                                @php
                                                                    $images = json_decode($data->images);
                                                                @endphp
                                                                @if (isset($images))
                                                                    <img src='{{ asset($images[0]) }}' />
                                                                @else
                                                                @endif
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="ec-pro-content">
                                                        <a href="shop-left-sidebar-col-3.html">
                                                            <h6 class="ec-pro-stitle">
                                                                {{ $data->name }}</h6>
                                                        </a>
                                                        <h5 class="ec-pro-title"><a
                                                                href="/product/{{ $data->id }}">{{ $data->brand->name }}</a>
                                                        </h5>
                                                        <div class="ec-pro-rat-price">
                                                            <span class="ec-pro-rating">
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star fill"></i>
                                                                <i class="ecicon eci-star"></i>
                                                                <i class="ecicon eci-star"></i>
                                                            </span>
                                                            <span class="ec-price">
                                                                <span class="new-price">Rp. {{ $data->price }}</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                        @endforelse
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                            </div>
                        </div>
                    </div>
                    <!-- Product tab area end -->
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
@endsection
