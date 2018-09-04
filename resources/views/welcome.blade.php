@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')

<style>
.slider-two-area .banner-btn, .slider-three-area .banner-btn {

    margin-top: 39px;

}


</style>

@stop('stylesheet')
@section('content')


<!-- Slider Two Area Start -->
	    <div class="slider-two-area">
	        <div class="slider-wrapper owl-carousel carousel-style-dot">
            @if($slide)
              @foreach($slide as $slider)
	            <div class="single-slide" style="background-image: url('{{url('assets/image/slide/'.$slider->image_slide)}}');">
                    <div class="slider-banner">
                        <h1>{{$slider->text_slide1}}</h1>
                        <h2>{{$slider->text_slide2}}</h2>
                        <p>{{$slider->text_slide3}}</p>
                        <a href="{{$slider->btn_url}}" class="banner-btn">{{$slider->btn_slide}}</a>
                    </div>
                </div>
                @endforeach
	            @endif
	        </div>
	    </div>
	    <!-- Slider Two Area End -->
	    <!-- Banner Area Start -->
	 <!--    -->
	    <!-- Banner Area End -->


	    <!-- Product Area Start -->
	    <div class="product-area text-center pt-90 ">
	        <div class="container">
	            <div class="section-title">

	                <h2><span>LIMITED OFFER</span></h2>
	            </div>
	        </div>
	        <div class="container">
	            <div class="custom-row">
	                <div class="product-carousel-two owl-carousel carousel-style-one">


              @if($objs)
                @foreach($objs as $u)
	                    <div class="custom-col">
	                        <div class="product-item">
	                           <!-- <span class="hot-sale black">sale</span> -->
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
                                    <h4><a href="{{url('product/'.$u->id_p)}}">{{$u->pro_name}}</a></h4>
                                    <!--  <div class="product-price"><span>฿{{number_format($u->pro_price)}}</span></div> -->
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




      <!-- Product Area Start -->
     <div class="product-area text-center pt-90 ">
         <div class="container">
             <div class="section-title">

                 <h2><span>NEW ARRIVALS!</span></h2>
             </div>
         </div>
         <div class="container">
             <div class="custom-row">
                 <div class="product-carousel-two owl-carousel carousel-style-one">


              @if($objs_new)
                @foreach($objs_new as $u)
                     <div class="custom-col">
                         <div class="product-item">
                             <!-- <span class="hot-sale black">sale</span> -->
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
                                    <h4><a href="{{url('product/'.$u->id_p)}}">{{$u->pro_name}}</a></h4>
                                  <!--  <div class="product-price"><span>฿{{number_format($u->pro_price)}}</span></div> -->
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





     <!-- Product Area Start -->
    <div class="product-area text-center pt-90 ">
        <div class="container">
            <div class="section-title">

                <h2><span>RECOMMENDED EXCLUSIVE!</span></h2>
            </div>
        </div>
        <div class="container">
            <div class="custom-row">
                <div class="product-carousel-two owl-carousel carousel-style-one">


             @if($objs_rec)
               @foreach($objs_rec as $u)
                    <div class="custom-col">
                        <div class="product-item">
                           <!-- <span class="hot-sale black">sale</span> -->
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
                                   <h4><a href="{{url('product/'.$u->id_p)}}">{{$u->pro_name}}</a></h4>
                                  <!--  <div class="product-price"><span>฿{{number_format($u->pro_price)}}</span></div> -->
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






      <!-- Product Widget Area Start -->
	    <div class="product-widget-area pt-90 pb-70">
	        <div class="container">
	            <div class="row">


                @if($cat1)
                  @foreach($cat1 as $j)

	                <div class="col-lg-3 col-md-6">
	                    <div class="single-product-widget">
	                        <div class="product-widget-title">

	                            <h4>{{$j->name_cat}}</h4>
	                        </div>

													@if($j->options)
													@foreach($j->options as $u)
	                        <div class="product-widget-item">
	                            <div class="product-wid-img">
	                                <a href="{{url('product/'.$u->id)}}"><img src="{{url('assets/image/product/'.$u->pro_image)}}" alt=""></a>
	                            </div>
                                <div class="product-text">
                                    <h4><a href="{{url('/')}}">{{$u->pro_name}}</a></h4>
                                    <div class="product-rating">
																				<?php
														            for($i=1;$i <= $u->pro_rating;$i++){
														            ?>
                                        <i class="fa fa-star color"></i>
																				<?php
														            }

														            $total = 5;
														            $total -= $u->pro_rating;

														            for($i=1;$i <= $total;$i++){
														            ?>
																				<i class="fa fa-star"></i>
																				<?php
														            }
														            ?>

                                    </div>
                                    <div class="product-price"><span>฿{{$u->pro_price}}.00</span></div>
                                </div>
	                        </div>
													@endforeach
													@endif

	                    </div>
	                </div>
                  @endforeach
                @endif



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
	                                <span>Free shipping on Order 400 baht</span>
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
	                                <span>Onevery order over ฿120.00</span>
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
