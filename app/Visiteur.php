<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    //
}
class Tracker Extends Eloquent {

    public $attributes = ['hits' => 0];

    protected $fillable = ['ip', 'datevisit'];

    public $timestamps = false;

    protected $table = 'visiteurs';

    
}