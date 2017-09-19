<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['titre','imageb','datep','categorie','bodyb'];
    protected $table='blogs';

    public function commantaire(){
    	return $this->hasMany('App\Commantaire','id_blog','id');
    }
}
