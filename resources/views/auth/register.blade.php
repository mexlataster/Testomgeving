@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
<div class="layer">

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

@endsection
