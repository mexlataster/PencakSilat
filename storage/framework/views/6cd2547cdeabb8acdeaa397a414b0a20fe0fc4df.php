
<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

     <title>App Name - <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Styles -->
</head>

<body>

<! layer div, voor de fayed out>
<div class="layer">

    <! menu div >
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
                        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                        </a>
                    -->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
        </div>
        </nav>
        </div>


    <! page content >
    <?php echo $__env->yieldContent('content'); ?>
 

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
