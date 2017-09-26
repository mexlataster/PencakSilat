<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
</head>

<body>
<div class="layer">
    <div class="menu">
          <a href="../"><img src="/images/head.png" class="head"></a>
      <div class="links">
          <a href="<?php echo e(url('/normalgallery')); ?>">Normale Gallerij</a>
          <a href="<?php echo e(url('/image-gallery')); ?>">Admin Gallerij</a>
          <?php if(!Auth::check()): ?>
          <a href="<?php echo e(url('/login')); ?>">Login</a>
          <a href="<?php echo e(url('/register')); ?>">Registreren</a>
          <?php else: ?>
          <a href="<?php echo e(url('/logout')); ?>">Uitloggen</a>
          <?php endif; ?>
          <a href="<?php echo e(url('/getInsert')); ?>">Contact</a>
      </div>
    </div>
    <div id="app">
            <div class="container">
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
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
