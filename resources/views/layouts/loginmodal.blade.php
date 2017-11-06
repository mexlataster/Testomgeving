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
      <form class="center-form" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <h4>E-Mailadres:</h4>
          <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <h4>Wachtwoord:</h4>
          <input id="password" type="password" name="password" required>
              @if ($errors->has('password'))
                  <span>
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div><br>

<div class="modal-footer">
  <div>
      <label>
          <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
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
</div>




<div class="modal fade" id="registermodal">
  <div class="container" id="login-container">
<div class="modal-dialog">
<div class="modal-content" style="text-align: center;">

<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="container" id="login-container" style="text-align: center;">
  <h1 style="text-align: center;">Registreren</h1><br>
      <form class="center-form" style="text-align:center;" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <h4>Naam:</h4>
                  <div class="col-md-3">
                      <input id="name" type="text" class="form-control" name="name" value"{{ old('name') }}" required>
                      @if ($errors->has('name'))
                          <span>
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                    </div>
              </div>
              <br>

          <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
              <h4>Achternaam:</h4>
              <div class="col-md-3">
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required>
                  @if ($errors->has('lastname'))
                      <span>
                          <strong>{{ $errors->first('lastname') }}</strong>
                      </span>
                  @endif
                </div>
          </div><br>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <h4>E-Mailadres:</h4>
              <div class="col-md-3">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                      <span>
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
          </div><br>

                  <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      <h4>Password:</h4>
                      <div class="col-md-3">
                          <input id="password" type="password" class="form-control" name="password" required>
                          @if ($errors->has('password'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('password') }}</strong>
                              </span>
                          @endif
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


                  <div class="form-group{{ $errors->has('adres') ? ' has-error' : '' }}">
                      <h4>Adress</h4>
                      <div class="col-md-3">
                          <input id="adres" type="text" class="form-control" name="adres" value="{{ old('adres') }}" required>
                          @if ($errors->has('adres'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('adres') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <br>



                  <div class="form-group{{ $errors->has('woontplaats') ? ' has-error' : '' }}">
                      <h4>woonplaats</h4>
                      <div class="col-md-3">
                          <input id="woontplaats" type="text" class="form-control" name="woontplaats" value="{{ old('woontplaats') }}" required>
                          @if ($errors->has('woontplaats'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('woontplaats') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <br><br>

                  {{ Form::hidden('user_type', 'normal') }}

                    <div class="modal-footer">

                      <button type="submit" class="submit-button">
                          Registreer
                      </button>
                  </div>
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
