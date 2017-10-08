<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Pagina</title>
    <style rel="stylesheet">

    </style>
  </head>
  <body>
    <h1>Dit is de Admin Pagina</h1>



    <table>

          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
          <?php $__currentLoopData = $Mails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>Naam: <?php echo e($value->user); ?></td>
            </tr>
            <tr>
                <td>Bericht:<?php echo e($value->message); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>




  </body>
</html>
