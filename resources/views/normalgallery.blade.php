<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<html>
  <head>
    <meta charset="utf-8">
    <title>Fotogalerij</title>
  </head>
  <body>
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
        <div class="container">
          <div class="title">
            <h4>Normale Gallerij</h4>
          </div>
        </div>
      </div>
  </body>
</html>
