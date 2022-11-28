@extends('app')

<body>
    @include('navbar')

    <div class="container" style="padding-top: 150px;">

        <div class="section-title">
          <h2>Register your Interest</h2>
          <p>Interesting in joining us during 2023? </p>
        </div>

          <div class="col-lg-12">
            <form action="register-interest" method="post" role="form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="text-center"><button style="cursor: not-allowed;" type="submit">Register your Interest</button></div>
            </form>
          </div>


      </div>
</body>