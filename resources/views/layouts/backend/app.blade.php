<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="../../../../backend/css/bootstrap.min.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="../../../../backend/css/style.default.css" id="theme-stylesheet">
  <!-- jQuery Circle-->
  <link rel="stylesheet" href="../../../../backend/css/grasp_mobile_progress_circle-1.0.0.min.css">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="../../../../backend/css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../../../../backend/img/favicon.ico">
  <!-- Font Awesome CDN-->
  <!-- you can replace it by local Font Awesome-->
  <script src="https://use.fontawesome.com/99347ac47f.js"></script>
  <!-- Font Icons CSS-->
  <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <body>
        <!-- Slide bar -->
        @include('layouts.backend.slidebar')
        <div class="page home-page">
          <!-- header-->
          @include('layouts.backend.header')
          <!-- content-->
          <div class="container-fluid">
            <div id="flash-msg">
              @include('flash::message')
            </div>
            <br>
            @yield('content')
          </div>
          <!-- footer-->
          @include('layouts.backend.footer')
        </div>
        <!-- Javascript files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../../../../backend/js/tether.min.js"></script>
        <script src="../../../../backend/js/bootstrap.min.js"></script>
        <script src="../../../../backend/js/jquery.cookie.js"> </script>
        <script src="../../../../backend/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
        <script src="../../../../backend/js/jquery.nicescroll.min.js"></script>
        <script src="../../../../backend/js/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
        <script src="../../../../backend/js/charts-home.js"></script>
        <script src="../../../../backend/js/front.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
        <!---->
        <script src="{{ asset('../../../../backend/js/app.js') }}"></script>

        @stack('scripts')

        <script>
          $(function () {
      // flash auto hide
      $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
    })
  </script>
  <script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
  </script>
</body>
</html>