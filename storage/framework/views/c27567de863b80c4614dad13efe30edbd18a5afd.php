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
            <a href="<?php echo e(url('/normalgallery')); ?>">Normale Gallerij</a>
            <a href="<?php echo e(url('/image-gallery')); ?>">Admin Gallerij</a>
            <a href="<?php echo e(url('/login')); ?>">Login</a>
            <a href="<?php echo e(url('/register')); ?>">Registreren</a>
            <a href="<?php echo e(url('/getInsert')); ?>">Contact</a>
        </div>
      </div>

    <div class="container">
        <form action="<?php echo e((url/postformulier)); ?>" method="post">

        </form>
    </div>
