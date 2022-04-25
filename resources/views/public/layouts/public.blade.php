<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <!-- Basic page needs
        ============================================ -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eBengkel </title>
        <meta name="description" content="">

        <!-- Mobile specific metas
        ============================================ -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon.ico -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/favicon.ico') }}">

        <!-- ============== All CSS ================ -->
        <!-- normalize css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/normalize.css') }}">

        <!-- animate css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}">

        <!-- bootstrap css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">

        <!-- meanmenu css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/meanmenu.min.css') }}">

        <!-- font-awesome css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">

        <!-- icofont css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/icofont.css') }}">

        <!-- change-text css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/change-text.css') }}">

        <!-- YTPlayer css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/jquery.mb.YTPlayer.min.css') }}">

        <!-- main css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">

        <!-- owl.carousel css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/owl.transitions.css') }}">

        <!-- nivo-slider css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/lib/css/nivo-slider.css') }}">
        <link rel="stylesheet" href="{{ asset('public/lib/css/preview.css') }}">

        <!-- style css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/style.css') }}">

        <!-- responsive css
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">

        <!-- modernizr js
        ============================================ -->
        <script src="{{ asset('public/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- header area start -->
        <header id="sticker">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- welcome message start -->
                            <div class="welcome-msg">
                                <ul>
                                    <li> <p> <span> Contact: </span>0088-234-567-890</p></li>
                                    <li> <p> <span> Opening Hours: </span>Mon-Fri:  8:30am-6:30pm</p></li>
                                </ul>
                            </div>
                            <!-- welcome message end -->
                        </div>
                        <div class="col-md-5">
                            <div class="header-top-menu">
                                <!-- top social start -->
                                <div class="top-social">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                                    </ul>
                                </div>
                                <!-- top social end -->
                                <!-- cart menu start -->
                                <div class="cart-menu">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-shopping-cart"></i>(2)</a>
                                            <div class="cart-items">
                                                <ul>
                                                    <!-- single cart item start -->
                                                    <li>
                                                        <!-- cart item img -->
                                                        <div class="cart-item-img">
                                                            <a href="#">
                                                                <img src="{{ asset('public/img/product/1.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- cart item info -->
                                                        <div class="cart-info">
                                                            <a href="#" class="cart-item-name">
                                                                Three Ball Bearing
                                                            </a>
                                                            <p class="quantity">quantity: <strong> 1</strong></p>
                                                            <p class="price">price: <strong> $ 320</strong></p>
                                                            <button class="remove"><i class="fa fa-trash-o"></i></button>
                                                        </div>
                                                    </li>
                                                    <!-- single cart item end -->
                                                    <!-- single cart item start -->
                                                    <li>
                                                        <!-- cart item img -->
                                                        <div class="cart-item-img">
                                                            <a href="#">
                                                                <img src="{{ asset('public/img/product/2.jpg') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <!-- cart item info -->
                                                        <div class="cart-info">
                                                            <a href="#" class="cart-item-name">
                                                                Car Exhaust Pipe
                                                            </a>
                                                            <p class="quantity">quantity: <strong> 2</strong></p>
                                                            <p class="price">price: <strong> $ 441</strong></p>
                                                            <button class="remove"><i class="fa fa-trash-o"></i></button>
                                                        </div>
                                                    </li>
                                                    <!-- single cart item end -->
                                                    <li>
                                                        <div class="subtotal">
                                                            <div class="subtotal-title">
                                                                <h3>subtotal <span class="pull-right"> $ 661 </span> </h3>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="cart-btns">
                                                            <span class="default-btn">
                                                                <a href="cart.html">view cart</a>
                                                            </span>
                                                            <span class="default-btn pull-right">
                                                                <a href="checkout.html">checkout</a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- cart menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mainmenu area start -->
            <div class="main-menu-area hidden-xs">
                <div class="container">
                    <div class="menu-position">
                        <div class="row">
                            <div class="col-md-3 col-sm-2">
                                <!-- logo start -->
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                                <!-- logo end -->
                            </div>
                            <div class="col-md-9 col-sm-10 static">
                                <!-- main-menu start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            <!-- single menu -->
                                            <li class="has-sub"><a href="index.html">Home</a></li>
                                            <!-- single menu -->
                                            <li><a href="about-us.html">Tentang Kami</a></li>
                                            <li><a href="about-us.html">Cara Kerja</a></li>
                                            <!-- single menu -->
                                            <li><a href="shop.html">Product</a></li>
                                            <!-- single menu -->
                                            <li class="has-mega"><a href="#">Layanan<i class="icofont icofont-simple-down"></i></a>
                                                <!-- mega-menu start -->
                                                <div class="mega-menu">
                                                    <span>
                                                        <a href="cart.html">shopping cart</a>
                                                        <a href="checkout.html">checkout</a>
                                                        <a href="wishlist.html">wishlist</a>
                                                        <a href="eror-404.html">eror 404</a>
                                                        <a href="eror-500.html">eror 500</a>
                                                    </span>
                                                </div>
                                                <!-- mega-menu end -->
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- main-menu start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mainmenu area end -->
            <!-- mobile menu area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('public/img/logo-light.png') }}" alt="">
                                </a>
                            </div>
                            <div class="mobile-menu">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="our-services.html">our services</a></li>
                                                <li><a href="contact.html">contact us</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-details.html">shop details</a></li>
                                                <li><a href="cart.html">shopping cart</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="eror-404.html">eror 404</a></li>
                                                <li><a href="eror-500.html">eror 500</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile menu area end -->
        </header>
        <!-- header area end -->
        <!-- slider area start -->
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <!-- slider images start -->
                <div id="nivoslider" class="slides">
                    <img src="{{ asset('public/img/slider/1.jpg') }}" alt="slider_1" title="#slider-direction-1"/>
                    <img src="{{ asset('public/img/slider/2.jpg') }}" alt="slider_2" title="#slider-direction-2"/>
                </div>
                <!-- slider images end -->
                <!-- slider 1 direction -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <!-- slider progress start -->
                    <div class="slider-progress"></div>
                    <!-- slider progress end -->
                    <!-- slider caption start -->
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1">
                                        <h2 class="title-1">Reparasi Mobil Terbaik</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2">
                                        <h2 class="title-2"> Dan Layanan Pemeliharaan  </h2>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <p class="title-3"> Kami memberikan layanan terbaik untuk anda</p>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-1-4">
                                        <a href="#" class="title-4">Hubungi Kami </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider caption end -->
                </div>
                <!-- slider 2 direction -->
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <!-- slider progress start -->
                    <div class="slider-progress"></div>
                    <!-- slider progress end -->
                    <!-- slider caption start -->
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <!-- layer 1 -->
                                    <div class="layer-1-1">
                                        <h2 class="title-1">Reparasi Mobil Terbaik</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-1-2">
                                        <h2 class="title-2"> Dan Layanan Pemeliharaan  </h2>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-1-3">
                                        <p class="title-3"> Kami memberikan layanan terbaik untuk anda</p>
                                    </div>
                                    <!-- layer 4 -->
                                    <div class="layer-1-4">
                                        <a href="#" class="title-4">Hubungi Kami </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- slider caption end -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-6">
                        <!-- discount offer start -->
                        <div class="discount-offer">
                            <!-- section title start -->
                            <div class="discount-title">
                                <h2>Get <span> 30%</span> Discount !</h2>
                            </div>
                            <!-- section title end -->
                            <!-- discount content start -->
                            <div class="discount-content">
                                <div class="input-box name">
                                    <label>Nama*</label>
                                    <input type="text">
                                </div>
                                <div class="input-box phone">
                                    <label>Phone*</label>
                                    <input type="text">
                                </div>
                                <div class="input-box repair">
                                    <label>Reparasi*</label>
                                    <div class="select-box">
                                        <select>
                                            <option value="wheel_alignment">-Wheel Alignment</option>
                                            <option value="car_wash">Car wash</option>
                                            <option value="repair_glass">Repair glass</option>
                                            <option value="repair_seat">Repair seat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="submit-button">
                                    <button type="submit" class="default-button">get discount</button>
                                </div>
                            </div>
                            <!-- discount content end -->
                        </div>
                        <!-- discount offer end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- slider area end -->
        <!-- about us area start -->
        <div class="about-us-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- section title start -->
                        <div class="section-heading">
                            <h2>Tentang <span> EBengkel</span></h2>
                        </div>
                        <!-- section title end -->
                        <!-- about content start -->
                        <div class="about-us-info">
                            <p>eBengkel merupakan layanan reparasi secara digital dan memberikan berbagai macam pilihan product untuk kebutuhan kendaraan anda</p>
                            <a href="about-us.html" class="default-button">Selengkapny</a>
                        </div>
                        <!-- about content end -->
                    </div>
                    <div class="col-md-6 hidden-xs">
                        <!-- about us img start -->
                        <div class="about-us-img">
                            <img src="{{ asset('public/img/about/1.png') }}" alt="">
                        </div>
                        <!-- about us img end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- about us area end -->
        <!-- service area start -->
        <div class="service-area section-padding overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title start -->
                        <div class="section-heading light text-center no-margin">
                            <h2>Tinker Best <span> Services</span></h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-car"></i>
                                <h3> Car Wash</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-cogs"></i>
                                <h3> Engine repair</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-soccer-ball-o"></i>
                                <h3> wheel alignment</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-compass"></i>
                                <h3> suspension repair</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-cubes"></i>
                                <h3> brake service</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                <i class="fa fa-life-ring"></i>
                                <h3> tire balance</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isic ing elit, sed do eiusmod tempor incididunt ultram labore et dolore magna aliqua.</p>
                        </div>
                        <!-- single service end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end -->
        <!-- shop area start -->
        <div class="shop-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title start -->
                        <div class="section-heading text-center">
                            <h2>Tinker <span> Shop</span> </h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="shop-tab-area">
                    <!-- Shop tabs -->
                    <ul class="shop-tab" role="tablist">
                        <li role="presentation" class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">NEW ARRIVAL</a></li>
                        <li role="presentation"><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">POPULAR PRODUCTS</a></li>
                        <li role="presentation"><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">BEST SELLING</a></li>
                    </ul>
                    <!-- Shop Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/2.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Three Ball Bearing</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 320.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/4.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Car Exhaust Pipe</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 220.500</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/1.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Starter Parst Car</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 111.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/3.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Disk Break</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp 950.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/5.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Car Exhaust Pipe</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 220.500</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/6.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Disk Break</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 950.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/7.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Three Ball Bearing</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 320.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/8.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Starter Parst Car</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 1.100.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab3">
                            <div class="row">
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/4.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Starter Parst Car</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 117.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/1.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Three Ball Bearing</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 439.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/2.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Disk Break</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 950.000</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <a href="single-shop.html" class="main-img">
                                                <img src="{{ asset('public/img/product/3.jpg') }}" alt="">
                                            </a>
                                            <!-- product actions -->
                                            <div class="product-action">
                                                <div class="action-btn">
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-heart"></i> </button>
                                                    <button class="text-button action-single-btn"> add to cart</button>
                                                    <button class="icon-button action-single-btn"> <i class="fa fa-eye"></i> </button>
                                                </div>
                                                <!-- ratings -->
                                                <div class="ratings">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <span>(Based on 04 reviews)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                <a href="#">Car Exhaust Pipe</a>
                                            </div>
                                            <div class="product-price">
                                                <p>Rp. 220.500</p>
                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop area end -->
        <!-- features area start -->
        <div class="features-area section-padding overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- single feature start -->
                        <div class="single-feature text-center">
                            <div class="feature-icon">
                                <i class="icofont icofont-tea"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Cup of coffee</h3>
                                <p>For Lovely Customers</p>
                            </div>
                        </div>
                        <!-- single feature start -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- single feature start -->
                        <div class="single-feature text-center">
                            <!-- feature icon -->
                            <div class="feature-icon">
                                <i class="icofont icofont-dart"></i>
                            </div>
                            <!-- feature content -->
                            <div class="feature-content">
                                <h3>GUARANTY</h3>
                                <p>For All Services</p>
                            </div>
                        </div>
                        <!-- single feature end -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- single feature start -->
                        <div class="single-feature text-center">
                            <!-- feature icon -->
                            <div class="feature-icon">
                                <i class="icofont icofont-badge"></i>
                            </div>
                            <!-- feature content -->
                            <div class="feature-content">
                                <h3>achievement</h3>
                                <p>10 Years Experience</p>
                            </div>
                        </div>
                        <!-- single feature end -->
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- single feature start -->
                        <div class="single-feature text-center">
                            <!-- feature icon -->
                            <div class="feature-icon">
                                <i class="icofont icofont-ui-settings"></i>
                            </div>
                            <!-- feature content -->
                            <div class="feature-content">
                                <h3>PARTS</h3>
                                <p>Always in Stock</p>
                            </div>
                        </div>
                        <!-- single feature end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- features area end -->
        <!-- team member area start -->
        <div class="team-member section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title start -->
                        <div class="section-heading text-center">
                            <h2>eBengkel Team <span> Members</span></h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <!-- single team start -->
                    <div class="col-sm-4">
                        <div class="single-team hover-style pull-left">
                            <div class="team-img">
                                <!-- team img start -->
                                <a href="#" class="main-img">
                                    <img src="{{ asset('public/img/team/1.jpg') }}" alt="">
                                </a>
                                <!-- team img end -->
                                <!-- team info start -->
                                <div class="team-info">
                                    <h3>Hridoy Roy</h3>
                                    <p>chief executive officer</p>
                                </div>
                                <!-- team info end -->
                                <!-- team social start -->
                                <div class="team-social">
                                    <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                                </div>
                                <!-- team social end -->
                            </div>
                        </div>
                    </div>
                    <!-- single team end -->
                    <!-- single team start -->
                    <div class="col-sm-4">
                        <div class="single-team hover-style">
                            <div class="team-img">
                                <!-- team img start -->
                                <a href="#" class="main-img">
                                    <img src="{{ asset('public/img/team/2.jpg') }}" alt="">
                                </a>
                                <!-- team img end -->
                                <!-- team info start -->
                                <div class="team-info">
                                    <h3>Judy Bailey</h3>
                                    <p>Engine Mechanic</p>
                                </div>
                                <!-- team info end -->
                                <!-- team social start -->
                                <div class="team-social">
                                    <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                                </div>
                                <!-- team social end -->
                            </div>
                        </div>
                    </div>
                    <!-- single team end -->
                    <!-- single team start -->
                    <div class="col-sm-4">
                        <div class="single-team hover-style pull-right">
                            <div class="team-img">
                                <!-- team img start -->
                                <a href="#" class="main-img">
                                    <img src="{{ asset('public/img/team/3.jpg') }}" alt="">
                                </a>
                                <!-- team img end -->
                                <!-- team info start -->
                                <div class="team-info">
                                    <h3>MSN TRIO</h3>
                                    <p>Creative Director</p>
                                </div>
                                <!-- team info end -->
                                <!-- team social start -->
                                <div class="team-social">
                                    <a href="#"> <i class="icofont icofont-social-facebook"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-google-plus"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-twitter"></i> </a>
                                    <a href="#"> <i class="icofont icofont-social-vimeo"></i> </a>
                                </div>
                                <!-- team social end -->
                            </div>
                        </div>
                    </div>
                    <!-- single team end -->
                </div>
            </div>
        </div>
        <!-- team member area end -->
        <!-- testimonial area start -->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- testimonial slider start -->
                        <div class="testimonial-slider owl-preview-1">
                            <!-- single testimonial start -->
                            <div class="single-testimonial">
                                <!-- testimonil img -->
                                <div class="testimonial-img hidden-xs">
                                    <div class="writer-img">
                                        <img src="{{ asset('public/img/testimonial/1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- testimonial content -->
                                <div class="testimonial-content">
                                    <div class="test-writer">
                                        <h3>MSN TRIO</h3>
                                        <p>Creative Director</p>
                                    </div>
                                    <div class="test-spech">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial start -->
                            <div class="single-testimonial">
                                <!-- testimonial img -->
                                <div class="testimonial-img hidden-xs">
                                    <div class="writer-img">
                                        <img src="{{ asset('public/img/testimonial/2.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- testimonial content -->
                                <div class="testimonial-content">
                                    <div class="test-writer">
                                        <h3>Hridoy roy</h3>
                                        <p>chief executive officer</p>
                                    </div>
                                    <div class="test-spech">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                            <!-- single testimonial start -->
                            <div class="single-testimonial">
                                <!-- testimonial img -->
                                <div class="testimonial-img hidden-xs">
                                    <div class="writer-img">
                                        <img src="{{ asset('public/img/testimonial/3.jpg') }}" alt="">
                                    </div>
                                </div>
                                <!-- testimonial content -->
                                <div class="testimonial-content">
                                    <div class="test-writer">
                                        <h3>Judy Bailey</h3>
                                        <p>Engine Mechanic</p>
                                    </div>
                                    <div class="test-spech">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolorem magnadw aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodog consequat. Duis aute irure dolor in reprehenderit in fugiat nulla pariatur.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single testimonial end -->
                        </div>
                        <!-- testimonial slider end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
        <!-- blog area start -->
        <div class="blog-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title start -->
                        <div class="section-heading text-center">
                            <h2>Latest <span> Blog</span></h2>
                        </div>
                        <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <!-- blog slider start -->
                    <div class="blog-slider owl-preview-2">
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="{{ asset('public/img/blog/1.jpg') }}" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="img/blog/2.jpg" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="img/blog/3.jpg" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="{{ asset('public/img/blog/1.jpg') }}" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="{{ asset('public/img/blog/2.jpg') }}" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <a href="single-blog.html">
                                        <img src="{{ asset('public/img/blog/3.jpg') }}" alt="">
                                        <span class="post-date">
                                            07 <br> Oct
                                        </span>
                                    </a>
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="single-blog.html" class="blog-title">How to boost up your vehicle engine</a>
                                    <!-- post info -->
                                    <p class="post-info">
                                        <span> <i class="icofont icofont-user"></i> By admin</span>
                                        <span class="pull-right"> <i class="icofont icofont-heart"></i> (225)</span>
                                        <span class="pull-right"> <i class="icofont icofont-comment"></i> (115)</span>
                                    </p>
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        Lorem ipsum dolor sit amet, conse cte tur adipis ici ngal elitm sed do eius mod tempor incid idunt ut labore eta dolo mana aliqua. Ut enim ad minim veniam.
                                    </p>
                                    <!-- read post button -->
                                    <a href="single-blog.html" class="read-post">Continue Reading</a>
                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                    </div>
                    <!-- blog slider end -->
                </div>
            </div>
        </div>
        <!-- blog area end -->
        <!-- quick book area start -->
        <div class="quick-book-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="book-now">
                            <div class="display-table">
                                <div class="display-table-cell">
                                   <!-- book now content start -->
                                    <div class="book-now-title">
                                        <h2>MAKE A BOOK FREE APPOINMENT</h2>
                                        <a href="#" class="book-now-btn"> <i class="icofont icofont-long-arrow-right"></i> BOOK NOW</a>
                                    </div>
                                    <!-- book now content end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quick book area end -->
        <!-- footer top start -->
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- single footer start -->
                        <div class="single-footer-top">
                            <div class="footer-about-us">
                                <!-- small logo start -->
                                <a href="index.html" class="footer-logo"> <img src="{{ asset('public/img/logo-light.png') }}" alt=""> </a>
                                <!-- small logo end -->
                                <!-- address start -->
                                <div class="footer-address">
                                    <p> <span> ADDRESS: </span>Jl. Raya serang - cilegon Km.01 </p>
                                    <p>Serang, Banten</p>
                                </div>
                                <!-- address end -->
                                <!-- contact info start -->
                                <div class="footer-contact-info">
                                    <p> <span> Telephone:</span> +88017 222 333 </p>
                                    <p> <span> Email:</span> contact@ebengkel.com </p>
                                </div>
                                <!-- contact info end -->
                            </div>
                        </div>
                        <!-- single footer end -->
                    </div>
                    <div class="col-sm-2">
                        <!-- single footer start -->
                        <div class="single-footer-top">
                            <!-- section title start -->
                            <div class="footer-top-title">
                                <h3>Services</h3>
                            </div>
                            <!-- section title end -->
                            <!-- footer menu start -->
                            <div class="footer-top-menu">
                                <ul>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Return Policy</a></li>
                                    <li><a href="#">Our Blog</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">FAQ's</a></li>
                                </ul>
                            </div>
                            <!-- footer menu end -->
                        </div>
                        <!-- single footer end -->
                    </div>
                    <div class="col-md-2 col-md-offset-1 col-sm-3">
                        <!-- single footer start -->
                        <div class="single-footer-top">
                            <!-- section title start -->
                            <div class="footer-top-title">
                                <h3>USEFULL LINKS</h3>
                            </div>
                            <!-- section title end -->
                            <!-- footer menu start -->
                            <div class="footer-top-menu">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Our Services</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">How it works</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                </ul>
                            </div>
                            <!-- footer menu end -->
                        </div>
                        <!-- single footer end -->
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-3">
                        <!-- single footer start -->
                        <div class="single-footer-top">
                            <!-- section title start -->
                            <div class="footer-top-title">
                                <h3>Newsletter</h3>
                            </div>
                            <!-- section title end -->
                            <div class="footer-top-newsletter">
                                <p class="newsletter-text">
                                    Subscribe by our newsletter and get update daily.
                                </p>
                                <!-- newsletter form start -->
                                <form action="#">
                                    <div class="input-box">
                                        <input type="email" placeholder="Email address">
                                    </div>
                                    <a href="#" class="submit-button">Subscribe</a>
                                </form>
                                <!-- newsletter form end -->
                            </div>
                        </div>
                        <!-- single footer end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer top end -->
        <!-- footer area start -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <!-- footer social start -->
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-pinterest-p"></i> </a></li>
                            </ul>
                        </div>
                        <!-- footer social end -->
                    </div>
                    <div class="col-md-6 col-sm-4">
                        <!-- copyright text start -->
                        <div class="footer-copyright">
                            <p>Copyright &copy; 2022- <a href="#">eBengkel</a> </p>
                        </div>
                        <!-- copyright text end -->
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <!-- payment method start -->
                        <div class="footer-payment-method">
                            <img src="img/payment-method.png" alt="">
                        </div>
                        <!-- payment method end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- footer area end -->

        <!-- ============== All JS ================ -->
        <!-- jquery js
        =========================================== -->
        <script src="{{ asset('public/js/vendor/jquery-1.12.0.min.js') }}"></script>

        <!-- bootstrap js
        =========================================== -->
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

        <!-- meanmenu js
        =========================================== -->
        <script src="{{ asset('public/js/jquery.meanmenu.js') }}"></script>

        <!-- scrollUp js
        =========================================== -->
        <script src="{{ asset('public/js/jquery.scrollUp.min.js') }}"></script>

        <!-- wow js
        =========================================== -->
        <script src="{{ asset('public/js/wow.min.js') }}"></script>

        <!-- owl.carousel js
        =========================================== -->
        <script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>

        <!-- change-text js
        =========================================== -->
        <script src="{{ asset('public/js/change-text.js') }}"></script>

        <!-- YTPlayer js
        =========================================== -->
        <script src="{{ asset('public/js/jquery.mb.YTPlayer.min.js') }}"></script>

        <!-- textillate js
        =========================================== -->
        <script src="{{ asset('public/js/jquery.lettering.js') }}"></script>
        <script src="{{ asset('public/js/jquery.textillate.js') }}"></script>

        <!-- nivo.slider js
        =========================================== -->
        <script src="{{ asset('public/lib/js/jquery.nivo.slider.js') }}"></script>
        <script src="{{ asset('public/lib/home.js') }}"></script>

        <!-- plugins js
        =========================================== -->
        <script src="{{ asset('public/js/plugins.js') }}"></script>

        <!-- main js
        =========================================== -->
        <script src="{{ asset('public/js/main.js') }}"></script>
    </body>
</html>
