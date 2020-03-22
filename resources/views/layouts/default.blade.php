<!doctype html>
<html class="no-js" lang="de">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Webshop</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('includes.head')


  @yield('stylesheet')
</head>
<body @if (isset($bodyClass)) class="{{ $bodyClass }}" @endif>
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--Header Start-->
  <header>
    <div class="header-main">
      <div class="container">
        <div class="header-content">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
              <div class="logo">
                <a href="/"><img src="https://via.placeholder.com/150x40" alt="logo"></a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-8">
              <div id="search-category">
                <form class="search-box" action="#" method="post">

                  <input type="search" placeholder="Search here..." id="text-search" name="search">
                  <button id="btn-search-category" type="submit">
                    <i class="icon-search"></i>
                  </button>
                </form>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4">
              <ul class="header-r-cart">
                <li><a class="cart" href="cart.html">Cart:2 items</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Mainmenu Start-->
    <div class="mainmenu-area d-lg-block d-none">
      <div id="sticker">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 d-xl-block d-lg-block d-none">
              <div class="mainmenu">
                <nav>
                  <ul id="nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of Mainmenu-->
    <!-- Mobile Menu Area start -->
    <div class="mobile-menu-area fix">
      <div class="container">
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul>
                  <li><a href="/">Home</a></li>
                    <li><a href="/products">Products</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Menu Area end -->
    </header>
    @include('includes.breadcrumb')

    @yield('content')


    @include('includes.footer')

    <script src="/assets/js/vendor/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="/assets/lib/nivo-slider/home.js" type="text/javascript"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/jquery-price-slider.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/jquery.countdown.min.js"></script>
    <script src="/assets/js/jquery.sticky.js"></script>
    <script src="/assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
    @yield('javascript')
  </body>
  </html>
