
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>App Name - @yield('title')</title>

    <!-- Styles -->
</head>

<body>

<! layer div, voor de fayed out>
<div class="layer">

    <! menu div >
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

    <! app div >
    <div id="app">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <!-- 
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                     -->

                    <!-- Branding Image -->
                    <!--
                        <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                        </a>
                    -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
        </div>
        </nav>
        </div>


    <! page content >
    @yield('content')
 

    <! footer >
     <div class="footer">
              <div class="footer-left">
                  <h2>Contact</h2>
                  <h3 class="red">Lestijden:</h3>
                  <p>Iedere woensdag van 19:00 tot 20:30</p>

                  <h3 class="red">Adres:</h3>
                  <p>(Gymzaal Bavinkschool)<br>
                  Kolfstraat tegenover<br> parkeergarage Drie Vriendenhof</p><br>
              </div>

              <div class="footer-right">
                  <h2>Links</h2>
                  <h3 class="red">NPSF</h3>
                  <a href="http://www.npsf.nl/" target="_blank">www.npsf.nl</a><br><br>

                  <h3 class="red">Manyang</h3>
                  <a href="https://www.manyang.nl/" target="_blank">www.manyang.nl</a>
              </div>
          </div>
          </div>
    </body>
</html>
