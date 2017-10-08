<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    protected $table = 'usermail';

    protected $fillable = ['user','onderwerp','message'];

}
