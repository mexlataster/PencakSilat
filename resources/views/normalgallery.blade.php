<!DOCTYPE html>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <style rel="stylesheet">
    .links{
      display:inline;
      margin-left: 125px;;
      position: absolute;
      margin-top: 25px;
      font-family: 'Molengo', Georgia, Times, serif;
    }

    .links>a{
      margin-right:125px;
      font-size:20px;
      padding:5px;
      font-weight: lighter;
      font-family: 'Molengo', Georgia, Times, serif;
    }

    .links>a:hover{
      margin-right:125px;
      font-size:20px;
      background-color:rgba(255,0,0, 0.5);
      padding:5px;
      border-radius: 15px;
      border:1px solid red;
      font-family: 'Molengo', Georgia, Times, serif;
    }
    </style>
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
                  <a href="{{ url('/normalgallery') }}">Normale Gallerij</a>
                  <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
                  <a href="{{ url('/login') }}">Login</a>
                  <a href="{{ url('/register') }}">Registreren</a>
                  <a href="{{ url('/getInsert') }}">Contact</a>
              </div>
            </div>
            <div class="imagecontainer">
                <div class="title">
                    <h4>Normal Gallery</h4>
                </div><hr>
                <br><br>
                @if($images->count())
                    @foreach($images as $image)
                    <div class="images">
                        <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                            <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                            @endforeach
                        @endif
              </div>
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
