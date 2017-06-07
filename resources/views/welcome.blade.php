<!doctype html>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pencak Silat</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif



            <div class="menu">
                  <img src="/images/head.jpg" class="head">
              <div class="links">

                  <a href="{{ url('/getInsert') }}">Contact</a>

                  <a href="{{ url('/image-gallery') }}">Gallerij</a>

                  <a href="{{ url('/login-page') }}">Login</a>

              </div>
            </div>

            <div class="content">
                <div class="title m-b-md">
                    <h1>Pencak Silat</h1>
                </div>
                <a> hier komt dus tekst dan weetje dat</a>
            </div>
        </div>
    </body>
</html>
