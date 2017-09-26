<!DOCTYPE html>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<html>
  <head>
    <meta charset="utf-8">
    <title>Fotogalerij</title>
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
            <div class="imagecontainer">
                <div class="title">
                    <h4>Normal Gallery</h4>
                </div><hr>
                <br><br>
                <?php if($images->count()): ?>

                    <div class="images">
                      <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="thumbnail fancybox" rel="ligthbox" href="/images/<?php echo e($image->image); ?>">
                          <img class="img-responsive" alt="" src="/images/<?php echo e($image->image); ?>" />
                        </a>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                <?php endif; ?>

            </div>

            </body>
            <script type="text/javascript">
                $(document).ready(function(){
                    $(".fancybox").fancybox({
                        openEffect: "none",
                        closeEffect: "none"
                    });
                });
            </script>
            </html>


  </body>
</html>
