<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dashui.codescandy.com/dashuipro/pages/forget-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2023 16:57:27 GMT -->
<head>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Codescandy">

 <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-M8S4MT3EYG"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-M8S4MT3EYG');
 </script>


<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">


<!-- Libs CSS -->
<link href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">



<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
  <title>Forget Password | Dash UI - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
  <main class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>
  
           </a>
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-5">
            <div class="mb-4">
              <a href="../index.html"><img src="{{asset('assets/images/brand/logo/logo-2.svg')}}" class="mb-2  text-inverse" alt="Image"></a>
              <p class="mb-6">Don't worry, we'll send you an email to reset your password.
              </p>
            </div>
            <!-- Form -->
            <form>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email" required="">
              </div>
              <!-- Button -->
              <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                  </button>
              </div>
              <span>Go back to login? <a href="{{route('login')}}">sign in</a></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <!-- Libs JS -->
<script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/dist/feather.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>




<!-- Theme JS -->
<script src="{{asset('assets/js/theme.min.js')}}"></script>
</body>



</html>