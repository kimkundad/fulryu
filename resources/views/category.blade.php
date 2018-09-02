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
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Breadcrumb Area End -->
        <!-- Shop Area Start -->
        <div class="shop-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="order-xl-2 order-lg-2 col-xl-9 col-lg-8">

                        <h1 class="page-title"> </h1>
                        <div class="ht-product-tab">
                            <div class="nav" role="tablist">
                                <a class="active" href="#grid" data-toggle="tab" role="tab" aria-selected="true" aria-controls="grid"><i class="fa fa-th"></i></a>
                                <a href="#list" data-toggle="tab" role="tab" aria-selected="false" aria-controls="list"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                            </div>
                            <div class="shop-content-wrapper">
                                <div class="shop-results"><span>Sort By</span>
                                    <select name="number" id="number">
                                        <option value="position">position</option>
                                        <option value="p-name">product name</option>
                                        <option value="p-price">price</option>
                                    </select>
                                </div>
                                <div class="shop-items">
                                    <a href="#"><i class="fa fa-long-arrow-up"></i></a>
                                    <span>Items 1-12 of 14</span>
                                </div>
                            </div>
                        </div>
                        <div class="ht-product-shop tab-content">
                            <div class="tab-pane active show fade text-center" id="grid" role="tabpanel">
                                <div class="row">


                              <!--      <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="product-item">
                                            <div class="product-image-hover">
                                                <a href="product-details.html">
                                                    <img class="primary-image" src="assets/img/product/1.jpg" alt="">
                                                    <img class="hover-image" src="assets/img/product/2.jpg" alt="">
                                                </a>
                                                <div class="product-hover">
                                                    <button><i class="icon icon-FullShoppingCart"></i></button>
                                                    <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                                    <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-text">
                                                <div class="product-rating">
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star color"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <h4><a href="product-details.html">Joust Duffle Bag</a></h4>
                                                <div class="product-price"><span>$34.00</span></div>
                                            </div>
                                        </div>
                                    </div> -->




                                </div>
                            </div>
                            <div class="tab-pane fade" id="list" role="tabpanel">


                          <!--       <div class="product-item">
                                    <div class="product-image-hover">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="assets/img/product/1.jpg" alt="">
                                            <img class="hover-image" src="assets/img/product/2.jpg" alt="">
                                        </a>
                                        <div class="product-hover">
                                            <button><i class="icon icon-FullShoppingCart"></i></button>
                                            <a href="wishlist.htnl"><i class="icon icon-Heart"></i></a>
                                            <a href="wishlist.htnl"><i class="icon icon-Files"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-text">
                                        <div class="product-rating">
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star color"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h4><a href="product-details.html">Joust Duffle Bag</a></h4>
                                        <div class="product-price"><span>$34.00</span></div>
                                        <p>The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare, it's ideal for athletes with places to go.</p>
                                        <a href="product-details.html">Learn More</a>
                                    </div>
                                </div> -->












                            </div>
                        </div>
                        <div class="pagination-wrapper">
                            <nav aria-label="navigation">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </nav>
                            <div class="shop-results"><span>Show</span>
                                <select name="number" id="b-number">
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="14">15</option>
                                </select>
                                <span>per page</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="sidebar-widget widget-style-1 panel-group" id="widget-parent" aria-multiselectable="true" role="tablist">
                            <h4>Shop By</h4>
                            <div class="panel widget-option">
                                <a data-toggle="collapse" href="#category" data-parent="#widget-parent">Category</a>
                                <div class="collapse show" id="category">
                                    <div class="collapse-content">

                                      <!--  <div class="single-widget-opt">
                                            <input type="checkbox" id="tables">
                                            <label for="tables">Dining tables <span>(4)</span></label>
                                        </div> -->

                                    </div>
                                </div>
                            </div>

                            <div class="panel widget-option">
                                <a class="collapsed" data-toggle="collapse" href="#price" data-parent="#widget-parent">Price</a>
                                <div class="collapse" id="price">
                                    <div class="collapse-content">
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="low">
                                            <label for="low">$0.00 - $9.99 <span>(3)</span></label>
                                        </div>
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="l-t-m">
                                            <label for="l-t-m">$10.00 - $19.99 <span>(2)</span></label>
                                        </div>
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="medium">
                                            <label for="medium">$30.00 - $39.99 <span>(3)</span></label>
                                        </div>
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="m-t-h">
                                            <label for="m-t-h">$40.00 - $49.99 <span>(4)</span></label>
                                        </div>
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="high">
                                            <label for="high">$50.00 - $59.99 <span>(1)</span></label>
                                        </div>
                                        <div class="single-widget-opt">
                                            <input type="checkbox" id="highest">
                                            <label for="highest">$70.00 And Above <span>(1)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget widget-style-1">
                            <h4>Compare Products</h4>
                            <p>You have no items to compare.</p>
                        </div>
                        <div class="sidebar-widget widget-style-1">
                            <h4>My Wish List</h4>
                            <p>You have no items in your wish list.</p>
                        </div>



                        <div class="sidebar-widget">
                            <a href="product-details.html" class="banner-image">
                                <img src="assets/img/banner/18.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->




@endsection

@section('scripts')

@stop('scripts')
