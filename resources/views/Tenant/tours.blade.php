@extends('Tenant.layout.app')

@section('content')

  <!--==============================
	  Hero area Start
	==============================-->
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('tenants/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Tours</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Tours</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
	  Hero Area End
	==============================-->

  <!--==============================
	  Tours Area Start
	==============================-->
  <section class="space-bottom">
    <div class="outer-wrap">
      <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
        <button class="tab-button active" data-filter="*"><i class="fas fa-sort-alpha-up"></i> Name (A - Z)</button>
        <button class="tab-button" data-filter=".date"><i class="fas fa-calendar-alt"></i> Date</button>
        <button class="tab-button" data-filter=".hightTolow"><i class="fas fa-upload"></i> Price Low to
          High</button>
        <button class="tab-button" data-filter=".lowToHigh"><i class="fas fa-download"></i> Price Hight to
          Low</button>
      </div>
      <div class="container">
        <div class="shadow-content1">
          <div class="row">
            <div class="col-lg-9">
              <div class="row filter-active tours-active">
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-7.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Discover Destinations</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$279</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-2.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Explore Our World</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$199</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-3.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Guided Adventures</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 2</a>
                        <a href="#"><i class="fas fa-user"></i> People: 4</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$399</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item date">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-1.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Peek Mountain View</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$299</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item lowToHigh">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-4.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Relax With Beach View</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$259</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-5.jpg') }}" alt="Package Image"></a>
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
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item date hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-6.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">The Expedition Begins</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$209</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item lowToHigh">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-9.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">See World Differently</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$199</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-6 filter-item hightTolow">
                  <div class="package-style1">
                    <div class="package-img">
                      <a href="tour-booking.html"><img src="{{ asset('tenants/assets/img/tours/tour-1-8.jpg') }}" alt="Package Image"></a>
                    </div>
                    <div class="package-content">
                      <div class="package-review">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </div>
                      <h3 class="package-title"><a href="tour-booking.html">Wanderlust Tours</a></h3>
                      <p class="package-text">Las Vegas, Nevada</p>
                      <div class="package-meta">
                        <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                        <a href="#"><i class="fas fa-user"></i> People: 3</a>
                      </div>
                      <div class="package-footer">
                        <span class="package-price">$299</span>
                        <a href="tour-booking.html" class="vs-btn">View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="vs-pagination pt-lg-2">
                <ul>
                  <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sidebar-area tours-sidebar">
                <div class="widget">
                  <h3 class="widget_title">Plan Your Trip</h3>
                  <p class="widget_text">Donec rutrum congue leo elit In a eget malesuadga blandit.</p>
                  <form class="booking-form">
                    <div class="form-group ">
                      <i class="fas fa-search"></i>
                      <input type="text" placeholder="Search Tour" />
                    </div>
                    <div class="form-group ">
                      <i class="fas fa-compass"></i>
                      <input type="text" placeholder="Where To?" />
                    </div>
                    <div class="form-group">
                      <i class="fas fa-calendar-alt"></i>
                      <select class="form-select" name="name">
                        <option value="" selected="selected" disabled="disabled" hidden="">Select Month</option>
                        <option value="">January</option>
                        <option value="">February</option>
                        <option value="">March</option>
                        <option value="">April</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <i class="fas fa-thumbtack"></i>
                      <select class="form-select" name="name">
                        <option value="" selected="selected" disabled="disabled" hidden="">Select Type</option>
                        <option value="">Adventure </option>
                        <option value="">Combining</option>
                        <option value="">Sporting</option>
                        <option value="">Domestic</option>
                      </select>
                    </div>
                    <div class="price_slider_wrapper">
                      <h3 class="widget_title">Filter By Price</h3>
                      <div class="price_slider"></div>
                      <div class="price_label">
                        Price: <span class="from">$10</span> — <span class="to">$75</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="chekbox-area">
                        <input type="radio" id="popular" name="fav_language" value="popular" checked />
                        <label for="popular">Popular</label>
                      </div>
                      <div class="chekbox-area">
                        <input type="radio" id="trendy" name="fav_language" value="trendy" />
                        <label for="trendy">Trendy</label>
                      </div>
                      <div class="chekbox-area">
                        <input type="radio" id="latest" name="fav_language" value="latest" />
                        <label for="latest">Latest</label>
                      </div>
                    </div>
                    <button class="vs-btn style4 w-100">Search</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--==============================
	  Tours Area End
	==============================-->
@endsection
