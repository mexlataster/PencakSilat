<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<html>
  <head>
    <meta charset="utf-8">
    <title>Image Gallery</title>
  </head>
  <body>
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
        <div class="title">
          <h4>Image Gallery</h4>
        </div>
      </div>




  </body>
</html>
