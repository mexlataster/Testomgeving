@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/homepage.css')}}" type="text/css">




          <div class="main" id="0">
              <div class="title">
                  <h2>Pencak Silat</h2>
              </div>
              <hr><br><br><br>
            <div class="text">
                <img src="/images/manyang.png" class="manyang-main"><br><br>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <button class="button-info" id="downClick" >KLIK HIER OM VERDER TE GAAN</button>
            </div>
          </div>
          
            <script>
            var scrolled=0;  $(document).ready(function(){
                 $("#downClick").on("click" ,function(){


                   $("html, body").animate({
                           scrollTop:  $("#about").offset().top
                      });
                 });

             });
            </script>



            <section id="about">
          <div class="info">
            Aangenomen wordt dat eeuwen geleden priesters en monniken technieken ontwikkelden om zichzelf te verdedigen.<br>
            Hierbij bestudeerden zij het gedrag van dieren, met in het bijzonder de overlevingstechnieken.<br>
            Ook nu nog geven wij aan sommige technieken dierenbenamingen, zoals harimau of macan (tijger), ular (slang), monjet of keteh (aap) en manyang (wesp).
            <a href="/adminmail"> Admin Mail</a>
            <a href="/mail">Normale Mail</a>
          </div>
        </section>






@endsection
