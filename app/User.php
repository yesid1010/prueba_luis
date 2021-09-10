<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'identification',
        'name',
        'lastName',
        'dateOfBirth',
        'direction',
        'phone',
        'sex',
        'profesionId',
        'municipalyId',
        'transportId'
    ];

    public function profesion(){
        return $this->belongsTo(Profesion::class);
    }

    public function municipaly(){
        return $this->belongsTo(Municipality::class);
    }

    public function transportId(){
        return $this->belongsTo(Transport::class);
    }
}
