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




<div class="messagebox">
    <table>
      <?php $__currentLoopData = $Contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td>Naam: <?php echo e($value->name); ?></td>
        </tr>
        <tr>
            <td>E-mailadres:<?php echo e($value->email); ?></td>
        </tr>
        <tr>
            <td>Bericht:<?php echo e($value->message); ?></td>
            <tr>
              <td>Created At:<?php echo e($value->created_at); ?></td>
            </tr>

            <tr>
              <td></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


</div>





  </body>
</html>
