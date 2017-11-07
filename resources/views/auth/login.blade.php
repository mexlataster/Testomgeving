@extends('layouts.app')

@section('content')
    
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

                <div>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div><br>

                <div>
                    <button type="submit" class="submit-button">
                        Login
                    </button>
                    <br><br><br>
                    <a href="{{ route('password.request') }}">
                        Wachtwoord vergeten?
                    </a>
            </form>
    </div>
</div>
@endsection
