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
           <a class="navbar-brand" href="index.html">
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
                 <a class="nav-link active" href="{{ route('index') }}">Home</a>
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
						<h2 class="fw-bold text-white text-uppercase">Contact Us</h2>
						<nav aria-label="breadcrumb w-75 mx-auto">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Contact us</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Promo End -->

	<!-- Main Start -->
	<main class="main sec-padding my-account">
		<div class="container">
			<div class="row g-5 align-self-stretch">
				<div class="col-lg-6 col-12">
					<div class="contact-us ct-bg p-sm-5 p-4 h-100">
						<h2 class="sub-title mb-5 border-bottom pb-4">get in touch</h2>
						<form action="#">
							<div class="mb-3">
								<input class="form-control" type="text" placeholder="Full Name *">
							</div>
							<div class="mb-3">
								<input class="form-control" type="number" placeholder="Phone *">
							</div>
							<div class="mb-3">
								<input class="form-control" type="email" placeholder="Email *">
							</div>
							<div class="mb-3">
								<input class="form-control" type="password" placeholder="Password *">
							</div>

							<button class="btn btn-primary mt-3">Send Message</button>
						</form>
						<div class="contact-widget widget mt-5 pt-4">
							<h3 class="sub-title xs-title mb-4">
								Contact Info:
							</h3>
							<ul class="list-unstyled">
								<li><img class="me-3" src="images/icons/tel-g.png" alt=""><a href="tel:(568) 367-987-237">(568)
										367-987-237</a></li>
								<li><img class="me-3" src="images/icons/loc-g.png" alt="">Hudson, Wisconsin(WI), 54016</li>
								<li><img class="me-3" src="images/icons/message.png" alt=""><a href="/cdn-cgi/l/email-protection#75071c11101b100d351218141c195b161a18"><span class="__cf_email__" data-cfemail="99ebf0fdfcf7fce1f8d9fef4f8f0f5b7faf6f4">[email&#160;protected]</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-12">
					<div class="google-map h-100">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d99370.29950629402!2d-77.01457599999999!3d38.8937545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2sWashington%2C%20DC%2C%20USA!5e0!3m2!1sen!2sbd!4v1699800973163!5m2!1sen!2sbd"
							width="100%" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>

				</div>

			</div>
		</div>
	</main>
	<!-- Main End -->



	<!-- Back to top -->
	<div class="back-top"><i class="fa-solid fa-chevron-up"></i></div>

@endsection
