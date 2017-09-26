<!DOCTYPE html>
<html>
<link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
  <head>
    <meta charset="utf-8">
    <title>Inschrijven
    </title>
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




  </body>
</html>
