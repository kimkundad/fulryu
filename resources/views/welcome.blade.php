@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')

@stop('stylesheet')
@section('content')


<!-- Slider Two Area Start -->
	    <div class="slider-two-area">
	        <div class="slider-wrapper owl-carousel carousel-style-dot">
	            <div class="single-slide slide-two" style="background-image: url('home/assets/img/banner1_home2.jpg');">
                    <div class="slider-banner">
                        <h1>living room</h1>
                        <h2>REST CUSHION</h2>
                        <p>The design of the Rest fabric began from the use of leftover materials<br>from the Sand upholstery fabric.</p>
                        <a href="{{url('/')}}" class="banner-btn">Shop now</a>
                    </div>
                </div>
	            <div class="single-slide" style="background-image: url('home/assets/img/banner2_home2.jpg');">
                    <div class="slider-banner">
                        <h1>New arrivals</h1>
                        <h2>STINGRAY CHAIR</h2>
                        <p>An eye-catching almost futuristic interpretation of<br>the classic rocking chair.</p>
                        <a href="{{url('/')}}" class="banner-btn">Shop now</a>
                    </div>
	            </div>
	        </div>
	    </div>
	    <!-- Slider Two Area End -->
	    <!-- Banner Area Start -->
	    <div class="banner-area mt-30 style-1">
	        <div class="custom-container">
	            <div class="row">
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="shop.html"><img src="home/assets/img/banner/img1_home2.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="shop.html"><img src="home/assets/img/banner/img2_home2.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="shop.html"><img src="home/assets/img/banner/img3_home2.jpg" alt=""></a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Banner Area End -->
	    <!-- Product Area Start -->
	    <div class="product-area text-center pt-90 pb-85">
	        <div class="container">
	            <div class="section-title">
                    <span>new shop item</span>
	                <h2><span>Nightstands</span></h2>
	            </div>
	        </div>
	        <div class="container">
	            <div class="custom-row">
	                <div class="product-carousel-two owl-carousel carousel-style-one">
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/1.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/2.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Joust Duffle Bag</a></h4>
                                    <div class="product-price"><span>$34.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/3.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/4.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Strive Shoulder Pack</a></h4>
                                    <div class="product-price"><span>$32.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/5.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/6.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                    </div>
                                    <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                                    <div class="product-price"><span>$38.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="">new</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/7.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/8.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price"><span>$40.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">Sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/9.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/10.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Rival Field Messenger</a></h4>
                                    <div class="product-price"><span>$45.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/11.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/12.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Joust Duffle Bag</a></h4>
                                    <div class="product-price"><span>$34.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/13.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/14.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Strive Shoulder Pack</a></h4>
                                    <div class="product-price"><span>$32.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="">new</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/15.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/16.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                    </div>
                                    <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                                    <div class="product-price"><span>$38.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/17.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/18.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price"><span>$40.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="">New</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/19.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/20.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Rival Field Messenger</a></h4>
                                    <div class="product-price"><span>$45.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/22.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/21.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                    </div>
                                    <h4><a href="shop.html">Crown Summit Backpack</a></h4>
                                    <div class="product-price"><span>$38.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale">sale</span>
                                <div class="product-image-hover">
                                    <a href="shop.html">
                                        <img class="primary-image" src="assets/img/product/23.jpg" alt="">
                                        <img class="hover-image" src="assets/img/product/17.jpg" alt="">
                                    </a>
                                    <div class="product-hover">
                                        <button><i class="icon icon-FullShoppingCart"></i></button>
                                        <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                        <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                    </div>
                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <h4><a href="shop.html">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price"><span>$40.00</span></div>
                                </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Product Area End -->

	    <!-- Information Area Start -->
	    <div class="information-area">
	        <div class="container">
	            <div class="information-wrapper ptb-60">
	                <div class="row">
	                    <div class="col-md-3">
	                        <div class="single-information">
	                            <div class="s-info-img"><img src="home/assets/img/icon/shipping.png" alt=""></div>
	                            <div class="s-info-text">
	                                <h4>free shipping</h4>
	                                <span>Free shipping on all US order</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="single-information">
	                            <div class="s-info-img"><img src="home/assets/img/icon/online.png" alt=""></div>
	                            <div class="s-info-text">
	                                <h4>Online Support 24/7</h4>
	                                <span>Support online 24 hours a day</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="single-information">
	                            <div class="s-info-img"><img src="home/assets/img/icon/money.png" alt=""></div>
	                            <div class="s-info-text">
	                                <h4>Money Return</h4>
	                                <span>Back guarantee under 7 days</span>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-3">
	                        <div class="single-information">
	                            <div class="s-info-img"><img src="home/assets/img/icon/member.png" alt=""></div>
	                            <div class="s-info-text">
	                                <h4>Member Discount</h4>
	                                <span>Onevery order over $120.00</span>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Information Area End -->



@endsection

@section('scripts')

@stop('scripts')
