<!DOCTYPE html>
<html>
<script src='https://www.google.com/recaptcha/api.js'></script>

  <head>
    <meta charset="utf-8">
    <title>Inschrijven</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css'>

  </head>
  <body>
    <div class="layer">
      <div class="menu">
          <a href="../"><img src="/images/head.png" class="head"></a>
        <div class="links">
            <a href="/normalgallery">Normale Gallerij</a>
            <a href="{{ url('/image-gallery') }}">Admin Gallerij</a>
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Registreren</a>
            <a href="{{ url('/getInsert') }}">Contact</a>
        </div>
      </div>


          <div class="container">
            <form  action="{{ url('postInschrijving')}}" method="GET">
              @if(Session::has('flash_message'))
                <div class="h1" style="text-align: center;"><span class="glyphicon glyphicon-ok"></span> <em> {!! session('flash_message') !!}</em></div>
              @endif
            </form>
            <div class="contact-info">
                <h3>Hier kan je je inschrijven</h3>
                   Met dit formulier kan je lid bij ons worden!</p><br>

                <h3>Lestijden:</h3>
                <p>Iedere woensdag van 19:00 tot 20:30</p><br>

                <h3>Adres:</h3>
                <p>(Gymzaal Bavinkschool)<br>
                Kolfstraat tegenover<br> parkeergarage Drie Vriendenhof</p><br>
            </div>
            <div class="text-input">
              <h1>Inschrijven</h1>
                <form action="{{ url('postInschrijving')}}" method="POST">
                   {{ csrf_field() }}
                      <table>
                          <tr>
                              <td>Achternaam:</td>
                              <td><input type="text" name="achternaam" id="achternaam"></td>
                          </tr>
                          <tr>
                              <td>Voorvoegsel:</td>
                              <td><input type="email" name="voorvoegsel" id="voorvoegsel"></td>
                          </tr>
                          <tr>
                              <td>Voornaam:</td>
                              <td><input type="text" name="voornaam" id="voornaam"></td>
                          </tr>
                          <tr>
                              <td>Roepnaam:</td>
                              <td><input type="text" name="roepnaam" id="roepnaam"></td>
                          </tr>
                          <tr>
                              <td>Voorletters:</td>
                              <td><input type="text" name="voorletters" id="voorletters"></td>
                          </tr>
                          <tr>
                              <td>Geslacht:</td>
                              <td><input type="text" name="geslacht" id="geslacht"></td>
                          </tr>
                          <tr>
                              <td>Geboortedatum:</td>
                              <td><input type="date" name="geboortedatum" id="geboortedatum"></td>
                          </tr>
                          <tr>
                              <td>geboorteplaats:</td>
                              <td><input type="text" name="geboorteplaats" id="geboorteplaats"></td>
                          </tr>
                          <tr>
                              <td>Geboorteland:</td>
                              <td><input type="text" name="geboorteland" id="geboorteland"></td>
                          </tr>
                          <tr>
                              <td>Adres:</td>
                              <td><input type="text" name="adres" id="adres"></td>
                          </tr>
                          <tr>
                              <td>Postcode:</td>
                              <td><input type="text" name="postcode" id="postcode"></td>
                          </tr>
                          <tr>
                              <td>Woonplaats:</td>
                              <td><input type="text" name="woonplaats" id="woonplaats"></td>
                          </tr>
                          <tr>
                              <td>Telefoonnummer:</td>
                              <td><input type="text" name="telefoonnummer" id="telefoonnummer"></td>
                          </tr>
                          <tr>
                              <td>Mobiel Nummer:</td>
                              <td><input type="text" name="mobiel_nummer" id="mobiel_nummer"></td>
                          </tr>
                          <tr>
                              <td>Email:</td>
                              <td><input type="text" name="email" id="email"></td>
                          </tr>
                          <tr>
                              <td>IBAN:</td>
                              <td><input type="text" name="IBAN" id="IBAN"></td>
                          </tr>
                          <tr>
                              <td>Ter Name Van:</td>
                              <td><input type="text" name="ter_name_van" id="ter_name_van"></td>
                          </tr>
                          <tr>
                              <td>Datum Inschrijving:</td>
                              <td><input type="date" name="datum_inschrijving" id="datum_inschrijving"></td>
                          </tr>
                      </table>
                      {!! app('captcha')->display(); !!}

                      @if ($errors->has('g-recaptcha-response'))
                          <span class="help-block">
                              <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                          </span>
                      @endif
                      <div class="g-recaptcha" data-sitekey="6LcvnzEUAAAAAChImKmwnD9M8iNlEsX4ylFGp5Ij"></div>

                  <input type="submit" value="Submit" class="submit-button">
                </form>

            </div>
          </div>
    </div>

    </div>
  </body>
</html>
