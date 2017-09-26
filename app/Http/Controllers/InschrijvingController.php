<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Inschrijving;


class InschrijvingController extends Controller
{
    public function getInschrijving()
    {

      return view('user.getInschrijving');
    }

    public function postInschrijving(Request $r){

      Inschrijving::insert(['achternaam'=>$r->achternaam,
                            'voorvoegsel'=>$r->voorvoegsel,
                            'voornaam'=>$r->voornaam,
                            'roepnaam'=>$r->roepnaam,
                            'voorletters'=>$r->voorletters,
                            'geslacht'=>$r->geslacht,
                            'geboortedatum'=>$r->geboortedatum,
                            'geboorteplaats'=>$r->geboorteplaats,
                            'geboorteland'=>$r->geboorteland,
                            'adres'=>$r->adres,
                            'postcode'=>$r->postcode,
                            'woonplaats'=>$r->woonplaats,
                            'telefoonnummer'=>$r->telefoonnummer,
                            'mobiel_nummer'=>$r->mobiel_nummer,
                            'email'=>$r->email,
                            'IBAN'=>$r->IBAN,
                            'ter_name_van'=>$r->ter_name_van,
                            'datum_inschrijving'=>$r->datum_inschrijving]);
      \Session::flash('flash_message','Your email has been send! We hope to Contact you as soon as possible.');
                     return back();
    }
    protected function validateLogin(Request $request)
   {
       $this->validate($request, [
           $this->loginUsername() => 'required',
           'password' => 'required',
           'g-recaptcha-response' => 'required|captcha'
       ]);
   }

}
