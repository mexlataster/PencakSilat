<?php $__env->startSection('content'); ?>


    <div class="main">
    <div class="container">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  Naam: <?php echo e($user->name); ?><br>
  Achternaam: <?php echo e($user->lastname); ?><br>
  Adres: <?php echo e($user->adres); ?><br>
  Woonplaats: <?php echo e($user->woontplaats); ?><br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>