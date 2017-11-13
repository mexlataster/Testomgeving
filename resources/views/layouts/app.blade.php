
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('css/stylish-portfolio.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>

  </head>

  <body>
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle">
      <i class="fa fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle">
          <i class="fa fa-times"></i>
        </a>
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#top">Pencak Silat</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="{{ url('/normalgallery') }}">Foto Galerij</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="{{ url('/videogallery') }}">Video Galerij</a>
        </li>
        {{-- Beginnen met nakijken of de user is ingelogd --}}
        @if(!Auth::check())
        <li>
          <a class="js-scroll-trigger" href="{{ url('/login') }}">Login</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="{{ url('/register') }}">Registreren</a>
        </li>
        @else
        {{-- Check of de user admin is --}}
        @if(Auth::user()->role_id > 2)
        <li>
        <a class="js-scroll-trigger" href="{{ url('/') }}}">Admin</a>
        </li>
        @endif
        <li>
          <a class="js-scroll-trigger" href="{{ url('/logout') }}">Uitloggen</a>
        </li>
        @endif

         <li>
          <a class="js-scroll-trigger" href="{{ url('/getInsert') }}">Contact</a>
        </li>
      </ul>
    </nav>


    <!-- Header -->
    <header class="header" id="top">
    <a href=""><img class="logo" src="images/head.png"></a>
            <div class="content-box">
              @yield('content')
            </div>
    </header>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h4>
              <strong>Adres</strong>
            </h4>
            <p>(Gymzaal Bavinkschool)
              <br>Kolfstraat tegenover parkeergarage Drie Vriendenhof<br>
            </p>

            <p><b>Lestijden:</b>
              <br>Iedere woensdag van 19:00 tot 20:30<br>
            </p>

            <ul class="list-unstyled">
              <li>
                <i class="fa fa-phone fa-fw"></i>
                (+31) 6 52 37 11 70</li>
              <li>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:manyangdordrecht@gmail.com">manyangdordrecht@gmail.com</a>
              </li>
            </ul>
            <br>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Pencak.Silat.Manyang/">
                  <i class="fa fa-facebook fa-fw fa-3x"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="http://npsf.nl/">
                  <i class="fa fa-dribbble fa-fw fa-3x"></i>
                </a>
              </li>
            </ul>
            <hr class="small">
            <p class="text-muted">Copyright &copy; Rolf Lataster 2017</p>
          </div>
        </div>
      </div>
      <a id="to-top" href="#top" class="btn btn-dark btn-lg js-scroll-trigger">
        <i class="fa fa-chevron-up fa-fw fa-1x"></i>
      </a>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ asset('js/stylish-portfolio.js') }}"></script>

  </body>

</html>
