<!-- edit.blade.php -->

<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="content">
        <h2><?php echo e($crud->onderwerp); ?></h2>
        <h3><?php echo e($crud->user); ?></h3>
        <br>
    </div>

<div class="container">
  <form method="post" action="<?php echo e(action('CRUDController@update', $id)); ?>">
    <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">user</label>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="<?php echo e($crud->user); ?>" readonly>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">onderwerp</label>
      <label class="col-sm-3">
      <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="onderwerp" name="onderwerp" value="<?php echo e($crud->onderwerp); ?>" readonly>
    </label>
  </div>
      <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">message</label>
      <div class="col-sm-10">
        <textarea name="post" rows="8" cols="80" readonly><?php echo e($crud->message); ?></textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
