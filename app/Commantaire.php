<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commantaire extends Model
{
   protected $fillable=['nomCom','emailCom','comment','approve','id_blog'];
   protected $table='commantaires';

   public function blog(){
   	return $this->belongsTo('App\Blog','id_blog','id');
   }
}
