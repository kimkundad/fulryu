@extends('layouts.template')

@section('title')
Payment | Fulryu
@stop

@section('description')
ลม และ การไหลไป ความงามชั่วคราวซึ่งต้องมีประสบการณ์ตรง ณ ขณะนี้เท่านั้น เพราะในห้วงเวลาถัดไปความรู้สึกนั้นก็จะจางหายไปเหมือนหมอกเช้า
@stop

@section('og_tag')
<meta property="og:url"           content="https://fulryu.com" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Fulryu ความรู้สึกที่สัมผัสได้แต่ไม่สามารถมองเห็น" />
<meta property="og:image"         content="https://fulryu.com/assets/image/facebook_cover.png" />
<meta property="og:description"   content="ลม และ การไหลไป ความงามชั่วคราวซึ่งต้องมีประสบการณ์ตรง ณ ขณะนี้เท่านั้น เพราะในห้วงเวลาถัดไปความรู้สึกนั้นก็จะจางหายไปเหมือนหมอกเช้า" />
<meta property="og:image:width" content="600" />
<meta property="og:image:height" content="314" />
<meta property="fb:app_id" content="1916660355081132">
<meta property="fb:admins" content="100002037238809">
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
                        <li class="breadcrumb-item active" aria-current="page">Payment</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->

        <!-- Checkout Area Start -->
        <div class="checkout-area pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-12 offset-md-1">
                        <div class="panel-group" id="headingTwo" role="tablist" aria-multiselectable="true">








                            <div class="panel">
                                <div class="panel-heading" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" >
                                          PAYMENT INFORMATION
                                        </a>
                                    </h4>
                                </div>



                                <div id="billing" class="collapse show">

                                  <div class="panel-body">

                                    <div class="checkout-buttons">
                                      <div class="table-responsive">

                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ชื่อบัญชี</th>
                      <th>เลขที่บัญชี</th>
                      <th>สาขา</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <img src="{{url('assets/image/bank/icon-bankbbl.png')}}" height="35">
                      </td>
                      <td class="p_top">
                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                      </td>
                      <td class="p_top">
                        129-5-51893-8 (ออมทรัพย์)
                      </td>
                      <td class="p_top">
                        ลาดพร้าว
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <img src="{{url('assets/image/bank/icon-bankscb.png')}}" height="35">
                      </td>
                      <td class="p_top">
                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                      </td>
                      <td class="p_top">
                         041-270703-6 (ออมทรัพย์)
                      </td>
                      <td class="p_top">
                        บางเขน
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <img src="{{url('assets/image/bank/icon-bankktc.png')}}" height="35">
                      </td>
                      <td class="p_top">
                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                      </td>
                      <td class="p_top">
                         477-0-10789-7 (ออมทรัพย์)
                      </td>
                      <td class="p_top">
                        ยูเนี่ยนมอลล์
                      </td>
                    </tr>

                    <tr>
                      <td>
                        <img src="{{url('assets/image/bank/icon-bankkrugsri.png')}}" height="35">
                      </td>
                      <td class="p_top">
                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                      </td>
                      <td class="p_top">
                         106-1-35383-5 (ออมทรัพย์)
                      </td>
                      <td class="p_top">
                        ยูเนี่ยนมอลล์ ลาดพร้าว
                      </td>
                    </tr>


                    <tr>
                      <td>
                        <img src="{{url('assets/image/bank/icon-bankkbank.png')}}" height="35">
                      </td>
                      <td class="p_top">
                        บริษัท มาสเตอร์ โฟโต้ เน็ตเวิร์ค จำกัด
                      </td>
                      <td class="p_top">
                         752-229-3029 (ออมทรัพย์)
                      </td>
                      <td class="p_top">
                        ลาดพร้าว 10
                      </td>
                    </tr>

                  </tbody>
                </table>
                </div>
                                    </div>
                                    <br />
                                    <h5>ORDER NO. {{$id_order}}</h5>
                                    <hr />
                                            <div class="checkout-table table-responsive">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="p-name alignleft">Product Name</th>
                                                            <th class="p-amount">Price</th>
                                                            <th class="p-quantity">Qty</th>
                                                            <th class="p-total">SubTotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      @foreach($order_all as $u)
                                                        <tr>
                                                            <td class="p-name">{{$u->product_name}}</td>
                                                            <td class="p-amount"><span class="amount">฿{{$u->options->pro_price}}</span></td>
                                                            <td class="p-quantity">{{$u->sum_item}}</td>
                                                            <td class="p-total alignright">฿{{$u->sum_money}}</td>
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Subtotal</td>
                                                            <td>฿{{$order->total_money-$order->shipping_price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Shipping &amp; Handling (Flat Rate - Fixed)    </td>
                                                            <td>฿{{$order->shipping_price}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="alignright">Discount    </td>
                                                            <td>฿{{$order->discount}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3" class="alignright"><strong>Grand Total</strong></td>
                                                            <td><strong>฿{{$order->total_money}}</strong></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div class="checkout-buttons">
                                                    <p>Forgot an Item? <a href="#">Edit Your Cart</a>
</p>
                                                    <a href="#" class="default-btn" style="color:#fff"><span>Print Order</span></a>
                                                </div>


                                            </div>

                                    </div>

                                </div>





                            </div>

















                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Checkout Area End -->



@endsection

@section('scripts')

@stop('scripts')
