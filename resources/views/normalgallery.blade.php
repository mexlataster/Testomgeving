<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<html>
  <head>
    <meta charset="utf-8">
    <title>Fotogalerij</title>
  </head>
  <body>


      <div class="layer1">
            <div class="imagecontainer1">
                <div class="title1">
                    <h4>Image Gallery</h4>
                </div><hr>
                <br><br>
                @if($images->count())

                    <div class="images1">
                      @foreach($images as $image)
                        <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                          <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                        </a>
                      @endforeach
                    </div>

                @endif

            </div>

            </body>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
                });
            </script>
            </html>


  </body>
</html>
