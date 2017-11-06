<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>




    <div class="modal fade" id="myModal">
      <div class="container" id="login-container">
<div class="modal-dialog">
<div class="modal-content" style="text-align: center;">
  <h1 style="text-align: center;">Login</h1><br>
      <form class="center-form" role="form" method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo e(csrf_field()); ?>

          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
              <h4>E-Mailadres:</h4>
          <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
              <?php if($errors->has('email')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
              <h4>Wachtwoord:</h4>
          <input id="password" type="password" name="password" required>
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
  <div>
      <button type="submit" class="submit-button">
          Login
      </button>

</form>
</div>
</div>
</div>
</div>
</div>













  </body>
</html>
