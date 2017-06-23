@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
<div class="layer">
    <div class="menu">
          <a href="../"><img src="/images/head.png" class="head"></a>
      <div class="links">
          <a href="{{ url('/normalgallery') }}">Normale Gallerij</a>
          <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
          <a href="{{ url('/login') }}">Login</a>
          <a href="{{ url('/register') }}">Registreren</a>
          <a href="{{ url('/getInsert') }}">Contact</a>
      </div>
    </div>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="container" id="login-container">
        <h1 style="text-align: center;">Registreren</h1><br>
            <form class="center-form" role="form" method="POST" action="{{ route('register') }}">
              {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <h4>Naam:</h4>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span>
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <h4>E-Mailadres:</h4>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                            <span>
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <h4>Wachtwoord:</h4>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                            <span>
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                </div>

                <div>
                    <h4>Bevestig wachtwoord:</h4>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div><br><br>

                <div>
                    <button type="submit" class="submit-button">
                        Registreer
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
