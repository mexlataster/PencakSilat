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

          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @foreach($Mails as $value)
            <tr>
                <td>Naam: {{$value->user}}</td>
            </tr>
            <tr>
                <td>Bericht:{{$value->message}}</td>
                </tr>
            @endforeach
        </table>




  </body>
</html>
