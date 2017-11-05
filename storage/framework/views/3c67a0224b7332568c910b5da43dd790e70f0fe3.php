<?php $__env->startSection('content'); ?>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <div class="main">
              <div class="title">
                  <h2>Pencak Silat</h2>
              </div>
              <hr><br><br><br>
            <div class="text">
                <img src="/images/manyang.png" class="manyang-main"><br><br>
              <button class="button-info" type="button">KLIK HIER OM VERDER TE GAAN</button>
            </div>
          </div>

          <div class="info">
            Aangenomen wordt dat eeuwen geleden priesters en monniken technieken ontwikkelden om zichzelf te verdedigen.<br>
            Hierbij bestudeerden zij het gedrag van dieren, met in het bijzonder de overlevingstechnieken.<br>
            Ook nu nog geven wij aan sommige technieken dierenbenamingen, zoals harimau of macan (tijger), ular (slang), monjet of keteh (aap) en manyang (wesp).
            <a href="/adminmail"> Admin Mail</a>
            <a href="/mail">Normale Mail</a>
          </div>

          <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Launch Horizontal Form
</button>

  <a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal"></a>
<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Modal title
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <form class="form-horizontal" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control"
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            id="inputPassword3" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                            <input type="checkbox"/> Remember me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Sign in</button>
                    </div>
                  </div>
                </form>






            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>







<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>