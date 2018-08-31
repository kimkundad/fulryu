<!-- Header Area Start -->
        <header class="header-two-area header-sticky">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="{{url('assets/image/logo-website.png')}}" style="height:44px" alt="Artfurniture"></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-3 d-none d-md-block d-lg-block d-xl-block">
                        <div class="main-menu display-none">
                            <nav>
                                <ul>
                                    <li class="active"><a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li class="active"><a href="{{url('/')}}">Category</a>
                                    </li>
                                    <li class="active"><a href="{{url('/')}}">About</a>
                                    </li>
                                    <li class="active"><a href="{{url('/')}}">Contact</a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5">
                        <div class="header-two-content">
                            <div class="search-form-two">
                                <a href="#" class=""><img src="{{url('home/assets/img/icon/search.png')}}" alt=""></a>
                                <form action="#" method="post">
                                    <input type="text" placeholder="Search for item...">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <div class="header-settings">
                                @if (Auth::guest())
                                <a href="{{url('login')}}"><img src="{{url('home/assets/img/users-512.png')}}" style="height:19px;" alt=""> Login</a>
                                @else
                                <a href="#"><img src="{{url('home/assets/img/users-512.png')}}" style="height:19px;" alt=""> {{ Auth::user()->name }}</a>
                                <ul>
                                      <li><a href="#">My Account</a></li>
                                      <li><a href="#">My Wishlist</a></li>
                                      <li><a href="{{url('logout')}}">Sign Out</a></li>

                                  </ul>
                                @endif
                              <!--  <ul>
                                    <li><a href="account.html">My Account</a></li>
                                    <li><a href="wishlist.html">My Wishlist</a></li>
                                    <li><a href="account.html">Sign In</a></li>
                                    <li>
                                        <a href="#">Currency</a>
                                        <ul class="header-menu-list">
                                            <li><a href="#">USD</a></li>
                                            <li><a href="#">BDT</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Language</a>
                                        <ul class="header-menu-list">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                        </ul>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="cart-box-wrapper">
                                <a class="cart-info" href="{{url('/')}}">
                                    <img src="{{url('home/assets/img/icon/cart-2.png')}}" alt="">
                                    <span>0</span>
                                </a>

                        <!--
                                <div class="cart-dropdown">
                                    <button class="close"><i class="fa fa-close"></i></button>
                                    <div class="cart-item-a-wrapper">
                                        <div class="cart-item-amount">
                                            <span class="cart-number"><span>0</span> items</span>
                                            <div class="cart-amount">
                                                <h5>Cart Subtotal :</h5>
                                                <h4>$70.00</h4>
                                            </div>
                                        </div>
                                        <a href="checkout.html" class="grey-button">Go to Checkout</a>
                                    </div>
                                    <div class="cart-dropdown-item">
                                        <div class="cart-p-image">
                                            <a href="cart.html"><img src="home/assets/img/cart/s-1.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-p-text">
                                            <a href="cart.html" class="cart-p-name">Crown Summit Backpack</a>
                                            <span>$38.00</span>
                                            <div class="cart-p-qty">
                                                <label>Qty</label>
                                                <input type="text" placeholder="1">
                                                <button><i class="icon icon-Delete"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-dropdown-item">
                                        <div class="cart-p-image">
                                            <a href="cart.html"><img src="home/assets/img/cart/s-2.jpg" alt=""></a>
                                        </div>
                                        <div class="cart-p-text">
                                            <a href="cart.html" class="cart-p-name">Strive Shoulder Pack</a>
                                            <span>$32.00</span>
                                            <div class="cart-p-qty">
                                                <label>Qty</label>
                                                <input type="text" placeholder="1">
                                                <button><i class="icon icon-Delete"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cart-btn-wrapper">
                                        <a href="cart.html" class="grey-button">View and edit cart</a>
                                    </div>
                                </div>


                              -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area row">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{url('/')}}">HOME</a>

                                </li>
                                <li><a href="#">Category</a></li>
                                <li><a href="#">About Us</a></li>

                                <li><a href="#">Account</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </div>
        </header>
        <!-- Header Area Start -->
