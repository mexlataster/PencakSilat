<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
class UsermailController extends Controller
{
    public function getInsert()
    {
      return view('mail.usermail');
    }
    public function fetchdata()
    {
      $result = Mail::all();

      return view('mail.usermail',['Mails' => $result]);
    }

    public function postInsert(Request $r){

      Mail::insert(['user'=>$r->user,
                     'message'=>$r->message]);
      \Session::flash('flash_message','Je Mail is verzonden! We reageren zo snel mogelijk!');
                     return back();
    }

}
