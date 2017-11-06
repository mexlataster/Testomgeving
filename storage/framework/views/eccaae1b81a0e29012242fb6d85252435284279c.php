<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <div class="modal fade" id="loginmodal">
      <div class="container" id="login-container">
<div class="modal-dialog">
<div class="modal-content">

  <h1 style="text-align: center;">Login</h1><br>
      <form class="center-form" role="form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>


          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>" style="text-align: center;">
              <h4>E-Mailadres:</h4>
          <input id="email" type="email" name="email" style="text-align: center;" value="<?php echo e(old('email')); ?>" required autofocus>
              <?php if($errors->has('email')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>

          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>" style="text-align: center;">
              <h4>Wachtwoord:</h4>
          <input id="password" type="password" style="text-align: center;" name="password" required>
              <?php if($errors->has('password')): ?>
                  <span>
                      <strong><?php echo e($errors->first('password')); ?></strong>
                  </span>
              <?php endif; ?>
          </div><br>

<div class="modal-footer">
  <div>
      <label>
          <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
      </label>
  </div>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="submit-button">
      Login
  </button>
<div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>




<div class="modal fade" id="registermodal">
  <div class="container" id="login-container">
<div class="modal-dialog">
<div class="modal-content" style="text-align: center;">

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


                  <script>
                  $('#registermodal').on('shown.bs.modal', function () {
    $(this).find('.modal-dialog').css({width:'auto',
                               height:'auto',
                              'max-height':'100%'});
                            });

                  </script>













  </body>
</html>
