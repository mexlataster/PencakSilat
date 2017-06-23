<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Contact;


class MessageCenterController extends Controller
{
    public function getInsert()
    {
      $result = Contact::all();
      return view('messagecenter',['contacts' => $result]);
    }

}
