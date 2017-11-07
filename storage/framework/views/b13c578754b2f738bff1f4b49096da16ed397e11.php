
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo e(asset('css/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/stylish-portfolio.css')); ?>" rel="stylesheet">

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
          <a class="js-scroll-trigger" href="<?php echo e(url('/normalgallery')); ?>">Normale Galerij</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/image-gallery')); ?>">Admin Galerij</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/login')); ?>">Login</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/register')); ?>">Registreren</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/logout')); ?>">Uitloggen</a>
        </li>
        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/')); ?>}">Admin</a>
        </li>

        <li>
          <a class="js-scroll-trigger" href="<?php echo e(url('/getInsert')); ?>">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Header -->
    <header class="header" id="top">
    <a href=""><img class="logo" src="images/head.png"></a>
            <div class="content-box">
              <?php echo $__env->yieldContent('content'); ?>
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
    <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo e(asset('js/stylish-portfolio.js')); ?>"></script>

  </body>

</html>
