<!doctype html>
<html class="no-js" lang="en" dir="rtl">
    <head>
        <!-- meta data -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

        <!-- title of site -->
        <title>Public Web site</title>

        
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
		<link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/bootsnav.css') }}  " >

        <!--style.css-->
        <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/style.css') }}  ">

        <!--responsive.css-->
        <link rel="stylesheet" href="{{ URL::asset('welcomeProjectDesgin/assets/css/responsive.css') }}  ">



    </head>
	<body>

        <!--welcome-hero start -->
		<header id="home" class="welcome-hero">

            {{-- Begin Image header  --}}
            <div class="header-image">

                <div class="text">

                    <h1>  Product search results     </h1>
                </div>
            </div>
            {{-- End Image header  --}}

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
                                    <form action="{{ route('products.searchPublic') }}" method="get">
                                        @csrf
                                        <input type="search" name="search" placeholder="search" style=" border: 1px solid #ddd;padding:5px;border-radius: 5px;">
                                    </form>
                                    </li>
                                    <!--/.search-->
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
                                <a class="navbar-brand" href="{{ route('index') }}">sine<span>mkt</span>.</a>

                            </div><!--/.navbar-header-->
                            <!-- End Header Navigation -->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                                    <li class="scroll active"><a href="{{ route('index') }}">home</a></li>
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


		</header><!--/.welcome-hero-->
	   {{--  --}}
       @if ($message = Session::get('message'))
       <div class="alter alert-primary" style="    background: #eea432;
       text-align: center;
       color: #fff;
       font-size: 25px;
       font-weight: 600;
       padding: 10px 15px;">
           {{ $message }}
       </div>
       @endif
       <section id="feature" class="feature">
           <div class="container">
               <div class="section-header" style="padding-bottom:0;">
                   {{-- <h2 style="font-size: 40px; letter-spacing: 1px;"> المنتجات</h2> --}}
               </div><!--/.section-header-->
               <div class="feature-content">
                   <div class="row">
                       @if($stores->count() > 0)
                       @foreach ($stores as $item)
                       <div class="col-sm-3" style="margin-bottom: 15px;    box-shadow: 0 5px 5px #ddd;margin-left: 20px;">
                           <div class="single-feature">
                               <img src="{{ URL::asset($item->photo) }}" style="width:263px;height:263px;" alt="feature image">
                               <div class="single-feature-txt text-center">
                                   <h3><a href="#" style="font-size:18px">name :  {{ $item->name }} </a></h3>
                                   <p style="font-size:16px">
                                       description :    {{ $item->description }}
                                   </p>
                                   {{-- <h5> {{ $item->price }}</h5> --}}
                                   <p style="font-size:16px">
                                       @if ($item->flag == 1)
                                       <span style="text-decoration: line-through;"> price : {{ $item->price }}</span>
                                       <span style="font-weight:bold"> price : {{ $item->price_after_discount }}</span>
                                       @else
                                       <span> price : {{ $item->price }}</span>
                                       @endif
                                  </p>
                                  <form action="{{ route('addtocart') }}" method="post">
                                   @csrf
                                       <input type="hidden" name="product_id" value="{{ $item->id }}">
                                       <input type="hidden" name="price" value="<?= $item->flag == 1 ? $item->price_after_discount : $item->price ?>">
                                      <button class="btn btn-primary">Add To Cart</button>
                                  </form>
                               </div>
                           </div>
                       </div>
                       @endforeach
                       @endif
                       @if ($stores->count() == 0)
                           <div class="alert alert-danger">
                               Sorry , Not Found Any Product
                           </div>
                       @endif
                   </div>
               </div>
           </div><!--/.container-->

       </section>
       {{--  --}}

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
        <script src="{{ URL::asset('welcomeProjectDesgin/assets/js/bootstrap.min.js')}}  "></script>

		<!-- bootsnav js -->
		<script src=" {{ URL::asset('welcomeProjectDesgin/assets/js/bootsnav.js')}} "></script>

		<!--owl.carousel.js-->
        <script src=" {{ URL::asset('welcomeProjectDesgin/assets/js/owl.carousel.min.js')}} "></script>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>


        <!--Custom JS-->
        <script src=" {{ URL::asset('welcomeProjectDesgin/assets/js/custom.js')}} "></script>


    </body>

</html>



