<?php

namespace App\Http\Controllers;

use App\Models\Restaurace;
use Illuminate\Http\Request;

class DetailRestauraceController extends Controller
{
    public function show(Restaurace $restaurace)
    {
        return view('detail_restaurace', compact('restaurace'));
    }
}
