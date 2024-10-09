@extends('Tenant.layout.app')

@section('content')
  <!--==============================
	  Hero area Start
	==============================-->
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('tenants/assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">About Us</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Pages</li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
	  Hero Area End
	==============================-->

  <!--==============================
    About Area Start
  ==============================-->
  <section class="space">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="image-box1">
            <img class="img1" src="{{ asset('tenants/assets/img/about/img-2-1.jpg')}}" alt="image1">
            <img class="img2" src="{{ asset('tenants/assets/img/about/img-2-2.jpg')}}" alt="image2">
            <div class="media-box1">
              <span class="media-info">25 Years</span>
              <p class="media-text">Of Experience</p>
            </div>
            <div class="media-box2">
              <span class="media-info">20,000+</span>
              <p class="media-text">Happy Clients</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="about-content">
            <div class="title-area">
              <span class="sec-subtitle">We are Travolo</span>
              <h2 class="sec-title h1">We Are The Best For Your Travel </h2>
              <p class="sec-text">Blienum nhaedrum torquatos nec eul, vis detraxit periculis ex, nihil is in mei. Xei an
                periculaeuripidis, fincartem ei est. Dlienum phaed is in mei. Lei an Hericulaeuripidis, hincartem ei
                est.</p>
            </div>
            <ul class="about-list1">
              <li>Mei an periculaeuripidis.</li>
              <li>Lorem ipsum dolor sit am.</li>
              <li>Blienum nhaedrum tortos.</li>
              <li>Dlienum phaed is in meis.</li>
              <li>torquatos nec euls vis.</li>
              <li>peric uripidis, fincartem.</li>
              <li>pericu laeuri pidis Mei sm.</li>
            </ul>
            <a href="about.html" class="vs-btn style4">View More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==============================
    About Area End
  ==============================-->

  <!--==============================
	  Histoy area Start
	==============================-->
  <section class="space bg-light">
    <div class="container" data-bg-src="{{ asset('tenants/assets/img/bg/map-bg.png')}}">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="title-area">
            <span class="sec-subtitle">Road Map</span>
            <h2 class="sec-title h1">Our History</h2>
          </div>
        </div>
      </div>
      <div class="row mt-60 mb-70">
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2023</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2022</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2021</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2020</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2019</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 history-steped">
          <span class="divider"></span>
          <div class="vs-history">
            <div class="header-area">
              <h3 class="history-title">Travolo</h3>
              <span class="history-date">2018</span>
            </div>
            <p class="history-text">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo,
              lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictgum ultricies
              ligula sed portga.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==============================
	  Histoy area End
	==============================-->

  <!--==============================
     Special Offer Area Start
  ==============================-->
  <section class="space-top space-extra-bottom offer-style1" data-bg-src="{{ asset('tenants/assets/img/bg/offer-bg.jpg')}}">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-xl-5 col-lg-6">
          <div class="title-area white-title">
            <span class="sec-subtitle">Go & Discover</span>
            <h2 class="sec-title h1">Get Special Offer</h2>
            <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed, convgallis at tellus.</p>
            <a href="contact.html" class="vs-btn style2 ">View More</a>
          </div>
        </div>
        <div class="col-xl-5 col-lg-6">
          <div class="img-box2">
            <span class="spinner-style1"></span>
            <div class="img1">
              <img src="{{ asset('tenants/assets/img/shape/offer-1-1.png')}}" alt="Offer image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==============================
     Special Offer Area End
  ==============================-->

  <!-- ==============================
    Testimonail Area Start
  ==============================-->
  <section class="space testimonial-style2" data-bg-src="{{ asset('tenants/assets/img/bg/testimonial-bg-2.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="title-area white-title">
            <span class="sec-subtitle">Our Best Review’s</span>
            <h2 class="sec-title h1">50,000 Happy Clients Around The World</h2>
          </div>
        </div>
      </div>

      <div class="row vs-carousel testimonial-slider2" data-slide-show="2" data-arrows="false" data-lg-slide-show="2"
        data-md-slide-show="2" data-sm-slide-show="1">
        <div class="col-xl-4">
          <div class="testi-style2">
            <div class="testi-body">
              <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet, ogflor.”</p>
              <div class="testi-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <h3 class="testi-name">Rodja Heartmann</h3>
            <span class="testi-degi">CEO, ABC</span>
            <div class="testi-avater">
              <img src="{{ asset('tenants/assets/img/testimonial/testimonial-2-1.jpg')}}" alt="customer image">
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="testi-style2">
            <div class="testi-body">
              <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet, ogflor.”</p>
              <div class="testi-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <h3 class="testi-name">Malisha Beco</h3>
            <span class="testi-degi">MD, ABC</span>
            <div class="testi-avater">
              <img src="{{ asset('tenants/assets/img/testimonial/testimonial-2-2.jpg')}}" alt="customer image">
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="testi-style2">
            <div class="testi-body">
              <p class="testi-text">“Lorem ipsulm dogflor Curabitur aliquet qugbfam isfbd siteli amet, ogflor.”</p>
              <div class="testi-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
            </div>
            <h3 class="testi-name">Malisha Beco</h3>
            <span class="testi-degi">MD, Vecuro</span>
            <div class="testi-avater">
              <img src="{{ asset('tenants/assets/img/testimonial/testimonial-2-2.jpg')}}" alt="customer image">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==============================
    Testimonail Area End
  ==============================-->

  <!-- ==============================
    Blogs Area Start
  ============================== -->
  <section class="space space-extra-bottom blog-wrapper">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
          <div class="title-area">
            <span class="sec-subtitle">Blog & News</span>
            <h2 class="sec-title h1">Our Latest Blog</h2>
            <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
              consectetur sed,
              convgallis at tellus. Vestibulum ac diam sit.</p>
          </div>
        </div>
      </div>
      <div class="row vs-carousel" data-slide-show="3" data-arrows="false" data-lg-slide-show="2" data-md-slide-show="2"
        data-sm-slide-show="1">
        <div class="col-xl-4">
          <div class="vs-blog blog-style3">
            <div class="blog-img">
              <a href="blog-details.html"><img src="{{ asset('tenants/assets/img/blog/blog-h-1-1.jpg')}}" alt="blog image"></a>
            </div>
            <div class="blog-content">
              <h2 class="blog-title"><a href="blog-details.html">We are Giving Amazing Tour For VIP</a></h2>
              <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur adipiscing elit. dolor
                sit amet.</p>
              <div class="blog-bottom">
                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i> July 22, 2023</a>
                <a class="vs-btn style4" href="blog-details.html">Read More <i class="fal fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-blog blog-style3">
            <div class="blog-img">
              <a href="blog-details.html"><img src="{{ asset('tenants/assets/img/blog/blog-h-1-2.jpg')}}" alt="blog image"></a>
            </div>
            <div class="blog-content">
              <h2 class="blog-title"><a href="blog-details.html">Uncharted territories exploring the unknown</a></h2>
              <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur adipiscing elit. dolor
                sit amet.</p>
              <div class="blog-bottom">
                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i> July 24, 2023</a>
                <a class="vs-btn style4" href="blog-details.html">Read More <i class="fal fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-blog blog-style3">
            <div class="blog-img">
              <a href="blog-details.html"><img src="{{ asset('tenants/assets/img/blog/blog-h-1-3.jpg')}}" alt="blog image"></a>
            </div>
            <div class="blog-content">
              <h2 class="blog-title"><a href="blog-details.html">Roam And Revel captivating destinations explored</a>
              </h2>
              <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur adipiscing elit. dolor
                sit amet.</p>
              <div class="blog-bottom">
                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i> Aug 21, 2023</a>
                <a class="vs-btn style4" href="blog-details.html">Read More <i class="fal fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="vs-blog blog-style3">
            <div class="blog-img">
              <a href="blog-details.html"><img src="{{ asset('tenants/assets/img/blog/blog-h-1-4.jpg')}}" alt="blog image"></a>
            </div>
            <div class="blog-content">
              <h2 class="blog-title"><a href="blog-details.html">Voyage vignettes adventures beyond the horizon</a>
              </h2>
              <p class="blog-text">Lorem ipsum dolor sit amet, adipiscfvdg fgjnving consectetur adipiscing elit. dolor
                sit amet.</p>
              <div class="blog-bottom">
                <a class="blog-date" href="blog-details.html"><i class="fas fa-calendar-alt"></i> Sep 21, 2023</a>
                <a class="vs-btn style4" href="blog-details.html">Read More <i class="fal fa-arrow-right"></i></a>
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
  <!-- ==============================
    Blogs Area End
  ============================== -->
@endsection
