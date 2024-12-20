<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ tenant('id') }} - Travel Agency & Tour Booking HTML Template - Home One</title>
    <meta name="author" content="vecuro">
    <meta name="description" content="{{ tenant('id') }} -  Travel Agency & Tour Booking HTML Template">
    <meta name="keywords" content="{{ tenant('id') }} -  Travel Agency & Tour Booking HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" href=" {{ asset('tenants/assets/img/favicons/favicon.png') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
      Google Fonts
  ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">

    <!--==============================
        All CSS File
    ============================== -->
    <!-- Bootstrap -->
    <!-- <link rel="stylesheet" href="{{ asset('tenants/assets/css/app.min.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('tenants/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{ asset('tenants/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('tenants/assets/css/magnific-popup.min.css') }}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{ asset('tenants/assets/css/slick.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('tenants/assets/css/style.css') }}">
</head>

<body>

    <!--********************************
    Code Start From Here
    ******************************** -->

    <!--==============================
      Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="index.html">{{ tenant('id') }}</a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="index.html">aaaa {{ tenant('id') }}</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Destinations</a>
                        <ul class="sub-menu">
                            <li><a href="destinations.html">Destinations</a></li>
                            <li><a href="destination-details.html">Destinations Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="tours.html">Tours List</a></li>
                            <li><a href="tour-booking.html">Tour Booking</a></li>
                            <li><a href="destinations.html">Destinations</a></li>
                            <li><a href="destination-details.html">Destinations Details</a></li>
                            <li><a href="error.html">Error</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Tours</a>
                        <ul class="sub-menu">
                            <li><a href="{{route('tourListPage')}}">Tours List</a></li>
                            <li><a href="{{route('tourBooking')}}">Tour Booking</a></li>
                        </ul>
                    </li>
                    {{-- <li class="menu-item-has-children">
                        <a href="#">Shop</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">Shop</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li> --}}
                    <li>
                        {{-- <a href="{{route('aboutUs')}}">About Us</a> --}}
                    </li>
                    <li>
                        <a href="{{route('contact_page')}}">Contact</a>
                    </li>
                    <li>
                        {{-- <a href="{{route('login')}}">Login as Agent</a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
      Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>

    <!--==============================
      Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="container">
            <div class="header-top">
                <div class="row justify-content-between align-items-center">
                    <div class="col d-none d-lg-block">
                        <ul class="header-contact">
                            <li><i class="fas fa-envelope"></i> <a href="mailto:info@travolo.com">info@travolo.com</a>
                            </li>
                            <li><i class="fas fa-phone-alt"></i> <a href="tel:02073885619">020 7388 5619</a></li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <div class="header-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-auto d-flex ">
                        <div class="header-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                data-bs-toggle="dropdown" aria-expanded="false">English</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                <li>
                                    <a href="#">German</a>
                                    <a href="#">French</a>
                                    <a href="#">Italian</a>
                                    <a href="#">Latvian</a>
                                    <a href="#">Spanish</a>
                                    <a href="#">Greek</a>
                                </li>
                            </ul>
                        </div>
                        <a class="user-btn" href="sign-up.html"><i class="far fa-user-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container position-relative z-index-common">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="vs-logo">
                                <a href="index.html">
                                    <h1>{{ ucfirst(tenant('id')) }}</h1>
                                </a>
                            </div>
                        </div>
                        <div class="col text-end text-xl-center">
                            <nav class="main-menu  menu-style1 d-none d-lg-block">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Destinations</a>
                                        <ul class="sub-menu">
                                            <li><a href="destinations.html">Destinations</a></li>
                                            <li><a href="destination-details.html">Destinations Details</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="menu-item-has-children mega-menu-wrap">
                                        <a href="#">Pages</a>
                                        <ul class="mega-menu">
                                            <li>
                                                <a href="shop.html">Pagelist 1</a>
                                                <ul>
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                    <li><a href="index-4.html">Home Four</a></li>
                                                    <li><a href="index-5.html">Home Five</a></li>
                                                    <li><a href="index-6.html">Home Six</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pagelist 2</a>
                                                <ul>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="destinations.html">Destinations</a></li>
                                                    <li><a href="destination-details.html">Destinations Details</a>
                                                    </li>
                                                    <li><a href="tours.html">Tours List</a></li>
                                                    <li><a href="tour-booking.html">Tour Booking</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pagelist 3</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-details.html">Shop Details</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="blog.html">Blog List</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">Pagelist 4</a>
                                                <ul>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="error.html">Error Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> --}}
                                    <li class="menu-item-has-children">
                                        <a href="#">Tours</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('tourListPage')}}">Tours List</a></li>
                                            <li><a href="{{route('tourBooking')}}">Tour Booking</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-details.html">Shop Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li> --}}
                                    <li>
                                        <a href="{{route('contact_page')}}">Contact</a>
                                    </li>
                                    <li>
                                        <a href="{{route('aboutUs')}}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{route('tenant.auth.login')}}">Login as Agent</a>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i
                                    class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-btns">
                                <button class="searchBoxTggler"><i class="fal fa-search"></i></button>
                                <button class="sideCartToggler"><i class="fal fa-shopping-bag"></i><span
                                        class="button-badge">2</span></button>
                                <button class="sideMenuToggler"><i class="fal fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--==============================
    Hero Area Start
  ==============================-->
    {{-- <section class="hero-layout" data-bg-src="{{ asset('tenants/assets/img/banner/banner-bg-1.png') }}">
        <div class="hero-mask">
            <div class="vs-carousel" id="hero-slider" data-slide-show="1" autoplay="false">
                <div class="hero-slide">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Explore World And Find The Beauty</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img">
                                    <img class="img1"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-1-1.jpg') }}"
                                        alt="hero">
                                    <img class="img2"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-1-2.jpg') }}"
                                        alt="hero">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Kickstart Your Make-Believe Quest</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img">
                                    <img class="img1"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-2-1.jpg') }}"
                                        alt="hero">
                                    <img class="img2"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-2-2.jpg') }}"
                                        alt="hero">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Uncovering Stories, One Trip At A Time</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-img">
                                    <img class="img1"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-3-1.jpg') }}"
                                        alt="hero">
                                    <img class="img2"
                                        src="{{ asset('tenants/assets/img/banner/banner-img-3-2.jpg') }}"
                                        alt="hero">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-count vs-slider-tab" data-asnavfor="#hero-slider">
                <button class="tab-btn active">1</button>
                <button class="tab-btn">2</button>
                <button class="tab-btn">3</button>
            </div>

            <div class="hero-bottom">
                <div class="container">
                    <form class="hero-form">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group ">
                                    <i class="fas fa-compass"></i>
                                    <input type="text" placeholder="Where To?" />
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <i class="fas fa-calendar-alt"></i>
                                    <select class="form-select" name="name">
                                        <option value="" selected="selected" disabled="disabled"
                                            hidden="">Select Month</option>
                                        <option value="">January</option>
                                        <option value="">February</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <i class="fas fa-thumbtack"></i>
                                    <select class="form-select" name="name">
                                        <option value="" selected="selected" disabled="disabled"
                                            hidden="">Select Type</option>
                                        <option value="">Adventure </option>
                                        <option value="">Combining</option>
                                        <option value="">Sporting</option>
                                        <option value="">Domestic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <button class="vs-btn style4">Find Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- start --}}


    @yield('content')


    <!--==============================
      Footer Area
  ==============================-->
  <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('tenants/assets/img/bg/footer-bg.jpg') }}">
    <div class="footer-top">
        <div class="shadow-color"></div>
        <div class="container">
            <div class="cta-style1">
                <div class="row g-5 align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="cta-content">
                            <h2 class="cta-title">Ready to get started?</h2>
                            <p class="cta-text">It only takes a few minutes to register your FREE Travolo account.
                            </p>
                            <a href="sign-up.html" class="vs-btn style2">Open An Account</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6">
                        <div class="cta-image d-lg-block d-none">
                            <img src="{{ asset('tenants/assets/img/newsletter.png') }}" alt="CTA Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row g-5 justify-content-between">
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo">
                                <a href="index.html"><img
                                        src="{{ asset('tenants/assets/img/white-logo.svg') }}" alt="Travolo"
                                        class="logo" /></a>
                            </div>
                            <p class="footer-text">Curabitur aliquet quam id dui bandit posuere blandit.
                                Vivamfdsus magna justo
                                blandit aliquet.</p>
                            <div class="social-style1">
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-2">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">Useful Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="index.html"><i class="far fa-angle-right"></i> Home</a></li>
                                <li><a href="destinations.html"><i class="far fa-angle-right"></i>
                                        Destinations</a></li>
                                <li><a href="tours.html"><i class="far fa-angle-right"></i> Tour</a></li>
                                <li><a href="shop.html"><i class="far fa-angle-right"></i> Shop</a></li>
                                <li><a href="blog.html"><i class="far fa-angle-right"></i> Blog</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Our Instagram</h4>
                        <div class="sidebar-gallery">
                            <a href="{{ asset('tenants/assets/img/footer/insta1.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta1.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                            <a href="{{ asset('tenants/assets/img/footer/insta2.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta2.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                            <a href="{{ asset('tenants/assets/img/footer/insta3.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta3.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                            <a href="{{ asset('tenants/assets/img/footer/insta4.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta4.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                            <a href="{{ asset('tenants/assets/img/footer/insta5.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta5.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                            <a href="{{ asset('tenants/assets/img/footer/insta6.jpg') }}"
                                class="popup-image"><img
                                    src="{{ asset('tenants/assets/img/footer/insta6.jpg') }}"
                                    alt="Gallery Image" class="w-100" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="widget footer-widget">
                        <h4 class="widget_title">Subscribe</h4>
                        <form class="newsletter-form">
                            <p class="form_text">Subscribe Our Newsletter For Getting Quick Updates</p>
                            <input class="form-control" type="email" placeholder="Your Email Address" />
                            <button type="submit" class="vs-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-wrap">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-auto">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i>
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <a href="index.html">{{tenant('id')}}</a>.
                        All Rights Reserved By <a href="#">Buraq Allience</a>
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--==============================
  Sidemenu
============================== -->
<div class="sidemenu-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls">
            <i class="far fa-times"></i>
        </button>
        <div class="widget">
            <div class="vs-widget-about">
                <div class="footer-logo">
                    <a href="index.html"><img src="{{ asset('tenants/assets/img/logo.svg') }}"
                            alt="Travolo"></a>
                </div>
                <p class="footer-text">
                    Ut tellus dolor, dapibus eget, elementum ifend cursus eleifend,
                    elit. Aenea ifen dn tor wisi Aliquam er at volutpat. Dui ac tui
                    end cursus eleifendrpis.
                </p>
                <div class="info-social style2">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
        <div class="widget">
            <h3 class="widget_title">Recent Articles</h3>
            <div class="recent-post-wrap">
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img
                                src="{{ asset('tenants/assets/img/blog/recent-post1.jpg') }}"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <i class="fal fa-calendar-alt"></i>
                            <a href="blog.html">December 15, 2022</a>
                        </div>
                        <h4 class="post-title">
                            <a class="text-inherit" href="blog-details.html">We are Giving Amazing Tour for
                                VIP</a>
                        </h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img
                                src="{{ asset('tenants/assets/img/blog/recent-post2.jpg') }}"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <i class="fal fa-calendar-alt"></i>
                            <a href="blog.html">March 13, 2022</a>
                        </div>
                        <h4 class="post-title">
                            <a class="text-inherit" href="blog-details.html">The journey journal chronicles of a
                                wandering soul</a>
                        </h4>
                    </div>
                </div>
                <div class="recent-post">
                    <div class="media-img">
                        <a href="blog-details.html"><img
                                src="{{ asset('tenants/assets/img/blog/recent-post3.jpg') }}"
                                alt="Blog Image"></a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <i class="fal fa-calendar-alt"></i>
                            <a href="blog.html">Augest 23, 2022</a>
                        </div>
                        <h4 class="post-title">
                            <a class="text-inherit" href="blog-details.html">Roam And Revel captivating at
                                tellus.</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--==============================
Cart Side bar
============================== -->
<div class="sideCart-wrapper offcanvas-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i
                class="far fa-times"></i></button>
        <div class="widget widget_shopping_cart">
            <h3 class="widget_title">Shopping cart</h3>
            <div class="widget_shopping_cart_content">
                <ul class="cart_list">
                    <li class="mini_cart_item">
                        <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a
                            href="shop.html"><img src="{{ asset('tenants/assets/img/products/p-1-1.png') }}"
                                alt="Cart Image" />Modern Cow Boy Hat</a>
                        <span class="quantity">
                            1 × <span class="amount"><span>$</span>100.00</span>
                        </span>
                    </li>
                    <li class="mini_cart_item">
                        <a href="shop.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a
                            href="shop.html"><img src="{{ asset('tenants/assets/img/products/p-1-2.png') }}"
                                alt="Cart Image" />Cat Eye Sunglasses</a>
                        <span class="quantity">
                            1 × <span class="amount"><span>$</span>10.00</span>
                        </span>
                    </li>
                </ul>
                <div class="total">
                    <strong>Subtotal:</strong> <span class="amount"><span>$</span>110.00</span>
                </div>
                <div class="buttons">
                    <a href="cart.html" class="vs-btn style4">View cart</a>
                    <a href="checkout.html" class="vs-btn style4">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!--********************************
  Code Ends Here
******************************** -->

<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

<!--==============================
  All Js File
============================== -->
<!-- Jquery -->
<script src="{{ asset('tenants/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('tenants/assets/js/slick.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('tenants/assets/js/bootstrap.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('tenants/assets/js/jquery.magnific-popup.min.js') }}"></script>
<!-- jquery Ui -->
<script src="{{ asset('tenants/assets/js/jquery-ui.min.js') }}"></script>
<!-- Circle Progress -->
<script src="{{ asset('tenants/assets/js/circle-progress.min.js') }}"></script>
<!-- isotope -->
<script src="{{ asset('tenants/assets/js/imagesLoaded.js') }}"></script>
<script src="{{ asset('tenants/assets/js/isotope.js') }}"></script>
<!-- Wow.js')}} -->
<script src="{{ asset('tenants/assets/js/wow.min.js') }}"></script>
<!-- Main Js File -->
<script src="{{ asset('tenants/assets/js/main.js') }}"></script>
</body>



</html>
