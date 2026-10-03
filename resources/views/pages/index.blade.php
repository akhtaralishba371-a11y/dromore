@extends('layouts.main-container')
@section('header')
<body>
    <!-- Header Start -->
    <header class="header header-white">
      <div class="top-bar">
        <div class="container">
          <div class="top-info dropdown d-lg-none">
            <a
              class="topbar-link dropdown-toggle"
              href="#"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >Quick Connect</a
            >
            <ul class="dropdown-menu shadow-sm">
              <li>
                <a class="dropdown-item" href="tel:367-987-237"
                  ><img src="images/icons/phone-call.png" alt="" />(568)
                  367-987-237</a
                >
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="/cdn-cgi/l/email-protection#d0a2b9b4b5beb5a8b190b7bdb1b9bcfeb3bfbd"
                  ><img src="images/icons/email.png" alt="" /><span
                    class="__cf_email__"
                    data-cfemail="4e3c272a2b202b362f0e29232f2722602d2123"
                    >[email&#160;protected]</span
                  ></a
                >
              </li>
              <li>
                <span
                  ><img src="images/icons/location.png" alt="" />Hudson,
                  Wisconsin(WI), 54016</span
                >
              </li>
            </ul>
          </div>
          <div class="top-info d-none d-lg-block">
            <ul class="list-group list-group-horizontal list-unstyled">
              <li class="list-item-inline">
                <a href="tel:568-367-987-237"
                  ><img src="images/icons/phone-call.png" alt="" />(568)
                  367-987-237</a
                >
              </li>
              <li class="list-item-inline">
                <a
                  href="/cdn-cgi/l/email-protection#0f6860796663636e686a4f68626e6663216c6062"
                  ><img src="images/icons/email.png" alt="" /><span
                    class="__cf_email__"
                    data-cfemail="6f0800190603030e080a2f08020e0603410c0002"
                    >[email&#160;protected]</span
                  ></a
                >
              </li>
              <li class="list-item-inline">
                <span
                  ><img src="images/icons/location.png" alt="" />Hudson,
                  Wisconsin(WI), 54016</span
                >
              </li>
            </ul>
          </div>

          <div class="top-connect d-flex align-items-center">
            <div class="language-select d-none d-sm-block">
              <select id="select">
                <option value="1">English</option>
                <option value="1">Spanish</option>
              </select>
            </div>
            <a href="driver-dashboard.html" class="ms-3"
              ><i class="fa fa-users me-2"></i>Driver Dashboard</a
            >
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html">
            <img
              src="images/logo-alt.png"
              alt="Logo"
              style="height: 50px; width: auto"
            />
          </a>

          <!-- Mobile Toggle Button -->
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Collapsible Nav -->
          <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Nav links -->
            <ul class="navbar-nav mx-auto mb-3 mb-lg-0 text-center">
              <li class="nav-item">
                <a class="nav-link active" href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="servicesDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  >Services</a
                >
                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                  <a href="#" id="open-booking" class="dropdown-item">Standard Booking</a>
                  <li>
                  <a href="#" id="group-booking-trigger" class="dropdown-item">Group/Airport Booking Form</a>

                  </li>
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

            <div
              class="d-flex flex-column flex-lg-row align-items-center gap-2 ms-lg-3"
            >
              <a
                href="contact.html"
                class="btn btn-outline-light fw-bold text-center px-4 py-2"
                style="
                  max-width: 160px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Book Now
              </a>
              <a
                href="{{ route('startednow') }}"
                class="btn btn-light fw-bold text-center px-4 py-2"
                style="
                  max-width: 160px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                "
              >
                Get Started
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    @endsection
@section('content')
    <!-- Banner Section Start -->
    <section class="banner-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            <div class="banner-txt">
              <h1>Join the Ride-Sharing Revolution</h1>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                <a href="#">integer quis auctor elit sed vulputate mi sit</a>.
                Auctor eu augue ut lectus arcu bibendum at varius vel.
              </p>



              <form method="POST" action="{{ route('bookings.store') }}"
              id="contact-form"
              class="pickup-form bg-dark text-white p-3 rounded-4"
              style="max-width: 600px; margin: auto; font-size: 0.85rem"
            >
              @csrf
              <h2
                id="form-heading"
                class="fw-bold text-center"
                style="
                  font-size: clamp(1.25rem, 2vw + 0.5rem, 2rem);
                  text-transform: uppercase;
                  letter-spacing: 1px;
                  color: #ffc107;
                  margin-bottom: 1rem;
                  border-bottom: 2px solid #ffc107;
                  padding-bottom: 0.5rem;
                  width: 100%;
                "
              >
                Standard Booking
              </h2>

              <div class="row gx-3 gy-2">
                <!-- Full Name -->
                <div class="col-md-6">
                  <label for="name" class="form-label mb-0">Full Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control form-control-sm"
                    placeholder="Name"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Email Address -->
                <div class="col-md-6">
                  <label for="email" class="form-label mb-0">Email</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control form-control-sm"
                    placeholder="you@example.com"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Pickup Date & Time -->
                <div class="col-md-6">
                  <label for="pickup_datetime" class="form-label mb-0">Pickup Date & Time</label>
                  <input
                    type="datetime-local"
                    id="pickup_datetime"
                    name="pickup_datetime"
                    class="form-control form-control-sm"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Phone Number -->
                <div class="col-md-6">
                  <label for="phone" class="form-label mb-0">Phone</label>
                  <input
                    type="tel"
                    id="phone"
                    name="phone"
                    class="form-control form-control-sm"
                    placeholder="Phone number"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Pickup Location -->
                <div class="col-md-6">
                  <label for="pickup_location" class="form-label mb-0">Pickup Location</label>
                  <input
                    type="text"
                    id="pickup_location"
                    name="pickup_location"
                    class="form-control form-control-sm"
                    placeholder="Start location"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Destination -->
                <div class="col-md-6">
                  <label for="destination" class="form-label mb-0">Destination</label>
                  <input
                    type="text"
                    id="destination"
                    name="destination"
                    class="form-control form-control-sm"
                    placeholder="Drop location"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Number of People -->
                <div class="col-md-6">
                  <label for="people" class="form-label mb-0">People (max 5)</label>
                  <input
                    type="number"
                    id="people"
                    name="people"
                    class="form-control form-control-sm"
                    min="1"
                    max="5"
                    required
                    style="padding: 4px 8px"
                  />
                </div>

                <!-- Hidden Role Dropdown -->
                <select name="role" class="d-none">
                    <option value="rider" selected>Rider</option>
                    <option value="driver">Driver</option>
                </select>

                <!-- Hidden fields for user_id, created_at, updated_at -->
                <input type="hidden" name="created_at" value="{{ now() }}">
                <input type="hidden" name="updated_at" value="{{ now() }}">
              </div>

              <input type="hidden" name="payment_name" value="5" >

              <!-- Deposit Button -->
              <div class="mt-3">
                <button
                  type="submit"
                  class="btn btn-light btn-sm w-100"
                  style="padding: 6px 12px"
                >
                  Pay £5 Deposit <i class="fa fa-credit-card ms-1"></i>
                </button>
              </div>
            </form>



            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <div class="banner-img mb-5 mb-lg-0">
              <img src="images/banner2.png" alt="Banner" class="img-fluid" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banner Section End -->

    <!-- Choose Section Start -->
    <section class="choose2-sec sec-padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 order-xl-1 order-2">
            <div class="choose-imgs d-sm-flex align-items-start">
              <img class="img-fluid" src="images/choose2.jpg" alt="" />
              <img class="img-fluid" src="images/choose1.jpg" alt="" />
            </div>
          </div>
          <div class="col-xl-6 order-xl-2 order-1">
            <div class="choose-txt ps-xl-5 ms-xl-3">
              <div class="sec-intro">
                <h2 class="sec-title">
                  Why <span class="highlighted">choose us?</span>
                </h2>
                <p>
                  Suspendisse ultrice gravida dictum fusce placerat ultricies
                  integer quis auctor elit sed vulputate mi sit. Auctor eu augue
                  ut lectus arcu bibendum at varius vel.
                </p>
              </div>
              <div class="car-feature mt-5">
                <ul>
                  <li>expert guidance</li>
                  <li>free customer support</li>
                  <li>affordable prices</li>
                  <li>easy & fast booking</li>
                  <li>expert guidance</li>
                  <li>free customer support</li>
                  <li>many pickup location</li>
                  <li>no more waiting</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Choose Section End -->

    <!-- Services Section Start -->
    <section
      class="services2 sec-padding"
      style="background-image: url('images/serv-bg3.jpg')"
    >
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-sm-9">
            <div class="sec-intro">
              <h2 class="sec-title">our popular services</h2>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis auctor elit sed vulputate mi sit.
              </p>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1">
            <div class="d-flex justify-content-between">
              <div class="sec-graphic">
                <img src="images/arrow-gold.png" alt="" />
              </div>
              <div class="sec-cta">
                <a href="#" class="btn btn-primary"
                  >Get a Service <i class="fa fa-arrow-right"></i
                ></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="service-lists mt-5">
              <div
                class="service-entry d-sm-flex justify-content-between align-items-center"
              >
                <div class="serv-icon">
                  <img src="images/icons/serv1.png" alt="" />
                </div>
                <div class="serv-txt">
                  <h3><a href="single-service.html">Ride sharing</a></h3>
                  <p>
                    In pellentesque massa vidaplacerat duis. Cursus sit amet
                    dictum sit amet.
                  </p>
                </div>
                <a href="single-service.html" class="btn btn-dark"
                  >View Details <i class="fa fa-arrow-right ms-2"></i
                ></a>
                <div class="serv-img rounded">
                  <a href="single-service.html"
                    ><img src="images/serv1.png" alt=""
                  /></a>
                </div>
              </div>
              <!-- Single Service End -->
              <div
                class="service-entry d-sm-flex justify-content-between align-items-center"
              >
                <div class="serv-icon">
                  <img src="images/icons/serv2.png" alt="" />
                </div>
                <div class="serv-txt">
                  <h3><a href="single-service.html">Taxi sharing</a></h3>
                  <p>
                    In pellentesque massa vidaplacerat duis. Cursus sit amet
                    dictum sit amet.
                  </p>
                </div>
                <a href="single-service.html" class="btn btn-dark"
                  >View Details <i class="fa fa-arrow-right ms-2"></i
                ></a>
                <div class="serv-img rounded">
                  <a href="single-service.html"
                    ><img src="images/serv2.png" alt=""
                  /></a>
                </div>
              </div>
              <!-- Single Service End -->
              <div
                class="service-entry d-sm-flex justify-content-between align-items-center"
              >
                <div class="serv-icon">
                  <img src="images/icons/serv3.png" alt="" />
                </div>
                <div class="serv-txt">
                  <h3><a href="single-service.html">Taxi Reserved</a></h3>
                  <p>
                    In pellentesque massa vidaplacerat duis. Cursus sit amet
                    dictum sit amet.
                  </p>
                </div>
                <a href="single-service.html" class="btn btn-dark"
                  >View Details <i class="fa fa-arrow-right ms-2"></i
                ></a>
                <div class="serv-img rounded">
                  <a href="single-service.html"
                    ><img src="images/serv3.png" alt=""
                  /></a>
                </div>
              </div>
              <!-- Single Service End -->
              <div
                class="service-entry d-sm-flex justify-content-between align-items-center"
              >
                <div class="serv-icon">
                  <img src="images/icons/intercity.png" alt="" />
                </div>
                <div class="serv-txt">
                  <h3><a href="single-service.html">intercity service</a></h3>
                  <p>
                    In pellentesque massa vidaplacerat duis. Cursus sit amet
                    dictum sit amet.
                  </p>
                </div>
                <a href="single-service.html" class="btn btn-dark"
                  >View Details <i class="fa fa-arrow-right ms-2"></i
                ></a>
                <div class="serv-img rounded">
                  <a href="single-service.html"
                    ><img src="images/serv4.png" alt=""
                  /></a>
                </div>
              </div>
              <!-- Single Service End -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Get Started Section Start -->
    <section class="how-start2 sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-sm-9 mx-auto mb-5">
            <div class="sec-intro text-center">
              <h2 class="sec-title">
                how to <span class="highlighted">get started</span>
              </h2>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                fusce integer quis auctor elit sed vulputate mi sit.
              </p>
            </div>
          </div>
        </div>
        <div class="row work-progress">
          <div
            class="d-none d-lg-flex justify-content-between align-items-center"
          >
            <span>01</span>
            <span>02</span>
            <span>03</span>
            <span>04</span>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <h3 class="h4 text-capitalize">create your account</h3>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <h3 class="h4 text-capitalize">Find a Taxi</h3>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <h3 class="h4 text-capitalize">meet your driver</h3>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="card">
              <h3 class="h4 text-capitalize">enjoy your trip</h3>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Get Started Section End -->

    <!-- Choose2 Section Start -->
    <section class="choose-2 bg-light sec-padding">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-md-8 mb-5 mb-xl-0">
            <div class="choose-thumb">
              <img class="img-fluid" src="images/choose-s2.png" alt="" />
            </div>
          </div>
          <div class="col-xl-6 col-md-12">
            <div class="choose-txt ps-xl-5">
              <h2 class="sec-title">
                elevate your taxi experience
                <span class="highlighted">with ride</span>-sharing.
              </h2>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis auctor elit sed vulputate mi sit. Auctor eu augue
                ut lectus arcu bibendum at varius vel.
              </p>
              <div class="choose-option mt-5">
                <div class="choose-single bg-info mb-xl-4">
                  <h3>
                    <i class="fa-solid fa-circle-check me-3"></i>Safety First
                  </h3>
                  <p>
                    Suspendisse ultrice gravida dictum fusce placerat ultricies
                    integer quis auctor elit sed vulputate mi sit. Auctor eu
                    augue.
                  </p>
                </div>
                <div class="choose-single bg-info">
                  <h3>
                    <i class="fa-solid fa-circle-check me-3"></i>Affordable
                    Prices
                  </h3>
                  <p>
                    Suspendisse ultrice gravida dictum fusce placerat ultricies
                    integer quis auctor elit sed vulputate mi sit. Auctor eu
                    augue.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Choose2 Section End -->

    <!-- Rider Section Start -->
    <section class="rider-sec2 sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-sm-9 mx-auto text-center">
            <h2 class="sec-title">Top talented rider</h2>
            <p>
              Suspendisse ultrice gravida dictum fusce placerat we have not
              ultricies integer quis auctor elit sed vulputate mi sit.
            </p>
          </div>
        </div>
        <div class="row mt-5 pt-5">
          <div class="col-lg-3 col-sm-6">
            <div class="rider-man rider2 position-relative">
              <div class="rider-media">
                <img class="rounded-4" src="images/tm1.png" alt="rider" />
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
          </div>
          <!-- Rider Member End -->
          <div class="col-lg-3 col-sm-6">
            <div class="rider-man rider2 position-relative">
              <div class="rider-media">
                <img class="rounded-4" src="images/tm2.png" alt="rider" />
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
          </div>
          <!-- Rider Member End -->
          <div class="col-lg-3 col-sm-6">
            <div class="rider-man rider2 position-relative">
              <div class="rider-media">
                <img class="rounded-4" src="images/tm3.png" alt="rider" />
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
          </div>
          <!-- Rider Member End -->
          <div class="col-lg-3 col-sm-6">
            <div class="rider-man rider2 position-relative">
              <div class="rider-media">
                <img class="rounded-4" src="images/tm4.png" alt="rider" />
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
          </div>
          <!-- Rider Member End -->
        </div>
      </div>
    </section>
    <!-- Rider Section End -->

    <!-- Fact Section Start -->
    <div class="fact-sec fact-sec2">
      <div class="container">
        <div
          class="row fact-bg rounded-4"
          style="background-image: url('images/world.png')"
        >
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center fact-card">
              <div class="fact-icon rounded-circle">
                <img src="images/icons/rating.png" alt="Rating" />
              </div>
              <div class="fact-txt ms-4">
                <div class="count-box">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="530"
                    class="purecounter"
                    >10</span
                  >
                  +
                </div>
                <p>Happy Raider</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center fact-card">
              <div class="fact-icon rounded-circle">
                <img src="images/icons/car-award.png" alt="Rating" />
              </div>
              <div class="fact-txt ms-4">
                <div class="count-box">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="10"
                    class="purecounter"
                    >10</span
                  >
                  +
                </div>
                <p>riding award</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center fact-card">
              <div class="fact-icon rounded-circle">
                <img src="images/icons/taxi-r2.png" alt="Rating" />
              </div>
              <div class="fact-txt ms-4">
                <div class="count-box">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="5230"
                    class="purecounter"
                    >10</span
                  >
                  +
                </div>
                <p>Total Cars</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="d-flex align-items-center fact-card">
              <div class="fact-icon rounded-circle">
                <img src="images/icons/rating.png" alt="Rating" />
              </div>
              <div class="fact-txt ms-4">
                <div class="count-box">
                  <span
                    data-purecounter-start="0"
                    data-purecounter-end="2220"
                    class="purecounter"
                    >10</span
                  >
                  +
                </div>
                <p>5 star reviews</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fact Section End -->

    <!-- Client Section Start -->
    <section class="client-sec client-sec2 bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
            <div class="client-intro">
              <h2 class="sec-title">
                Loved by thousands of rider and others people.
              </h2>
              <p>
                Suspendisse ultrice gravida dictum fusce placerat ultricies
                integer quis auctor elit sed vulputate mi sit. Auctor eu augue
                ut lectus arcu bibendum at varius vel.
              </p>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="review-wrapper position-relative">
              <div class="swiper review-slider2">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="single-quote rounded-3 bg-light">
                      <div class="quote-head d-md-flex align-items-center mb-4">
                        <div class="quote-img">
                          <img
                            width="100"
                            height="100"
                            src="images/customer1.png"
                            class="rounded-circle"
                            alt="Client"
                          />
                        </div>
                        <div class="quote-name ms-md-3">
                          <h3>Courtney Henry</h3>
                          <p class="mb-0 text-xs">happy customer</p>
                        </div>
                      </div>
                      <p>
                        “Massa tincidunt dui ut ornare lectus sit amet est
                        placerat mauris augue neque gravida in fermentum turpis
                        egestas sed tempus. Adipiscing elit habitant morbi.
                        Massa sapien faucibus et molestie ac”.
                      </p>
                    </div>
                  </div>
                  <!-- Single Slide End -->
                  <div class="swiper-slide">
                    <div class="single-quote rounded-3 bg-light">
                      <div class="quote-head d-md-flex align-items-center mb-4">
                        <div class="quote-img">
                          <img
                            width="100"
                            height="100"
                            src="images/entry4.jpg"
                            class="rounded-circle"
                            alt="Client"
                          />
                        </div>
                        <div class="quote-name ms-md-3">
                          <h3>Courtney Henry</h3>
                          <p class="mb-0 text-xs">happy customer</p>
                        </div>
                      </div>
                      <p>
                        “Massa tincidunt dui ut ornare lectus sit amet est
                        placerat mauris augue neque gravida in fermentum turpis
                        egestas sed tempus. Adipiscing elit habitant morbi.
                        Massa sapien faucibus et molestie ac”.
                      </p>
                    </div>
                  </div>
                  <!-- Single Slide End -->
                  <div class="swiper-slide">
                    <div class="single-quote rounded-3 bg-light">
                      <div class="quote-head d-md-flex align-items-center mb-4">
                        <div class="quote-img">
                          <img
                            src="images/customer1.png"
                            class="rounded-circle"
                            alt="Client"
                          />
                        </div>
                        <div class="quote-name ms-md-3">
                          <h3>Courtney Henry</h3>
                          <p class="mb-0 text-xs">happy customer</p>
                        </div>
                      </div>
                      <p>
                        “Massa tincidunt dui ut ornare lectus sit amet est
                        placerat mauris augue neque gravida in fermentum turpis
                        egestas sed tempus. Adipiscing elit habitant morbi.
                        Massa sapien faucibus et molestie ac”.
                      </p>
                    </div>
                  </div>
                  <!-- Single Slide End -->
                </div>
              </div>
              <!-- Slider Wrap End -->
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Client Section End -->

    <!-- Blog Section Start -->
    <section class="blog-sec sec-padding">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-sm-9 mx-auto text-center">
            <h2 class="sec-title">Ride-Sharing article</h2>
            <p>
              Suspendisse ultrice gravida dictum fusce placerat ultricies
              integer quis auctor elit sed vulputate mi sit.
            </p>
          </div>
        </div>
        <div class="blog-lists row row-cols-lg-2 row-cols-1 gy-4 mt-5">
          <div class="col">
            <article
              class="single-entry list-entry d-sm-flex align-items-center justify-conetent-between rounded-3"
            >
              <div class="entry-thumb">
                <a href="single-post-sidebar.html">
                  <img src="images/entry1.jpg" alt="" />
                </a>
              </div>
              <div class="entry-content">
                <div class="entry-meta text-xs">
                  <span
                    ><i class="fa-solid fa-calendar-days me-2"></i>14 June
                    2023</span
                  >
                  <span
                    ><i class="fa-solid fa-comments me-2"></i>Comment (05)</span
                  >
                </div>
                <h3 class="entry-title">
                  <a href="single-post-sidebar.html"
                    >Interdum velit laoreet id donec ultrices tincidunt arcu
                    tincidunt tortor.</a
                  >
                </h3>
                <a href="#" class="btn btn-info">Read more</a>
              </div>
            </article>
          </div>
          <div class="col">
            <article
              class="single-entry list-entry d-sm-flex align-items-center justify-conetent-between rounded-3"
            >
              <div class="entry-thumb">
                <a href="#">
                  <img src="images/entry3.jpg" alt="" />
                </a>
              </div>
              <div class="entry-content">
                <div class="entry-meta text-xs">
                  <span
                    ><i class="fa-solid fa-calendar-days me-2"></i>14 June
                    2023</span
                  >
                  <span
                    ><i class="fa-solid fa-comments me-2"></i>Comment (05)</span
                  >
                </div>
                <h3 class="entry-title">
                  <a href="single-post-sidebar.html"
                    >Interdum velit laoreet id donec ultrices tincidunt arcu
                    tincidunt tortor.</a
                  >
                </h3>
                <a href="#" class="btn btn-info">Read more</a>
              </div>
            </article>
          </div>
          <div class="col">
            <article
              class="single-entry list-entry d-sm-flex align-items-center justify-conetent-between rounded-3"
            >
              <div class="entry-thumb">
                <a href="single-post-sidebar.html">
                  <img src="images/entry2.jpg" alt="" />
                </a>
              </div>
              <div class="entry-content">
                <div class="entry-meta text-xs">
                  <span
                    ><i class="fa-solid fa-calendar-days me-2"></i>14 June
                    2023</span
                  >
                  <span
                    ><i class="fa-solid fa-comments me-2"></i>Comment (05)</span
                  >
                </div>
                <h3 class="entry-title">
                  <a href="single-post-sidebar.html"
                    >Interdum velit laoreet id donec ultrices tincidunt arcu
                    tincidunt tortor.</a
                  >
                </h3>
                <a href="#" class="btn btn-info">Read more</a>
              </div>
            </article>
          </div>
          <div class="col">
            <article
              class="single-entry list-entry d-sm-flex align-items-center justify-conetent-between rounded-3"
            >
              <div class="entry-thumb">
                <a href="single-post-sidebar.html">
                  <img src="images/entry4.jpg" alt="" />
                </a>
              </div>
              <div class="entry-content">
                <div class="entry-meta text-xs">
                  <span
                    ><i class="fa-solid fa-calendar-days me-2"></i>14 June
                    2023</span
                  >
                  <span
                    ><i class="fa-solid fa-comments me-2"></i>Comment (05)</span
                  >
                </div>
                <h3 class="entry-title">
                  <a href="single-post-sidebar.html"
                    >Interdum velit laoreet id donec ultrices tincidunt arcu
                    tincidunt tortor.</a
                  >
                </h3>
                <a href="#" class="btn btn-info">Read more</a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    @endsection

    <!-- Back to top -->
    {{-- <div class="back-top"><i class="fa-solid fa-chevron-up"></i></div>
    @endsection --}}


  

