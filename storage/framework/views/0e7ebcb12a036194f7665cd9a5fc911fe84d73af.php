<!-- edit.blade.php -->

<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="content">
        <br>
    </div>

<div class="container">
  <form method="post" action="<?php echo e(action('MailController@update', $id)); ?>">
    <div class="form-group row">
      <?php echo e(csrf_field()); ?>

      <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">user</label>
      <div class="col-sm-3">
        <h2><?php echo e($crud->user); ?></h2>
      </div>
    </div>

    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">onderwerp</label>
      <label class="col-sm-3">
      <h2><?php echo e($crud->onderwerp); ?></h2>
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
      <a href="/mail/create" class="btn btn-primary">Reageer</a>
    </div>
  </form>
</div>
