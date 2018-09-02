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
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Contact Area Start -->
        <div class="contact-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Google Map Start -->
                        <div class="google-map-area">
                            <!--  Map Section -->
                            <div id="contacts" class="map-area">
                                <div id="googleMap" style="width:100%;height:410px;"></div>
                            </div>
                        </div>
                        <!-- Google Map End -->
                    </div>
                    <div class="col-md-6">
                        <h4>GET IN TOUCH</h4>
                        <form id="contact-form" action="mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" placeholder="Your Name*">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="email" id="email" placeholder="Mail*">
                                </div>
                            </div>
                            <input type="text" name="subject" id="subject" placeholder="Subject*">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Type Your Message......."></textarea>
                            <button type="submit" class="default-btn submit-btn">SEND</button>
                            <p class="form-message"></p>
                        </form>
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
                                    <span>Alcatraz Island Photo Albf<br>Dhaka , New York</span>
                                </div>
                            </div>
                            <div class="single-contact-adrs text-center">
                                <span class="c-address-icon">
                                    <i class="fa fa-phone"></i>
                                </span>
                                <div class="adrs-text">
                                    <span>+54 215 2545 0254 123<br>+54 325 3652 3254</span>
                                </div>
                            </div>
                            <div class="single-contact-adrs text-center">
                                <span class="c-address-icon">
                                    <i class="fa fa-globe"></i>
                                </span>
                                <div class="adrs-text">
                                    <span>Emil : yourmail@gmail.com<br>Web : www.yourmail.com</span>
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


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
        <script>
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(13.76751, 100.5064158), // New York
                    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
                };
                var mapElement = document.getElementById('googleMap');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: map.getCenter(),
                    animation:google.maps.Animation.BOUNCE,
                    icon: '{{url('home/assets/img/map-marker.png')}}',
                    map: map
                });
            }
        </script>

@stop('scripts')
