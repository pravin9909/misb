
<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
  <!-- Owl Theme Default Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
  <!-- Owl Carousel Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
  <!-- Remixicon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/remixicon.css')}}" />
  <!-- Flaticon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}" />
  <!-- Meanmenu Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}" />
  <!-- Animate Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
  <!-- Odometer Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}" />
  <!-- Magnific Popup Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}" />
  <!-- Date Picker Min CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/date-picker.min.css')}}" />
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @stack('styles')
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{asset('assets/images/favicon.png') }}"> 
  <!-- Title -->
  <title>MASH-International School of Business</title>
</head>

<body>
  <!-- Start Preloader Area -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="pl-flip-1 pl-flip-2"></div>
    </div>
  </div>
  <!-- End Preloader Area -->

  <?php //include('header.php') ?>
  @include('layouts.header')

  <!-- Start Banner Area -->
@yield('content')
  <!-- End Study Area -->

<?php //include('footer.php') ?>
@include('layouts.footer')

  <!-- Jquery Min JS -->
  <script src="{{ asset('assets/js/jquery.min.js')}} "></script>
  <!-- Bootstrap Bundle Min JS -->
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}} "></script>
  <!-- Meanmenu Min JS -->
  <script src="{{ asset('assets/js/meanmenu.min.js')}} "></script>
  <!-- Owl Carousel Min JS -->
  <script src="{{ asset('assets/js/owl.carousel.min.js')}} "></script>
  <!-- Wow Min JS -->
  <script src="{{ asset('assets/js/wow.min.js')}} "></script>
  <!-- Appear Min JS -->
  <script src="{{ asset('assets/js/appear.min.js')}} "></script>
  <!-- Odometer Min JS -->
  <script src="{{ asset('assets/js/odometer.min.js')}} "></script>
  <!-- Jarallax Min JS -->
  <script src="{{ asset('assets/js/jarallax.min.js')}} "></script>
  <!-- Bootstrap Datepicker Min JS -->
  <script src="{{ asset('assets/js/bootstrap-datepicker.min.js')}} "></script>
  <!-- Magnific Popup Min JS -->
  <script src="{{ asset('assets/js/magnific-popup.min.js')}} "></script>
  <!-- Form Validator Min JS -->
  <script src="{{ asset('assets/js/form-validator.min.js')}} "></script>
  <!-- Contact JS -->
  <script src="{{ asset('assets/js/contact-form-script.js')}} "></script>
  <!-- Ajaxchimp Min JS -->
  <script src="{{ asset('assets/js/ajaxchimp.min.js')}} "></script>
  <!-- Custom JS -->
  <script src="{{ asset('assets/js/custom.js')}} "></script>
  @yield('script')
</body>

</html>