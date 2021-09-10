<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //

    public function transport(){
        return $this->belongsTo(Transport::class);
    }
}
