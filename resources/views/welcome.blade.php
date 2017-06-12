<!doctype html>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pencak Silat</title>
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
                  <a href="{{ url('/getInsert') }}">Contact</a>
                  <a href="{{ url('/normalgallery') }}">Normal Gallery</a>
                  <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Register</a>
              </div>
            </div>

          <div class="content">
              <div class="title">
                  <h2>Pencak Silat</h2>
              </div><hr>
              <br><br>
            <div class="text">
                <h2>Manyang</h2><br>
              <button class="button-info" type="button">KLIK HIER OM VERDER TE GAAN</button>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
