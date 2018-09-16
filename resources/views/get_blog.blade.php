@extends('layouts.template')

@section('title')
All Blog
@stop

@section('stylesheet')

<style>
.product-text {
    padding-top: 20px;
}
.tour_title{
  height:60px; background: #979799; padding: 12px 15px 10px 15px; color: #fff;
}
.text_title{
  color: #fff; font-size:14px;     font-weight: 500;
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
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
	    <!-- Blog Section Start -->
	    <div class="blog-section pt-80 pb-35">
	        <div class="container">
	            <div class="row">


                @if($blog)
                  @foreach($blog as $u)

                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a href="{{url('blog/'.$u->id)}}">
                                    <img src="{{url('assets/image/blog/'.$u->blog_img)}}" alt="{{$u->blog_title}}">
                                    <span>{{date('d', strtotime($u->created_at))}} <span>{{date('M', strtotime($u->created_at))}}</span></span>
                                </a>
                            </div>
                            <div class="tour_title" >
  							                 <h3 class="text_title">{{$u->blog_title}}</h3>
  						              </div>
                        </div>
                    </div>
                @endforeach
              @endif

              {{$blog->links()}}

	            </div>
	        </div>
	    </div>
	    <!-- Blog Section End -->



@endsection

@section('scripts')



@stop('scripts')
