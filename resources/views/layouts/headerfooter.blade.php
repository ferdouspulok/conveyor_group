<!-- headerfooter.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('Scout/assets/img/conveyor.png') }}" rel="icon">
  <link href="{{ asset('Scout/assets/img/conveyor.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Scout/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Scout/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Scout/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Scout/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('Scout/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
  
  <!-- Header -->
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <img src="{{ asset('Scout/assets/img/conveyor.png') }}" alt="Conveyor Group Logo" class="logo-img me-3">
        <h1 class="sitename">CONVEYOR GROUP</h1>
      </a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown"><a href="#service"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Air Freight</a></li>
              {{-- <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li> --}}
              <li><a href="#">Ocean Freight</a></li>
              <li><a href="#">Shipping</a></li>
              <li><a href="#">Project Logistics</a></li>
              <li><a href="#">Custom Brokerage</a></li>
              <li><a href="#">International Freight Forwording</a></li>
              <li><a href="#">Transportation</a></li>
              <li><a href="#">Wearhousing</a></li>
              <li><a href="#">Travel Agent</a></li>
              <li><a href="#">Express Delivery</a></li>
              <li><a href="#">Scouting Unit</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Concerns</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="https://www.conveyor.com.bd">Conveyor Logistics Ltd.</a></li>
              <li><a href="https://www.conveyor.com.bd/conveyor-plss">Project Logistics & Support Services</a></li>
              <li><a href="https://www.conveyor.com.bd/conveyor-shipping-lines">Conveyor Shipping Lines</a></li>
              <li><a href="https://www.conveyor.com.bd/conveyor-aviation">Conveyor Aviation & Adventures</a></li>
              <li><a href="https://www.conveyor.com.bd/conveyor-networks">Conveyor Networks Ltd.</a></li>
              <li><a href="https://www.conveyor.com.bd/conveyor-systems">Conveyor Systems</a></li>
              <li><a href="https://www.conveyor.com.bd/anika-overseas">Anika Overseas Discovery Services</a></li>
              <li><a href="https://www.conveyoruniexpress.com">Conveyor Uni Express</a></li>
              
            </ul>
            <li><a href="#about">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted bi bi-facebook" href="{{ url('#about') }}"></a>
      {{-- <a href="#"><i class="bi bi-facebook"></i></a> --}}
    </div>
  </header>
  
  <!-- Main Content Section -->
  @yield('content')

  <!-- Footer -->
  <footer id="footer" class="footer position-relative light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            <img src="{{ asset('Scout/assets/img/conveyor.png') }}" alt="Conveyor Group Logo" class="logo-img me-3">
            <span class="sitename">CONVEYOR GROUP</span>
          </a>
          <div class="footer-contact pt-3">
            <h4>Corporate Office</h4>
            <p>Location: 57 Kemal Ataturk Avenue </p>
            <p>Banani C/A, Dhaka 1213, Bangladesh</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
        
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">MyWebsite</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('Scout/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Scout/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Scout/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('Scout/assets/js/main.js') }}"></script>
</body>

</html>
