<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Horizon Tutoring - Coming in 2023</title>
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

    <!-- Registration Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register your interest in Horizon Tutoring!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="register" method="GET">
            @csrf
          <div class="modal-body">
              <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="mb-3">
                <label for="Email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('f_name') is-invalid @enderror" name="email" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>

              <div class="mb-3">
                <label for="Students" class="form-label">Number of Children</label>
                <select name="students" class="form-select">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                  <option value="4">Four</option>
                  <option value="5">Five</option>
                  <option value="6">Six</option> 
                </select>
              </div>

              <div class="mb-3 form-check">
                <input type="hidden" class="form-check-input" name="marketing" value="off">
                <input type="checkbox" class="form-check-input" name="marketing" checked>
                <label class="form-check-label" for="exampleCheck1">Recieve Marketing Material</label>
              </div>
              
            
          </div>
          <div class="modal-footer">
            <button type="button submit" class="btn btn-success">Register Interest</button>
          </div>
        </form>
        </div>
      </div>
    </div>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="250">
      <h1>Welcome to Horizon <span>Tutoring</span></h1>
      <h2>The best tutoring service, at half the cost!</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
      </div>
    </div>
  </section><!-- End Hero -->



  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <h3>Find Out More <span>About Us</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <h3>Personalised approach for your child</h3>
            <p class="fst-italic">
              We provide multiple different services to cater to different student requirements. Inclusive of;
            </p>
            <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Talented Tutors</h5>
                  <p>All of our tutors are of a high standard, to provide the most amazing service possible to your child.</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Flexable Session Schedule</h5>
                  <p>Students are provided with multiple options to tailor to their needs.</p>
                </div>
              </li>
            </ul>
            <p>
              We provide different services, tailor-made to help your children to achieve the most possible.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

{{-- 

    <!-- ======= Services Section ======= -->
    <section id="steps" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Incredibly Easy Process</h2>
          <h3>Easy navigation is our middle name!</h3>
          <p>We have made it incredibly easy for you to begin your journey with us</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>Step 1</h4>
              <p>Step 1 Description which includes significant information about the service that can be selected</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4>Step 2</h4>
              <p>Step 2 Description which includes significant information about the service that can be selected</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4>Step 3</h4>
			  <p>Step 3 Description which includes significant information about the service that can be selected</p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->



	<!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
		<div class="container" data-aos="fade-up">
  
		  <div class="section-title">
			<h2>Pricing</h2>
			<h3>Check our <span>Pricing</span></h3>
			<p>We provide competitive pricing on our range of services</p>
		  </div>
  
		  <div class="row">
  
			<div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
			  <div class="box">
				<h3>Service 1</h3>
				<h4><sup>$</sup>0<span> / month</span></h4>
				<ul>
				  <li>Aida dere</li>
				  <li>Nec feugiat nisl</li>
				  <li>Nulla at volutpat dola</li>
				  <li class="na">Pharetra massa</li>
				  <li class="na">Massa ultricies mi</li>
				</ul>
			  </div>
			</div>
  
			<div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
			  <div class="box featured">
				<h3>Service 2</h3>
				<h4><sup>$</sup>19<span> / month</span></h4>
				<ul>
				  <li>Aida dere</li>
				  <li>Nec feugiat nisl</li>
				  <li>Nulla at volutpat dola</li>
				  <li>Pharetra massa</li>
				  <li class="na">Massa ultricies mi</li>
				</ul>
			  </div>
			</div>
  
			<div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
			  <div class="box">
				<h3>Service 3</h3>
				<h4><sup>$</sup>29<span> / month</span></h4>
				<ul>
				  <li>Aida dere</li>
				  <li>Nec feugiat nisl</li>
				  <li>Nulla at volutpat dola</li>
				  <li>Pharetra massa</li>
				  <li>Massa ultricies mi</li>
				</ul>
			  </div>
			</div>
  
		  </div>
  
		</div>
	  </section><!-- End Pricing Section -->
 --}}

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Take a look at the team brining you Horizon Tutoring in 2023!</p>
        </div>

        {{-- <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img" style="height: 300px; width 300px;">
                <img src="{{asset('assets/img/team/Gab.jpg')}}" class="img-fluid" alt="" >
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Gab Wilson</h4>
                <span>Founder & Executive Director</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img" style="height: 300px; width 300px;">
                <img src="{{asset('assets/img/team/Joshua.jpg')}}" class="img-fluid" alt="" >
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Joshua Micallef</h4>
                <span>Director of Technology</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img" style="height: 300px; width 300px;">
                <img src="{{asset('assets/img/team/Joe.jpg')}}" class="img-fluid" alt="" >
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Joe</h4>
                <span>Director of Human Resources</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img" style="height: 300px; width 300px;">
                <img src="{{asset('assets/img/team/Isabella.jpg')}}" class="img-fluid" alt="" >
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Isabella</h4>
                <span>Director of Tutoring</span>
              </div>
            </div>
          </div>

        </div> --}}
        <div class="container" style="text-align: center">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Gab Wilson</b></h3>
                  <h6 class="card-text"><i>CEO & Founder</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Hugo Burton</b></h3>
                  <h6 class="card-text"><i>Director of Technology</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Stepan Tkatchenko</b></h3>
                  <h6 class="card-text"><i>Director of Finance</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Isabella Chantrill</b></h3>
                  <h6 class="card-text"><i>Director of Tutoring</i></h6>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Joe Grew</b></h3>
                  <h6 class="card-text"><i>Director of Human Resources</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Joshua Micallef</b></h3>
                  <h6 class="card-text"><i>Head Developer</i></h6>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card h-100">
                <div class="card-body">
                  <h3 class="card-title"><b>Taryn Morley</b></h3>
                  <h6 class="card-text"><i>Head of Tutoring</i></h6>
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
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#hero">Home</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right scrollto"></i> <a href="/#team">Team</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
          </div>

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Take a look at our social networks to keep up to date!</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div> --}}

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