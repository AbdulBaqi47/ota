@extends('Tenant.layout.app')

@section('content')

    <section class="hero-layout1">
        <div>
            <div class="vs-carousel hero-slider2" data-slide-show="1" data-fade="true">
                <div class="hero-slide hero-mask" data-bg-src="{{ asset('tenants/assets/img/banner/hero2-bg.jpg')}}">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Let’s Enjoy Your Trip With Travolo</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-form2" data-bg-src="{{ asset('tenants/assets/img/banner/map-bg.png')}}">
                                    <div class="shape-mockup">
                                        <img src="{{ asset('tenants/assets/img/banner/hero-object.png')}}" alt="hero image">
                                    </div>
                                    <div>
                                        <label class="h3">Where To?</label>
                                        <div class="form-group ">
                                            <i class="fas fa-compass"></i>
                                            <input type="text" placeholder="Where To?" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="h3">Month</label>
                                        <div class="form-group ">
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
                                    <div>
                                        <label class="h3">Travel Type</label>
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
                                    <div>
                                        <button class="vs-btn style4">Find Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide hero-mask" data-bg-src="{{ asset('tenants/assets/img/banner/hero2-bg2.jpg')}}">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Riding The Tide Of Endless World</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-form2" data-bg-src="{{ asset('tenants/assets/img/banner/map-bg.png')}}">
                                    <div class="shape-mockup">
                                        <img src="{{ asset('tenants/assets/img/banner/hero-object.png')}}" alt="hero image">
                                    </div>
                                    <div>
                                        <label class="h3">Where To?</label>
                                        <div class="form-group ">
                                            <i class="fas fa-compass"></i>
                                            <input type="text" placeholder="Where To?" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="h3">Month</label>
                                        <div class="form-group ">
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
                                    <div>
                                        <label class="h3">Travel Type</label>
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
                                    <div>
                                        <button class="vs-btn style4">Find Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-slide hero-mask" data-bg-src="{{ asset('tenants/assets/img/banner/hero2-bg3.jpg')}}">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="hero-content">
                                    <span class="hero-subtitle">Let's Go Now</span>
                                    <h1 class="hero-title">Explore The Journey With Us</h1>
                                    <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna
                                        justo, lacinia eget
                                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia
                                        convallis at tellus.
                                    </p>
                                    <a href="about.html" class="vs-btn style4">Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero-form2" data-bg-src="{{ asset('tenants/assets/img/banner/map-bg.png')}}">
                                    <div class="shape-mockup">
                                        <img src="{{ asset('tenants/assets/img/banner/hero-object.png')}}" alt="hero image">
                                    </div>
                                    <div>
                                        <label class="h3">Where To?</label>
                                        <div class="form-group ">
                                            <i class="fas fa-compass"></i>
                                            <input type="text" placeholder="Where To?" />
                                        </div>
                                    </div>
                                    <div>
                                        <label class="h3">Month</label>
                                        <div class="form-group ">
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
                                    <div>
                                        <label class="h3">Travel Type</label>
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
                                    <div>
                                        <button class="vs-btn style4">Find Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="icon-btn prev-btn" data-slick-prev=".hero-slider2"><i
                        class="fas fa-chevron-left"></i></button>
                <button class="icon-btn next-btn" data-slick-next=".hero-slider2"><i
                        class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>
    <!-- ============================
        Hero Area End
      ==============================-->


    {{-- end --}}
    <!-- ============================
      Hero Area End
    ==============================-->

    <!--==============================
    About Blog Area Start
  ==============================-->
    <div class="space-top space-extra-bottom blog-wrapper1 shape-mockup-wrap">
        <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-top="-5%" data-left="-5%">
            <img src="{{ asset('tenants/assets/img/shape/circle1.png') }}" alt="circle">
        </div>
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="5%" data-right="5%">
            <img src="{{ asset('tenants/assets/img/shape/Dot.png') }}" alt="Dots">
        </div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <span class="sec-subtitle">Travel Essentials Tips</span>
                        <h2 class="sec-title h1">Awesome Tips That Makes Your Travel Beautiful</h2>
                    </div>
                </div>
            </div>
            <div class="blog-style4">
                <div class="blog-image">
                    <img src="{{ asset('tenants/assets/img/blog/blog-a-1-1.jpg') }}" alt="blog image">
                    <div class="category-tag"><a href="#"><i class="fas fa-tag"></i> Tips</a></div>
                </div>
                <div class="blog-content" data-bg-src="{{ asset('tenants/assets/img/shape/blog-bg.png') }}">
                    <a class="blog-date" href="blog-details.html"><i class="far fa-calendar-alt "></i> July 21,
                        2023</a>
                    <h3 class="blog-title"><a href="blog-details.html">A Time to Travel And Find Breathtaking
                            Landscapes For
                            Relax</a></h3>
                    <p class="blog-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                        eget
                        consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum...</p>
                    <a class="vs-btn style4" href="blog-details.html">Read More</a>
                </div>
            </div>
            <div class="blog-style4">
                <div class="blog-image">
                    <img src="{{ asset('tenants/assets/img/blog/blog-a-1-2.jpg') }}" alt="blog image">
                    <div class="category-tag"><a href="#"><i class="fas fa-tag"></i> Tips</a></div>
                </div>
                <div class="blog-content" data-bg-src="{{ asset('tenants/assets/img/shape/blog-bg.png') }}">
                    <a class="blog-date" href="blog-details.html"><i class="far fa-calendar-alt "></i> July 21,
                        2023</a>
                    <h3 class="blog-title"><a href="blog-details.html">A Time to Travel And Find Breathtaking
                            Landscapes For
                            Relax</a></h3>
                    <p class="blog-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                        eget
                        consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum...</p>
                    <a class="vs-btn style4" href="blog-details.html">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    About Blog Area End
  ==============================-->

    <!--==============================
      Tour Package Area Start
    ==============================-->
    <section class="space bg-light shape-mockup-wrap" data-bg-src="{{ asset('tenants/assets/img/shape/Bg.png') }}">
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
            <img src="{{ asset('tenants/assets/img/shape/Dot.png') }}" alt="Dots">
        </div>
        <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
            <img src="{{ asset('tenants/assets/img/shape/circle1.png') }}" alt="Circle">
        </div>
        <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
            <img src="{{ asset('tenants/assets/img/shape/Plane.png') }}" alt="plane">
        </div>
        <div class="container ">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <span class="sec-subtitle">Awesome Tours</span>
                        <h2 class="sec-title h1">Best Holiday Package</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed, convgallis at tellus. Vestibulum ac diam sit.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3"
                data-md-slide-show="2" data-sm-slide-show="1">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-1.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Peek Mountain View</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                                <a href="#"><i class="fas fa-user"></i> People: 3</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$399</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-2.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Explore Our World</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                                <a href="#"><i class="fas fa-user"></i> People: 3</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$259</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-3.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Guided Adventures</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                                <a href="#"><i class="fas fa-user"></i> People: 3</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$299</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-4.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Relax With Beach View</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                                <a href="#"><i class="fas fa-user"></i> People: 3</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$299</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-5.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Wanderlust Wonderland</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 2</a>
                                <a href="#"><i class="fas fa-user"></i> People: 2</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$199</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="package-style1">
                        <div class="package-img">
                            <a href="tour-booking.html"><img class="w-100"
                                    src="{{ asset('tenants/assets/img/tours/tour-1-6.jpg') }}"
                                    alt="Package Image"></a>
                        </div>
                        <div class="package-content">
                            <div class="package-review">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h3 class="package-title"><a href="tour-booking.html">Explore Our World</a></h3>
                            <p class="package-text">Las Vegas, Nevada</p>
                            <div class="package-meta">
                                <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                                <a href="#"><i class="fas fa-user"></i> People: 3</a>
                            </div>
                            <div class="package-footer">
                                <span class="package-price">$259</span>
                                <a href="tour-booking.html" class="vs-btn style4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center pt-lg-2">
                <a href="tours.html" class="vs-btn">View More</a>
            </div>
        </div>
    </section>
    <!--==============================
      Tour Package Area End
    ==============================-->

    <!--==============================
      Gallery Area Start
    ==============================-->
    <section class="space space-extra-bottom gallery-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Go & Discover</span>
                        <h2 class="sec-title h1">Breathtaking Cities</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed, convgallis at tellus.</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-sm-6">
                            <img class="gallery-image"
                                src="{{ asset('tenants/assets/img/gallery/gallery-1-1.jpg') }}" alt="images">
                        </div>
                        <div class="col-xl-6 col-sm-6">
                            <img class="gallery-image"
                                src="{{ asset('tenants/assets/img/gallery/gallery-1-2.jpg') }}" alt="images">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="gallery-video">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-1-3.jpg') }}" alt="gallery-image">
                        <div class="gallery-btn">
                            <span>Watch Video</span>
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i
                                    class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Gallery Area End
    ==============================-->

    <!--==============================
      Features Area Start
    ==============================-->
    <section class="space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="features-style1">
                        <div class="features-bg" data-bg-src="{{ asset('tenants/assets/img/shape/features.png') }}">
                        </div>
                        <div class="features-image">
                            <img src="{{ asset('tenants/assets/img/features/features-1-1.png') }}" alt="image">
                        </div>
                        <div class="features-content">
                            <h3 class="features-title">Special Activities</h3>
                            <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit
                                vivgbagmus Bitur
                                aliquet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="features-style1">
                        <div class="features-bg" data-bg-src="{{ asset('tenants/assets/img/shape/features.png') }}">
                        </div>
                        <div class="features-image">
                            <img src="{{ asset('tenants/assets/img/features/features-1-2.png') }}" alt="image">
                        </div>
                        <div class="features-content">
                            <h3 class="features-title">Popper Guideline</h3>
                            <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit
                                vivgbagmus Bitur
                                aliquet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="features-style1">
                        <div class="features-bg" data-bg-src="{{ asset('tenants/assets/img/shape/features.png') }}">
                        </div>
                        <div class="features-image">
                            <img src="{{ asset('tenants/assets/img/features/features-1-3.png') }}" alt="image">
                        </div>
                        <div class="features-content">
                            <h3 class="features-title">Travel Arrangement </h3>
                            <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit
                                vivgbagmus Bitur
                                aliquet</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="features-style1">
                        <div class="features-bg" data-bg-src="{{ asset('tenants/assets/img/shape/features.png') }}">
                        </div>
                        <div class="features-image">
                            <img src="{{ asset('tenants/assets/img/features/features-1-4.png') }}" alt="image">
                        </div>
                        <div class="features-content">
                            <h3 class="features-title">Location Manager</h3>
                            <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit
                                vivgbagmus Bitur
                                aliquet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Features Area End
    ==============================-->

    <!--==============================
      Special Offer Area Start
    ==============================-->
    <section class="space position-relative" data-bg-src="{{ asset('tenants/assets/img/bg/offer-bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                    <div class="title-area white-title mb-md-0">
                        <span class="sec-subtitle">Go & Discover</span>
                        <h2 class="sec-title h1">Get Special Offer</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed, convgallis at tellus.</p>
                        <a href="contact.html" class="vs-btn style2">View More</a>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                    <div class="img-box1">
                        <img class="img-1-1" src="{{ asset('tenants/assets/img/shape/offer-1-1.png') }}"
                            alt="Offer image">
                        <div class="img-1-2 d-none d-xxl-block">
                            <img src="{{ asset('tenants/assets/img/shape/bag.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Special Offer Area End
    ==============================-->

    <!--==============================
      Destiniations Area Start
  ==============================-->
    <section class="space space-extra-bottom bg-light shape-mockup-wrap"
        data-bg-src="{{ asset('tenants/assets/img/shape/Bg.png') }}">
        <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-top="-20%" data-right="-8%">
            <img src="{{ asset('tenants/assets/img/shape/circle1.png') }}" alt="circle">
        </div>
        <div class="shape-mockup d-none d-xl-block  z-index-negative" data-bottom="13%" data-left="0%">
            <img src="{{ asset('tenants/assets/img/shape/walk.png') }}" alt="circle">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-5 col-md-8">
                    <div class="title-area">
                        <span class="sec-subtitle">Top Destination</span>
                        <h2 class="sec-title h1">Unforgettable Cities</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed,
                            convgallis at tellus.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btns">
                        <button class="icon-btn" data-slick-prev=".destinationSlide"><i
                                class="fas fa-chevron-left"></i></button>
                        <button class="icon-btn" data-slick-next=".destinationSlide"><i
                                class="fas fa-chevron-right"></i></button>
                    </div>

                </div>
            </div>
            <div class="row destinationSlide vs-carousel" data-slide-show="3" data-arrows="false"
                data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1">
                <div class="col-xl-4">
                    <div class="destination-style1">
                        <a href="destination-details.html"> <img
                                src="{{ asset('tenants/assets/img/destinations/destinations-1-1.jpg') }}"
                                alt="destination image"></a>
                        <span class="destination-price">$259</span>
                        <div class="destination-info">
                            <h4 class="destination-name"><a href="#">Thailand</a></h4>
                            <p class="destination-text">Explore Sea & Get Relax</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="destination-style1">
                        <a href="destination-details.html"> <img
                                src="{{ asset('tenants/assets/img/destinations/destinations-1-2.jpg') }}"
                                alt="destination image"></a>
                        <span class="destination-price">$369</span>
                        <div class="destination-info">
                            <h4 class="destination-name"><a href="#">Japan</a></h4>
                            <p class="destination-text">Explore Sea & Get Relax</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="destination-style1">
                        <a href="destination-details.html"> <img
                                src="{{ asset('tenants/assets/img/destinations/destinations-1-3.jpg') }}"
                                alt="destination image"></a>
                        <span class="destination-price">$299</span>
                        <div class="destination-info">
                            <h4 class="destination-name"><a href="#">Spain</a></h4>
                            <p class="destination-text">Explore Sea & Get Relax</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="destination-style1">
                        <a href="destination-details.html">
                            <img src="{{ asset('tenants/assets/img/destinations/destinations-1-8.jpg') }}"
                                alt="destination image" /></a>
                        <span class="destination-price">$158</span>
                        <div class="destination-info">
                            <h4 class="destination-name"><a href="#">Mexico</a></h4>
                            <p class="destination-text">Explore World & Get Relax</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
      Destinations Area End
  ==============================-->

    <!--==============================
      Testimonial Area Start
    ==============================-->
    <section class="space testimonial-style1" data-bg-src="{{ asset('tenants/assets/img/bg/testimonial-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-5 col-xl-5">
                    <div class="title-area">
                        <span class="sec-subtitle">Go & Discover</span>
                        <h2 class="sec-title h1">What’s Our Client’s Words</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed, convgallis at tellus.</p>
                        <a href="contact.html" class="vs-btn style3">View More</a>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7">
                    <div class="testi-style1">
                        <div class="testi-avaters vs-slider-tab" data-asnavfor="#testId">
                            <button class="tab-btn active"><img
                                    src="{{ asset('tenants/assets/img/testimonial/avater-1-1.jpg') }}"
                                    alt="avater" /></button>
                            <button class="tab-btn"><img
                                    src="{{ asset('tenants/assets/img/testimonial/avater-1-2.jpg') }}"
                                    alt="avater" /></button>
                            <button class="tab-btn"><img
                                    src="{{ asset('tenants/assets/img/testimonial/avater-1-3.jpg') }}"
                                    alt="avater" /></button>
                            <button class="tab-btn"><img
                                    src="{{ asset('tenants/assets/img/testimonial/avater-1-4.jpg') }}"
                                    alt="avater" /></button>
                        </div>
                        <div class="testi-shape">
                        </div>
                        <div class="vs-carousel" id="testId" data-slide-show="1" data-fade="true">
                            <div class="position-relative z-index-common">
                                <div class="testi-quote">
                                    <img src="{{ asset('tenants/assets/img/shape/quote1.png') }}" alt="quote">
                                </div>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation nim
                                    vengiam, quis ullamco.</p>
                                <div class="testi-avater">
                                    <img src="{{ asset('tenants/assets/img/testimonial/avater-1-1.jpg') }}"
                                        alt="customer image">
                                </div>
                                <h3 class="testi-name">Lisa Smith</h3>
                                <span class="testi-degi">Developer</span>
                            </div>
                            <div class="position-relative z-index-common">
                                <div class="testi-quote">
                                    <img src="{{ asset('tenants/assets/img/shape/quote1.png') }}" alt="quote">
                                </div>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation nim
                                    vengiam, quis ullamco.</p>
                                <div class="testi-avater">
                                    <img src="{{ asset('tenants/assets/img/testimonial/avater-1-2.jpg') }}"
                                        alt="customer image">
                                </div>
                                <h3 class="testi-name">Rodja Heartmann</h3>
                                <span class="testi-degi">CEO, Vecuro</span>
                            </div>
                            <div class="position-relative z-index-common">
                                <div class="testi-quote">
                                    <img src="{{ asset('tenants/assets/img/shape/quote1.png') }}" alt="quote">
                                </div>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation nim
                                    vengiam, quis ullamco.</p>
                                <div class="testi-avater">
                                    <img src="{{ asset('tenants/assets/img/testimonial/avater-1-3.jpg') }}"
                                        alt="customer image">
                                </div>
                                <h3 class="testi-name">Rodja Heartmann</h3>
                                <span class="testi-degi">CEO, Vecuro</span>
                            </div>
                            <div class="position-relative z-index-common">
                                <div class="testi-quote">
                                    <img src="{{ asset('tenants/assets/img/shape/quote1.png') }}" alt="quote">
                                </div>
                                <div class="testi-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <p class="testi-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation nim
                                    vengiam, quis ullamco.</p>
                                <div class="testi-avater">
                                    <img src="{{ asset('tenants/assets/img/testimonial/avater-1-4.jpg') }}"
                                        alt="customer image">
                                </div>
                                <h3 class="testi-name">Rodja Heartmann</h3>
                                <span class="testi-degi">CEO, Vecuro</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Testimonial Area End
  ==============================-->

    <!--==============================
      Blogs Area Start
  ==============================-->
    <section class="space space-extra-bottom blog-wrapper">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="title-area">
                        <span class="sec-subtitle">Blog & News</span>
                        <h2 class="sec-title h1">Our Latest Blog</h2>
                        <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia
                            eget
                            consectetur sed,
                            convgallis at tellus. Vestibulum ac diam sit.</p>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-arrows="false" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" adaptiveHeight="true">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img
                                    src="{{ asset('tenants/assets/img/blog/blog-h-1-1.jpg') }}" alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="blog-details.html">We Are Giving Amazing Experience For
                                    VIP</a></h2>
                            <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur
                                adipiscing elit. dolor
                                sit amet.</p>
                            <div class="blog-bottom">
                                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i>
                                    July 22, 2023</a>
                                <a class="vs-btn style4" href="blog-details.html">Read More <i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img
                                    src="{{ asset('tenants/assets/img/blog/blog-h-1-2.jpg') }}"
                                    alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="blog-details.html">Uncharted Territories Are Exploring
                                    The Unknown</a>
                            </h2>
                            <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur
                                adipiscing elit. dolor
                                sit amet.</p>
                            <div class="blog-bottom">
                                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i>
                                    July 24, 2023</a>
                                <a class="vs-btn style4" href="blog-details.html">Read More <i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img
                                    src="{{ asset('tenants/assets/img/blog/blog-h-1-3.jpg') }}"
                                    alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="blog-details.html">Roam And Revel Captivating
                                    Destinations Explored</a>
                            </h2>
                            <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur
                                adipiscing elit. dolor
                                sit amet.</p>
                            <div class="blog-bottom">
                                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i>
                                    Aug 21, 2023</a>
                                <a class="vs-btn style4" href="blog-details.html">Read More <i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img
                                    src="{{ asset('tenants/assets/img/blog/blog-h-1-4.jpg') }}"
                                    alt="blog image"></a>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><a href="blog-details.html">Voyage vignettes adventures beyond
                                    the horizon</a>
                            </h2>
                            <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur
                                adipiscing elit. dolor
                                sit amet.</p>
                            <div class="blog-bottom">
                                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i>
                                    Sep 21, 2023</a>
                                <a class="vs-btn style4" href="blog-details.html">Read More <i
                                        class="fal fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-30 wow fadeInUp pt-lg-2" data-wow-delay="0.7s">
                <a href="blog-grid.html" class="vs-btn">View More</a>
            </div>
        </div>
    </section>
    <!--==============================
      Blogs Area End
  ==============================-->
@endsection
