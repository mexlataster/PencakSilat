<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Page</title>

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
  integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
  crossorigin=""/>
  </head>

  <script src='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css' rel='stylesheet'/>

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

      <form  action="{{ url('postInsert')}}" method="GET">
        @if(Session::has('flash_message'))
          <div class="h1"><span class="glyphicon glyphicon-ok"></span> <em> {!! session('flash_message') !!}</em></div>
      @endif
      </form>
          <div class="container">
            <div class="text-input">
              <h1>Contact Page</h1>
                <form action="{{ url('postInsert')}}" method="POST">
                   {{ csrf_field() }}
                      <table>
                          <tr>
                              <td>Name:</td>
                              <td><input type="text" name="name" id="name"></td>
                          </tr>
                          <tr>
                              <td>Email adress:</td>
                              <td><input type="email" name="email" id="email"></td>
                          </tr>
                          <tr>
                              <td>Message:</td>
                              <td><textarea rows="4" cols="50" name="message" id="message" class="message"></textarea></td>
                          </tr>
                      </table>
                  <input type="submit" value="Submit" class="submit-button">
                </form>
            </div>
            <div id='map'></div>
              <script>
                  mapboxgl.accessToken = 'pk.eyJ1IjoibWV4aWVtb25zdGVyIiwiYSI6ImNqM2UyeHl0aTAwMDgzM3A3a3p5M3JxamgifQ.V6MorPyKRZCeOo_AbsckpQ';
                  var map = new mapboxgl.Map({
                  container: 'map',
                  style: 'mapbox://styles/mapbox/satellite-streets-v9'
                  });
              </script>
            </div>
          </div>
    </div>
  </body>
</html>
