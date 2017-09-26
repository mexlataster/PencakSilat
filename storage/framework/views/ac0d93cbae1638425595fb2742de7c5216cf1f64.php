<!doctype html>
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
                  <a href="<?php echo e(url('/login')); ?>">Login</a>
                  <a href="<?php echo e(url('/register')); ?>">Register</a>
                  <a href="<?php echo e(url('/getInsert')); ?>">Contact</a>
              </div>
            </div>

          <div class="main">
              <div class="title">
                  <h2>Pencak Silat</h2>
              </div>
              <hr><br><br>
            <div class="text">
                <h2>Manyang</h2><br>
              <button class="button-info" type="button">KLIK HIER OM VERDER TE GAAN</button>
            </div>
          </div>

          <div class="info">
            Aangenomen wordt dat eeuwen geleden priesters en monniken technieken ontwikkelden om zichzelf te verdedigen.<br>
            Hierbij bestudeerden zij het gedrag van dieren, met in het bijzonder de overlevingstechnieken.<br>
            Ook nu nog geven wij aan sommige technieken dierenbenamingen, zoals harimau of macan (tijger), ular (slang), monjet of keteh (aap) en manyang (wesp).
          </div>
        </div>
      </div>
    </body>
</html>
