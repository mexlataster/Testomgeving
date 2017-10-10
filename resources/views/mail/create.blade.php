
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Mail maken</title>
  </head>
  <body>
    <div class="container">
        <div class="content">
            <h1>Mail Maken</h1>
        </div>
        <br>
        <br>
    <div class="container">
      <form method="post" action="{{url('mail')}}">
        <div class="form-group row">
          {{csrf_field()}}
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Email-adres</label>
          <div class="col-sm-10">
            <label for="ex1">
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="user" name="user">
            </label>
          </div>
          <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Onderwerp</label>
          <div class="col-sm-10">
            <label for="ex2">
            <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="onderwerp" name="onderwerp">
          </label>
          </div>
        </div>
        <div class="form-group row">
          <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Bericht</label>
          <div class="col-sm-10">
            <textarea name="message" rows="8" cols="80"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-2"></div>
          <input type="submit" class="btn btn-primary">
        </div>
      </form>
    </div>
  </body>
</html>
