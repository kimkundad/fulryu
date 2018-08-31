@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')

<link rel="stylesheet" href="{{url('home/assets/css/slick.css')}}">

@stop('stylesheet')
@section('content')


<!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-dark">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Product Details</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Product Details Area Start -->
        <div class="product-details-area pt-80 pb-75">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="single-product-image product-image-slider fix">
                          @if($img_all)
                          @foreach($img_all as $img_u)
                            <div class="p-image"><img src="{{url('assets/image/gallery/'.$img_u->image)}}" alt=""></div>
                          @endforeach
                          @endif


                        </div>
                        <div class="single-product-thumbnail product-thumbnail-slider float-left" id="gallery_01">

                          @if($img_all)
                          @foreach($img_all as $img_u)
                            <div class="p-thumb"><img src="{{url('assets/image/gallery/'.$img_u->image)}}" alt=""></div>
                          @endforeach
                          @endif


                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="p-d-wrapper">
                            <h1>{{$objs->pro_name}}</h1>
                            <div class="p-rating-review">
                                <div class="product-rating">
                                  <?php
                                  for($i=1;$i <= $objs->pro_rating;$i++){
                                  ?>
                                  <i class="fa fa-star color"></i>
                                  <?php
                                  }
                                  ?>
                                  <?php
                                  $total = 5;
                                  $total -= $objs->pro_rating;

                                  for($i=1;$i <= $total;$i++){
                                  ?>
                                  <i class="fa fa-star"></i>
                                  <?php
                                  }
                                  ?>
                                </div>
                                <span>1 review</span>
                                <a href="#" class="scroll-down">Add your review</a>
                            </div>
                            <span class="p-d-price">฿{{number_format($objs->pro_price)}}.00</span>
                            <span class="model-stock">In stock <span><span>รหัสสินค้า</span>{{$objs->pro_code}}</span></span>
                            <div class="qty-cart-add">
                                <label for="qty">qty</label>
                                <input type="number" placeholder="1" >
                                <a href="#">Add to cart</a>
                            </div>
                            <div class="p-d-buttons">
                                <a href="#">Add to wish list</a>
                                <a href="#">Add to compare</a>

                            </div>
                            <p>
                              {{$objs->pro_title}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container scroll-area">
                <div class="p-d-tab-container">
                    <div class="p-tab-btn">
                        <div class="nav" role="tablist">
                            <a class="active" href="#tab1" data-toggle="tab" role="tab" aria-selected="true" aria-controls="tab1">Details</a>
                            <a href="#tab2" data-toggle="tab" role="tab" aria-selected="false" aria-controls="tab2">Reviews 1</a>
                        </div>
                    </div>
                    <div class="p-d-tab tab-content">
                        <div class="tab-pane active show fade" id="tab1" role="tabpanel">
                            <div class="tab-items">
                                <div class="p-details-list">
                                    {{$objs->pro_name_detail}}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade scroll-area" id="tab2" role="tabpanel">
                            <div class="tab-items">

                              <div class="fb-comments" data-href="https://www.fulryu.com/product/{{$objs->id_p}}" data-numposts="5"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details Area End -->
        <!-- Related Products Area Start -->
        <div class="related-products-area text-center">
            <div class="container">
                <div class="section-title title-style-2">
                    <h2><span>Related Products</span></h2>
                </div>
            </div>
            <div class="container">
                <div class="custom-row">
                    <div class="related-product-carousel owl-carousel carousel-style-one">


                      @if($related)
                        @foreach($related as $u)

                        <div class="custom-col">
  	                        <div class="product-item">

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
                                      <h4><a href="shop.html">{{$u->pro_name}}</a></h4>
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
        <!-- Related Products Area End -->
        <br /><br />


@endsection

@section('scripts')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.1&appId=203219603796007&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@stop('scripts')
