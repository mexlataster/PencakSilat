<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" type="text/css">
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
    <div class="container" id="login-container">
        <h1 style="text-align: center;">Registreren</h1><br>
            <form class="center-form" role="form" method="POST" action="<?php echo e(route('register')); ?>">

                <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                    <h4>Naam:</h4>
                        <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                        <?php if($errors->has('name')): ?>
                            <span>
                                <strong><?php echo e($errors->first('name')); ?></strong>
                            </span>
                        <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                    <h4>E-Mailadres:</h4>
                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                        <?php if($errors->has('email')): ?>
                            <span>
                                <strong><?php echo e($errors->first('email')); ?></strong>
                            </span>
                        <?php endif; ?>
                </div>

                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                    <h4>Wachtwoord:</h4>
                        <input id="password" type="password" class="form-control" name="password" required>
                        <?php if($errors->has('password')): ?>
                            <span>
                                <strong><?php echo e($errors->first('password')); ?></strong>
                            </span>
                        <?php endif; ?>
                </div>

                <div>
                    <h4>Bevestig wachtwoord:</h4>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div><br><br>

                <div>
                    <button type="submit" class="submit-button">
                        Registreer
                    </button>
                </div>
            </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>