<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- Icons Link --}}
    <link rel="shortcut icon" href=" {{ asset('dashbord/php/assets/media/logos/favicon.ico') }}   " />

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />

    {{-- Bootstrap  link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('dashbord/php/assets/plugins/global/plugins.bundle.css') }}   " rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('dashbord/php/assets/css/style.bundle.css') }}  " rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <link href="{{ asset('detailsStore/Home.css') }}  " rel="stylesheet" type="text/css" />
    <link href="{{ asset('detailsStore/nicepage.css') }}  " rel="stylesheet" type="text/css" />
    <script class="u-script" type="text/javascript" src="{{ asset('detailsStore/jquery.js') }} " defer=""></script>

    <!-- -------- Link Font Awesome icons ------------ -->
    <script src="https://kit.fontawesome.com/60137ed173.js" crossorigin="anonymous"></script>


</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">


    <div id="app">
        {{-- begin::flex-column --}}
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
                <div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true"
                    data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_aside_toggle">
                    <!--begin::Primary-->
                    <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">

                        <!--begin::Nav-->
                        <div class="aside-nav d-flex flex-column flex-lg-center flex-column-fluid w-100 pt-5 pt-lg-0"
                            id="kt_aside_nav">
                            <!--begin::Primary menu-->
                            <div id="kt_aside_menu"
                                class="menu menu-column menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5"
                                data-kt-menu="true">

                                <div class="menu-item py-2">
                                    <a class="menu-link active menu-center" href="{{ route('home') }}"
                                        title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover"
                                        data-bs-dismiss="click" data-bs-placement="right">
                                        <span class="menu-icon me-0">

                                            <!--begin::Svg Icon | path: icons/duotone/Home/Home2.svg-->
                                            <span class="svg-icon svg-icon-1" style="padding-right: 5px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z"
                                                        fill="#00B2FF" />
                                                </svg>
                                            </span>
                                            <span style="padding: 10px;font-size : 18px;padding-top:13px;">Home Page
                                            </span>

                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                </div>
                                <a href=" {{ route('categories') }}">
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                        data-kt-menu-flip="bottom" class="menu-item py-2">
                                        <span class="menu-link menu-center" title="Options Admins And Profile"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon me-0">


                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                <span class="svg-icon svg-icon-1" style="padding-right: 5px">


                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                        height="512" x="0" y="0"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 0h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m20 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m14 7h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2h-3v-3a1 1 0 0 0 -2 0v3h-3a1 1 0 0 0 0 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <!--end::Svg Icon-->
                                                <span style="padding: 10px;font-size : 18px;padding-top:13px;">
                                                    Stores And Products</span>

                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href=" {{ route('report') }}">
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                        data-kt-menu-flip="bottom" class="menu-item py-2">
                                        <span class="menu-link menu-center" title="Options Admins And Profile"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon me-0">


                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                <span class="svg-icon svg-icon-1" style="padding-right: 5px">


                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                        height="512" x="0" y="0"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 0h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m20 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m14 7h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2h-3v-3a1 1 0 0 0 -2 0v3h-3a1 1 0 0 0 0 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <!--end::Svg Icon-->
                                                <span style="padding: 10px;font-size : 18px;padding-top:13px;">
                                                    Reports </span>

                                            </span>
                                        </span>
                                    </div>
                                </a>

                                <a href=" {{ route('users') }}">
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                        data-kt-menu-flip="bottom" class="menu-item py-2">
                                        <span class="menu-link menu-center" title="Options Admins And Profile"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon me-0">


                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                <span class="svg-icon svg-icon-1" style="padding-right: 5px">


                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                        height="512" x="0" y="0"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 0h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m20 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m14 7h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2h-3v-3a1 1 0 0 0 -2 0v3h-3a1 1 0 0 0 0 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <!--end::Svg Icon-->
                                                <span style="padding: 10px;font-size : 18px;padding-top:13px;">
                                                    Users </span>

                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href=" {{ url('/') }}" target="_blank">
                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                        data-kt-menu-flip="bottom" class="menu-item py-2">
                                        <span class="menu-link menu-center" title="Options Admins And Profile"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon me-0">


                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                <span class="svg-icon svg-icon-1" style="padding-right: 5px">


                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                        height="512" x="0" y="0"
                                                        viewBox="0 0 24 24" style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 0h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m7 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m20 13h-3a4 4 0 0 0 -4 4v3a4 4 0 0 0 4 4h3a4 4 0 0 0 4-4v-3a4 4 0 0 0 -4-4zm2 7a2 2 0 0 1 -2 2h-3a2 2 0 0 1 -2-2v-3a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m14 7h3v3a1 1 0 0 0 2 0v-3h3a1 1 0 0 0 0-2h-3v-3a1 1 0 0 0 -2 0v3h-3a1 1 0 0 0 0 2z"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </g>
                                                    </svg>

                                                </span>
                                                <!--end::Svg Icon-->
                                                <span style="padding: 10px;font-size : 18px;padding-top:13px;">
                                                    Public Website  </span>

                                            </span>
                                        </span>
                                    </div>
                                </a>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
										   document.getElementById('logout-form').submit();">

                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start"
                                        data-kt-menu-flip="bottom" class="menu-item py-2">
                                        <span class="menu-link menu-center" title="Options Admins And Profile"
                                            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                            data-bs-placement="right">
                                            <span class="menu-icon me-0">



                                                <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                                <span class="svg-icon svg-icon-1"
                                                    style="padding: 10px;font-size : 18px;padding-top:13px;">


                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                        height="512" x="0" y="0"
                                                        viewBox="0 0 512 512"
                                                        style="enable-background:new 0 0 512 512"
                                                        xml:space="preserve">
                                                        <g>
                                                            <path xmlns="http://www.w3.org/2000/svg"
                                                                d="m363.335 488a24 24 0 0 1 -24 24h-226.253a80.09 80.09 0 0 1 -80-80v-352a80.09 80.09 0 0 1 80-80h226.253a24 24 0 0 1 0 48h-226.253a32.035 32.035 0 0 0 -32 32v352a32.034 32.034 0 0 0 32 32h226.253a24 24 0 0 1 24 24zm108.553-248.97-114.051-114.052a24 24 0 1 0 -33.937 33.941l73.077 73.081h-188.936a24 24 0 1 0 0 48h188.935l-73.08 73.08a24 24 0 1 0 33.941 33.941l114.051-114.05a24 24 0 0 0 0-33.941z"
                                                                fill="#000000" data-original="#000000"></path>
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <span style="padding: 5px ;  margin-left:10px;">

                                                    {{ __(' logout') }}
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                </a>

                            </div>
                            <!--end::Primary menu-->
                        </div>
                        <!--end::Nav-->

                    </div>
                    <!--end::Primary-->
                    <!--begin::Action-->
                    <!--end::Action-->
                </div>
                <!--end::Aside-->
                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                        data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                        <!--begin::Container-->
                        <div class="container-fluid d-flex align-items-stretch justify-content-between"
                            id="kt_header_container">
                            <!--begin::Page title-->
                            <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                                data-kt-swapper="true" data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                                <!--begin::Heading-->
                                <h1 class="text-dark fw-bolder my-1 fs-2">  Welcome {{ Auth::user()->name }}
                                    <small class="text-muted fs-6 fw-normal ms-1"></small>
                                </h1>
                                <!--end::Heading-->

                            </div>
                            <!--end::Page title----------------------------- -->

                            <!--begin::Wrapper-->

                            <!--end::Wrapper-->
                            <!--begin::Toolbar wrapper-->
                            <!-- Start Top Search -->
                            <div class="top-search">
                                <div class="container">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="input-group-addon close-search"><i
                                                class="fa fa-times"></i></span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Top Search -->

                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Search-->
                                <div class="d-flex align-items-stretch ms-1 ms-lg-3">

                                    <!--begin::Search-->
                                    <div id="kt_header_search" class="d-flex align-items-stretch"
                                        data-kt-search-keypress="true" data-kt-search-min-length="2"
                                        data-kt-search-enter="enter" data-kt-search-layout="menu"
                                        data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="bottom">


                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Search-->


                                <!--begin::Search-->
                                <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                                    <!--begin::Search-->
                                    <div id="kt_header_search" class="d-flex align-items-stretch"
                                        data-kt-search-keypress="true" data-kt-search-min-length="2"
                                        data-kt-search-enter="enter" data-kt-search-layout="menu"
                                        data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end"
                                        data-kt-menu-flip="bottom">
                                        <!--begin::Search toggle-->
                                        <div class="d-flex align-items-center" data-kt-search-element="toggle"
                                            id="kt_header_search_toggle">


                                            <div class="btn btn-icon btn-active-light-primary">
                                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
										   document.getElementById('logout-form').submit();">

                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" width="512"
                                                            height="512" x="0" y="0"
                                                            viewBox="0 0 512 512"
                                                            style="enable-background:new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <g>
                                                                <path xmlns="http://www.w3.org/2000/svg"
                                                                    d="m363.335 488a24 24 0 0 1 -24 24h-226.253a80.09 80.09 0 0 1 -80-80v-352a80.09 80.09 0 0 1 80-80h226.253a24 24 0 0 1 0 48h-226.253a32.035 32.035 0 0 0 -32 32v352a32.034 32.034 0 0 0 32 32h226.253a24 24 0 0 1 24 24zm108.553-248.97-114.051-114.052a24 24 0 1 0 -33.937 33.941l73.077 73.081h-188.936a24 24 0 1 0 0 48h188.935l-73.08 73.08a24 24 0 1 0 33.941 33.941l114.051-114.05a24 24 0 0 0 0-33.941z"
                                                                    fill="#000000" data-original="#000000"></path>
                                                            </g>
                                                        </svg>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </a>

                                                </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                        </div>
                                        <!--end::Search toggle-->

                                    </div>
                                    <!--end::Search-->
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Toolbar wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content" style="position: relative;
                    left: 180px;">
                        <!--begin::Container-->
                        <div class="container" id="kt_content_container">
                            <!--begin::Row-->
                            <div class="row g-5 gx-xxl-8 mb-xxl-3">
                                <!--begin::Col-->
                                <div>
                                    <!--begin::Engage Widget 1-->
                                    <div class="card card-xxl-stretch">
                                        <!--begin::Card body-->
                                        <div class="card-body d-flex flex-column justify-content-between h-100">
                                            <main class="py-4">
                                                @yield('content')
                                            </main>
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Engage Widget 1-->
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->


                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Wrapper-->
            </div>

            <!--end::Page-->
        </div>
        <!--end::Root-->
        {{-- end::flex-column --}}








    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- begin ----- Code me JS  -------------- -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".confirmprocess").click(function() {
            var reslut = confirm("Are You Suer about this process ? ");
            if (reslut == true) {
                $(this).parent().submit();
            }
        });
    </script>

</body>

</html>
