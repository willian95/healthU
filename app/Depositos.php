<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Depositos extends Model
{
    //
    protected $table = "depositos";

    public function user(){
        return $this->belongsTo(User::class);
    }

}
