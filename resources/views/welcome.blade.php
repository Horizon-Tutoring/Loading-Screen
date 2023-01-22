<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Horizon Tutoring - Coming Soon</title>
    <meta content=" At Horizon Tutoring, our mission is to help students of all ages and abilities achieve their academic goals. We offer a wide range of services, including one-on-one tutoring, homework help, and personalized learning plans. Our team of experienced tutors is dedicated to providing the best possible support to our students." name="description">
    <meta content="Tutoring, 1Strp1, Horizon Tutoring, Horizon, Tutoring Horizon" name="keywords">
  
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
    <style>
      .x {
          color: red;
      }

      .check {
          color: green;
      }
    </style>
    <!-- =======================================================
    * Template Name: BizLand - v3.9.1
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    * Product was paid for under "Bizland Membership" subscription
    ======================================================== -->
  </head>
<body>

  @include('navbar')

  @if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
  @endif

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center" style="background-color: #152f78;">
    <div class="container" data-aos="zoom-out" data-aos-delay="250">
      <h1>Welcome to</h1>
      <h1>Horizon <span>Tutoring</span></h1>
        <button type="button" class="btn btn-primary" style="margin-top: 20px; border-color: #D8B03B; border-width: 0.7vh; background-color: #D8B03B; color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#exampleModal">GET YOUR FREE SESSION</button>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
    </div>
  </section><!-- End Hero -->



  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>About Us</h2> --}}
          <h3>Find Out More <span>About Us</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/about2.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>We care about our students.</h3>
            <p class="fst-italic">
              At Horizon Tutoring, we know you want the best for your child. So do we. That’s why we’ve built our services from the ground up to be the highest quality while being budget-friendly. 
            </p>
            <ul>
              <li>
                <i style="color:#152f78" class="bx bx-chalkboard"></i>
                <div>
                  <h5>Top Tier Tutors</h5>
                  <p>Our blue card accredited tutors have been handpicked from high ATAR achievers, qualified educators, and experts in their fields.</p>
                </div>
              </li>
              <li>
                <i style="color:#152f78" class="bx bx-calendar"></i>
                <div>
                  <h5>Personalised Sessions</h5>
                  <p>Every child is unique. That’s why our tutors expertly tailor every session to your child to help them work at their best.</p>
                </div>
              </li>
              <li>
                <i style="color:#152f78" class="bx bx-laptop"></i>
                <div>
                  <h5>Online flexibility</h5>
                  <p>We understand how busy life can be. Our online tutors can accommodate a wide variety of times so you can always get your session in.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Services Section ======= -->
    <section id="process" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>The Process</h2> --}}
          <h3>We make it <span>easy</span> for you.</h3>
          <p>We have made it incredibly easy for you to begin your journey with us</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-child"></i></div>
              <h4>Step 1 | <span style="color: #D8B03B">Free Trial</span></h4>
              <p>Engage in a free trial session to see if the Horizon Tutoring Service fits the needs of your child.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Step 2 | <span style="color: #D8B03B">Weekly Focus Sessions</span></h4>
              <p>Begin weekly sessions focussed towards holistic regular checkin on your student. Focus on study habits, plans and assessment advice. Designed to equip your child with the foundational tools needed to succeed.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4>Step 3 | <span style="color: #D8B03B">Specific Sessions & Draft</span></h4>
			        <p>Engage in course specific sessions designed to provide tagerted learning, and a draft review process to ensure your student has all the tools available to achieve their full potential.</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->



	<!-- ======= Pricing Section ======= -->
    <section id="services" class="pricing section-bg">
		<div class="container" data-aos="fade-up">
  
		  <div class="section-title">
			{{-- <h2>Services</h2> --}}
			<h3>What we <span>Offer</span></h3>
			<p>we provide competitive tutoring services with a range of offerings.</p>
		  </div>
  
		  <div class="row" style="padding-bottom: 20px;">
       
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
			  <div class="box">
          <h3 style="font-size: 30px;">Silver Package</h3>
				<ul>
				  <li>Weekly Summary Session <x class="check">✔</x></li>
				  <li>Weekly Focus Session included <x class="check">✔</x></li>
				  <li>Drafting Service Included <x class="x">✘</x></li>
				</ul>

        <p><b>Includes:</b></p>
        <ul>
          <li>1x Regular Session</li>
          <li>1x Focus Session</li>
          <li> </li>
				</ul>
			  </div>
			</div>
  
			<div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
			  <div class="box featured">
				<h3 style="font-size: 30px;">Gold Package</h3>
				<ul>
				  <li>Weekly Summary Session <x class="check">✔</x></li>
				  <li>Weekly Focus Session included <x class="check">✔</x></li>
				  <li>Drafting Service Included <x class="check">✔</x></li>
				</ul>

        <p><b>Includes:</b></p>
        <ul>
          <li>1x Regular Session</li>
          <li>2x Focus Sessions</li>
          <li>1x Comprehensive Draft Review</li>
				</ul>
			  </div>
			</div>
  
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
			  <div class="box">
          <h3 style="font-size: 30px; color: white; background-color: #C0C0C0 ;">Platinum Package</h3>
          <ul>
            <li>Weekly Summary Session <x class="check">✔</x></li>
            <li>Weekly Focus Session included <x class="check">✔</x></li>
            <li>Drafting Service Included <x class="check">✔</x></li>
          </ul>
  
          <p><b>Includes:</b></p>
          <ul>
            <li>1x Regular Session</li>
            <li>4x Focus Sessions</li>
            <li>2x Comprehensive Draft Review</li>
          </ul>
			  </div>
			</div>
  
		  </div>

      {{-- <div class="row" style="text-align: center">
        <button type="button" class="btn btn-primary" style="width: 40%; border-color: #D8B03B; border-width: 0.7vh; background-color: #D8B03B; color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Get a quote now
        </button>
      </div> --}}
  
		</div>
	  </section><!-- End Pricing Section -->


    <!-- ======= Team Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>Our Team</h2> --}}
          <h3>Frequently Asked <span>Questions</span></h3>
          <p></p>
        </div>
        <div class="container" style="text-align: center">
          @foreach ($faq as $faq)
          <h2>{{$faq->id}} | {{$faq->question}}</h2>
          <p>{{$faq->answer}}</p><br>
          @endforeach
        </div>
      </div>
    </section><!-- End Team Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          {{-- <h2>Our Team</h2> --}}
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Take a look at the team working hard to make Horizon Tutoring happen.</p>
        </div>
        <div class="container" style="text-align: center">
          <div class="row">
            <h3><b><u>Our Tutoring Team</u></b></h3>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Gab Wilson</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Founder & Tutor</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Isabella Chantrill</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Tutor</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Joe Grew</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Tutor</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Taryn Morley</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Tutor</i></h6>
                </div>
              </div>
            </div>
          </div>


          <div class="row" style="margin-top: 4vh;">
            <h3><b><u>The Executive Team</u></b></h3>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Gab Wilson</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>CEO & Founder</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Joshua Micallef</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Director of Technology</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Stepan Tkatchenko</b></h3>
                  <h6 class="card-text" style="color:#152f78"><i>Director of Finance</i></h6>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Horizon <span>Tutoring</span></h3>
            <p>
              <strong>Email:</strong> <a style="text-decoration: none;" href="mailto:info@horizontutoring.com.au">info@horizontutoring.com.au</a><br>
              <strong>ABN:</strong> 1134 3032 298<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#hero">Home</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#process">The Process</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#services">Services</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#team">Our Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Take a look at our social networks to keep up to date!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright Horizon Tutoring 2022 @if(date('Y')>2022)-{{ date('Y') }}@endif
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Design by <a href="https://bootstrapmade.com/">BootstrapMade</a>. 
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>