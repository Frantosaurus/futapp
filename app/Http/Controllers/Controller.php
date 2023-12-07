<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Controller extends Controller
{
    function vyber(){
        $restaurace = Restaurace::all();
        return View('vyber_jidla', ['restaurace' => $restaurace]);
    }
}
