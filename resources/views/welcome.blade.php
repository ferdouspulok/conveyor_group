@extends('layouts.headerfooter')

@section('title', 'Index - Scout Bootstrap Template')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


@section('content')
  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="100">
              <div class="hero-tag">
                <i class="bi bi-rocket-takeoff"></i>
                <span>We Keep Our Promises</span>
              </div>
              <h1>Welcome to <span class="highlight">CONVEYOR GROUP</span> </h1>
              <p class="lead">We pride ourselves on making transport simple and affordable.
We offer safe, time saving and convenient transportation services in your business</p>
              <ul class="hero-features">
                <li><i class="bi bi-check-circle"></i> We Keep Our Promises</li>
                <li><i class="bi bi-check-circle"></i> Delivering worldwide on time</li>
                <li><i class="bi bi-check-circle"></i> Safety & Quality Professional</li>
                <li><i class="bi bi-check-circle"></i> Logistics Leader</li>
              </ul>
              <div class="hero-cta">
                <a href="#services" class="btn btn-primary">Explore Our Services</a>
                <a href="tel:+1 (555) 987-6543" class="btn btn-link"><i class="bi bi-telephone"></i> +1 (555) 987-6543</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image-wrapper" data-aos="fade-up" data-aos-delay="300">
              <img src="{{ asset('Scout/assets/img/slider/slider1.jpeg') }}" alt="" class="img-fluid hero-image">
              <div class="stat-card top-right">
                <div class="stat-value">18.9K</div>
                <div class="stat-label">Improved market presence</div>
                <div class="stat-icon">
                  <i class="bi bi-graph-up-arrow"></i>
                </div>
              </div>
              <div class="stat-card bottom-left">
                <div class="stat-value">+450%</div>
                <div class="stat-label">Increased lead generation</div>
                <div class="stat-icon">
                  <i class="bi bi-graph-up"></i>
                </div>
                <style>
  .stat-icon i {
    color: white; /* This will change the icon color to white */
  }
</style>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about section background-dark">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        

       
        <div class="row align-items-center about-showcase">
          <div class="col-lg-6 order-lg-2" data-aos="fade-left" data-aos-delay="300">
            <div class="about-image-grid">
              <img src="{{ asset('Scout/assets/img/about/1.jpg') }}" class="img-grid-main" alt="Our company vision">
              <img src="{{ asset('Scout/assets/img/about/2.jpg') }}" class="img-grid-secondary" alt="Our team">
              <img src="{{ asset('Scout/assets/img/about/3.jpeg') }}" class="img-grid-tertiary" alt="Our workspace">
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span class="years">15+</span>
                <span class="text">Years of Excellence</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1" data-aos="fade-right" data-aos-delay="200">
            <div class="about-content-box">
              <h3>About Company</h3>
              <p class="mb-4">Conveyor Group consists of Nine wholly owned subsidiary companies that together present a progressive logistics management and consultation service to companies in Bangladesh. Since its start 24 years ago, Conveyor Group has worked in strong and effective partnerships with its clientele, bringing forward a comprehensive package of services. From air and sea freight services, to customer brokerage, customs clearance, specialized civil construction, export, import and indentation, right down to courier and travel services, Conveyor Group has every resource to guarantee the success of its client companies..</p>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Strategic Planning</span>
                  <span class="progress-percent">94%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Business Development</span>
                  <span class="progress-percent">87%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress-item">
                <div class="d-flex justify-content-between">
                  <span class="progress-title">Market Research</span>
                  <span class="progress-percent">92%</span>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              

              <a href="about.html" class="btn btn-discover mt-4">Learn More About Us</a>
            </div>
          </div>
        </div>

      </div>
      <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-heading">Our Vision &amp; Mission</h2>
            <p class="lead">We're dedicated to transforming businesses through innovative solutions and strategic expertise that drive sustainable growth.</p>
          </div>
        </div>

    </section>
<section>
  <style>
   #service {
  background-image: url('Scout/assets/img/slider/img2.png'); /* Replace with your image URL */
  background-size: cover; /* Ensures the image covers the entire section */
  background-position: center center; /* Centers the image */
  background-repeat: no-repeat; /* Ensures the image does not repeat */
  padding: 60px 0; /* Adds padding for spacing */
}

</style>
  <section id="service" class="about section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
         <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-heading text-shadow-orange-700">Services We Provide</h2>
            <p class="lead"></p>
          </div>
        </div>

        <div class="row g-4 mb-5">
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-box ">
              <div class="icon-container">
                <i class="bi bi-airplane "></i>
              </div>
              <h4>Air Freight</h4>
              <p>Pioneering solutions that challenge conventional thinking and create new opportunities for success.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-water"></i>
              </div>
              <h4>Ocean Freight</h4>
              <p>Facilitating sustainable expansion through strategic planning and calculated execution.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-truck"></i>
              </div>
              <h4>Shipping</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-gear-wide-connected"></i>
              </div>
              <h4>Project Logistics</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-list-check"></i>
              </div>
              <h4>Custom Brokerage</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-globe"></i>
              </div>
              <h4>International Freight Forwording</h4>
              <p>Upholding the highest standards of ethics</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-truck-front"></i>
              </div>
              <h4>Transportation</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-shop"></i>
              </div>
              <h4>Wearhousing</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-person-raised-hand"></i>
              </div>
              <h4>Travel Agent</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-clock-history"></i>
              </div>
              <h4>Express Delivery</h4>
              <p>Upholding the highest standards of ethics, transparency and accountability in all our endeavors.</p>
            </div>
          </div>


          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="icon-container">
                <i class="bi bi-cone-striped"></i>
              </div>
              <h4>Scouting Unit</h4>
              <p>Working alongside our clients as partners to achieve mutual growth and shared success.</p>
            </div>
          </div>
        </div>
      </section>
    <!-- Additional Sections (e.g., Services, Stats, Testimonials, etc.) -->
    <!-- Follow similar pattern for each section as shown in "About Section" -->
<!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
         <div class="row justify-content-center mb-5">
          <div class="col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <h2 class="section-heading text-shadow-orange-700">Services We Provide</h2>
            <p class="lead"></p>
          </div>
        </div>
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="clients-slider">
          <div class="clients-track track-1" data-aos="fade-right" data-aos-delay="200">
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
            </div>

            <!-- Duplicate for seamless looping -->
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
            </div>
          </div>
        </div>

        <div class="clients-slider">
          <div class="clients-track track-2" data-aos="fade-left" data-aos-delay="300">
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
            </div>

            <!-- Duplicate for seamless looping -->
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-8.webp" class="img-fluid" alt="Client 8">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-7.webp" class="img-fluid" alt="Client 7">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-6.webp" class="img-fluid" alt="Client 6">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-5.webp" class="img-fluid" alt="Client 5">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-4.webp" class="img-fluid" alt="Client 4">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-3.webp" class="img-fluid" alt="Client 3">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-2.webp" class="img-fluid" alt="Client 2">
            </div>
            <div class="clients-slide">
              <img src="Scout/assets/img/clients/clients-1.webp" class="img-fluid" alt="Client 1">
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->
  </main>
@endsection
