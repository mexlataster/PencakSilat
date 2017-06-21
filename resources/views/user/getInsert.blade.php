<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
  integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
  crossorigin=""/>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Pagina</title>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>

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
            <form  action="{{ url('postInsert')}}" method="GET">
              @if(Session::has('flash_message'))
                <div class="h1" style="text-align: center;"><span class="glyphicon glyphicon-ok"></span> <em> {!! session('flash_message') !!}</em></div>
              @endif
            </form>
            <div class="text-input">
              <h1>Contact Pagina</h1>
                <form action="{{ url('postInsert')}}" method="POST">
                   {{ csrf_field() }}
                      <table>
                          <tr>
                              <td>Naam:</td>
                              <td><input type="text" name="name" id="name"></td>
                          </tr>
                          <tr>
                              <td>E-mailadres:</td>
                              <td><input type="email" name="email" id="email"></td>
                          </tr>
                          <tr>
                              <td>Bericht:</td>
                              <td><textarea rows="4" cols="50" name="message" id="message" class="message"></textarea></td>
                          </tr>
                      </table>
                  <input type="submit" value="Submit" class="submit-button">
                </form>
                <div id="mapid"></div>
            </div>
          </div>
    </div>
  </body>
</html>
