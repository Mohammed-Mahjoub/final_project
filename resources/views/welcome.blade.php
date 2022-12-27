<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">

    <!-- title of site -->
    <title>Public Web Site</title>



    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/font-awesome.min.css') }}  ">

    <!--linear icon css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/linearicons.css') }}  ">

    <!--animate.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/animate.css') }}  ">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/owl.carousel.min.css') }}  ">
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/owl.theme.default.min.css') }}  ">

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/bootstrap.min.css') }} ">

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/bootsnav.css') }}  ">

    <!--style.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/style.css') }}  ">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/responsive.css') }}  ">

    <!--style.css-->
    {{-- <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/animate.css') }}  "> --}}



</head>

<body>

    <!--welcome-hero start -->
    <header id="home" class="welcome-hero  ">

        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!--/.carousel-indicator -->
            <!-- /ol-->
            <!--/.carousel-indicator -->

            <!--/.carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <!-- .item -->
                <div class="item active">
                    <div class="single-slide-item slide1">
                        <div class="container">
                            <div class="welcome-hero-content">
                                <div class="row">
                                    <div class="col-sm-7">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-txt">
                                                <h4 class="animated fadeInUp" style="opacity: 0;">great design collection</h4>
                                                <h2 class="animated fadeInUp" style="opacity: 0;">cloth covered accent chair</h2>
                                                <p class="animated fadeInUp" style="opacity: 0;">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiuiana smod tempor  ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                                </p>
                                                <div class="packages-price">
                                                    <p class="animated fadeInUp" style="opacity: 0;">
                                                        $ 399.00
                                                        <del>$ 499.00</del>
                                                    </p>
                                                </div>

                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                    <div class="col-sm-5">
                                        <div class="single-welcome-hero">
                                            <div class="welcome-hero-img">
                                                <img src="{{ asset('welcomeProjectDesgin/assets/images/slider/slider1.png') }}" alt="slider image">
                                            </div><!--/.welcome-hero-txt-->
                                        </div><!--/.single-welcome-hero-->
                                    </div><!--/.col-->
                                </div><!--/.row-->
                            </div><!--/.welcome-hero-content-->
                        </div><!-- /.container-->
                    </div><!-- /.single-slide-item-->

                </div><!-- /.item .active-->

                <!-- /.item .active-->
            </div><!-- /.carousel-inner-->

        </div>
        <!--/#header-carousel-->

        <!-- top-area Start -->
        <div class="top-area" dir="ltr">
            <div class="header-area">
                <!-- Start Navigation -->
                <div class="wrap-sticky" style="height: 114px;"><nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy on menu-center no-full" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

            

                    <div class="container">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="nav-setting" style="    position: relative;
                                top: 20px;
                                margin-right: 5px;
                               ">
                                <form action="{{ route('products.searchPublic') }}" method="post">
                                    @csrf
                                    <input type="search" name="search" placeholder="search" style=" border: 1px solid #ddd;padding:5px;border-radius: 5px;">
                                </form>
                                </li><!--/.search-->
                                <li class="nav-setting">
                                    <a href="#"><span class="lnr lnr-cog"></span></a>
                                </li><!--/.search-->
                              <!--/.dropdown-->
                            </ul>
                        </div><!--/.attr-nav-->
                        <!-- End Atribute Navigation -->

                        <!-- Start Header Navigation -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand" href="index.html">sine<span>mkt</span>.</a>

                        </div><!--/.navbar-header-->
                        <!-- End Header Navigation -->

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class="scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#new-arrivals">new arrival</a></li>
                                <li class="scroll"><a href="#feature">features</a></li>
                                <li class="scroll"><a href="#blog">blog</a></li>
                                <li class="scroll"><a href="#newsletter">contact</a></li>
                            </ul><!--/.nav -->
                        </div><!-- /.navbar-collapse -->
                    </div><!--/.container-->
                </nav></div><!--/nav-->
                <!-- End Navigation -->
            </div>
            <!--/.header-area-->
            <div class="clearfix"></div>

        </div><!-- /.top-area-->
        <!-- top-area End -->

    </header>
    <!--/.welcome-hero-->

    <!--welcome-hero end -->

    <!--populer-products start -->
    <section id="feature" class="populer-products">
        <div class="container">
            <div class="section-header ">
                <h2> Our Category </h2>
            </div>
            <!--/.section-header-->

            <div class="populer-products-content" >
                <div class="row">
                    @foreach ($categories as $item)
                        <div class="col-md-4  " style="margin-top: 8px;">
                            <div class="single-populer-products">
                                <div class="single-populer-product-img mt40">
                                    <img src="{{ URL::asset($item->photo) }}"
                                        style="
                                    width: 132px;
                                    height: 102px;
                                ">
                                </div>
                                <h2><a href="#">{{ $item->name }} </a></h2>
                                <div class="categoriestext">
                                    {{-- <p> لدينا العديد من منتجات مرواح تعمل على توفير الكهرباء  </p> --}}
                                    {{-- <p> {{ $item->description }} </p> --}}

                                    <button class="buttontext"
                                        onclick="window.location.href='{{ route('products', ['id' => $item->id]) }}'">
                                        عرض منتجات هذه الفئة
                                    </button>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--/.container-->

    </section>
    <!--/.populer-products-->
    <!--populer-products end-->
    <section id="newsletter" class="newsletter">
        <div class="container">
            <div class="hm-footer-details">
                <div class="row">
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>information</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">about us</a></li><!--/li-->
                                    <li><a href="#">contact us</a></li><!--/li-->
                                    <li><a href="#">news</a></li><!--/li-->
                                    <li><a href="#">store</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>collections</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">wooden chair</a></li><!--/li-->
                                    <li><a href="#">royal cloth sofa</a></li><!--/li-->
                                    <li><a href="#">accent chair</a></li><!--/li-->
                                    <li><a href="#">bed</a></li><!--/li-->
                                    <li><a href="#">hanging lamp</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6 col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>my accounts</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-menu">
                                <ul>
                                    <li><a href="#">my account</a></li><!--/li-->
                                    <li><a href="#">wishlist</a></li><!--/li-->
                                    <li><a href="#">Community</a></li><!--/li-->
                                    <li><a href="#">order history</a></li><!--/li-->
                                    <li><a href="#">my cart</a></li><!--/li-->
                                </ul><!--/ul-->
                            </div><!--/.hm-foot-menu-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                    <div class=" col-md-3 col-sm-6  col-xs-12">
                        <div class="hm-footer-widget">
                            <div class="hm-foot-title">
                                <h4>newsletter</h4>
                            </div><!--/.hm-foot-title-->
                            <div class="hm-foot-para">
                                <p>
                                    Subscribe  to get latest news,update and information.
                                </p>
                            </div><!--/.hm-foot-para-->
                            <div class="hm-foot-email">
                                <div class="foot-email-box">
                                    <input type="text" class="form-control" placeholder="Enter Email Here....">
                                </div><!--/.foot-email-box-->
                                <div class="foot-email-subscribe">
                                    <span><i class="fa fa-location-arrow"></i></span>
                                </div><!--/.foot-email-icon-->
                            </div><!--/.hm-foot-email-->
                        </div><!--/.hm-footer-widget-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.hm-footer-details-->

        </div><!--/.container-->

    </section>
    <!--populer-products end-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="hm-footer-copyright text-center">
                <div class="footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-behance"></i></a>
                </div>
                <p>
                    ©copyright. designed and developed by <a href="https://www.themesine.com/">themesine</a>
                </p><!--/p-->
            </div><!--/.text-center-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top" style="display: block;">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer>

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="{{ URL::asset('welcomeProjectDesgin/assets/js/jquery.js') }} "></script>

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!--bootstrap.min.js-->
    <script src="{{ URL::asset('welcomeProjectDesgin/assets/js/bootstrap.min.js') }}  "></script>

    <!-- bootsnav js -->
    <script src=" {{ URL::asset('welcomeProjectDesgin/assets/js/bootsnav.js') }} "></script>

    <!--owl.carousel.js-->
    <script src=" {{ URL::asset('welcomeProjectDesgin/assets/js/owl.carousel.min.js') }} "></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>




</body>

</html>
