<!DOCTYPE html>

<html>
<head>
    <title>Pencak Silat Gallery</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</head>
<body>

    <div class="menu">
          <a href="../"><img src="/images/head.png" class="head"></a>

    </div>

<div class="container">

    <h3>Pencak Silat - Gallery</h3>
    <form action="<?php echo e(url('image-gallery')); ?>" class="form-image-upload" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>


        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>Your picture is too big(please put in a smaller picture)</li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong><?php echo e($message); ?></strong>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-5">
                <strong>Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>

    </form>

    <div class="row">
    <div class='list-group gallery'>

            <?php if($images->count()): ?>
                <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/<?php echo e($image->image); ?>">
                        <img class="img-responsive" alt="" src="/images/<?php echo e($image->image); ?>" />
                        <div class='text-center'>
                            <small class='text-muted'><?php echo e($image->title); ?></small>
                        </div> <!-- text-center / end -->
                    </a>
                    <form action="<?php echo e(url('image-gallery',$image->id)); ?>" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    <?php echo csrf_field(); ?>


                              <script>
              function ConfirmDelete()
              {
                var x = confirm("Weet je zeker dat je de foto wilt verwijderen?");
                if (x)
                    return true;
                else
                  return false;
              }
          </script>

            <button Onclick="return ConfirmDelete();" type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove" ></i></button>

                    </form>
                </div> <!-- col-6 / end -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->



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
