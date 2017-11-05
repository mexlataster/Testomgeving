<!DOCTYPE html>
<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" type="text/css">
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videogalerij</title>
    <style type="text/css">
        body {
          padding-top: 50px;
          position: relative;
          background-image: url("/images/Silat.jpg");
          background-repeat: no-repeat;
          background-size: cover;
        	background-attachment: fixed;
          z-index:-100;
          }
      }
      pre {
          tab-size: 8;
      }

      @media  screen and (max-width: 768px) {
          .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              transition:left .4s;
          }
          .side-collapse-container.out{
              left:200px;
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:200px;
              position:fixed;
              overflow:hidden;
              transition:width .4s;
          }
          .side-collapse.in {
              width:0;
          }
      }
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </head>
  <body>

    <header role="banner" class="navbar navbar-fixed-top navbar-inverse">
          <div class="layer">
            <div class="menu">
              <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle pull-left"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="navbar-inverse side-collapse in">
              <nav role="navigation" class="navbar-collapse">
                <ul class="nav navbar-nav">
                  <li><a href="/normalgallery" style="color:red;">Normale Gallerij</a></li>
                  <li><a href="<?php echo e(url('/image-gallery')); ?>" style="color:red;">Admin Gallerij</a></li>
                  <li><a href="<?php echo e(url('/login')); ?>" style="color:red;">Login</a></li>
                  <li><a href="<?php echo e(url('/register')); ?>" style="color:red;">Registreren</a></li>
                  <li><a href="<?php echo e(url('/getInsert')); ?>" style="color:red;">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </header>

    <script type="text/javascript">
    $(document).ready(function() {
                var sideslider = $('[data-toggle=collapse-side]');
                var sel = sideslider.attr('data-target');
                var sel2 = sideslider.attr('data-target-2');
                sideslider.click(function(event){
                    $(sel).toggleClass('in');
                    $(sel2).toggleClass('out');
                });
            });
    </script>

<div class="container-fluid pb-video-container">
    <div class="col-md-10 col-md-offset-1">
        <h3 style="color: red;">Pencak Silat in Movies</h3>
        <div class="row pb-row">
            <div class="col-md-3 pb-video">
              <label class="form-control label-danger text-center" style="color: black;">Dawid Szatarski Pencak Silat</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="http://www.youtube.com/embed/ydjBI3-5Cac?" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-3 pb-video">
              <label class="form-control label-danger text-center" style="color: black;">The Raid 2 Final Fight</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="http://www.youtube.com/embed/RCFwwSq10aU?" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-3 pb-video">
              <label class="form-control label-danger text-center" style="color: black;">The Raid 1 Fights</label>
                <iframe class="pb-video-frame " width="100%" height="230" src="http://www.youtube.com/embed/hIyColHRbA8?" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-3 pb-video">
              <label class="form-control label-danger text-center" style="color: black;">The Accountant Fight scene</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="http://www.youtube.com/embed/wPWY0b4kADk?" frameborder="0" allowfullscreen></iframe>

            </div>
        </div>
        <h3 style="color: red;">Training en Wedstrijden Pencak Silat</h3>
        <div class="row pb-row">
            <div class="col-md-3 pb-video embed-responsive-4by3">
              <label class="form-control label-danger text-center" style="color: black;">This is Pencak Silat</label>
              <iframe class="embed-responsive-item" width="100%" height="230" src="http://www.youtube.com/embed/I4369u0eotM?" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-3 pb-video">
                <label class="form-control label-danger text-center" style="color: black;">Tanding Pencak Silat</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="http://www.youtube.com/embed/IdgszOBdarc?" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-3 pb-video">
              <label class="form-control label-danger text-center" style="color: black;">Iko Uwais Training</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/7UfHulhmUFQ?" frameborder="0" allowfullscreen></iframe>

            </div>
            <div class="col-md-3 pb-video">
                <label class="form-control label-danger text-center" style="color: black;">Silat Dropping Techniques</label>
                <iframe class="pb-video-frame" width="100%" height="230" src="https://www.youtube.com/embed/jSZxbsrXVlI?" frameborder="0" allowfullscreen></iframe>

            </div>
          </div>
        </div>
    </div>
</div>




<style>

  .pb-video-container{
    display: block;
  }
    .pb-video {
      padding: 5px;
    }
    .pb-video:hover {
      background: #2c3e50;
    }
    .pb-row {
      margin-bottom: 10px;
    }
    .container-fluid {
      padding-right: 15px;
      padding-left: 15px;
      margin-right: auto;
      margin-left: auto;
      display: block;
  }

</style>
</body>
</html>

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>