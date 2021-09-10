<?php

namespace App\Http\Controllers;

use App\Municipality;

class MunicipalyController extends Controller
{

    public function index()
    {
        return Municipality::all();
    }

    
}
