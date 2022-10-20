@extends('front.layout.app')

@section('content')
 

      
        <!--Home slider-->
        <div class="container-full">
            <div class="slideshow slideshow-wrapper slideshow-carousel">
        	   <div class="home-slideshow-carousel style2">

                @php
                    $catalog = App\Models\Catalog::where('parent_id',0)->get();
                @endphp

                @foreach ($catalog  as $cat )
                    
              
                   <div class="slide">
                       <div class="img"><a href="#;"><img class="blur-up lazyload" data-src="{{  (!empty($cat->image)? url('upload/catalog_images/'.$cat->image):url('upload/catalog_images/icon-admin.png')  )}}" src="{{  (!empty($cat->image)? url('upload/catalog_images/'.$cat->image):url('upload/catalog_images/icon-admin.png')  )}}" alt="{{ $cat->name_az }}" title="{{ $cat->name_az }}" /></a></div>
                        <div class="details">
                            <div class="inner">
                                <h3 class="collection-grid-item__title">
                                   @if(app()->getLocale() === 'az') 
                                   {{ $cat->name_az }}
                                   @elseif(app()->getLocale() === 'en')
                                   {{ $cat->name_en }}
                                   @else
                                    {{ $cat->name_ru }}
                                    @endif
                                </h3>
                            </div>
                        </div>
                    </div>
                    @endforeach

           

                </div>
            </div>
        </div>
        <!--End Home slider-->
        

        <div class="container">
            <!--BEST SELLING-->
            <div class="section product-with-colletion-bnr">
                <div class="section-header">
                    <h2>BEST SELLING</h2>
                    <p>BEST SELLING ITEM OF THIS MONTH</p>
                </div>
                <div class="grid-products grid--view-items">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->

                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Backpack With Contrast Bow</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$39.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Innerbloom Puffer Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$199.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Sunset Sleep Scarf Top</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$99.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Men Striped Ringer Tee</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$79.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product label-->
                                <div class="product-labels"><span class="lbl pr-label2">Hot</span></div>
                                <!--Product label-->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Top Slip On Velcro Sneakers</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$199.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Button Up Top Black</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$99.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="{{asset('front/images/product-images/product10.jpg')}}" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->

                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Men Grey Pants</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$90.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 item mb-4">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="assets/images/product-images/product10.jpg" alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="assets/images/product-images/product10.jpg" alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->

                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Cart Button-->
                                            <form class="add" action="cart-variant1.html" method="post">
                                                <button class="btn-icon btn btn-addto-cart btn-square" type="button" tabindex="0">
                                                    <i class="icon anm anm-cart-l"></i>
                                                    <span class="tooltip-label">Add to Cart</span>
                                                </button>
                                            </form>
                                            <!--end Cart Button-->
                                        </li>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view btn-square" data-toggle="modal" data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist btn-square" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare btn-square" href="compare-variant1.html" title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Lace Up Low Top Sneakers</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$59.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a href="#" class="btn d-inline">Shop All</a>
                    </div>
                </div>
            </div>
            <!--End BEST SELLING-->
        </div>
        

        <!--Grid With Custom Banner-->
        <div class="section grid-with-banner-section">
            <div class="container">
                <div class="grid-products style2 grid-with-banners">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3 d-flex align-items-stretch">
                            <div class="custom-banner d-flex justify-content-center align-items-center">
                                <div class="text-center">
                                    <div class="custom-inner">
                                        <h3 class="h1">This week’s <br> highlights</h3>
                                        <div class="rte-setting mb-3"><p>Here is your chance to upgrade your wardrobe with a variation of styles</p></div>
                                        <a href="#" class="btn d-inline">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item">
                                <a class="overlay" href="product-layout-3.html"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-3.html" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="assets/images/product-images/product10.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-3.html">Top Slip On Velcro Sneakers</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$99.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item">
                                <a class="overlay" href="product-layout-3.html"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-3.html" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="assets/images/product-images/product10.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-3.html">Button Up Top Black</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$199.01</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="item">
                                <a class="overlay" href="product-layout-3.html"></a>
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-3.html" class="product-img">
                                        <!-- image -->
                                        <img class="blur-up lazyload" data-src="{{asset('front/images/product-images/product10.jpg')}}" src="assets/images/product-images/product10.jpg" alt="" title="">
                                        <!-- End image -->
                                    </a>
                                    <!-- end product image -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-3.html">Crop Top Green</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$59.00</span>
                                    </div>
                                    <!-- End product price -->
                                    <!--Product Review-->
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!--End Product Review-->
                                    <!--Product Button-->
                                    <div class="button-set">
                                        <ul>
                                            <li>
                                                <!--Cart Button-->
                                                <form class="add" action="cart-variant1.html" method="post">
                                                    <button class="btn-icon btn btn-addto-cart" type="button" tabindex="0">
                                                        <i class="icon anm anm-cart-l"></i>
                                                        <span class="tooltip-label">Add to Cart</span>
                                                    </button>
                                                </form>
                                                <!--end Cart Button-->
                                            </li>
                                            <li>
                                                <!--Quick View Button-->
                                                <a href="javascript:void(0)" title="Quick View" class="btn-icon quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-l"></i>
                                                    <span class="tooltip-label">Quick View</span>
                                                </a>
                                                <!--End Quick View Button-->
                                            </li>
                                            <li>
                                                <!--Wishlist Button-->
                                                <div class="wishlist-btn">
                                                    <a class="btn-icon wishlist add-to-wishlist" href="my-wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                        <span class="tooltip-label">Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <!--End Wishlist Button-->
                                            </li>
                                            <li>
                                                <!--Compare Button-->
                                                <div class="compare-btn">
                                                    <a class="btn-icon compare add-to-compare" href="compare-style2.html" title="Add to Compare">
                                                        <i class="icon icon-reload"></i>
                                                        <span class="tooltip-label">Add to Compare</span>
                                                    </a>
                                                </div>
                                                <!--End Compare Button-->
                                            </li>
                                        </ul>
                                    </div>
                                    <!--End Product Button-->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--Image Banners-->
                <div class="imgBanners style5">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item mb-3">
                            <div class="imgBanner-grid-item">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection-banner/600x650.jpg" src="assets/images/collection-banner/600x650.jpg" alt="" title=" " />
                                    </span>
                                    <span class="details center">
                                        <span class="ttl h3">WOMEN'S</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item mb-3">
                            <div class="imgBanner-grid-item">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection-banner/600x650.jpg" src="assets/images/collection-banner/600x650.jpg" alt="" title=" " />
                                    </span>
                                    <span class="details center">
                                        <span class="ttl h3">MEN</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 img-banner-item">
                            <div class="imgBanner-grid-item">
                                <a href="#">
                                    <span class="img">
                                        <img class="blur-up lazyload" data-src="assets/images/collection-banner/600x650.jpg" src="assets/images/collection-banner/600x650.jpg" alt="" title=" " />
                                    </span>
                                    <span class="details center">
                                        <span class="ttl h3">KIDS</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Image Banners-->

          
            </div>
        </div>
        <!--End Grid With Custom Banner-->
        

  
        

        <!--Store Feature-->
        <div class="store-features">
        	<div class="container">
            	<div class="row store-info">
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<i class="anm anm-free-delivery" aria-hidden="true"></i>
                        <h5>Free Shipping &amp; Return</h5>
                        <p class="sub-text">Free shipping on all US orders</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<i class="anm anm-money" aria-hidden="true"></i>
                        <h5>Money Guarantee</h5>
                        <p class="sub-text">30 days money back guarantee</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<i class="anm anm-phone-24" aria-hidden="true"></i>
                        <h5>Online Support</h5>
                        <p class="sub-text">We support online 24/7 on day</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
        

@endsection