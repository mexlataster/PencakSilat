<!DOCTYPE html>
<html>
    <head>
        <title>User Mail</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body id="app">
        <div class="container">
            <div class="content">
                <h1>Inbox</h1>
            </div>
            <div class="inbox">
              <form action="<?php echo e(url('postmailInsert')); ?>" method="POST">
                 <?php echo e(csrf_field()); ?>


                    <table>
                        <tr>
                            <td>E-mailadres:</td>
                            <td><input type="email" name="user" id="user"></td>
                        </tr>
                        <tr>
                            <td>Bericht:</td>
                            <td><textarea rows="4" cols="50" name="message" id="message" class="message"></textarea></td>
                        </tr>
                    </table>
                <input type="submit" value="Submit" class="submit-button">
              </form>
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
            </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
