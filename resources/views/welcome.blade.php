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
                        <a class="banner-image" href="#"><img src="home/assets/img/banner/img1_home2.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="#"><img src="home/assets/img/banner/img2_home2.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="#"><img src="home/assets/img/banner/img3_home2.jpg" alt=""></a>
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


              @if($objs)
                @foreach($objs as $u)
	                    <div class="custom-col">
	                        <div class="product-item">
	                            <span class="hot-sale black">sale</span>
                                <div class="product-image-hover">
                                    <a href="{{url('product/'.$u->id_p)}}">
                                        <img class="primary-image" src="{{url('assets/image/product/'.$u->pro_image)}}" alt="">
                                        <img class="hover-image" src="{{url('assets/image/product/'.$u->pro_image)}}" alt="">
                                    </a>

                                </div>
                                <div class="product-text">
                                    <div class="product-rating">
                                        <?php
                                        for($i=1;$i <= $u->pro_rating;$i++){
                                        ?>
                                        <i class="fa fa-star color"></i>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        $total = 5;
                                        $total -= $u->pro_rating;

                                        for($i=1;$i <= $total;$i++){
                                        ?>
                                        <i class="fa fa-star"></i>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                    <h4><a href="{{url('/')}}">{{$u->pro_name}}</a></h4>
                                    <div class="product-price"><span>฿{{number_format($u->pro_price)}}</span></div>
                                </div>
	                        </div>
	                    </div>
                      @endforeach
             @endif





	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Product Area End -->


      <!-- Banner Area Start -->
	    <div class="banner-area style-1">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="{{url('/')}}"><img src="home/assets/img/img1_Static3.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="{{url('/')}}"><img src="home/assets/img/img2_Static3.jpg" alt=""></a>
	                </div>
	                <div class="col-lg-4 col-md-6">
                        <a class="banner-image" href="{{url('/')}}"><img src="home/assets/img/img3_Static3.jpg" alt=""></a>
	                </div>
	            </div>
	        </div>
	    </div>
	    <!-- Banner Area End -->



      <!-- Product Widget Area Start -->
	    <div class="product-widget-area pt-90 pb-70">
	        <div class="container">
	            <div class="row">

	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product-widget">
	                        <div class="product-widget-title">

	                            <h4>Random products</h4>
	                        </div>
	                        <div class="product-widget-item">
	                            <div class="product-wid-img">
	                                <a href="{{url('/')}}"><img src="{{url('home/assets/img/44-small_default.jpg')}}" alt=""></a>
	                            </div>
                                <div class="product-text">
                                    <h4><a href="{{url('/')}}">Push It Messenger Bag</a></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star color"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product-price"><span>$50.00</span></div>
                                </div>
	                        </div>

	                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
                    <div class="single-product-widget">
                        <div class="product-widget-title">

                            <h4>Random products</h4>
                        </div>
                        <div class="product-widget-item">
                            <div class="product-wid-img">
                                <a href="{{url('/')}}"><img src="{{url('home/assets/img/49-small_default.jpg')}}" alt=""></a>
                            </div>
                              <div class="product-text">
                                  <h4><a href="{{url('/')}}">Push It Messenger Bag</a></h4>
                                  <div class="product-rating">
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                  <div class="product-price"><span>$50.00</span></div>
                              </div>
                        </div>

                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
                    <div class="single-product-widget">
                        <div class="product-widget-title">

                            <h4>Random products</h4>
                        </div>
                        <div class="product-widget-item">
                            <div class="product-wid-img">
                                <a href="{{url('/')}}"><img src="{{url('home/assets/img/39-small_default.jpg')}}" alt=""></a>
                            </div>
                              <div class="product-text">
                                  <h4><a href="{{url('/')}}">Push It Messenger Bag</a></h4>
                                  <div class="product-rating">
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                  <div class="product-price"><span>$50.00</span></div>
                              </div>
                        </div>

                    </div>
	                </div>
	                <div class="col-lg-3 col-md-6">
                    <div class="single-product-widget">
                        <div class="product-widget-title">

                            <h4>Random products</h4>
                        </div>
                        <div class="product-widget-item">
                            <div class="product-wid-img">
                                <a href="{{url('/')}}"><img src="{{url('home/assets/img/97-small_default.jpg')}}" alt=""></a>
                            </div>
                              <div class="product-text">
                                  <h4><a href="{{url('/')}}">Push It Messenger Bag</a></h4>
                                  <div class="product-rating">
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star color"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                  <div class="product-price"><span>$50.00</span></div>
                              </div>
                        </div>

                    </div>
	                </div>

	            </div>
	        </div>
	    </div>
	    <!-- Product Widget Area End -->

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
