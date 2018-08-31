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
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Account Area Start -->
        <div class="my-account-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form action="{{ url('/login') }}" method="POST">
                          {{ csrf_field() }}
                            <div class="form-fields">
                                <h2>Login</h2>
                                <p>
                                    <label for="login-name" class="important">Email</label>
                                    <input type="text" id="login-name"  name="email">
                                </p>
                                <p>
                                    <label for="login-pass" class="important">Password</label>
                                    <input type="password" id="login-pass" name="password">
                                </p>
                            </div>
                            <div class="form-action">
                                <p class="lost_password"><a href="#">Lost your password?</a></p>
                                <button type="submit">Login</button>
                                <label><input type="checkbox">Remember me</label>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <form method="POST" action="{{ url('/register') }}">
                          {{ csrf_field() }}
                            <div class="form-fields">
                                <h2>Register</h2>
                                <p>
                                    <label for="reg-email" class="important">Username</label>
                                    <input type="text" name="name" id="reg-email">
                                </p>
                                <p>
                                    <label for="reg-email" class="important">Email address</label>
                                    <input type="text" name="email" id="reg-email">
                                </p>
                                <p>
                                    <label for="reg-pass" class="important">Password</label>
                                    <input type="password" name="password" id="reg-pass">
                                </p>
                                <p>
                                    <label for="reg-pass" class="important">Repeat Password</label>
                                    <input type="password" name="password_confirmation" id="reg-pass">
                                </p>
                            </div>
                            <div class="form-action">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Account Area End -->


@endsection

@section('scripts')

@stop('scripts')
