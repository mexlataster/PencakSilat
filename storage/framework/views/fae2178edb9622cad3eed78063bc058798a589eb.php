<!doctype html>
<link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pencak Silat</title>
    </head>
    <body>
      <div class="layer">
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>

                    <?php else: ?>

                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="menu">
                  <a href="../"><img src="/images/head.png" class="head"></a>
              <div class="links">
                  <a href="<?php echo e(url('/normalgallery')); ?>">Normale Gallerij</a>
                  <a href="<?php echo e(url('/image-gallery')); ?>">Admin Gallerij</a>
                  <! Kijk of de user is ingelogd.>
                  <?php if(!Auth::check()): ?>
                  <a href="<?php echo e(url('/login')); ?>">Login</a>
                  <a href="<?php echo e(url('/register')); ?>">Registreren</a>
                  <?php else: ?>
                  <a href="<?php echo e(url('/logout')); ?>">Uitloggen</a>
                  <?php endif; ?>
                  <a href="<?php echo e(url('/getInsert')); ?>">Contact</a>
                  <! Check of er een user is ingelogd, en daarna checken of de user admin is>
                  <?php if(isset(Auth::user()->user_type)): ?>
                  <?php if(Auth::user()->user_type == 'normal'): ?>
                  <a href="<?php echo e(url('/')); ?>">Admin</a>
                  <?php endif; ?>
                  <?php endif; ?>


              </div>
            </div>

          <div class="main">
              <div class="title">
                  <h2>Pencak Silat</h2>
              </div>
              <hr><br><br><br>
            <div class="text">
                <img src="/images/manyang.png" class="manyang-main"><br><br>
              <button class="button-info" type="button">KLIK HIER OM VERDER TE GAAN</button>
            </div>
          </div>

          <div class="info">
            Aangenomen wordt dat eeuwen geleden priesters en monniken technieken ontwikkelden om zichzelf te verdedigen.<br>
            Hierbij bestudeerden zij het gedrag van dieren, met in het bijzonder de overlevingstechnieken.<br>
            Ook nu nog geven wij aan sommige technieken dierenbenamingen, zoals harimau of macan (tijger), ular (slang), monjet of keteh (aap) en manyang (wesp).
          </div>

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

        </div>
      </div>
    </body>
</html>
