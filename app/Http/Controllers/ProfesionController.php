<?php

namespace App\Http\Controllers;

use App\Profesion;
class ProfesionController extends Controller
{

    public function index()
    {
        return Profesion::all();
    }

   
}
