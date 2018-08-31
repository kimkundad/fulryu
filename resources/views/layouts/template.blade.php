<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> @yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        @include('layouts.inc-style')
    @yield('stylesheet')




    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->




        @include('layouts.inc-header')



        	@yield('content')




      @include('layouts.inc-footer')



        @include('layouts.inc-script')
    	    @yield('scripts')
    </body>
</html>
