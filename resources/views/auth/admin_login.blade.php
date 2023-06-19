<!doctype html>
<html lang="en">
  <head>
    <title>Login Here</title>
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
      <section class="h-100 gradient-form" style="background-color: #168161;">
  <div class="container py-3 h-100" >
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="offset-md-1 col-xl-8 ">
        <div class="card rounded-3 text-black" >
          <div class="row g-0" style="background-color: #fff;">
            <div class="offset-2 col-lg-8">
              <div class="card-body p-md-3 mx-md-2">

                <div class="text-center">
                  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e3/Mehran_University_of_Engineering_and_Technology_logo.svg/1200px-Mehran_University_of_Engineering_and_Technology_logo.svg.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-1 pb-1">Muet Admin Login</h4>
                    <big><b class="text-success text-center ">Please Log into Your Account</b></big>
                </div>

                <big><b class="text-center text-danger mb-0"> <x-jet-validation-errors class="mb-4" /></b></big>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                    @csrf
                 
                  <div class="form-outline mb-4 mt-3">
                      <label class="form-label" for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="form-control" />
                  </div>

                  <div class="form-outline mb-4">
                      <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" />
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                  </div>

                

                </form>

              </div>
            </div>
            {{-- <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Instructions!</h4>
                <p class="mb-2">1. Before proceeding to online admission form, you are advised to read the <a href="https://ugadmissions.muet.edu.pk/guidelines.php">Guidelines</a>. It will help you to properly fill the form.</p>
                <p class="mb-2">2. If you have any query, then you may contact on <a href="http://helpdesk.muet.edu.pk/">Help Desk</a>. Note: Please mentioned your CNIC number with your query. You will be replied within 48 Hours. You don't have to travel to Mehran UET for any query.</p>
                <p>
                    3. Candidates may get answers of their queries at <a href="https://ugadmissions.muet.edu.pk/faq.php">Frequently Asked Questions [click here]</a> 
                </p>
              </div>
            </div> --}}
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