

<?php $__env->startSection('content'); ?>


<?php if(!$url): ?>
				<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(url('userChange',$user->id)); ?>"><?php echo e($user->name); ?></a> <a class="" href="<?php echo e(route('user.delete', $user->id)); ?>"><span class="red-delete">X</span></a><br>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if($url): ?>
<form action="<?php echo e(route('user.update', $user->id)); ?>" method="POST">
	Naam:<br>
	<input type="text" name="name" value="<?php echo e($user->name); ?>"><br>
	Achternaam: <br>
	<input type="text" name="lastname" value="<?php echo e($user->lastname); ?>"><br>
	Adres: <br>
	<input type="text" name="adres" value="<?php echo e($user->adres); ?>"><br>

	 <?php echo e(csrf_field()); ?>

  	<?php echo e(method_field('PUT')); ?>﻿
  	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="Bewerk">
</form>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>