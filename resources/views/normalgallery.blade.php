<!DOCTYPE html>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">
<html>
  <head>
    <meta charset="utf-8">
    <title>Image Gallery</title>
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
    .layer {
        background-color:rgba(0,0,0, 0.6);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    </style>
  </head>
  <body>
      <div class="layer">
        <a href="../"><img src="/images/head.png" class="head"></a>
        <div class="title">
          <h2>Image Gallery</h2>
        </div>
      </div>




  </body>
</html>