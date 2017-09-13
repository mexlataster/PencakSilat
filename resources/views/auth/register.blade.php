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

                <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <h4>Achternaam:</h4>
                        <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>
                        @if ($errors->has('lastname'))
                            <span>
                                <strong>{{ $errors->first('lastname') }}</strong>
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
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('adres') ? ' has-error' : '' }}">
                            <label for="adres" class="col-md-4 control-label">Adres</label>

                            <div class="col-md-6">
                                <input id="adres" type="text" class="form-control" name="adres" value="{{ old('adres') }}" required autofocus>

                                @if ($errors->has('adres'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('woontplaats') ? ' has-error' : '' }}">
                            <label for="woontplaats" class="col-md-4 control-label">Woonplaats</label>

                            <div class="col-md-6">
                                <input id="woontplaats" type="text" class="form-control" name="woontplaats" value="{{ old('woontplaats') }}" required autofocus>

                                @if ($errors->has('woontplaats'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('woontplaats') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{ Form::hidden('user_type', 'normal') }}
                        <br>



                    <button type="submit" class="submit-button">
                        Registreer
                    </button>
                </div>
            </form>
    </div>
</div>
@endsection
