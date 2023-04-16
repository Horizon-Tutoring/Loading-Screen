{{-- <!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:info@horizontutoring.com.au">info@horizontutoring.com.au</a></i>
      </div>
      {{-- <div class="contact-info d-flex align-items-center">
        <i style="color: gold;;"><b>Illistrative Purposes Only! Not for consumer use.</b></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section> --}}

  

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/"><x  style="color: #152f78" >Horizon</x> <span style="color: #D8B03B">Tutoring</span><a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
		      <li><a class="nav-link scrollto" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="/#process">The Process</a></li>
          <li><a class="nav-link scrollto" href="/#faq">FAQ</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          <li><a class="nav-link scrollto" href="/#team">Our Team</a></li>
          <li><button type="button" class="btn btn-primary" style="border-color: #D8B03B; border-width: 0.7vh; background-color: #D8B03B; color: white; font-weight: bold;" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Find Out More
          </button></li>
          <li>
            <button type="button" class="btn btn-primary" 
                    style="border-color: #D8B03B; border-width: 0.7vh; background-color: #D8B03B; color: white; font-weight: bold;"
                    id="login-btn">
              Login / Signup
            </button>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!-- Registration Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get your free access trial!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="register" method="GET">
          @csrf
        <div class="modal-body">
            {{-- Name Section --}}
            <div class="mb-3">
              <label for="Name" class="form-label">Name*</label>
              <input type="text" class="form-control" name="name" required>
            </div>

            {{-- Email Address --}}
            <div class="mb-3">
              <label for="Email" class="form-label">Email Address*</label>
              <input type="email" class="form-control @error('f_name') is-invalid @enderror" name="email" aria-describedby="emailHelp" required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            {{-- Phone Number --}}
            <div class="mb-3">
              <label for="number" class="form-label">Phone Number*</label>
              <input type="tel" class="form-control" name="number" required>
            </div>

            {{-- # of Children --}}
            {{-- <div class="mb-3">
              <label for="Students" class="form-label">Number of Children</label>
              <select name="students" class="form-select">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
                <option value="6">Six</option> 
              </select>
            </div> --}}

            {{-- Textarea --}}
            <div class="mb-3">
              <label for="text" class="form-label">Put any of your questions here</label>
              <textarea maxlength="500" class="form-control" name="text" required></textarea>
              <div id="emailHelp" class="form-text">Max 1,000 characters</div>
            </div>            
          </div>

        <div class="modal-footer">
          <button type="button submit" class="btn btn-success" style="border-color: #152f78; border-width: 0.7vh; background-color: #152f78; color: white; font-weight: bold;" >Lets Go!</button>
        </div>
      </form>
      </div>
    </div>
  </div>

  <script>
    const loginBtn = document.getElementById('login-btn');
    loginBtn.addEventListener('click', () => {
      window.location.href = 'http://sso.horizontutoring.com.au/login';
    });
  </script>