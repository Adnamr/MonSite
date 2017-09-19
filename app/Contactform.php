<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactform extends Model
{
    //
     protected $fillable=['nomcomplete','email','siteweb','message'];
     protected $table='contactform';
}
