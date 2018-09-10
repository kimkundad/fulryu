@extends('layouts.template')

@section('title')
{{$blog_new->blog_title}}
@stop

@section('stylesheet')

<style>
.product-text {
    padding-top: 20px;
}
</style>

@stop('stylesheet')
@section('content')


<!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-dark">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$blog_new->blog_title}}</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Blog Details Area Start -->
        <div class="blog-details-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog-image">
                            <a href="#"><img src="{{url('assets/image/blog/'.$blog_new->blog_img)}}" alt="{{$blog_new->blog_title}}"></a>
                        </div>
                        <h5>{{$blog_new->blog_title}}</h5>
                        <div class="post-information">
                            <span>BY : ADMIN</span>
                            <span>{{$blog_new->blog_view}} VIEWS</span>
                        </div>
                        <div class="blog-details-text">
                            {!!$blog_new->blog_detail!!}

                            <div class="social-tags">
                                <span>TAGS :</span>
                                <div class="blog-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-tumblr"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                            <br /><br /><br />

                            <div class="fb-comments" data-href="{{url('blog/'.$blog_new->id)}}" data-width="100%" data-numposts="10"></div>
                        </div>







                        <?php
                        function DateThai($strDate)
                        {
                        $strYear = date("Y",strtotime($strDate))+543;
                        $strMonth= date("n",strtotime($strDate));
                        $strDay= date("j",strtotime($strDate));
                        $strHour= date("H",strtotime($strDate));
                        $strMinute= date("i",strtotime($strDate));
                        $strSeconds= date("s",strtotime($strDate));
                        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                        $strMonthThai=$strMonthCut[$strMonth];
                        return "$strDay $strMonthThai $strYear";
                        }
                        function DateThai2($strDate)
                        {
                        $strYear = date("Y",strtotime($strDate))+543;
                        $strMonth= date("n",strtotime($strDate));
                        $strDay= date("j",strtotime($strDate));
                        $strHour= date("H",strtotime($strDate));
                        $strMinute= date("i",strtotime($strDate));
                        $strSeconds= date("s",strtotime($strDate));
                        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
                        $strMonthThai=$strMonthCut[$strMonth];
                        return "$strHour : $strMinute";
                        }
                         ?>







                         <br /><br />


                         <div class="ht-product-shop tab-content">
                           @if($product)
                           <h5>สินค้าที่เกี่ยวข้อง</h5>
                           <br />
                             <div class="tab-pane active show fade text-center" id="grid" role="tabpanel">
                                 <div class="row">


                                      @foreach($product as $u)
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                         <div class="product-item">
                                             <div class="product-image-hover">
                                                 <a href="{{url('product/'.$u->option_pro->id)}}">
                                                     <img class="primary-image" src="{{url('assets/image/product/'.$u->option_pro->pro_image)}}" alt="">
                                                 </a>
                                             <!--    <div class="product-hover">
                                                     <button><i class="icon icon-FullShoppingCart"></i></button>
                                                     <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                                     <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                                 </div> -->
                                             </div>
                                             <div class="product-text">
                                                 <div class="product-rating">
                                                   <?php
                                                   for($i=1;$i <= $u->option_pro->pro_rating;$i++){
                                                   ?>
                                                   <i class="fa fa-star color"></i>
                                                   <?php
                                                   }
                                                   ?>
                                                   <?php
                                                   $total = 5;
                                                   $total -= $u->option_pro->pro_rating;

                                                   for($i=1;$i <= $total;$i++){
                                                   ?>
                                                   <i class="fa fa-star"></i>
                                                   <?php
                                                   }
                                                   ?>
                                                 </div>
                                                 <h4><a href="product-details.html">{{$u->option_pro->pro_name}}</a></h4>
                                                 <div class="product-price"><span>฿{{$u->option_pro->pro_price}}</span></div>
                                             </div>
                                         </div>
                                     </div>

                                     @endforeach





                                 </div>
                             </div>
                             @endif
                         </div>

                         <br /><br /><br />







                    </div>
                    <div class="col-xl-3 col-lg-4">

                        <div class="single-widget">
                            <h4 class="details-title">CATEGORY</h4>
                            <ul>
                              @if($blog_cat)
                                @foreach($blog_cat as $j)
                                <li>
                                    <a href="{{url('category_blog/'.$j->id)}}"><i class="fa fa-caret-right"></i>{{$j->name_blog_cat}} <span>{{$j->count_blog}}</span></a>
                                </li>
                                @endforeach
                              @endif
                            </ul>
                        </div>
                        <div class="single-widget">
                            <h4 class="details-title">LATEST POST</h4>

                            @if($home_list)
                            @foreach($home_list as $u)
                            <div class="recent-item">
                                <a href="{{url('blog/'.$u->id)}}"><img src="{{url('assets/image/blog/'.$u->blog_img)}}" alt="{{$blog_new->blog_title}}"></a>
                                <div class="recent-text">
                                    <h5><a href="blog-details.html">{{$u->blog_title}}</a></h5>
                                    <div class="recent-info">
                                        <a href="blog.html"><?php echo DateThai($u->created_at); ?></a>
                                        <span><?php echo DateThai2($u->created_at); ?> น.</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif


                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Area End -->





@endsection

@section('scripts')


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.1&appId=1512869072370249&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

@stop('scripts')
