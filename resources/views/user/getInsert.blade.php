<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Page</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
  integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
  crossorigin=""/>
    <style type="text/css">
                html ,body {
                  width: 600px;
                  margin: 0 auto;
                  padding: 10px;
                }
                .container{
                  background: #fff;
                  box-shadow: 0px, 0px, 10px, gray;
                  padding:10px;
                }
                .message{
                  min-height:100px;

                }

                .information{
                	float: left;
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                }
                h1, td{
                  background-color: #fff;
                  color: #636b6f;
                  font-family: 'Raleway', sans-serif;
                  font-weight: 100;
                }
                img.head{
                	padding:2px;
                  border-radius:10px;
                  margin-left:15px;
                	width:200px;
                	background-color:rgba(255,255,255, 0.1);
                }








    </style>
  </head>

  <script src='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v0.36.0/mapbox-gl.css' rel='stylesheet' />

  <body>
    <a href="../"><img src="/images/head.png" class="head"></a>

    <form  action="{{ url('postInsert')}}" method="GET">
      @if(Session::has('flash_message'))
        <div class="h1"><span class="glyphicon glyphicon-ok"></span><em> {!! session('flash_message') !!}</em></div>
    @endif
    </form>


        <div class="container">
          <h1>Contact Page</h1>
          <hr>
            <form action="{{ url('postInsert')}}" method="POST">
               {{ csrf_field() }}
                  <table>
                      <tr>
                          <td>Name</td>
                          <td><input type="text" name="name" id="name"></td>
                      </tr>
                      <tr>
                          <td>Email adress</td>
                          <td><input type="email" name="email" id="email"></td>
                      </tr>
                      <tr>
                          <td>Message</td>
                          <td><input type="textarea" name="message" id="message" class="message"></td>
                      </tr>
                  </table>
                  <hr>
                    <input type="submit" value="Submit">
            </form>
                <div id='map' style='width: 600px; height: 500px;, margin-top:40px;'></div>
                  <script>
                      mapboxgl.accessToken = 'pk.eyJ1IjoibWV4aWVtb25zdGVyIiwiYSI6ImNqM2UyeHl0aTAwMDgzM3A3a3p5M3JxamgifQ.V6MorPyKRZCeOo_AbsckpQ';
                      var map = new mapboxgl.Map({
                      container: 'map',
                      style: 'mapbox://styles/mapbox/satellite-streets-v9'
                      });
                  </script>
        </div>
  </body>
</html>
