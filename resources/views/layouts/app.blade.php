<!DOCTYPE html>
<html lang="en">

<head>
  <title>TK - Darussalam</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('csslanding/css/open-iconic-bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/animate.css')}}">

  <link rel="stylesheet" href="{{ asset('csslanding/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/magnific-popup.css')}}">

  <link rel="stylesheet" href="{{ asset('csslanding/css/aos.css')}}">

  <link rel="stylesheet" href="{{ asset('csslanding/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/icomoon.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('csslanding/custom.css')}}">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
  <div class="py-2 bg-primary d-none d-sm-block">
    <div class="container">
      <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
        <div class="col-lg-12 ">
          <div class="row d-flex">
            <div class="col-md-5 pr-4 d-flex topper align-items-center">
              <div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-map"></span></div>
              <span class="text">Jl. Jatinegara Kaum I, RT.10/RW.3, Jakarta Timur</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-envelope"></span></div>
              <span class="text">YICDarussalam@tk.com</span>
            </div>
            <div class="col-md pr-4 d-flex topper align-items-center">
              <div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-phone"></span></div>
              <span class="text">0822-1369-9967</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
      <a class="navbar-brand" href="{{ url('/') }}" style="font-variant: small-caps;">
        <img class="mb-1" src="{{asset('images/gambarTK.png')}}" width="60px;">  TK Darussalam
      </a>
      <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="/" class="nav-link">Beranda</a></li>
          <li class="nav-item active"><a href="/profile-sekolah" class="nav-link">Profile Sekolah</a></li>
          <li class="nav-item active"><a href="/guru" class="nav-link">Guru</a></li>
          <li class="nav-item active"><a href="/gallery" class="nav-link">Galeri</a></li>
          <li class="nav-item active"><a href="/contact" class="nav-link">Kontak</a></li>
          <li class="nav-item active"><a href="/info-pendaftaran" class="nav-link">Info Pendaftaran</a></li>
          {{-- <li class="nav-item active"></li> --}}
        </ul>
        @guest
        <a href="/login" class="buttons btn-hover color-10">Login</a>
        @else
        <a href="/panel" class="buttons btn-hover color-10">Panel</a>
        @endguest
      </div>
    </div>
  </nav>
  <!-- END nav -->
  @yield('content')

  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


  <script src="{{ asset('csslanding/js/jquery.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/popper.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery.stellar.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/aos.js')}}"></script>
  <script src="{{ asset('csslanding/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{ asset('csslanding/js/scrollax.min.js')}}"></script>
  <script src="{{ asset('csslanding/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')}}"></script>
  <script src="{{ asset('csslanding/js/google-map.js')}}"></script>
  <script src="{{ asset('csslanding/js/main.js')}}"></script>
  
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
  <script>
      @if (Session::has('success'))
          toastr.success(':)', '{{Session::get('success')}}')
      @endif
  </script>

</body>

</html>