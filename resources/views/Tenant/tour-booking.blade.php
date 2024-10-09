@extends('Tenant.layout.app')

@section('content')
  <!--==============================
	  Hero area Start
	==============================-->
  <div class="breadcumb-wrapper" data-bg-src="{{ asset('tenants/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
      <div class="breadcumb-content">
        <h1 class="breadcumb-title">Tour Booking</h1>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Tours</li>
            <li>Peek Mountain View</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
	  Hero Area End
	==============================-->

  <!--==============================
	  Tours Booking Area Start
	==============================-->
  <section class="space-bottom">
    <div class="outer-wrap">
      <div class="filter-menu1 filter-menu-active wow fadeInUp wow-animated">
        <button class="tab-button active" data-filter=".tab-content1"><i class="fas fa-info-circle"></i>
          Information</button>
        <button class="tab-button" data-filter=".tab-content2"><i class="fas fa-calendar"></i> Tour Plan</button>
        <button class="tab-button" data-filter=".tab-content3"><i class="fas fa-map-marker-alt"></i>
          Location</button>
        <button class="tab-button" data-filter=".tab-content4"><i class="fas fa-camera-retro"></i> Gallery</button>
        <button class="tab-button" data-filter=".tab-content5"><i class="fas fa-comments"></i> Reviews</button>
      </div>
      <div class="container">
        <div class="shadow-content1">
          <div class="row">
            <div class="col-lg-9">
              <div class="filter-active tour-booking-active">
                <div class="filter-item tab-content1">
                  <div class="info-image">
                    <img src="{{ asset('tenants/assets/img/tours/tour-information.jpg') }}" alt="tours-img">
                  </div>
                  <div class="tour-review">
                    <ul>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="fas fa-star"></i></li>
                      <li><i class="far fa-star"></i></li>
                      <li><i class="far fa-star"></i></li>
                      <li>(3 Review)</li>
                    </ul>
                  </div>
                  <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                      <h2 class="tab-title">Peek Mountain View</h2>
                    </div>
                    <div class="col-auto">
                      <p class="tour-price"><strong>$299</strong> / Per Person</p>
                    </div>
                  </div>
                  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Donec sollicitudin molestie porttitor lectus nibh. Nulla quis lorem ut
                    libero malesuada feugiat malesuada. Nulla porttitor lectus nibh. Nulla quis lorem ut libero
                    malesuada
                    feugiat porttitor accumsan tincidunt. Sed porttitor lectus nibh. Nulla quis lorem ut libero
                    malesuada
                    feugiat. Nulla quis lorem ut libero malesuada feugiat. Curabitur porttitor lectus nibh. Nulla quis
                    lorem ut libero malesuada feugiat aliquet quam id dui posuere blandit. Nulla quis lorem ut libero
                    malesuada feugiat malesuada. Nulla porttitor lectus nibh.</p>
                  <table class="infolist">
                    <tr>
                      <td class="info-heading">Destination</td>
                      <td class="info">Australia</td>
                    </tr>
                    <tr>
                      <td class="info-heading">Departure</td>
                      <td class="info">3166 Providence Lane, Mira Loma, CA</td>
                    </tr>
                    <tr>
                      <td class="info-heading">Departure Time</td>
                      <td class="info">Approximately 8.00AM</td>
                    </tr>
                    <tr>
                      <td class="info-heading">Age Restriction</td>
                      <td class="info">Must be 13+</td>
                    </tr>
                    <tr>
                      <td class="info-heading">Dress Code</td>
                      <td class="info">Casual, light And comfortable</td>
                    </tr>
                    <tr>
                      <td class="info-heading">Service Included</td>
                      <td>
                        <table class="sub-infolist">
                          <tr>
                            <td class="info">5 Star Accommodation</td>
                            <td class="info">Airport Transfer</td>
                            <td class="info">Breakfast</td>
                            <td class="info">Personal Guide</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td class="info-heading">Service Not Included</td>
                      <td>
                        <table class="sub-infolist">
                          <tr>
                            <td class="info">Gallery Ticket</td>
                            <td class="info">Lunch</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td class="info-heading">Return Time</td>
                      <td class="info">Approximately 7.00AM</td>
                    </tr>
                  </table>
                </div>
                <div class="filter-item tab-content2">
                  <h2 class="tab-title">Tour Plan </h2>
                  <div class="tour-plan">
                    <span class="tour-card1">01</span>
                    <h4 class="tp-title">Day 1: Departure</h4>
                    <p class="tp-text">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                      Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blangdit.
                      Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                    <ul class="tp-list">
                      <li>5 Star Accgommodation</li>
                      <li>Airport Transfer</li>
                      <li>Breakfast</li>
                      <li>Personal Guide</li>
                    </ul>
                  </div>
                  <div class="tour-plan">
                    <span class="tour-card1">02</span>
                    <h4 class="tp-title">Day 2: Visiting The Yosemite National Park, The Disneyland Resort</h4>
                    <p class="tp-text">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                      Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blangdit.
                      Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                    <ul class="tp-list">
                      <li>5 Star Accgommodation</li>
                      <li>Airport Transfer</li>
                      <li>Breakfast</li>
                      <li>Personal Guide</li>
                    </ul>
                  </div>
                  <div class="tour-plan">
                    <span class="tour-card1">03</span>
                    <h4 class="tp-title">Day 3: Historical Tour</h4>
                    <p class="tp-text">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                      Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blangdit.
                      Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                    <ul class="tp-list">
                      <li>5 Star Accgommodation</li>
                      <li>Airport Transfer</li>
                      <li>Breakfast</li>
                      <li>Personal Guide</li>
                    </ul>
                  </div>
                  <div class="tour-plan">
                    <span class="tour-card1">04</span>
                    <h4 class="tp-title">Day 4: Rest And Return</h4>
                    <p class="tp-text">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet,
                      consectetur adipiscing elit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                      Pellentesque in ipsum id orci porta dapibus. Curabitur aliquet quam id dui posuere blangdit.
                      Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
                    <ul class="tp-list">
                      <li>5 Star Accgommodation</li>
                      <li>Airport Transfer</li>
                      <li>Breakfast</li>
                      <li>Personal Guide</li>
                    </ul>
                  </div>
                </div>
                <div class="filter-item tab-content3">
                  <h2 class="tab-title">Tour Location</h2>
                  <p class="tab-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus</p>
                  <div class="google-map">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327444.36007492756!2d8.306929323325667!3d50.12074543827437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd096f477096c5%3A0x422435029b0c600!2sFrankfurt%2C%20Germany!5e0!3m2!1sen!2sbd!4v1695590486221!5m2!1sen!2sbd"
                      loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
                <div class="filter-item tab-content4">
                  <h2 class="tab-title">Top Gallery</h2>
                  <p class="tab-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus</p>
                  <div class="gx-gy gallery-mesonary">
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-1.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-1.jpg') }}" class="popup-image"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-2.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-2.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-3.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-3.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-4.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-4.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-5.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-5.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-6.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-6.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-7.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-7.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-8.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-8.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="grid-item">
                      <div class="gallery-img5">
                        <img src="{{ asset('tenants/assets/img/gallery/gallery-3-9.jpg') }}" alt="images">
                        <div class="gallery-content">
                          <a href="{{ asset('tenants/assets/img/gallery/gallery-3-9.jpg') }}" class="gallery-img"><i
                              class="fas fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="filter-item tab-content5">
                  <h2 class="tab-title">Reviews Scores and Score Breakdown</h2>
                  <p class="tab-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula
                    eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus</p>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value="0.65"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Rating</h3>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value="0.95"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Comfort</h3>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value=".99"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Foods</h3>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value="0.70"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Hospitality</h3>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value="0.65"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Wind turbines</h3>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="progress-style1">
                        <div class="circle-progress" data-value="0.65"><span class="progress-value"></span></div>
                        <h3 class="progress-title h5">Security</h3>
                      </div>
                    </div>
                  </div>

                  <div class="rating-wrap">
                    <div class="rating-author">
                      <div class="author-image">
                        <img src="{{ asset('tenants/assets/img/author/rating-author.jpg') }}" alt="Rating Author">
                      </div>
                      <div class="author-info">
                        <h3 class="author-text h5">Malisha Beco</h3>
                        <span class="author-digi">CEO, Vecuro</span>
                      </div>
                    </div>
                    <p class="rating-text">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                      ligula eget dolor. Aenean massa. Cum sociis in the Theme natoque penatibus et magnis dis
                      parturient montes, nascetur ridiculus mus.”</p>

                    <div class="row">
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Reating</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Comfort</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Food</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Hospitality</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Hygene</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6 col-auto">
                        <div class="review-rating">
                          <span class="rating-tilte">Reception</span>
                          <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                            <span>Rated <strong class="rating">4.00</strong> out of 5 based on <span
                                class="rating">1</span> customer rating</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- Comment Form -->
                    <div class="vs-comment-form">
                      <div id="respond" class="comment-respond">
                        <h3 class="blog-inner-title">Post a Comment</h3>

                        <div class="row rating-post">
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Rating</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Comfort</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Food</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Hospitality</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Hygiene</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-auto">
                            <div class="form-group rating-select">
                              <label>Reception</label>
                              <p class="stars">
                                <span>
                                  <a class="star-1" href="#">1</a>
                                  <a class="star-2" href="#">2</a>
                                  <a class="star-3" href="#">3</a>
                                  <a class="star-4" href="#">4</a>
                                  <a class="star-5" href="#">5</a>
                                </span>
                              </p>
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                          </div>
                          <div class="col-md-6 form-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                          </div>
                          <div class="col-12 form-group">
                            <textarea class="form-control" placeholder="Write Your Comment"></textarea>
                          </div>
                          <div class="col-12 ">
                            <div class="custom-checkbox notice">
                              <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox"
                                value="yes">
                              <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser
                                for the next time I comment.</label>
                            </div>
                          </div>
                          <div class="col-12 form-group">
                            <button class="vs-btn style4 w-100">Submit</button>
                          </div>
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
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
	  Tours Booking Area End
	==============================-->
@endsection
