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
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

        <!-- Checkout Area Start -->
        <div class="checkout-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="panel-group" id="headingTwo" role="tablist" aria-multiselectable="true">








                            <div class="panel">
                                <div class="panel-heading" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" >
                                             SHIPPING INFORMATION
                                        </a>
                                    </h4>
                                </div>
                                <div id="billing" class="collapse show">
                                    <div class="panel-body">
                                        <div class="login-form">
                                            <form action="{{ url('add_shipping/') }}" method="post" >
                                              {{ csrf_field() }}
                                                <div class="customer-name">
                                                    <div class="first-name">
                                                        <p>First Name<span>*</span></p>
                                                        <input type="text" name="fname" value="{{ old('fname')}}" required>
                                                        @if ($errors->has('fname'))
                                                        <p class="text-danger">
                                                          *Required First Name
                                                        </p>
                                                        @endif
                                                    </div>
                                                    <div class="last-name">
                                                        <p>Last Name<span>*</span></p>
                                                        <input type="text" name="lname" value="{{ old('lname')}}" required>
                                                        @if ($errors->has('lname'))
                                                        <p class="text-danger">
                                                          *required Last Name
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="customer-info">
                                                    <div class="company-name">
                                                        <p>Company</p>
                                                        <input type="text" name="company" value="{{ old('company')}}">

                                                    </div>
                                                    <div class="email-address">
                                                        <p>Email Adress<span>*</span></p>
                                                        <input type="email" name="email" value="{{ Auth::user()->email }}" required>
                                                        @if ($errors->has('email'))
                                                        <p class="text-danger">
                                                          *required Email Adress
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <p>Address<span>*</span></p>

                                                <textarea name="address" placeholder="48 Bangkok 10310" rows="3">{{ old('address')}}</textarea>
                                                @if ($errors->has('address'))
                                                <p class="text-danger">
                                                  *required Address
                                                </p>
                                                @endif
                                                <br /><br />
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>City<span>*</span></p>
                                                        <input type="text" name="city" value="{{ old('city')}}" required>
                                                        @if ($errors->has('city'))
                                                        <p class="text-danger">
                                                          *required City
                                                        </p>
                                                        @endif
                                                    </div>
                                                    <div class="state">
                                                        <p>State/Province<span>*</span></p>
                                                        <input type="text" name="province" value="{{old('province', Auth::user()->province)}}" required>
                                                        @if ($errors->has('province'))
                                                        <p class="text-danger">
                                                          *required State/Province
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="city-country">
                                                    <div class="city">
                                                        <p>Zip/Postal Code<span>*</span></p>
                                                        <input type="text" name="zip_code" value="{{old('zip_code', Auth::user()->zipcode)}}" required>
                                                        @if ($errors->has('zip_code'))
                                                        <p class="text-danger">
                                                          *required Zip/Postal Code
                                                        </p>
                                                        @endif
                                                    </div>
                                                    <div class="state">
                                                        <p>Country<span>*</span></p>
                                                        <select class="country" name="country">
                                                            <option selected="selected" value="Thailand">Thailand</option>
                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="France">France</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                        </select>
                                                        @if ($errors->has('country'))
                                                        <p class="text-danger">
                                                          *required Country
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>


                                                <div class="customer-info">
                                                    <div class="telephone">
                                                        <p>Telephone<span>*</span></p>
                                                        <input type="text" name="phone" value="{{old('phone', Auth::user()->phone)}}" required>
                                                        @if ($errors->has('phone'))
                                                        <p class="text-danger">
                                                          *required Telephone
                                                        </p>
                                                        @endif

                                                        <input type="hidden" name="total_money" value="{{$total_price}}" required>
                                                        <input type="hidden" name="shipping_price" value="{{$price_s}}" required>
                                                        <input type="hidden" name="sum_weight" value="{{$sum_weight}}" required>
                                                    </div>

                                                </div>





                                                <div class="buttons-set">
                                                    <button class="button" type="submit"><span>Continue</span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

















                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="checkout-progress">
                          <div class="section-title"><h4>Grand Total</h4></div>
                          <div class="checkout-table table-responsive">
                            <table >


                                                      <tbody>
                                                          <tr>
                                                              <td colspan="3" class="text-left">Subtotal</td>
                                                              <td>{{$total}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td colspan="3" class="text-left">Weight</td>
                                                              <td>{{$sum_weight}} g.</td>
                                                          </tr>
                                                          <tr>
                                                              <td colspan="3" class="text-left">Shipping price    </td>
                                                              <td>฿{{$price_s}}</td>
                                                          </tr>
                                                          <tr>
                                                              <td colspan="3" class="text-left"><strong>Grand Total</strong></td>
                                                              <td><strong>฿{{$total_price}}</strong></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                          </div>
                          <hr />

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Area End -->



@endsection

@section('scripts')

@stop('scripts')
