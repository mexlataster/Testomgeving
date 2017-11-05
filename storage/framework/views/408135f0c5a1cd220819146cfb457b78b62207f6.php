<!-- index.blade.php -->

<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
  <br>
    <div class="content">
        <h1>Inbox</h1>
    </div>

  <div class="container">
    <table class="table table-hover">
    <thead>
      <tr>
        <th><a href="adminmail/create" class="btn btn-info btn-lg">Mail Maken</a></th>
        <th>Afzender</th>
        <th>Onderwerp</th>
        <th>Bericht</th>
      </tr>
    </thead>
    <tbody>
      <?php $__currentLoopData = $cruds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td></td>
        <td><?php echo e($post['user']); ?></td>
        <td><?php echo e($post['onderwerp']); ?></td>
        <td><a href="<?php echo e(action('AdminMailController@edit', $post['id'])); ?>" class="btn btn-info btn-lg">Lezen</a></td>
        <td>
          <form action="<?php echo e(action('AdminMailController@destroy', $post['id'])); ?>" method="post">
            <?php echo e(csrf_field()); ?>

            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger btn-lg" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
  </div>
