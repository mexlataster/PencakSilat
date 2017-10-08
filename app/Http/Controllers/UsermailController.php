<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
class UsermailController extends Controller
{
    public function getmailInsert()
    {

      return view('mail.usermail');
    }

    public function postmailInsert(Request $r){

      Mail::insert(['user'=>$r->user,
                     'message'=>$r->message]);
      \Session::flash('flash_message','Your email has been send! We hope to Contact you as soon as possible.');
                     return back();



    }

}
