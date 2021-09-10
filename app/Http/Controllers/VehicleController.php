<?php

namespace App\Http\Controllers;
use App\Vehicle;

class VehicleController extends Controller
{

    public function index()
    {
        return Vehicle::all();   
    }

    
}
