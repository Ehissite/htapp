<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Hue and Tartan - Home</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="images/icons/logo.png" rel="icon">
  <link href="images/icons/logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <?php include 'header.php'?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <img src="images/whiteev.png" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 data-aos="fade-up" data-aos-delay="100">Shaping the Future of Green Energy and Electric Mobility
            </h2>
            <p data-aos="fade-up" data-aos-delay="200">At Hues & Tartans, we are pioneering a new era of sustainable innovation. </p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="authentication" style="background-color:green;" class="btn-get-started">Create Account</a>
              <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
            </div>

          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section section-bg dark-background">

      <div class="container position-relative">

        <div class="row gy-5">

          <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <h3>Leading the Charge in Green Energy and EV Solutions</h3>
            <p>
            At Hues & Tartans, we are more than just a technology provider — we are trailblazers in the world of eco-friendly innovation.</p>
            <a href="about" class="about-btn align-self-center align-self-xl-start"><span>About us</span> <i class="bi bi-chevron-right"></i></a>
          </div>

          <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-briefcase"></i>
                <h4><a href="" class="stretched-link">Inception</a></h4>
                <p>We’ve focused on harnessing the potential of green energy across various sectors</p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-gem"></i>
                <h4><a href="" class="stretched-link">Passion</a></h4>
                <p>Our passion for electric vehicle charging solutions sets us apart</p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-broadcast"></i>
                <h4><a href="" class="stretched-link">Long-Term vision</a></h4>
                <p>We understand that the future of transportation is electric</p>
              </div><!-- Icon-Box -->

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-easel"></i>
                <h4><a href="" class="stretched-link">Dedication</a></h4>
                <p>We are dedicated to making that future sustainable, reliable, and accessible for all</p>
              </div><!-- Icon-Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    

    <!-- Tabs Section -->
    <section id="tabs" class="tabs section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tabs-tab-1">
              <i class="bi bi-binoculars"></i>
              <h4 class="d-none d-lg-block">Mobile EV Charging Solutions</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-2">
              <i class="bi bi-box-seam"></i>
              <h4 class="d-none d-lg-block">Residential Charging Stations</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-3">
              <i class="bi bi-brightness-high"></i>
              <h4 class="d-none d-lg-block">Commercial and Public Charging Stations</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tabs-tab-4">
              <i class="bi bi-command"></i>
              <h4 class="d-none d-lg-block">Ultra-Fast Charging Hubs
              </h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="tabs-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Mobile EV Charging Solutions.</h3>
                
                <p>
                In a world where convenience is key, we provide portable, on-demand EV charging services for electric vehicles. Whether you're stuck without power on the road or need a quick boost, our mobile chargers bring the power directly to you.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>24/7 Availability.</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Easy-to-Use Mobile App Integration</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Fast Charging Capabilities.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Flexible and Eco-Friendly.</span></li>
                </ul>
  
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/charging.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Residential Charging Stations</h3>
                <p>
                EV owners deserve efficient charging solutions at home. Our residential stations are built to be compact, easy to install, and energy-efficient, ensuring you can charge your vehicle safely and conveniently.
                </p>

                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Smart Home Integration.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Energy Monitoring & Optimization.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Rapid Charging Options.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Sleek, Modern Design.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aiev.jpg" style="width:100%;" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Commercial and Public Charging Stations</h3>
                <p>
                  Our commercial and public EV charging stations are designed for large-scale use and can be customized to suit parking lots, shopping centres, office buildings, and more. We offer fast-charging, ultra-fast charging, and scalable infrastructure to support businesses and public utilities.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Customizable for Business Needs.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Flexible Payment & Subscription Options.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Reliable, High-Speed Charging.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Scalable Infrastructure.</span></li>
                </ul>

              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/ev4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="tabs-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Ultra-Fast Charging Hubs</h3>
                <p>
                For highway stops and high-traffic areas, we provide ultra-fast charging hubs that can charge EVs in a fraction of the time. Perfect for long-distance EV travellers or commercial fleets, these stations offer the fastest charging solutions on the market today.
                </p>

                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>High Voltage, Ultra-Fast Charging.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Multiple Vehicle Charging Options.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Eco-Friendly Energy Sources.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Integrated Monitoring Systems.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="images/aiev2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Tabs Section -->

    <!-- Services Section -->
    <section id="services" class="services section section-bg dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <h3>The Future of EV Charging</h3>
        <p>
At Hues & Tartans, we’re not just building products — we’re shaping the future.<br> Our R&D team is constantly innovating to develop next-generation solutions, including:
</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-briefcase icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Join the Electric Revolution</a></h4>
                <p class="description">We are committed to making electric vehicle charging as convenient and efficient as possible. As the world continues to embrace electric mobility, Hues & Tartans is dedicated to providing cutting-edge solutions that meet the needs of EV drivers everywhere.                </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-card-checklist icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Sustainability at the Core</a></h4>
                <p class="description">We believe that green energy is the foundation of a sustainable future. Our EV charging solutions are built with renewable energy sources, reducing carbon emissions and promoting the global shift toward eco-friendly transportation.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-bar-chart icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Customer-First Approach</a></h4>
                <p class="description">At Hues & Tartans, we prioritize the needs of our customers. Our dedicated support team ensures that from installation to daily use, our solutions work seamlessly. We offer comprehensive after-sales service and technical support to keep you powered up and on the move. </p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex position-relative h-100">
              <i class="bi bi-binoculars icon flex-shrink-0"></i>
              <div>
                <h4 class="title"><a href="service-details.html" class="stretched-link">Advanced EV Charging Solutions</a></h4>
                <p class="description">Our electric vehicle charging solutions are designed to meet the diverse needs of EV owners, businesses, and public infrastructure. Whether you're seeking a home charging station, a commercial setup, or a mobile charging solution, we have the technology, expertise, and vision to bring it to life.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <?php 
    // include("portfolio.php");
     ?>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 10
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Business man</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Hues and Tartans solutions are designed with the user in mind, offering flexible and innovative options that suit modern EV users’ lifestyles and businesses.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>From mobile chargers that meet the on-the-go demands of EV drivers to residential, commercial, and fast charging stations, Hues and Tartans cover every aspect of EV charging.                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Hues and Tartans solutions are developed with sustainability at their core, ensuring minimal environmental impact while maximizing efficiency for its users.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>heavily in research and development to stay at the forefront of green technology and ensure that users receive the most advanced and reliable solutions.
                  </span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    

    <!-- Faq Section -->
    <section id="faq" class="faq section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Frequently Asked Questions</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>What types of charging solutions do you offer?</h3>
                <div class="faq-content">
                  <p>We offer a range of EV charging solutions, including mobile chargers, residential and commercial charging stations, and ultra-fast public charging hubs. Our solutions are designed to meet diverse user needs, from everyday EV drivers to large-scale commercial operations.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>How do your mobile EV charging solutions work?</h3>
                <div class="faq-content">
                  <p>Our mobile charging units are on-demand and can be dispatched to your location via our mobile app. They are designed to provide a fast charge wherever you are, giving you the flexibility to keep moving without being tied to a stationary charging point.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Are your charging stations eco-friendly?</h3>
                <div class="faq-content">
                  <p>Absolutely. Our charging stations are powered by renewable energy sources and are built with sustainability in mind. We aim to reduce the carbon footprint associated with electric vehicle charging.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->


            </div>

          </div><!-- End Faq Column-->

        </div>

      </div>

    </section><!-- /Faq Section -->

    

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 ">
            <div class="row gy-4">

              <div class="col-lg-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Fleet Road, Dartford, Kent, United Kingdom
                  </p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+44(0) 743 7565 411</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@huesandtartans.com</p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit" name="SendInq">Send Message</button>
                </div>

                

              </div>
            </form>
                  <?php
                include ("database.php");
                    if (isset($_POST['SendInq']))
                    {
                        $name = trim(stripslashes(htmlspecialchars($_POST['name'])));
                        $email = trim(stripslashes(htmlspecialchars($_POST['email'])));
                        $subject = trim(stripslashes(htmlspecialchars($_POST['subject'])));
                        $message = trim(stripslashes(htmlspecialchars($_POST['message'])));
                        
                        if (empty($name)) {
                          echo "
                                <script>
                                    alert('Name field can't be empty');
                                    window.location.href = '';
                                </script>
                                ";
                                die();
                        }
                        if (empty($email)) {
                          echo "
                                <script>
                                    alert('Email field can't be empty');
                                    window.location.href = '';
                                </script>
                                ";
                                die();
                        }
                        if (empty($subject)) {
                          echo "
                                <script>
                                    alert('Subject field can't be empty');
                                    window.location.href = '';
                                </script>
                                ";
                                die();
                        }
                        if (empty($message)) {
                          echo "
                                <script>
                                    alert('Message field can't be empty');
                                    window.location.href = '';
                                </script>
                                ";
                                die();
                        }
                        
                        $result = $conn->query("insert into inquiry (name,email,subject,message) values ('$name','$email','$subject','$message')"); 
                            if ($result) {
                                echo "
                                <script>
                                    alert('Success! Message sent');
                                    window.location.href = '';
                                </script>
                                ";
                            }
                        
                    }

                ?>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>