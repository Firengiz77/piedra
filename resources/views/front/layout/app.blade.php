<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">



<meta name="description" content="@yield('description')">
<meta name="keywords" content="@yield('keywords')">
<title>@yield('title')</title>



<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('/front/images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('/front/css/plugins.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('/front/css/style.css')}}">
<link rel="stylesheet" href="{{asset('/front/css/responsive.css')}}">
</head>
<body class="template-index index-modern">
<div id="pre-loader">
    <img src="{{asset('/front/images/loader.gif')}}" alt="Loading..." />
</div>
<div class="page-wrapper">
    <!--Header-->
    <div class="header-7">
        <header class="header animated d-flex align-items-center">
            <div class="container">        
                <div class="row">
                    <!--Mobile Icons-->
                    <div class="col-4 col-sm-4 col-md-4 d-block d-lg-none mobile-icons">
                        <!--Mobile Toggle-->
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                        <!--End Mobile Toggle-->
                        <!--Search-->
                        <div class="site-search iconset">
                            <i class="icon anm anm-search-l"></i>
                        </div>
                        <!--End Search-->
                    </div>
                    <!--Mobile Icons-->
                    <!--Desktop Logo-->
                    <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                        <a href="index.html">
                            <img src="{{asset('front/images/avon-logo.svg')}}" alt="Avone Multipurpose Html Template" title="Avone Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-8 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium right hidearrow">
                                {{-- <li class="lvl1 parent  mdropdown"><a href="">Home <i class="anm anm-angle-down-l"></i></a> --}}
                                </li>


                                @foreach ($pagess as $pages)
                                @if($pages['parent_id']==0)
                                    <li class="{{ ($pages['page_id']==10 || $pages['page_id']==10)?'dropdown':'' }} @if($pages['route']==$current_route || $pages['page_id']==$page_id) current @else  @endif">
                                        <a href="@if($pages['page_id']==10 || $pages['page_id']==10)#@elseif($pages['page_id']==10){{ "/".App::getLocale().$pages['slug']}}@else{{ "/".App::getLocale()."/".$pages['slug'] }}@endif">{{ $pages['page'] }}</a>
                                       
                                        @if($pages['page_id']==10)
                                            <ul>
                                                @if($childPages = \App\Http\Controllers\Front\PagesController::getChildPage($pages['page_id'])) @endif
                                                @foreach($childPages as $childPage)
                                                    <li class="@if($childPage['slug'] == $current_slug)current-sub{{''}}@else{{''}}@endif">
                                                        <a href="/{{App::getLocale()}}/{{ $childPage['slug'] }}">{{ $childPage['page'] }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else

                                        @endif

                                        @if($pages['page_id']==12)
                                            <ul>
                                                @if($childPages = \App\Http\Controllers\Front\PagesController::getChildPage($pages['page_id'])) @endif
                                                @foreach($product_parent_categories as $product_parent_category)
                                                    <li class="@if($product_parent_category->getTranslatedAttribute('slug', App::getLocale(), $fallback) == $project_slug)current-sub @else{{''}}@endif">
                                                        <a href="/{{ App::getLocale()}}/@if(App::getLocale() == 'az'){{ $product_parent_category->page_slug_az  }}@elseif(App::getLocale() == 'en'){{ $product_parent_category->page_slug_en  }}@elseif(App::getLocale() == 'ru'){{ $product_parent_category->page_slug_ru  }}@endif/{{ $product_parent_category->getTranslatedAttribute('slug', App::getLocale(), $fallback) }}">{{ str_replace('i','İ',$product_parent_category->getTranslatedAttribute('title', App::getLocale(), $fallback)) }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @else

                                        @endif
                                    </li>
                                @endif
                            @endforeach

                   
                            


                                <li class="lvl1 parent megamenu"><a href="">Catalog <i class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style4">
                                        <ul class="grid grid--uniform mmWrapper">
                                            @php
                                            $catalogs = \App\Models\Catalog::where('parent_id',0)->get();
                                            @endphp

                                            @foreach ($catalogs as $catalog)
                                            <li class="grid__item lvl-1 col-md-4 col-lg-4"><a href="#" class="site-nav lvl-1 menu-title"> 
                                                @if(app()->getLocale() === 'az')
                                                {{ $catalog->name_az }}
                                            @elseif(app()->getLocale() === 'en') 
                                            {{ $catalog->name_en }}
                                            @else
                                            {{ $catalog->name_ru }}
                                            @endif

                                        </a>
                                                <ul class="subLinks">
                                                    @php
                                                        $cat = App\Models\Catalog::where('parent_id',$catalog->id)->get();
                                                    @endphp
                                                    @foreach ( $cat as $c )
                                                        
                                                    <li class="lvl-2"><a href="category-2columns.html" class="site-nav lvl-2">    @if(app()->getLocale() === 'az')
                                                        {{ $c->name_az }}
                                                    @elseif(app()->getLocale() === 'en') 
                                                    {{ $c->name_en }}
                                                    @else
                                                    {{ $c->name_ru }}
                                                    @endif
                                                </a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                      
                                      

                                        </ul>
                                        <div class="row clear">
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="assets/images/megamenu-banner4.jpg" data-src="assets/images/megamenu-banner4.jpg" alt=""/></a>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="assets/images/megamenu-banner4.jpg" data-src="assets/images/megamenu-banner4.jpg" alt=""/></a>
                                            </div>
                                            <div class="col-md-4 col-lg-4">
                                                <a href="#;"><img src="assets/images/megamenu-banner4.jpg" data-src="assets/images/megamenu-banner4.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            {{-- <li class="lvl1 parent "><a href="">About <i class="anm anm-angle-down-l"></i></a> </li> --}}
                            {{-- <li class="lvl1 parent "><a >Contact Us <i class="anm anm-angle-down-l"></i></a> </li> --}}

                            
                          </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <div class="col-4 col-sm-4 col-md-4 col-lg-2 align-self-center icons-col text-right" style="font-size:40px">
                        <!--Search-->
                        <div class="site-search iconset">
                            <i class="icon anm anm-search-l"></i>
                        </div>
                        <div class="search-drawer">
                            <div class="container">
                                <span class="closeSearch anm anm-times-l"></span>
                                <h3 class="title">What are you looking for?</h3>
                                <div class="block block-search">
                                    <div class="block block-content">
                                        <form class="form minisearch" id="header-search" action="#" method="get">
                                            <label for="search" class="label"><span>Search</span></label>
                                            <div class="control">
                                                <div class="searchField">
                                                    <div class="input-box">
                                                        <input id="search" type="text" name="q" value="" placeholder="Search for products, brands..." class="input-text">
                                                        <button type="submit" title="Search" class="action search" disabled=""><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                          </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Search-->
                        <!--Setting Dropdown-->
                        <div class="setting-link iconset">
                            <i class="icon icon-settings"></i>
                        </div>
                        <div id="settingsBox">
                            <div class="customer-links">
                                <p><a href="login.html" class="btn">Login</a></p>
                                <p class="text-center">New User? <a href="register.html" class="register">Create an Account</a></p>
                                <p class="text-center">Default welcome msg!</p>
                            </div>
                            <div class="currency-picker">
                                <span class="ttl">Select Currency</span>
                                <ul id="currencies" class="cnrLangList">
                                <li class="selected"><a href="#;">INR</a></li><li><a href="#;">GBP</a></li><li><a href="#;">CAD</a></li><li><a href="#;">USD</a></li><li><a href="#;">AUD</a></li><li><a href="#;">EUR</a></li><li><a href="#;">JPY</a></li></ul>
                            </div>
                            <div class="language-picker">
                                <span class="ttl">SELECT LANGUAGE</span>
                                <ul id="language" class="cnrLangList">

                                
                                    @if(Route::is('index'))
                                    <li><a href="/en">English</a></li>
                                    <li><a href="/az">Azerbaijan</a></li>
                                    <li><a href="/ru">Russian</a></li>

                                    @else
                                    
                                    <li><a href="/en/{{$page->slug_en}}@if($page->page_id==6){{''}}@elseif($page->page_id==15)@foreach($product_parent_categories as $product_parent_category)@if($product_parent_category->getTranslatedAttribute('slug', App::getLocale(), $fallback) == $project_slug){{'/'.$product_parent_category->getTranslatedAttribute('slug', 'en', $fallback)}}@endif{{''}}@endforeach{{''}}@elseif($page->page_id==4)@endif">English</a></li>
                                    <li><a href="/az/{{$page->slug_az}}@if($page->page_id==1){{''}}@elseif($page->page_id==15)@foreach($product_parent_categories as $product_parent_category)@if($product_parent_category->getTranslatedAttribute('slug', App::getLocale(), $fallback) == $project_slug){{'/'.$product_parent_category->getTranslatedAttribute('slug', 'az', $fallback)}}@endif{{''}}@endforeach{{''}}@elseif($page->page_id==4)@endif">Azerbaijan</a></li>
                                    <li><a href="/ru/{{$page->slug_ru}}@if($page->page_id==6){{''}}@elseif($page->page_id==15)@foreach($product_parent_categories as $product_parent_category)@if($product_parent_category->getTranslatedAttribute('slug', App::getLocale(), $fallback) == $project_slug){{'/'.$product_parent_category->getTranslatedAttribute('slug', 'ru', $fallback)}}@endif{{''}}@endforeach{{''}}@elseif($page->page_id==4)@endif">Russian</a></li>
                                    
                                    @endif

                                  
                                </ul>
                            </div>
                        </div>
                        <!--End Setting Dropdown-->
                        <!--Wishlist-->
                        <div class="wishlist-link iconset">
                            <i class="icon anm anm-heart-l"></i>
                            <span class="wishlist-count">0</span>
                        </div>
                        <!--End Wishlist-->
                        <!--Minicart Dropdown-->
                        <div class="header-cart iconset">
                            <a href="#" class="site-header__cart btn-minicart" data-toggle="modal" data-target="#minicart-drawer">
                                <i class="icon anm anm-bag-l"></i>
                                <span class="site-cart-count">2</span>
                            </a>
                        </div>
                        <!--End Minicart Dropdown-->
                    </div>
                </div>
            </div>
     
     
        </header>

        {{-- <div class="topbar-slider clearfix">
            <div class="container-fluid">
                <div class="marquee-text">
                    <div class="top-info-bar d-flex">
                        <div class="flex-item center"><a href="#;">BUY ONLINE PICK UP IN STORE</a></div>
                        <div class="flex-item center"><a href="#;"><b>FREE WORLDWIDE SHIPPING</b> ON ALL ORDERS ABOVE $100</a></div>
                        <div class="flex-item center"><a href="#;"><b>EXTENDED RETURN</b> UNTIL 30 DAYS</a></div>
                        <div class="flex-item center"><a href="#;"><b>FREE WORLDWIDE SHIPPING</b> ON ALL ORDERSABOVE $100</a></div>
                        <div class="flex-item center"><a href="#;">BUY ONLINE PICK UP IN STORE</a></div>
                        <div class="flex-item center"><a href="#;"><b>EXTENDED RETURN</b> UNTIL 30 DAYS</a></div>
                        <div class="flex-item center"><a href="#;"><b>FREE WORLDWIDE SHIPPING</b> ON ALL ORDERS ABOVE $100</a></div>
                        <div class="flex-item center"><a href="#;">BUY ONLINE PICK UP IN STORE</a></div>
                        <div class="flex-item center"><a href="#;"><b>EXTENDED RETURN</b> UNTIL 30 DAYS</a></div>
                        <div class="flex-item center"><a href="#;"><b>FREE WORLDWIDE SHIPPING</b> ON ALL ORDERS ABOVE $100</a></div>
                    </div>
                </div>
            </div>
        </div> --}}

        
    </div>
    <!--End Header-->


    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	{{-- <li class="lvl1 parent "><a href="">Home <i class="anm anm-plus-l"></i></a></li> --}}
         
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Category Page<i class="anm anm-plus-l"></i></a>
              <ul>
              	<li><a href="category-2columns.html" class="site-nav">2 Columns with style1</a></li>
                <li><a href="category-3columns.html" class="site-nav">3 Columns with style2</a></li>
                <li><a href="category-4columns.html" class="site-nav">4 Columns with style3</a></li>
                <li><a href="category-5columns.html" class="site-nav">5 Columns with style4</a></li>
                <li><a href="category-6columns.html" class="site-nav">6 Columns with Fullwidth</a></li>
                <li><a href="category-7columns.html" class="site-nav">7 Columns</a></li>
                <li><a href="category-empty.html" class="site-nav last">Category Empty</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-list-view.html" class="site-nav">List View</a></li>
                <li><a href="shop-category-slideshow.html" class="site-nav">Category Slideshow</a></li>
                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth/No Sidebar</a></li>
                <li><a href="shop-no-sidebar.html" class="site-nav">No Sidebar/No Filter</a></li>
                <li><a href="shop-category-slideshow.html" class="site-nav last">With category description</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Page<i class="anm anm-plus-l"></i></a>
            	<ul>
                    <li><a href="shop-left-sidebar.html" class="site-nav">Simple Heading</a></li>
                    <li><a href="shop-small-heading.html" class="site-nav">Small Heading</a></li>
                    <li><a href="shop-no-sidebar.html" class="site-nav">Big Heading With Image</a></li>
                    <li><a href="shop-right-sidebar.html" class="site-nav">Headings With Banner#1</a></li>
                    <li><a href="shop-heading-with-banner2.html" class="site-nav2">Headings With Banner#2</a></li>
                    <li><a href="swatches-style.html" class="site-nav">Swatches Style</a></li>
                    <li><a href="classic-pagination.html" class="site-nav last">Classic Pagination</a></li>
                </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Other Page<i class="anm anm-plus-l"></i></a>
                <ul>
                  <li><a href="my-wishlist.html" class="site-nav">My Wishlist</a></li>
                  <li><a href="cart-style1.html" class="site-nav">Cart Page Style1</a></li>
                  <li><a href="cart-style2.html" class="site-nav">Cart Page Style2</a></li>
                  <li><a href="checkout-style1.html" class="site-nav">Checkout Page Style1</a></li>
                  <li><a href="checkout-style2.html" class="site-nav">Checkout Page Style2</a></li>
                  <li><a href="compare-style1.html" class="site-nav">Compare Page Style1</a></li>
                  <li><a href="compare-style2.html" class="site-nav last">Compare Page Style2</a></li>
                </ul>
            </li>
          </ul>
        </li>
        	{{-- <li class="lvl1 parent "><a href="">About <i class="anm anm-plus-l"></i></a></li> --}}

        {{-- <li class="lvl1 parent "><a >Contact Us <i class="anm anm-plus-l"></i></a> </li> --}}

        
      </ul>
	</div>
	<!--End Mobile Menu-->
    

    <div id="page-content">
  
    @yield('content')


    </div>
    <!--End page-content-->
    
    <!--Footer-->
   	<div class="footer footer-1">
        <div class="footer-top clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 about-us-col">
                        <img src="assets/images/footer-logo.png" alt="Avone"/>
                        <p> <b>Address </b>: {{ $contact->address }}</p>
                        <p><b>Phone</b>: {{ $contact->phone }}</p>
                        <p><b>Email</b>: <a href="mailto:sales@yousite.com">{{ $contact->email }}</a></p>
                        <ul class="list--inline social-icons">
                            <li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
                          
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4">Quick Shop</h4>
                        <ul>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Kids</a></li>
                            <li><a href="#">Sportswear</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4">Informations</h4>
                        <ul>
                            {{-- <li><a href="aboutus-style1.html">About us</a></li> --}}
                            <li><a href="login.html">Login</a></li>
                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                            <li><a href="#">Terms &amp; condition</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4">Customer Services</h4>
                        <ul>
                            <li><a href="#">Request Personal Data</a></li>
                            <li><a href="faqs-style1.html">FAQ's</a></li>
                            {{-- <li><a href="contact-style1.html">Contact Us</a></li> --}}
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 newsletter-col">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <form action="#" method="post">
                                    <label class="h4">Newsletter</label>
                                    <p>Enter your email to receive daily news and get 20% off coupon for all items.</p>
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter-input" name="EMAIL" value="" placeholder="Email address" required>
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="container">
                <ul class="payment-icons list--inline">
                    <li><i class="anm anm-cc-visa" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-mastercard" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-amex" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-paypal" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-discover" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-stripe" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-jcb" aria-hidden="true"></i></li>
                </ul>
                <div class="copytext">
                    &copy; 2021 Avone. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->
    
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-arw-up"></i></span>
    <!--End Scoll Top-->
    
    <!--MiniCart Drawer-->
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <a href="javascript:void(0);" class="close-cart" data-dismiss="modal" aria-label="Close"><i class="anm anm-times-r"></i></a>
                    <h4>Your cart (2 Items)</h4>
                    <div class="minicart-content">
                        <ul class="clearfix">
                            <li class="item clearfix">
                                <a class="product-image" href="#">
                                    <img src="assets/images/product-images/cart-page-img1.jpg" alt="" title="">
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-sql" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="icon icon-pencil" aria-hidden="true"></i></a>
                                    <a class="product-title" href="cart-style1.html">Backpack With Contrast Bow</a>
                                    <div class="variant-cart">Black / XL</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text"  name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$59.00</span>
                                        </div>
                                     </div>
                                </div>
                            </li>
                            <li class="item clearfix">
                                <a class="product-image" href="#">
                                    <img src="assets/images/product-images/cart-page-img1.jpg" alt="" title="">
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-sql" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="icon icon-pencil" aria-hidden="true"></i></a>
                                    <a class="product-title" href="cart-style1.html">Innerbloom Puffer</a>
                                    <div class="variant-cart">Red / S</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text"  name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$89.00</span>
                                        </div>
                                     </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="subtotal list">
                            <span>Shipping:</span>
                            <span class="product-price">$10.00</span>
                        </div>
                        <div class="subtotal list">
                            <span>Tax:</span>
                            <span class="product-price">$05.00</span>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price">$93.13</span>
                        </div>
                        <button type="button" class="btn proceed-to-checkout">Proceed to Checkout</button>
                        <button type="button" class="btn btn-secondary cart-btn">View Cart</button>
                    </div>
                </div>
    		</div>
    	</div>
    </div>
    <!--End MiniCart Drawer-->
    
    <!--Quickview Popup-->
	<div class="loadingBox"><div class="anm-spin"><i class="anm anm-spinner4"></i></div></div>
	<div class="modalOverly"></div>
    <div id="quickView-modal" class="mfp-with-anim mfp-hide">
		<button title="Close (Esc)" type="button" class="mfp-close">×</button>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<div id="slider">
					<!-- model thumbnail -->
					<div id="myCarousel" class="carousel slide">
						<!-- image slide carousel items -->
						<div class="carousel-inner">
							<!-- slide 1 -->
							<div class="item carousel-item active" data-slide-number="0">
								<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
							</div>
							<!-- End slide 1 -->
							<!-- slide 2 -->
							<div class="item carousel-item" data-slide-number="1">
								<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
							</div>
							<!-- End slide 3 -->
							<!-- slide 2 -->
							<div class="item carousel-item" data-slide-number="2">
								<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
							</div>
							<!-- End slide 3 -->
							<!-- slide 4 -->
							<div class="item carousel-item" data-slide-number="3">
								<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
							</div>
							<!-- End slide 4 -->
							<!-- slide 5 -->
							<div class="item carousel-item" data-slide-number="4">
								<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
							</div>
							<!-- End slide 4 -->
						</div>
						<!-- End image slide carousel items -->
						<!-- model thumbnail image -->
						<div class="model-thumbnail-img">
							<!-- model thumbnail slide -->
							<ul class="carousel-indicators list-inline">
								<!-- slide 1 -->
								<li class="list-inline-item active">
									<a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
										<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
									</a>
								</li>
								<!-- End slide 1 -->
								<!-- slide 2 -->
								<li class="list-inline-item">
									<a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
										<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
									</a>
								</li>
								<!-- End slide 2 -->
								<!-- slide 3 -->
								<li class="list-inline-item">
									<a id="carousel-selector-2" class="selected" data-slide-to="2" data-target="#myCarousel">
										<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
									</a>
								</li>
								<!-- End slide 3 -->
								<!-- slide 4 -->
								<li class="list-inline-item">
									<a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
										<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
									</a>
								</li>
								<!-- End slide 4 -->
								<!-- slide 5 -->
								<li class="list-inline-item">
									<a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
										<img data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="" title="">
									</a>
								</li>
								<!-- End slide 5 -->
							</ul>
							<!-- End model thumbnail slide -->
							<!-- arrow button -->
							<a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
							<a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>
							<!-- End arrow button -->
						</div>
						<!-- End model thumbnail image -->
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<div class="product-brand"><a href="#">Charcoal</a></div>
				<h2 class="product-title">Product Quick View Popup</h2>
				<div class="product-review">
					<div class="rating">
						<i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i>
					</div>
					<div class="reviews"><a href="#">5 Reviews</a></div>
				</div>
				<div class="product-info">
					<div class="product-stock"> <span class="instock">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
					<div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
				</div>
				<div class="pricebox">
					<span class="price old-price">$900.00</span>
					<span class="price">$800.00</span>
				</div>
				<div class="sort-description">Avone Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion.. </div>
				<form method="post" action="#" id="product_form--option" class="product-form">
					<div class="product-options">
						<div class="swatch clearfix swatch-0 option1">
                            <div class="product-form__item">
                                <label class="label">Color:<span class="required">*</span> <span class="slVariant">Red</span></label>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-black0" type="radio" name="option-0" value="Black">
                                    <label class="swatchLbl small black" for="swatch-black0" title="Black"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-blue1" type="radio" name="option-0" value="blue">
                                    <label class="swatchLbl small blue" for="swatch-blue1" title="Blue"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-red1" type="radio" name="option-0" value="Blue">
                                    <label class="swatchLbl small red" for="swatch-red1" title="Red"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-pink1" type="radio" name="option-0" value="Pink">
                                    <label class="swatchLbl color small pink" for="swatch-pink1" title="Pink"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-orange1" type="radio" name="option-0" value="Orange">
                                    <label class="swatchLbl color small orange" for="swatch-orange1" title="Orange"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-yellow1" type="radio" name="option-0" value="Yellow">
                                    <label class="swatchLbl color small yellow" for="swatch-yellow1" title="Yellow"></label>
                                </div>
                            </div>
                        </div>
						<div class="swatch clearfix swatch-1 option2">
							<div class="product-form__item">
							  <label class="label">Size:<span class="required">*</span> <span class="slVariant">XS</span></label>
							  <div class="swatch-element xs">
								<input class="swatchInput" id="swatch-1-xs1" type="radio" name="option-1" value="XS">
								<label class="swatchLbl medium" for="swatch-1-xs1" title="XS">XS</label>
							  </div>
							  <div class="swatch-element s">
								<input class="swatchInput" id="swatch-1-s1" type="radio" name="option-1" value="S">
								<label class="swatchLbl medium" for="swatch-1-s1" title="S">S</label>
							  </div>
							  <div class="swatch-element m">
								<input class="swatchInput" id="swatch-1-m1" type="radio" name="option-1" value="M">
								<label class="swatchLbl medium" for="swatch-1-m1" title="M">M</label>
							  </div>
							  <div class="swatch-element l">
								<input class="swatchInput" id="swatch-1-l1" type="radio" name="option-1" value="L">
								<label class="swatchLbl medium" for="swatch-1-l1" title="L">L</label>
							  </div>
							</div>
						</div>
						<div class="product-action clearfix">
							<div class="quantity">
								<div class="wrapQtyBtn">
									<div class="qtyField">
										<a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
										<input type="text" name="quantity" value="1" class="product-form__input qty">
										<a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>                                
							<div class="add-to-cart">
								<button type="button" class="btn button-cart">
									<span>Add to cart</span>
								</button>
							</div>
						</div>
					</div>
				</form>
				<div class="wishlist-btn">
					<a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
				</div>
				<div class="share-icon">
					<span>Share:</span>
					<ul class="list--inline social-icons">
						<li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
						<li><a href="#" target="_blank"><i class="icon icon-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="icon icon-pinterest"></i></a></li>
						<li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="icon icon-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--End Quickview Popup-->
    
     <!-- Including Jquery -->
     <script src="{{asset('/front/js/vendor/jquery-min.js')}}"></script>
     <script src="{{asset('/front/js/vendor/js.cookie.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('/front/js/plugins.js')}}"></script>
     <script src="{{asset('/front/js/main.js')}}"></script>
</div>
</body>
</html>