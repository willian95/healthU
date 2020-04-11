<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    function user(){
        return $this->belongsTo('App\User');
    }
}
