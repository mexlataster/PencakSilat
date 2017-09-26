<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
  <head>
    <meta charset="utf-8">
    <title>Inschrijven
    </title>
  </head>
  <body>
    <div class="layer">
      <div class="flex-center position-ref full-height">
          @if (Route::has('login'))
              <div class="top-right links">
                  @if (Auth::check())

                  @else

                  @endif
              </div>
          @endif

          <div class="menu">
                <a href="../"><img src="/images/head.png" class="head"></a>
            <div class="links">
                <a href="{{ url('/normalgallery') }}">Normale Gallerij</a>
                <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
                <! Kijk of de user is ingelogd.>
                @if (!Auth::check())
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Registreren</a>
                @else
                <a href="{{ url('/logout') }}">Uitloggen</a>
                @endif
                <a href="{{ url('/getInsert') }}">Contact</a>
                <! Check of er een user is ingelogd, en daarna checken of de user admin is>
                @if (isset(Auth::user()->user_type))
                @if (Auth::user()->user_type == 'normal')
                <a href="{{ url('/') }}">Admin</a>
                @endif
                @endif


            </div>
          </div>




  </body>
</html>
