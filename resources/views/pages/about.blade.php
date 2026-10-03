@extends('layouts.main-container')
@section('header')
<body>

    <!-- Header Start -->
    <header class="header header-default">
       <div class="top-bar bg-light">
          <div class="container">
             <div class="top-info d-lg-none">
                <div class="search-bar ms-lg-3">
                   <form class="form position-relative">
                      <span class="location-icon"><i class="fas fa-map-marker-alt text-primary"></i></span>
                      <input class="form-control" type="search" name="search-bar" placeholder="Your location"
                         id="search-bar" aria-label="search-bar">
                      <button class="btn-link" type="submit" aria-label="search-btn">
                         <i class="fa fa-arrow-right"></i>
                      </button>
                   </form>
                </div>
             </div>
             <div class="top-info d-none d-lg-flex align-items-center justify-content-between  row col-lg-8">
                <div class="top-meta col-lg-7 d-flex">
                   <div class="top-social">
                      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                      <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                      <a href="#"><i class="fa-brands fa-skype"></i></a>
                      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                   </div>

                   <a href="tel:69-367-987-237"><i class="fa fa-phone-volume me-3"></i>(568)
                      367-987-237</a>
                </div>
                <div class="col-lg-5">
                   <div class="search-bar ms-lg-3">
                      <form class="form position-relative">
                         <span class="location-icon"><i class="fas fa-map-marker-alt text-primary"></i></span>
                         <input class="form-control" type="search" name="search-bar" placeholder="Your location"
                            id="search-bar2" aria-label="search-bar">
                         <button class="btn-link" type="submit" aria-label="search-btn">
                            <i class="fa fa-arrow-right"></i>
                         </button>
                      </form>
                   </div>
                </div>
             </div>

             <div class="top-connect d-flex align-items-center">
                <div class="language-select d-none d-sm-block">
                   <select id="select">
                      <option value="1">English</option>
                      <option value="1">Spanish</option>
                   </select>
                </div>
                <a href="driver-dashboard.html" class="ms-3"><i class="fa fa-users me-2"></i>Driver Dashboard</a>
             </div>
          </div>
       </div>
       <nav class="navbar navbar-expand-lg navbar-dark bg-black">
         <div class="container-fluid">
           <!-- Logo -->
           <a class="navbar-brand" href="{{ route('index') }}">
             <img src="images/logo-alt.png" alt="Logo" style="height: 50px; width: auto;">
           </a>

           <!-- Mobile Toggle Button -->
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
             aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <!-- Collapsible Nav -->
           <div class="collapse navbar-collapse" id="navbarNav">
             <!-- Nav links -->
             <ul class="navbar-nav mx-auto mb-3 mb-lg-0 text-center">
               <li class="nav-item">
                 <a class="nav-link active" href="index.html">Home</a>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false">Services</a>
                 <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                   <li><a class="dropdown-item" href="index.html#contact-form">Standard Booking</a></li>
                   <li><a class="dropdown-item" href="single-service.html">Group/Airport Booking Form</a></li>
                 </ul>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="{{ route('about') }}">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link" href="{{ route('contact') }}">Contact</a>
               </li>
             </ul>

             <!-- CTA Buttons -->
             <div class="d-flex flex-column flex-lg-row align-items-center gap-2 ms-lg-3">
                 <a href="contact.html" class="btn btn-outline-light fw-bold text-center px-4 py-2"
                   style="max-width: 160px; display: flex; justify-content: center; align-items: center;">
                   Book Now
                 </a>
                 <a href="{{ route('startednow') }}" class="btn btn-light fw-bold text-center px-4 py-2"
                   style="max-width: 160px; display: flex; justify-content: center; align-items: center;">
                   Get Started
                 </a>
               </div>
           </div>
         </div>
       </nav>




    </header>

@endsection
@section('content')

   <!-- Promo Start -->
   <section class="promo-sec" style="background: url('images/promo-bg.jpg')no-repeat center center / cover;">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="promo-wrap text-center">
                  <h2 class="fw-bold text-white text-uppercase">about us</h2>
                  <nav aria-label="breadcrumb w-75 mx-auto">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Promo End -->

   <!-- About Start -->
   <section class="about-sec">
      <div class="container">
         <div class="row">
            <div class="col-xl-6 pe-xl-5 col-lg-5">
               <div class="choose-media position-relative pe-sm-5">
                  <img class="img-fluid" src="images/about.jpg" alt="Car">
                  <div class="popup-box">
                     <a class="venobox" data-vbtype="video" href="https://www.youtube.com/watch?v=Lc0CXDwW2a0"><i
                           class="fa-solid fa-play"></i></a>
                  </div>
               </div>
            </div>
            <div class="col-xl-6 col-lg-7">
               <div class="about-txt mt-5 mt-lg-0">
                  <span class="dot-title">ABOUT US</span>
                  <h2 class="text-uppercase sec-title mb-4">we provide the service from <span
                        class="text-primary">2008.</span></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                     et dolore magna
                     aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                     commodo consequat aute
                     irure dolor in reprehenderit.</p>
                  <div class="row mt-5">
                     <div class="col-sm-6">
                        <div class="card">
                           <h5>OUR MISSION:
                           </h5>
                           <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
                              vulputate mi sit.</p>
                           <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
                              vulputate mi sit.</p>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="card">
                           <h5>OUR VISION:
                           </h5>
                           <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
                              vulputate mi sit.</p>
                           <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed
                              vulputate mi sit.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div><!--  row end -->
         <div class="row mt-5 pt-4">
            <div class="about-details">
               <h2 class="sec-title text-uppercase mb-4">How We <span class="text-primary">Move</span> Together</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna
                  aliqua. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Ac auctor augue mauris augue
                  neque. Enim nunc
                  faucibus a pellentesque sit amet porttitor eget dolor. <a href="#">Et leo duis ut diam quam nulla.
                     Neque egestas congue quisque
                     egestas diam. Quis viverra nibh cras pulvinar mattis.</a>Sollicitudin tempor id eu nisl nunc mi.
                  Diam volutpat commodo sed
                  egestas egestas fringilla phasellus. Donec massa sapien faucibus et molestie ac feugiat sed. At auctor
                  urna nunc id
                  cursus metus aliquam eleifend. Non arcu risus quis varius quam quisque id diam vel.</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna
                  aliqua. Tincidunt arcu non sodales neque sodales ut etiam sit amet. Ac auctor augue mauris augue
                  neque. Enim nunc
                  faucibus a pellentesque sit amet porttitor eget dolor. Et leo duis ut diam quam nulla. Neque egestas
                  congue quisque
                  egestas diam.</p>
            </div>
         </div>
      </div>
   </section>
   <!-- About End -->

   <!-- Fact Section Start -->
   <div class="fact-sec about-fact">
      <div class="container">
         <div class="row fact-bg bg-primary">
            <div class="col-lg-3 col-sm-6">
               <div class="d-flex align-items-center fact-card">
                  <div class="fact-icon"><img src="images/icons/like.png" alt="Rating"></div>
                  <div class="fact-txt ms-4">
                     <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="530" class="purecounter">10</span> +
                     </div>
                     <p>5 star reviews</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="d-flex align-items-center fact-card">
                  <div class="fact-icon"><img src="images/icons/rider-b.png" alt="Rating"></div>
                  <div class="fact-txt ms-4">
                     <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="10" class="purecounter">10</span> +
                     </div>
                     <p>happy rider</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="d-flex align-items-center fact-card">
                  <div class="fact-icon"><img src="images/icons/car-b.png" alt="Rating"></div>
                  <div class="fact-txt ms-4">
                     <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="5230" class="purecounter">10</span> +
                     </div>
                     <p>Total Cars</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="d-flex align-items-center fact-card">
                  <div class="fact-icon"><img src="images/icons/award-b.png" alt="Rating"></div>
                  <div class="fact-txt ms-4">
                     <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="2220" class="purecounter">10</span> +
                     </div>
                     <p>5 star reviews</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Fact Section End -->
   <!-- Rider Section Start -->
   <section class="rider-default sec-padding">
      <div class="container">
         <div class="row">
            <div class="sec-intro col-xl-6 col-sm-9 mx-auto text-center">
               <span class="dot-title text-uppercase">talented rider</span>
               <h2 class="sec-title text-uppercase">our top talented rider</h2>

            </div>
         </div>
         <div class="row mt-5 pt-5">
            <div class="col-lg-3 col-sm-6">
               <div class="rider-man rider2 position-relative">
                  <div class="rider-media">
                     <img src="images/tm5.png" alt="rider">
                     <div class="rider-meta position-absolute text-white">
                        <h4>Toyouta 458 mx</h4>
                        <ul class="list-unstyled">
                           <li>- Rating: 4.9</li>
                           <li>- star rating</li>
                           <li>- Category: Ford</li>
                           <li>- Gear : Auto</li>
                           <li>- Passenger: 03</li>
                           <li>- Poel: Petrol</li>
                        </ul>
                     </div>
                  </div>
                  <div class="rider-info text-center">
                     <h3 class="h4"><a href="#">Esther Howard</a></h3>
                     <p>Talent Rider</p>
                  </div>
               </div>
            </div> <!-- Rider Member End -->
            <div class="col-lg-3 col-sm-6">
               <div class="rider-man rider2 position-relative">
                  <div class="rider-media">
                     <img src="images/tm6.png" alt="rider">
                     <div class="rider-meta position-absolute text-white">
                        <h4>Toyouta 458 mx</h4>
                        <ul class="list-unstyled">
                           <li>- Rating: 4.9</li>
                           <li>- star rating</li>
                           <li>- Category: Ford</li>
                           <li>- Gear : Auto</li>
                           <li>- Passenger: 03</li>
                           <li>- Poel: Petrol</li>
                        </ul>
                     </div>
                  </div>
                  <div class="rider-info text-center">
                     <h3 class="h4"><a href="#">Esther Howard</a></h3>
                     <p>Talent Rider</p>
                  </div>
               </div>
            </div> <!-- Rider Member End -->
            <div class="col-lg-3 col-sm-6">
               <div class="rider-man rider2 position-relative">
                  <div class="rider-media">
                     <img src="images/tm7.png" alt="rider">
                     <div class="rider-meta position-absolute text-white">
                        <h4>Toyouta 458 mx</h4>
                        <ul class="list-unstyled">
                           <li>- Rating: 4.9</li>
                           <li>- star rating</li>
                           <li>- Category: Ford</li>
                           <li>- Gear : Auto</li>
                           <li>- Passenger: 03</li>
                           <li>- Poel: Petrol</li>
                        </ul>
                     </div>
                  </div>
                  <div class="rider-info text-center">
                     <h3 class="h4"><a href="#">Esther Howard</a></h3>
                     <p>Talent Rider</p>
                  </div>
               </div>
            </div> <!-- Rider Member End -->
            <div class="col-lg-3 col-sm-6">
               <div class="rider-man rider2 position-relative">
                  <div class="rider-media">
                     <img src="images/tm8.png" alt="rider">
                     <div class="rider-meta position-absolute text-white">
                        <h4>Toyouta 458 mx</h4>
                        <ul class="list-unstyled">
                           <li>- Rating: 4.9</li>
                           <li>- star rating</li>
                           <li>- Category: Ford</li>
                           <li>- Gear : Auto</li>
                           <li>- Passenger: 03</li>
                           <li>- Poel: Petrol</li>
                        </ul>
                     </div>
                  </div>
                  <div class="rider-info text-center">
                     <h3 class="h4"><a href="#">Esther Howard</a></h3>
                     <p>Talent Rider</p>
                  </div>
               </div>
            </div> <!-- Rider Member End -->
         </div>
      </div>
   </section>
   <!-- Rider Section End -->

   <!-- Client Section Start -->
   <section class="client-3 sec-padding">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-4 col-md-4">
               <div class="review-cover">
                  <img class="rounded-4 img-fluid" src="images/review-cover.png" alt="">
               </div>
            </div>
            <div class="col-xl-8 col-md-8">
               <div class="review-3-wrap">
                  <div class="swiper review-3">
                     <div class="swiper-wrapper">

                        <div class="swiper-slide">
                           <div class="s-quote">
                              <div class="quote-head">
                                 <h3>Courtney Henry</h3>
                                 <p>HAPPY CUSTOMER</p>
                              </div>
                              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt
                                 ut
                                 labore et
                                 dolore magna
                                 aliqua. Ut enim minim veniam, it quis nostrud exercitation ullamco laboris nisi ut
                                 aliquip
                                 ex ea commodo
                                 consequat. Duis
                                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                 pariatur.labore
                                 et dolore
                                 magna
                                 aliqua et dolore magna aliqua. Ut enim minim veniam, it quis nostrud exercitation
                                 ullamco
                              </p>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="s-quote">
                              <div class="quote-head">
                                 <h3>Josefa Rosa</h3>
                                 <p>HAPPY CUSTOMER</p>
                              </div>
                              <p>“We love nexa ride share consectetur adipiscing elit, sed eiusmod tempor incididunt ut
                                 labore et
                                 dolore magna
                                 aliqua. Ut enim minim veniam, it quis nostrud exercitation ullamco laboris nisi ut
                                 aliquip
                                 ex ea commodo
                                 consequat. Duis
                                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                 pariatur.labore
                                 et dolore
                                 magna
                                 aliqua et dolore magna aliqua. Ut enim minim veniam, it quis nostrud exercitation
                                 ullamco
                              </p>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="s-quote">
                              <div class="quote-head">
                                 <h3>Mc Andrew</h3>
                                 <p>HAPPY CUSTOMER</p>
                              </div>
                              <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt
                                 ut
                                 labore et
                                 dolore magna
                                 aliqua. Ut enim minim veniam, it quis nostrud exercitation ullamco laboris nisi ut
                                 aliquip
                                 ex ea commodo
                                 consequat. Duis
                                 aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                 pariatur.labore
                                 et dolore
                                 magna
                                 aliqua et dolore magna aliqua. Ut enim minim veniam, it quis nostrud exercitation
                                 ullamco
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-pagination"></div>
                  </div>
               </div>
               <div class="swiper client-thumb">
                  <div class="swiper-wrapper">
                     <div class="swiper-slide">
                        <img class="rounded-circle" src="images/ts1.png" alt="client-thumb">
                     </div>
                     <div class="swiper-slide">
                        <img class="rounded-circle" src="images/ts2.png" alt="client-thumb">
                     </div>
                     <div class="swiper-slide">
                        <img class="rounded-circle" src="images/ts3.png" alt="client-thumb">
                     </div>

                  </div>
               </div>
            </div> <!-- col end -->
         </div>
      </div>
   </section>
   <!-- Client Section End -->
   <!-- Blog Section Start -->
   <section class="blog-sec sec-padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-9 col-lg-6 mx-auto text-center">
               <h2 class="sec-title">Unlocking of Ride-Sharing article</h2>
               <p>Suspendisse ultrice gravida dictum fusce placerat ultricies integer quis auctor elit sed vulputate mi
                  sit.</p>
            </div>
         </div>
         <div class="row mt-5 pt-5">
            <div class="col-xl-4 col-lg-4 col-sm-6">
               <article class="single-entry rounded-3">
                  <div class="entry-thumb">
                     <a href="single-post.html">
                        <img class="img-fluid rounded-3" src="images/blog1.jpg" alt="">
                     </a>
                  </div>
                  <div class="entry-content mt-4">
                     <div class="entry-meta text-xs">
                        <span><i class="fa-solid fa-calendar-days me-2"></i>14 June 2023</span>
                        <span><i class="fa-solid fa-comments me-2"></i>Comment (05)</span>
                     </div>
                     <h3 class="entry-title"><a href="single-post.html">Interdum velit laoreet id donec ultrices
                           tincidunt arcu
                           tincidunt tortor.</a></h3>
                     <a href="single-post.html" class="btn btn-primary">Read more <i class="fa fa-arrow-right"></i></a>
                  </div>
               </article>
            </div><!-- Single Entry End -->
            <div class="col-xl-4 col-lg-4 col-sm-6">
               <article class="single-entry rounded-3">
                  <div class="entry-thumb">
                     <a href="single-post.html">
                        <img class="img-fluid rounded-3" src="images/blog2.jpg" alt="">
                     </a>
                  </div>
                  <div class="entry-content mt-4">
                     <div class="entry-meta text-xs">
                        <span><i class="fa-solid fa-calendar-days me-2"></i>14 June 2023</span>
                        <span><i class="fa-solid fa-comments me-2"></i>Comment (05)</span>
                     </div>
                     <h3 class="entry-title"><a href="single-post.html">Pellentesque dignissim enim sit amet venenatis
                           cursus eget nunc.</a></h3>
                     <a href="single-post.html" class="btn btn-primary">Read more <i class="fa fa-arrow-right"></i></a>
                  </div>
               </article>
            </div><!-- Single Entry End -->
            <div class="col-xl-4 col-lg-4 col-sm-6">
               <article class="single-entry rounded-3">
                  <div class="entry-thumb">
                     <a href="single-post.html">
                        <img class="img-fluid rounded-3" src="images/blog3.jpg" alt="">
                     </a>
                  </div>
                  <div class="entry-content mt-4">
                     <div class="entry-meta text-xs">
                        <span><i class="fa-solid fa-calendar-days me-2"></i>14 June 2023</span>
                        <span><i class="fa-solid fa-comments me-2"></i>Comment (05)</span>
                     </div>
                     <h3 class="entry-title"><a href="single-post.html">Interdum velit laoreet id donec ultrices
                           tincidunt arcu
                           tincidunt tortor.</a></h3>
                     <a href="single-post.html" class="btn btn-primary">Read more <i class="fa fa-arrow-right"></i></a>
                  </div>
               </article>
            </div><!-- Single Entry End -->
         </div>
      </div>
   </section>
   <!-- Blog Section End -->

  @endsection
