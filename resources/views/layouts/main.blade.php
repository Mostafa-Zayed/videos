<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/img//apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('frontend/img//favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>@yield('title','Videos')</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('frontend/css/paper-kit.css?v=2.2.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('frontend/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <!-- Navbar -->
  @include('includes.navbar')
  <!-- End Navbar -->
  <div class="page-header section-dark" style="background-image: url({{asset('frontend/img/antoine-barres.jpg')}})">
    <div class="filter"></div>
    <div class="content-center">
      <div class="container">
        <div class="title-brand">
          <h1 class="presentation-title">IT Videos</h1>
          <div class="fog-low">
            <img src="{{asset('frontend/img/fog-low.png')}}" alt="">
          </div>
          <div class="fog-low right">
            <img src="{{asset('frontend/img/fog-low.png')}}" alt="">
          </div>
        </div>
        <h2 class="presentation-subtitle text-center">Make your mark with a Free Bootstrap 4 UI Kit! </h2>
      </div>
    </div>
    <div class="moving-clouds" style="background-image: url({{asset('frontend/img/clouds.png')}}); "></div>
    <h6 class="category category-absolute">Designed and coded by
      <a href="https://www.facebook.com/mostafa.abdeltwab.9" target="_blank">
        <img src="{{asset('frontend/img/creative-tim-white-slim3.png')}}" class="creative-tim-logo">
      </a>
    </h6>
  </div>
  <div class="main">
    <div class="section section-buttons">
      <div class="container">
          @yield('content')
      </div>
    </div>

    @include('includes.footer')
    <!--   Core JS Files   -->
    <script src="{{asset('frontend/js/core/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('frontend/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{asset('frontend/js/plugins/bootstrap-switch.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('frontend/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{asset('frontend/js/plugins/moment.min.js')}}"></script>
    <script src="{{asset('frontend/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('frontend/js/paper-kit.js?v=2.2.0')}}" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <script>
      $(document).ready(function() {

        if ($("#datetimepicker").length != 0) {
          $('#datetimepicker').datetimepicker({
            icons: {
              time: "fa fa-clock-o",
              date: "fa fa-calendar",
              up: "fa fa-chevron-up",
              down: "fa fa-chevron-down",
              previous: 'fa fa-chevron-left',
              next: 'fa fa-chevron-right',
              today: 'fa fa-screenshot',
              clear: 'fa fa-trash',
              close: 'fa fa-remove'
            }
          });
        }

        function scrollToDownload() {

          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
      });
    </script>
</body>

</html>
