<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <style>
        .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <section class="h-100 gradient-form" style="background-color: #4e1010;">
  <div class="container-fluid py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-12">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Mehran_University_of_Engineering_and_Technology_logo.svg/1200px-Mehran_University_of_Engineering_and_Technology_logo.svg.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-1 pb-1 ">MUET Undergraduate Admission Portal</h4>
                  <p class="text-center">New Here? Create Account with valid details</p>

                </div>

                <big><b class="text-center text-danger"> <x-jet-validation-errors class="mb-4" /></b></big>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                  <div class="form-outline mb-2">
                    <label class="form-label" for="name">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control"
                      placeholder="Student Name" required autofocus autocomplete="name" />
                  </div>

                  <div class="form-outline mb-2">
                    <label class="form-label" for="fname">Father Name</label>
                    <input type="text" name="fname" id="fname" class="form-control"
                      placeholder="Father Name" required autocomplete="off"" />
                  </div>

                  <div class="form-outline mb-2">
                    <label class="form-label" for="email">Emal Address <span class="text-danger">*</span></label>
                    <input type="email" name="email" id="email" class="form-control"
                      placeholder="abc@example.com" required />
                  </div>

                  
                  <div class="form-outline mb-2">
                    <label class="form-label" for="cnic">CNIC/B-FORM <span class="text-danger">*</span></label>
                    <input type="text" name="cnic" id="cnic" class="form-control"
                      placeholder="4160206412151" />
                  </div>

                  <div class="form-outline mb-2">
                    <label class="form-label" for="password" >Password</label>
                    <input type="password" id="password" name="password" required autocomplete="new-password"  class="form-control" />
                  </div>

                  <div class="form-outline mb-2">
                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required autocomplete="new-password" />
                  </div>
                  

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-1" type="submit">Log
                      in</button>
                    {{-- <a class="text-muted" href="#!">Forgot password?</a> --}}
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2 mr-2">Already have an account?</p>
            <a href="{{route('login')}}" class="btn btn-outline-danger">Sign In</a>
                  </div>

                </form>

              </div>
            </div>
            <!-- <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-2">
                <h4 class="mb-1">We are more than just a company</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>