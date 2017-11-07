<?php $__env->startSection('content'); ?>
    
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

                <div>
                    <label>
                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                    </label>
                </div><br>

                <div>
                    <button type="submit" class="submit-button">
                        Login
                    </button>
                    <br><br><br>
                    <a href="<?php echo e(route('password.request')); ?>">
                        Wachtwoord vergeten?
                    </a>
            </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>