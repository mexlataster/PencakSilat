<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Pagina</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
   integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
   crossorigin=""></script>

  </head>
  <body>
    <div class="layer">
      <div class="menu">
          <a href="../"><img src="/images/head.png" class="head"></a>
        <div class="links">
            <a href="/normalgallery">Normale Gallerij</a>
            <a href="<?php echo e(url('/image-gallery')); ?>">Admin Gallerij</a>
            <a href="<?php echo e(url('/login')); ?>">Login</a>
            <a href="<?php echo e(url('/register')); ?>">Registreren</a>
            <a href="<?php echo e(url('/getInsert')); ?>">Contact</a>
        </div>
      </div>


          <div class="container">
            <form  action="<?php echo e(url('postInsert')); ?>" method="GET">
              <?php if(Session::has('flash_message')): ?>
                <div class="h1" style="text-align: center;"><span class="glyphicon glyphicon-ok"></span> <em> <?php echo session('flash_message'); ?></em></div>
              <?php endif; ?>
            </form>
            <div class="contact-info">
                <h3>Welkom op de Contact Pagina</h3>
                   Met het formulier hiernaast kunt u uw vragen aan ons kwijt</p><br>

                <h3>Lestijden:</h3>
                <p>Iedere woensdag van 19:00 tot 20:30</p><br>

                <h3>Adres:</h3>
                <p>(Gymzaal Bavinkschool)<br>
                Kolfstraat tegenover<br> parkeergarage Drie Vriendenhof</p><br>
            </div>
            <div class="text-input">
              <h1>Contact Pagina</h1>
                <form action="<?php echo e(url('postInsert')); ?>" method="POST">
                   <?php echo e(csrf_field()); ?>

      
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
                <div id="mapid" style="width: 600px; height: 400px;"></div>
            </div>
          </div>
    </div>



    <div class="map">
      <script>
      var mymap = L.map('mapid').setView([51.813816, 4.669590], 20);
      var marker = L.marker([51.813816, 4.669590]).addTo(mymap);

    	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    		maxZoom: 18,

    		id: 'mapbox.streets'
    	}).addTo(mymap);

      </script>
    </div>
  </body>
</html>
