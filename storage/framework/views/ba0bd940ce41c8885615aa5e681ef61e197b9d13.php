<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <div class="modal fade" id="registermodal">
      <div class="container" id="register-container">
<div class="modal-dialog">
<div class="modal-content" style="text-align: center;">

  <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  <div class="container" id="register-container">
      <h1 style="text-align: center;">Registreren</h1><br>
          <form class="center-form" role="form" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>

              <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                  <h4>Naam:</h4>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                      <?php if($errors->has('name')): ?>
                          <span>
                              <strong><?php echo e($errors->first('name')); ?></strong>
                          </span>
                      <?php endif; ?>
              </div>

              <div class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                  <h4>Achternaam:</h4>
                      <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>
                      <?php if($errors->has('lastname')): ?>
                          <span>
                              <strong><?php echo e($errors->first('lastname')); ?></strong>
                          </span>
                      <?php endif; ?>
              </div>

              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <h4>E-Mailadres:</h4>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                      <?php if($errors->has('email')): ?>
                          <span>
                              <strong><?php echo e($errors->first('email')); ?></strong>
                          </span>
                      <?php endif; ?>
              </div>

                      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              <?php if($errors->has('password')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('password')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                          <div class="col-md-6">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>


                      <div class="form-group<?php echo e($errors->has('adres') ? ' has-error' : ''); ?>">
                          <label for="adres" class="col-md-4 control-label">Adres</label>

                          <div class="col-md-6">
                              <input id="adres" type="text" class="form-control" name="adres" value="<?php echo e(old('adres')); ?>" required autofocus>

                              <?php if($errors->has('adres')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('adres')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>



                      <div class="form-group<?php echo e($errors->has('woontplaats') ? ' has-error' : ''); ?>">
                          <label for="woontplaats" class="col-md-4 control-label">Woonplaats</label>

                          <div class="col-md-6">
                              <input id="woontplaats" type="text" class="form-control" name="woontplaats" value="<?php echo e(old('woontplaats')); ?>" required autofocus>

                              <?php if($errors->has('woontplaats')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('woontplaats')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <?php echo e(Form::hidden('user_type', 'normal')); ?>

                      <br>

                        <div class="modal-footer">

                          <button type="submit" class="submit-button">
                              Registreer
                          </button>
                      </div>





  </body>
</html>

<?php echo $__env->make('layouts.registermodal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>