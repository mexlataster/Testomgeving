<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
<div class="layer">

    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="container" id="login-container" style="text-align: center;">
      <h1 style="text-align: center;">Registreren</h1><br>
          <form class="center-form" style="text-align:center;" role="form" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>

              <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                  <h4>Naam:</h4>
                      <div class="col-md-3">
                          <input id="name" type="text" class="form-control" name="name" value"<?php echo e(old('name')); ?>" required>
                          <?php if($errors->has('name')): ?>
                              <span>
                                  <strong><?php echo e($errors->first('name')); ?></strong>
                              </span>
                          <?php endif; ?>
                        </div>
                  </div>
                  <br>

              <div class="form-group<?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
                  <h4>Achternaam:</h4>
                  <div class="col-md-3">
                      <input id="lastname" type="text" class="form-control" name="lastname" value="<?php echo e(old('lastname')); ?>" required>
                      <?php if($errors->has('lastname')): ?>
                          <span>
                              <strong><?php echo e($errors->first('lastname')); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
              </div><br>

              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <h4>E-Mailadres:</h4>
                  <div class="col-md-3">
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                      <?php if($errors->has('email')): ?>
                          <span>
                              <strong><?php echo e($errors->first('email')); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
              </div><br>

                      <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          <h4>Password:</h4>
                          <div class="col-md-3">
                              <input id="password" type="password" class="form-control" name="password" required>
                              <?php if($errors->has('password')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('password')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <br>

                      <div class="form-group">
                          <h4>Confirm Password</h4>
                            <div class="col-md-3">
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                          </div>
                      </div>
                      <br>


                      <div class="form-group<?php echo e($errors->has('adres') ? ' has-error' : ''); ?>">
                          <h4>Adress</h4>
                          <div class="col-md-3">
                              <input id="adres" type="text" class="form-control" name="adres" value="<?php echo e(old('adres')); ?>" required>
                              <?php if($errors->has('adres')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('adres')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <br>



                      <div class="form-group<?php echo e($errors->has('woontplaats') ? ' has-error' : ''); ?>">
                          <h4>woonplaats</h4>
                          <div class="col-md-3">
                              <input id="woontplaats" type="text" class="form-control" name="woontplaats" value="<?php echo e(old('woontplaats')); ?>" required>
                              <?php if($errors->has('woontplaats')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('woontplaats')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>
                      <br><br>

                      <?php echo e(Form::hidden('user_type', 'normal')); ?>


                      <div class="modal-footer">

                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <button type="submit" class="submit-button">
                            Registreer
                        </button>
                      </form>
                      <div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>