<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    </head>
    <body class="bg">
        @include('layout.inc.nav')
        <!--End-->

@yield('content')

<!--Footer-->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <h3>Site Info</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>News & Events</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>shop</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
        <div class="col-sm-3">
          <h3>utilties</h3>
          <ul>
            <li><a href="#">Duis seo neque auctor</a></li>
            <li><a href="#">consectetur est sed</a></li>
            <li><a href="#">accumsan est</a></li>
            <li><a href="#">duis sed neque auctor</a></li>
            <li><a href="#">consectetur est seo</a></li>
            <li><a href="#">accumsan est</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class=" container">
    <div class="row copy">
      <div class="col-lg-12 text-center">
        copyright 2018. All rights reserved | duis sed neque auctor, consectetur est sed, accumsan est
      </div>
    </div>
  </div>
</footer>
<!--End-->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
