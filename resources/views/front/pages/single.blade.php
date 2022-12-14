@extends('front.layout.app')

@foreach ($pagess as $pages )
@if($pages['id'] === 5)

@section('title', $pages['title'])
@section('description', $pages['description'])
@section('keywords', $pages['keywords'])

@endif
@endforeach

@section('content')

        <!--Body Container-->
     
        @include('front.widget.breadcrumb',['page' => "Single"])


        <div class="container">
            <div class="product-detail-container">
				<div class="product-single">
					<div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                            <a data-image="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" class="slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" data-src="{{ asset('front/images/about-img.jpg') }}" src="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            

                                            <img id="zoompro" class="zoompro" src="{{ asset('front/images/about-img.jpg') }}" data-zoom-image="{{ asset('front/images/about-img.jpg') }}" alt="" />
                                        </div>
                                        <div class="product-labels"><span class="lbl pr-label1">new</span></div>
                                        <div class="product-buttons">
                                            <a href="https://www.youtube.com/watch?v=93A2jOW5Mog" class="mfpbox mfp-with-anim btn popup-video" title="View Video">
												<i class="icon anm anm-video2" aria-hidden="true"></i>
												<span class="tooltip-label">Watch Video</span>
											</a>
                                            <a href="#" class="btn prlightbox" title="Zoom">
												<i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i>
												<span class="tooltip-label">Zoom Image</span>
											</a>
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                        <a href="assets/images/product-images/product-detail1.jpg" data-size="1000x1280"></a>
                                    </div>
                                    <div class="social-sharing">
                                        <span class="label">Share:</span>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                            <i class="anm anm-facebook-f" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Share</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                            <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Tweet</span>
                                        </a>
                                        <a href="#" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                            <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Google+</span>
                                        </a>
                                        <a target="_blank" href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                            <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Pin it</span>
                                        </a>
                                        <a href="#" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                            <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true">Email</span>
                                        </a>
                                     </div>
                                </div>
                            </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h1 class="product-single__title">Product Layout Style1</h1>
                                <div class="prInfoRow">
                                    <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption">6 reviews</span></a></div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                    </span>
                                    <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                        <span>You Save</span>
                                        <span class="product-single__save-amount"><span class="money">$100.00</span></span>
                                        <span class="off">(<span>16</span>%)</span>
                                    </span>  
                                </p>
                                <div class="orderMsg" data-user="23" data-time="24">
                                    <p><strong class="items">5</strong> sold in last <strong class="time">26</strong> hours</p>
                                </div>
                            </div>
                            <div class="product-single__description rte">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                    <li>Sed ut perspiciatis unde omnis iste natus error sit</li>
                                    <li>Neque porro quisquam est qui dolorem ipsum quia dolor</li>
                                    <li>Lorem Ipsum is not simply random text.</li>
                                </ul>
                            </div>
                            <div id="quantity_message">Hurry! Only  <span class="items">4</span>  left in stock.</div>
                            <!-- countdown start -->
                            <div class="saleTime product-countdown" data-countdown="2029/03/01"></div>
                            <!-- countdown end -->
                            <form method="post" action="/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                      <label class="label">Size:<span class="required">*</span> <span class="slVariant">XS</span> <a href="#sizechart" class="sizelink btn-link"><i class="anm anm-ruler"></i> Size Guide</a></label>
                                      <div data-value="XS" class="swatch-element xs available">
                                        <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                        <label class="swatchLbl medium" for="swatch-1-xs" title="XS">XS</label>
                                      </div>
                                      <div data-value="S" class="swatch-element s available">
                                        <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                        <label class="swatchLbl medium" for="swatch-1-s" title="S">S</label>
                                      </div>
                                      <div data-value="M" class="swatch-element m available">
                                        <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                        <label class="swatchLbl medium" for="swatch-1-m" title="M">M</label>
                                      </div>
                                      <div data-value="L" class="swatch-element l available">
                                        <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                        <label class="swatchLbl medium" for="swatch-1-l" title="L">L</label>
                                      </div>
                                      <div data-value="XL" class="swatch-element xl available">
                                        <input class="swatchInput" id="swatch-1-xl" type="radio" name="option-1" value="XL">
                                        <label class="swatchLbl medium" for="swatch-1-xl" title="XL">XL</label>
                                      </div>
                                    </div>
                                </div>
                                <p class="infolinks">
                                    <a class="wishlist add-to-wishlist" href="my-wishlist.html" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                    <a class="wishlist add-to-wishlist" href="compare-style1.html" title="Add to Compare"><i class="icon anm anm-sync-ar" aria-hidden="true"></i> <span>Add to Compare</span></a>
                                    <a href="#ShippingInfo" class="mfp btn shippingInfo"><i class="anm anm-paper-l-plane"></i> Delivery &amp; Returns</a>
                                    <a href="#productInquiry" class="emaillink btn"> <i class="anm anm-envelope-l"></i> Enquiry</a>
                                </p>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit">
                                        <button type="button" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                    
                                    <div class="buy-it-btn">
                                        <button type="button" class="btn" disabled="disabled">Buy it now</button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                    
                            <p id="freeShipMsg" class="freeShipMsg" data-price="199"><i class="fa fa-truck" aria-hidden="true"></i> Getting Closer! Only <b class="freeShip"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> Away From <b>FREE SHIPPING!</b></p>
                            <p class="shippingMsg"><i class="fa fa-clock-o" aria-hidden="true"></i> Estimated Delivery Between <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                            <div class="userViewMsg" data-user="20" data-time="11000">
                                <i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> People are Looking for this Product
                            </div>
                        </div>
                    </div>
				</div>
			</div>
            <!--Product Tabs-->
            <div class="tabs-listing">
                <ul class="product-tabs">
                    <li rel="tab1" class="active"><a class="tablink">Product Details</a></li>
                    <li rel="tab2"><a class="tablink">Reviews</a></li>
                    <li rel="tab3"><a class="tablink">Size Chart</a></li>
                    <li rel="tab4"><a class="tablink">Shipping &amp; Returns</a></li>

                </ul>
                <div class="tab-container">
                    <h3 class="tabs-ac-style active" rel="tab1">Product Details</h3>
                    <div id="tab1" class="tab-content">
                        <div class="product-description rte">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-8 col-lg-8 mb-4">
                                    <h3>Specification</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <ul>
                                        <li>High-neck style</li>
                                        <li>Drop shoulders</li>
                                        <li>Flared cuffs</li>
                                        <li>Asymmetrical hem</li>
                                    </ul>
                                    <h3>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</h3>
                                    <p>You can change the position of any sections such as slider, banner, products, collection and so on by just dragging and dropping.&nbsp;</p>
                                    <h3>Lorem Ipsum is not simply random text.</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                    <p>Change colors, fonts, banners, megamenus and more. Preview changes are live before saving them.</p>
                                    <h3>1914 translation by H. Rackham</h3>
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                                    <img data-src="assets/images/detail-img.jpg" src="assets/images/detail-img.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="tabs-ac-style" rel="tab2">Review</h3>
                    <div id="tab2" class="tab-content">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 mb-4">
                                <div class="spr-form clearfix">
                                    <form method="post" action="#" class="new-review-form">
                                        <h3 class="spr-form-title">Write Your Own Review</h3>
                                        <fieldset class="spr-form-contact">
                                            <div class="spr-form-review-rating">
                                                <label class="spr-form-label">How do you rate this product?<span class="required">*</span></label>
                                                <div class="spr-form-input spr-starrating">
                                                  <div class="product-review"><a class="reviewLink" href="#"><i class="fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></a></div>
                                                </div>
                                            </div>
                                            <div class="spr-form-contact-name">
                                              <label class="spr-form-label" for="nickname">What's your nickname?<span class="required">*</span></label>
                                              <input class="spr-form-input spr-form-input-text" id="nickname" type="text" name="name" value="">
                                            </div>
                                            <div class="spr-form-contact-email">
                                              <label class="spr-form-label" for="email">Email Address<span class="required">*</span></label>
                                              <input class="spr-form-input spr-form-input-email " id="email" type="email" name="email" value="">
                                            </div>
                                        </fieldset>
                                        <fieldset class="spr-form-review">
                                          <div class="spr-form-review-title">
                                            <label class="spr-form-label" for="review">Review Title</label>
                                            <input class="spr-form-input spr-form-input-text " id="review" type="text" name="review" value="">
                                          </div>

                                          <div class="spr-form-review-body">
                                            <label class="spr-form-label" for="message">Body of Review <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span></label>
                                            <div class="spr-form-input">
                                              <textarea class="spr-form-input spr-form-input-textarea " id="message" name="message" rows="5"></textarea>
                                            </div>
                                          </div>
                                        </fieldset>
                                        <div class="spr-form-actions">
                                            <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="spr-reviews">
                                    <h3 class="spr-form-title">Customer Reviews</h3>
                                    <div class="review-inner">
                                    <div class="spr-review">
                                        <div class="spr-review-header">
                                            <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></span></span>
                                            <h3 class="spr-review-header-title">Lorem ipsum dolor sit amet</h3>
                                            <span class="spr-review-header-byline"><strong>dsacc</strong> on <strong>Apr 09, 2019</strong></span>
                                        </div>
                                        <div class="spr-review-content">
                                            <p class="spr-review-content-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                    <div class="spr-review">
                                      <div class="spr-review-header">
                                        <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                        <h3 class="spr-review-header-title">Lorem Ipsum is simply dummy text of the printing</h3>
                                        <span class="spr-review-header-byline"><strong>larrydude</strong> on <strong>Dec 30, 2018</strong></span>
                                      </div>

                                      <div class="spr-review-content">
                                        <p class="spr-review-content-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                        </p>
                                      </div>
                                    </div>
                                    <div class="spr-review">
                                      <div class="spr-review-header">
                                        <span class="product-review spr-starratings spr-review-header-starratings"><span class="reviewLink"><i class="fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i></span></span>
                                        <h3 class="spr-review-header-title">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</h3>
                                        <span class="spr-review-header-byline"><strong>quoctri1905</strong> on <strong>Dec 30, 2018</strong></span>
                                      </div>

                                      <div class="spr-review-content">
                                        <p class="spr-review-content-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.<br>
                                        <br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                      </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="tabs-ac-style" rel="tab3">Size Chart</h3>
                    <div id="tab3" class="tab-content">
                        <h3>Women's Body Sizing Chart</h3>
                        <table>
                          <tbody>
                            <tr>
                              <th>Size</th>
                              <th>XS</th>
                              <th>S</th>
                              <th>M</th>
                              <th>L</th>
                              <th>XL</th>
                            </tr>
                            <tr>
                              <td>Chest</td>
                              <td>31" - 33"</td>
                              <td>33" - 35"</td>
                              <td>35" - 37"</td>
                              <td>37" - 39"</td>
                              <td>39" - 42"</td>
                            </tr>
                            <tr>
                              <td>Waist</td>
                              <td>24" - 26"</td>
                              <td>26" - 28"</td>
                              <td>28" - 30"</td>
                              <td>30" - 32"</td>
                              <td>32" - 35"</td>
                            </tr>
                            <tr>
                              <td>Hip</td>
                              <td>34" - 36"</td>
                              <td>36" - 38"</td>
                              <td>38" - 40"</td>
                              <td>40" - 42"</td>
                              <td>42" - 44"</td>
                            </tr>
                            <tr>
                              <td>Regular inseam</td>
                              <td>30"</td>
                              <td>30??"</td>
                              <td>31"</td>
                              <td>31??"</td>
                              <td>32"</td>
                            </tr>
                            <tr>
                              <td>Long (Tall) Inseam</td>
                              <td>31??"</td>
                              <td>32"</td>
                              <td>32??"</td>
                              <td>33"</td>
                              <td>33??"</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
                    <h3 class="tabs-ac-style" rel="tab4">Shipping &amp; Returns</h3>
                    <div id="tab4" class="tab-content">
                        <h4>Returns Policy</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eros justo, accumsan non dui sit amet. Phasellus semper volutpat mi sed imperdiet. Ut odio lectus, vulputate non ex non, mattis sollicitudin purus. Mauris consequat justo a enim interdum, in consequat dolor accumsan. Nulla iaculis diam purus, ut vehicula leo efficitur at.</p>
                        <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. In blandit nunc enim, sit amet pharetra erat aliquet ac.</p>
                        <h4>Shipping</h4>
                        <p>Pellentesque ultrices ut sem sit amet lacinia. Sed nisi dui, ultrices ut turpis pulvinar. Sed fringilla ex eget lorem consectetur, consectetur blandit lacus varius. Duis vel scelerisque elit, et vestibulum metus.  Integer sit amet tincidunt tortor. Ut lacinia ullamcorper massa, a fermentum arcu vehicula ut. Ut efficitur faucibus dui Nullam tristique dolor eget turpis consequat varius. Quisque a interdum augue. Nam ut nibh mauris.</p>
                    </div>
                   
                   
                </div>
            </div>
            <!--End Product Tabs-->
            
            <!--Related Product Slider-->
            <div class="related-product grid-products">
                <div class="section-header">
                    <h2 class="section-header__title text-center h2"><span>Related Products</span></h2>
                    <p class="sub-heading">You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin.</p>
                </div>
                <div class="productPageSlider">
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-detail1.jpg" src="assets/images/product-images/product-detail1.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-detail1.jpg" src="assets/images/product-images/product-detail1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label1">new</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->
                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Edna Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$399.01</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product-detail1.jpg" src="assets/images/product-images/product-detail1.jpg" alt="image" title="product">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product-detail1.jpg" src="assets/images/product-images/product-detail1.jpg" alt="image" title="product">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Elastic Waist Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="#">3/4 Sleeve Kimono Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" />
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Cape Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="old-price">$900.00</span>
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image"/>
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" />
                                <!-- End hover image -->
                                <!-- product label -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!-- End product label -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Paper Dress</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$550.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$788.00</span>
                            </div>
                            <!-- End product price -->

                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star-o"></i>
                                <i class="font-13 fa fa-star-o"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->

                            <!--Product Button-->
                            <div class="button-set style1">
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
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Zipper Jacket</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                            <!-- End product price -->
                            <div class="product-review">
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                                <i class="font-13 fa fa-star"></i>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                </div>
                </div>
            <!--End Related Product Slider-->

            <!--Recently Product Slider-->
            <div class="related-product grid-products">
                    <div class="section-header">
                        <h2 class="section-header__title text-center h2"><span>Recently Viewed Product</span></h2>
                        <p class="sub-heading">You can manage this section from store admin as describe in above section</p>
                    </div>
                    <div class="productPageSlider">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
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
                                    <span class="price">$399.01</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
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
                                    <span class="price">$748.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="#">Martha Knit Top</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image"/>
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" />
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Toledo Mules shoes</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="old-price">$900.00</span>
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image"/>
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image" />
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                            </div>
                            <!-- end product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Zipper Jacket</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$550.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
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
                                    <span class="price">$788.00</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        <div class="col-12 item">
                        <!-- start product image -->
                        <div class="product-image">
                            <!-- start product image -->
                            <a href="product-layout1.html" class="product-img">
                                <!-- image -->
                                <img class="primary blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End image -->
                                <!-- Hover image -->
                                <img class="hover blur-up lazyload" data-src="assets/images/product-images/product1.jpg" src="assets/images/product-images/product1.jpg" alt="image">
                                <!-- End hover image -->
                            </a>
                            <!-- end product image -->
                        </div>
                        <!-- end product image -->

                        <!--start product details -->
                        <div class="product-details text-center">
                            <!-- product name -->
                            <div class="product-name">
                                <a href="product-layout1.html">Toledo Mules shoes</a>
                            </div>
                            <!-- End product name -->
                            <!-- product price -->
                            <div class="product-price">
                                <span class="price">$748.00</span>
                            </div>
                        </div>
                        <!-- End product details -->
                    </div>
                    </div>
                </div>
            <!--End Recently Product Slider-->
            

        </div><!--End Body Container-->

  
	<!-- Photoswipe Gallery -->
    <script src="{{asset('/front/js/vendor/photoswipe.min.js')}}"></script>




@endsection