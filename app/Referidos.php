<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referidos extends Model
{
    //
    protected $table = "referidos";

   function user(){
        return $this->belongsTo('App\User');
    }
}
