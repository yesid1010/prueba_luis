<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    
    protected $fillable = ['vehicleId','markId','year'];

    public function users()
    {
        return $this->hasOne(User::class);
    }

    public function vehicle(){
        return $this->hasOne(Vehicle::class);
    }

    public function mark(){
        return $this->hasOne(Mark::class);
    }

}
