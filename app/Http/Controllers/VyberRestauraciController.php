<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;



class VyberRestauraciController extends Controller
{
    public function konkretniRestaurace() {
        $restaurace = [
            ['nazev' => 'nazev1', 'ulice'=> 'ulice1'],
            ['nazev' => 'nazev2', 'ulice'=> 'ulice2'],
            ['nazev' => 'nazev3', 'ulice'=> 'ulice3']
        ];
        return View('vyber_jidla', ['restaurace' => $restaurace]);
    }
}
