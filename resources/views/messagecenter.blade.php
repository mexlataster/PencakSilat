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
      @foreach($Contacts as $value)
        <tr>
            <td>Naam: {{$value->name}}</td>
        </tr>
        <tr>
            <td>E-mailadres:{{$value->email}}</td>
        </tr>
        <tr>
            <td>Bericht:{{$value->message}}</td>
            <tr>
              <td>Created At:{{$value->created_at}}</td>
            </tr>

            <tr>
              <td></td>
            </tr>
        @endforeach
    </table>


</div>





  </body>
</html>
