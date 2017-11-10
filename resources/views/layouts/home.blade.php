
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
          <a class="js-scroll-trigger" href="{{ url('/normalgallery') }}">Normale Galerij</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="{{ url('/image-gallery') }}">Admin Galerij</a>
        </li>
        @if(!Auth::check())
        <li>
          <a class="js-scroll-trigger" href="{{ url('/login') }}">Login</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="{{ url('/register') }}">Registreren</a>
        </li>
        @else
        <li>
          <a class="js-scroll-trigger" href="{{ url('/logout') }}">Uitloggen</a>
        </li>
        @endif
        <li>
          <a class="js-scroll-trigger" href="{{ url('/') }}}">Admin</a>
        </li>

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
        <a href="#about" id="header-button" class="btn btn-dark btn-lg js-scroll-trigger">KLIK HIER OM VERDER TE GAAN</a>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
      <div class="container text-center">
        <h2>Pencak Silat</h2><br>
        <p class="lead">
            Aangenomen wordt dat eeuwen geleden priesters en monniken technieken ontwikkelden om zichzelf te verdedigen.<br>
            Hierbij bestudeerden zij het gedrag van dieren, met in het bijzonder de overlevingstechnieken.<br>
            Ook nu nog geven wij aan sommige technieken dierenbenamingen, zoals: <br>Harimau of Macan (tijger), Ular (slang), Monjet of Keteh (aap) en Manyang (wesp).</p>
      </div>
      <!-- /.container -->
    </section>

    <!-- Services -->
    <section id="services" class="services bg-primary text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <h2>Our Services</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Service Name</strong>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-compass fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Service Name</strong>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-flask fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Service Name</strong>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="service-item">
                  <span class="fa-stack fa-4x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-shield fa-stack-1x text-primary"></i>
                  </span>
                  <h4>
                    <strong>Service Name</strong>
                  </h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="btn btn-light">Learn More</a>
                </div>
              </div>
            </div>
            <!-- /.row (nested) -->
          </div>
          <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
      <div class="text-vertical-center">
        <h1>Onze lessen</h1>
      </div>
    </aside>

    <!-- Portfolio -->
    <!-- gewoon even niet nu, oke
    <section id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto text-center">
            <h2>Our Work</h2>
            <hr class="small">
            <div class="row">
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="images/infotos1.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="images/infotos2.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="images/infotos3.jpg">
                  </a>
                </div>
              </div>
              <div class="col-md-6">
                <div class="portfolio-item">
                  <a href="#">
                    <img class="img-portfolio img-fluid" src="images/infotos4.jpg">
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row (nested)
            <a href="#" class="btn btn-dark">View More Items</a>
          </div>
          <!-- /.col-lg-10
        </div>
        <!-- /.row
      </div>
      <!-- /.container
    </section>

    <!-- About -->
    <section id="about" style="background-color:#337ab7; color:white;" class="about">
      <div class="container text-center">
        <h2>Hoe worden onze lessen gegeven</h2><br>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <!-- /.container -->
    </section>

    <!-- Map -->
    <section id="contact" class="map">
      <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
      <br/>
      <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
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
                (123) 456-7890</li>
              <li>
                <i class="fa fa-envelope-o fa-fw"></i>
                <a href="mailto:name@example.com">name@example.com</a>
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
