<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đèn trang trí</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{asset('')}}"> <!--thiếu cấy ni là không lấy đàng dẫn được nhá -->
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/fonts/elegant-font/html-css/style.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/lightbox2/css/lightbox.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/home/css/main.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/home/vendor/noui/nouislider.min.css')}}">

</head>
<body class="animsition">

<!-- header fixed -->
<div class="wrap_header fixed-header2 trans-0-4">
    <!-- Logo -->
    <a href="{!! route('trang-chu') !!}" class="logo">
        <img style="max-height: 80px" src="/images/img/demo/icons/logo2.png" alt="IMG-LOGO">
    </a>

    <!-- Menu -->
    <div class="wrap_menu">
        <nav class="menu">
            <ul class="main_menu">
                <li>
                    <a href="{!! route('trang-chu') !!}">Trang Chủ</a>
                </li>

                <li>
                    <a href="{!! route('san-pham') !!}">Sản Phẩm</a>
                </li>

                <li class="sale-noti">
                    <a href="/">Khuyến Mãi</a>
                </li>

                <li>
                    <a href="/">Thông Tin</a>
                </li>

                <li>
                    <a href="/">Bài Viết</a>
                </li>

                <li>
                    <a href="/">Khác</a>
                </li>

                <li>
                    <a href="/">Liên Hệ</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Header Icon -->
{{--    <div class="header-icons">--}}
{{--        <a href="#" class="header-wrapicon1 dis-block">--}}
{{--            <img src="/images/img/demo/icons/icon-header-01.png" class="header-icon1" alt="ICON">--}}
{{--        </a>--}}

{{--        <span class="linedivide1"></span>--}}

{{--        <div class="header-wrapicon2">--}}
{{--            <img src="/images/img/demo/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">--}}
{{--            <span class="header-icons-noti">0</span>--}}

{{--            <!-- Header cart noti -->--}}
{{--            <div class="header-cart header-dropdown">--}}
{{--                <ul class="header-cart-wrapitem">--}}
{{--                    <li class="header-cart-item">--}}
{{--                        <div class="header-cart-item-img">--}}
{{--                            <img src="/images/img/demo/item-cart-01.jpg" alt="IMG">--}}
{{--                        </div>--}}

{{--                        <div class="header-cart-item-txt">--}}
{{--                            <a href="#" class="header-cart-item-name">--}}
{{--                                White Shirt With Pleat Detail Back--}}
{{--                            </a>--}}

{{--                            <span class="header-cart-item-info">--}}
{{--									1 x $19.00--}}
{{--								</span>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li class="header-cart-item">--}}
{{--                        <div class="header-cart-item-img">--}}
{{--                            <img src="/images/item-cart-02.jpg" alt="IMG">--}}
{{--                        </div>--}}

{{--                        <div class="header-cart-item-txt">--}}
{{--                            <a href="#" class="header-cart-item-name">--}}
{{--                                Converse All Star Hi Black Canvas--}}
{{--                            </a>--}}

{{--                            <span class="header-cart-item-info">--}}
{{--									1 x $39.00--}}
{{--								</span>--}}
{{--                        </div>--}}
{{--                    </li>--}}

{{--                    <li class="header-cart-item">--}}
{{--                        <div class="header-cart-item-img">--}}
{{--                            <img src="/images/img/demo/item-cart-03.jpg" alt="IMG">--}}
{{--                        </div>--}}

{{--                        <div class="header-cart-item-txt">--}}
{{--                            <a href="#" class="header-cart-item-name">--}}
{{--                                Nixon Porter Leather Watch In Tan--}}
{{--                            </a>--}}

{{--                            <span class="header-cart-item-info">--}}
{{--									1 x $17.00--}}
{{--								</span>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <div class="header-cart-total">--}}
{{--                    Total: $75.00--}}
{{--                </div>--}}

{{--                <div class="header-cart-buttons">--}}
{{--                    <div class="header-cart-wrapbtn">--}}
{{--                        <!-- Button -->--}}
{{--                        <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                            View Cart--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="header-cart-wrapbtn">--}}
{{--                        <!-- Button -->--}}
{{--                        <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                            Check Out--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

<!-- top noti -->
<div class="flex-c-m size22 bg0 s-text21 pos-relative">
    Giảm giá tới 30%!
    <a href="{!! route('san-pham') !!}" class="s-text22 hov6 p-l-5">
        Mua Ngay
    </a>

    <button class="flex-c-m pos2 size23 colorwhite eff3 trans-0-4 btn-romove-top-noti">
        <i class="fa fa-remove fs-13" aria-hidden="true"></i>
    </button>
</div>

<!-- Header -->
<header class="header2">
    <!-- Header desktop -->
    <div class="container-menu-header-v2 p-t-26">
        <div class="topbar2">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <!-- Logo2 -->
            <a href="{!! route('trang-chu') !!}" class="logo2">
                <img src="/images/img/demo/icons/logo-artglass.png" alt="IMG-LOGO">
            </a>

{{--            <div class="topbar-child2">--}}
{{--                <!--  -->--}}
{{--                <a href="#" class="header-wrapicon1 dis-block m-l-30">--}}
{{--                    <img src="/images/img/demo/icons/icon-header-01.png" class="header-icon1" alt="ICON">--}}
{{--                </a>--}}

{{--                <span class="linedivide1"></span>--}}

{{--                <div class="header-wrapicon2 m-r-13">--}}
{{--                    <img src="/images/img/demo/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">--}}
{{--                    <span class="header-icons-noti">0</span>--}}

{{--                    <!-- Header cart noti -->--}}
{{--                    <div class="header-cart header-dropdown">--}}
{{--                        <ul class="header-cart-wrapitem">--}}
{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-01.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        White Shirt With Pleat Detail Back--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $19.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-02.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        Converse All Star Hi Black Canvas--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $39.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-03.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        Nixon Porter Leather Watch In Tan--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $17.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <div class="header-cart-total">--}}
{{--                            Total: $75.00--}}
{{--                        </div>--}}

{{--                        <div class="header-cart-buttons">--}}
{{--                            <div class="header-cart-wrapbtn">--}}
{{--                                <!-- Button -->--}}
{{--                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                                    View Cart--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <div class="header-cart-wrapbtn">--}}
{{--                                <!-- Button -->--}}
{{--                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                                    Check Out--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>

        <div class="wrap_header">

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="{!! route('trang-chu') !!}">Trang Chủ</a>
                        </li>

                        <li>
                            <a href="{!! route('san-pham')!!}">Sản Phẩm</a>
                        </li>

                        <li class="sale-noti">
                            <a href="/">Khuyến Mãi</a>
                        </li>

                        <li>
                            <a href="/">Thông Tin</a>
                        </li>

                        <li>
                            <a href="/">Bài Viết</a>
                        </li>

                        <li>
                            <a href="/">Về Chúng tôi</a>
                        </li>

                        <li>
                            <a href="/">Liên Hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">

            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="/images/img/demo/icons/logo2.png" alt="IMG-LOGO" style="max-height: 70px;">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
{{--            <div class="header-icons-mobile">--}}
{{--                <a href="#" class="header-wrapicon1 dis-block">--}}
{{--                    <img src="/images/img/demo/icons/icon-header-01.png" class="header-icon1" alt="ICON">--}}
{{--                </a>--}}

{{--                <span class="linedivide2"></span>--}}

{{--                <div class="header-wrapicon2">--}}
{{--                    <img src="/images/img/demo/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">--}}
{{--                    <span class="header-icons-noti">0</span>--}}
{{--                    <!-- Header cart noti -->--}}
{{--                    <div class="header-cart header-dropdown">--}}
{{--                        <ul class="header-cart-wrapitem">--}}
{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-01.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        White Shirt With Pleat Detail Back--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $19.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-02.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        Converse All Star Hi Black Canvas--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $39.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}

{{--                            <li class="header-cart-item">--}}
{{--                                <div class="header-cart-item-img">--}}
{{--                                    <img src="/images/img/demo/item-cart-03.jpg" alt="IMG">--}}
{{--                                </div>--}}

{{--                                <div class="header-cart-item-txt">--}}
{{--                                    <a href="#" class="header-cart-item-name">--}}
{{--                                        Nixon Porter Leather Watch In Tan--}}
{{--                                    </a>--}}

{{--                                    <span class="header-cart-item-info">--}}
{{--											1 x $17.00--}}
{{--										</span>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        </ul>--}}

{{--                        <div class="header-cart-total">--}}
{{--                            Total: $75.00--}}
{{--                        </div>--}}

{{--                        <div class="header-cart-buttons">--}}
{{--                            <div class="header-cart-wrapbtn">--}}
{{--                                <!-- Button -->--}}
{{--                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                                    View Cart--}}
{{--                                </a>--}}
{{--                            </div>--}}

{{--                            <div class="header-cart-wrapbtn">--}}
{{--                                <!-- Button -->--}}
{{--                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">--}}
{{--                                    Check Out--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							Free shipping for standard order over $100
						</span>
                </li>
                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                        <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="index.html">Trang chủ</a>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="{!! route('san-pham')!!}">Sản Phẩm</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Khuyến Mãi</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Thông Tin</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">BÀi Viết</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Về Chúng Tôi</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="/">Liên Hệ</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
@yield('content')
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                LIÊN HỆ VỚI CHÚNG TÔI :
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                </p>

                <div class="flex-m p-t-30">
                    <a href="/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="/" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="/" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="/" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Sản phẩm
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Đèn Trang trí
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Đèn treo tường
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Đèn chùm
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Đèn Trần
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Liên Kết
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Tìm Kiếm
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Về Chúng Tôi
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Liên Hệ
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Trở Lại
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Giúp Đỡ
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Theo Dõi
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Trở Lại
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="/" class="s-text7">
                        Mua Hàng
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Thư Điện Tử
            </h4>

            <form>
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                        Theo Dõi
                    </button>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="/images/img/demo/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/img/demo/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/img/demo/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/img/demo/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="/images/img/demo/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Design © 2020. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by Gnort And Long Hoàng</a>
        </div>
    </div>
</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

<!-- Modal Video 01-->

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/bootstrap/js/popper.js')}}"></script>
<script type="text/javascript" src="{{asset('/home/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/select2/select2.min.js')}}"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/slick/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/home/js/slick-custom.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/lightbox2/js/lightbox.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/sweetalert/sweetalert.min.js')}}"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/daterangepicker/moment.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/home/vendor/daterangepicker/daterangepicker.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>

<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('/home/vendor/parallax100/parallax100.js')}}"></script>
<script type="text/javascript">
    $('.parallax100').parallax100();
</script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="{{asset('/home/js/main.js')}}"></script>
</body>
</html>
