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
                href="startednow.html"
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
