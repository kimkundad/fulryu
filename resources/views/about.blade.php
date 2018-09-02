@extends('layouts.template')

@section('title')

@stop

@section('stylesheet')

@stop('stylesheet')
@section('content')



<!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area bg-dark">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- About Skill Area Start -->
        <div class="about-skill-area pt-80 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h2>ABOUT fulryu</h2>
                        <div class="about-skill-test">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eius mod tempor incididunt ut labore et dolore magna aliqua Ut enim ad mini KJd veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea coz consequat. Duis aute irure dolor in reprehenderit in voluptate velit se ckh dolore eu fugiat nulla pariatur.</p>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde ipsunms omnis iste natus error sit voluptatem acc there are lots of product in our page. Anyone can find it easily.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- About Skill Area End -->
        <!-- Team Area Start -->
        <div class="team-area team-area pb-80">
            <div class="container">
	            <div class="section-title text-center title-style-2">
                    <span>Meet Our Team</span>
	                <h2><span>Our Member</span></h2>
	            </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <div class="single-team">
                            <div class="team-image"><img src="{{url('assets/image/maxresdefault.jpg')}}" alt=""></div>
                            <div class="team-hover">
                                <h4>John F. Burden</h4>
                                <span class="block">Executive</span>
                                <div class="team-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single-team">
                            <div class="team-image"><img src="{{url('assets/image/maxresdefault2.jpg')}}" alt=""></div>
                            <div class="team-hover">
                                <h4>John F. Burden</h4>
                                <span class="block">Executive</span>
                                <div class="team-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                        <div class="single-team">
                            <div class="team-image"><img src="{{url('assets/image/maxresdefault3.jpg')}}" alt=""></div>
                            <div class="team-hover">
                                <h4>John F. Burden</h4>
                                <span class="block">Executive</span>
                                <div class="team-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Area End -->

@endsection

@section('scripts')

@stop('scripts')
