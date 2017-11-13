
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

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
      <div class="text-vertical-center">
        <h1>Pencak Silat</h1>
        <hr><br>
        <img src="/images/manyang.png" class="manyang-main"><br><br><br>
        <a href="#about" id="downClick" class="btn btn-dark btn-lg js-scroll-trigger">KLIK HIER OM VERDER TE GAAN</a>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
        <h2>Pencak Silat</h2><br>
        <p class="lead">
          Pencak silat (Pentjak silat*) is dé verdedigingskunst van Indonesië. Sinds de oudheid bestaat de noodzaak om jezelf te leren verdedigen. Dit geldt natuurlijk ook voor de bewoners van het Indonesische eilandenrijk.
      </div>
      <!-- /.container -->
    </section>



    <!-- About -->
    <section id="about" style="background-color:#337ab7; color:white;" class="about">
      <div class="container text-center">
        <h2>Hoe worden onze lessen gegeven</h2><br>
        <p class="lead">
          We beginnen de les altijd met een ceremoniele opening, hierna komt de conditie/warming-up.
          Dan houden we een korte drink pauze. <br>
          Hierna splitsten we de les op in Tanding(wedstrijdvechten), Seni(stijl beoefenen) en Gerak Cepat(straat zelfverdediging).<br>
          Aan het einde van de les doen we altijd nog een korte cooling down voor de spieren.

        </p>
            <a href="#" class="btn btn-light">Learn More</a>
      </div>
      <!-- /.container -->
    </section>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyaKbxjIpxEcRmZubSAZsrgA&key=AIzaSyBdi6DkATY7vZ39ZJsu4PMrBGddQFheNxw"></iframe>
      <br/>
      <small>
        <a href="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyaKbxjIpxEcRmZubSAZsrgA&key=AIzaSyBdi6DkATY7vZ39ZJsu4PMrBGddQFheNxw"></a>
      </small>
    </section>

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
                <a href="mailto:manyangdordecht@gmail.com">manyangdordrecht@gmail.com</a>
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
