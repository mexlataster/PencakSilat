<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Contact;

class CrudController extends Controller
{
    public function getInsert()
    {
      return view('user.getInsert',compact('roles'));
    }


    public function postInsert(Request $r){

      Contact::insert(['name'=>$r->name,
                    'email'=>$r->email,
                     'message'=>$r->message]);
                     return back();
    }
    public function test(){}
}
