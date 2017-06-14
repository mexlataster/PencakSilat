@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<div class="layer">
            <div class="menu">
                  <a href="../"><img src="/images/head.png" class="head"></a>
              <div class="links">
                  <a href="{{ url('/getInsert') }}">Contact</a>
                  <a href="{{ url('/normalgallery') }}">Normal Gallerij</a>
                  <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Register</a>
              </div>
            </div>
    <div class="container" id="login-container">
        <h1 style="text-align: center;">Login</h1><br>
            <form class="login-form" role="form" method="POST" action="{{ route('login') }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <h4>E-Mail Address:</h4>
                <input style="" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <h4>Password:</h4>
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
                    <br><br>
                    <a href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
            </form>
    </div>
</div>
@endsection
