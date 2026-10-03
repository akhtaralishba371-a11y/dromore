@extends('layouts.main-container')
@section('header')
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
					  <li><a class="dropdown-item" href="services.html">Standard Booking</a></li>
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

					<a href="{{ route('startednow') }}" class="btn btn-light fw-bold text-center px-4 py-2"
					  style="max-width: 160px; display: flex; justify-content: center; align-items: center;">
					  Get Started
					</a>
				  </div>
			  </div>
			</div>
		  </nav>
	</header>
	<!-- Header End -->
    @endsection
@section('content')
	<!-- Promo Start -->
	<section class="promo-sec" style="background: url('images/promo-bg.jpg')no-repeat center center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="promo-wrap text-center">
						<h2 class="fw-7 text-white text-uppercase">create account</h2>
						<nav aria-label="breadcrumb w-75 mx-auto">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">sign up</li>
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
			<div class="row g-0 ct-bg">
				<div class="col-lg-6 bg-cover" style="background-image: url('images/account.jpg');">
				</div>
				<div class="col-lg-6">
					<div class="signup-form">
						<h2 class="sub-title border-bottom pb-4">sign up</h2>
						<ul class="nav nav-pills mb-3 pt-4" id="pills-tab" role="tablist">
							<li class="nav-item me-sm-4" role="presentation">
								<button class="nav-link text-uppercase  active" id="pills-rider-tab" data-bs-toggle="pill"
									data-bs-target="#pills-rider" type="button" role="tab" aria-controls="pills-rider"
									aria-selected="true">sign up to ride</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link text-uppercase" id="pills-driver-tab" data-bs-toggle="pill"
									data-bs-target="#pills-driver" type="button" role="tab" aria-controls="pills-driver"
									aria-selected="false">sign up to drive</button>
							</li>

						</ul>
						<div class="tab-content pt-4" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-rider" role="tabpanel"
								aria-labelledby="pills-rider-tab">
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
									<button class="btn btn-primary mt-3">Sign Up Ride</button>
									<p>Already have an account?<a href="sign-in.html">Sign In</a></p>
								</form>
							</div>
							<div class="tab-pane fade" id="pills-driver" role="tabpanel" aria-labelledby="pills-driver-tab">
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
									<button class="btn btn-primary mt-3">Sign Up Drive</button>
									<p>Already have an account?<a href="sign-in.html">Sign In</a></p>
								</form>
							</div>

						</div> <!-- Tab End -->
					</div>
				</div>

			</div>
		</div>
	</main>
	<!-- Main End -->
	@endsection

	<!-- Back to top -->
	<div class="back-top"><i class="fa-solid fa-chevron-up"></i></div>

