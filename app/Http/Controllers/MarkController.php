<?php

namespace App\Http\Controllers;

use App\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{

    public function index()
    {
        return Mark::all();
    }

   
}
