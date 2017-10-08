<!DOCTYPE html>
<html>
    <head>
        <title>User Mail</title>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body id="app">
        <div class="container">
            <div class="content">
                <h1>Inbox</h1>
            </div>




                  <table class="table table-hover">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @foreach($Mails as $value)
                        <thead>
                          <tr>
                            <th>Naam : </th>
                            <th>Onderwerp : </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{$value->user}}</td>
                          </tr>
                        </tbody>
                        @endforeach
                  </table>







                  <div class="container">
  <h2>Schrijf een Mail</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Large Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <div class="inbox">
            <form action="{{ url('postmailInsert')}}" method="POST">
               {{ csrf_field() }}

                  <table class="table">
                      <tr>
                          <td>E-mailadres:</td>
                          <td><input type="email" name="user" id="user"></td>
                      </tr>
                      <tr>
                        <td>Onderwerp:</td>
                        <td><input type="text" name="onderwerp" id="onderwerp"></td>
                      </tr>
                      <tr>
                          <td>Bericht:</td>
                          <td><textarea rows="4" cols="50" name="message" id="message" class="message"></textarea></td>
                      </tr>
                  </table>


        </div>
        <div class="modal-footer">
          <input type="submit" value="Submit" class="submit-button">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>

            </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.14/vue.min.js"></script>
        <script src="/js/main.js"></script>
    </body>
</html>
