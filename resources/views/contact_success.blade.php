@extends('layouts.template')

@section('title')
Thank you!
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
                        <li class="breadcrumb-item active" aria-current="page">Thank you!</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Contact Area Start -->
        <div class="contact-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                      <br /><br />
                      <img src="{{url('assets/image/success.png')}}" style="width:120px;" />
                      <br /><br />
                      <h2>Thank you!</h2>
                      <p>Your message has been successfully sent. We will contact you very soon!</p>
                      <br /><br /><br /><br />
                    </div>


                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="contact-address-info bg-light-2">
                            <div class="single-contact-adrs text-center">
                                <span class="c-address-icon">
                                    <i class="fa fa-map-marker"></i>
                                </span>
                                <div class="adrs-text">
                                    <span>222/390 Soi Ruammitpattana yaak 5 Tarang <br /> Bangkhaen BKK 10220</span>
                                </div>
                            </div>
                            <div class="single-contact-adrs text-center">
                                <span class="c-address-icon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <div class="adrs-text">
                                    <span>+(66)639911075</span>
                                </div>
                            </div>
                            <div class="single-contact-adrs text-center">
                                <span class="c-address-icon">
                                    <i class="fa fa-globe"></i>
                                </span>
                                <div class="adrs-text">
                                    <span>Emil : fulryumail@gmail.com<br>Web : www.fulryu.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->



@endsection

@section('scripts')



@stop('scripts')
