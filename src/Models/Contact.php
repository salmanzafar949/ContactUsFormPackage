<?php

namespace Salman\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['email','fname','lname','message'];

}
