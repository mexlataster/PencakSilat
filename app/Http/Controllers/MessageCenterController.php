<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Mail;


class MessageCenterController extends Controller
{
    public function getInsert()
    {
      $result = Mail::all();

      return view('messagecenter',['Mails' => $result]);
    }

}
