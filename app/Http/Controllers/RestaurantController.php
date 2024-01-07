<?php

namespace App\Http\Controllers;

use App\Models\Restaurace;
use App\Models\TypyRestauraci;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $nazevRestaurace = Restaurace::orderBy("typ")->get();
        $typJidla = TypyRestauraci::all();
    
        return view('zakladni_udaje', ['typJidla' => $typJidla, 'nazevRestaurace' => $nazevRestaurace]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'type_of_food' => 'required|max:255',
            'specific_restaurant' => 'required|max:255',
        ]);
    
        $uzivatel = new User();
    
        $uzivatel->name = $validatedData["name"];
        $uzivatel->last_name = $validatedData["last_name"];
        $uzivatel->type_of_food = $validatedData["type_of_food"];
        $uzivatel->specific_restaurant = $validatedData["specific_restaurant"];
    
        $uzivatel->save();
    
        return redirect("/")->with('mssg', 'Potvrzeno');
    }

    public function vyber_jidla()
    {
        $restaurace = Restaurace::all();
        return view('vyber_jidla', ['restaurace' => $restaurace]);
    }

    public function cas()
    {
        return view('cas');
    }

    
    // jednotlivé restaurace
    public function showType($type)
    {
        return view($type);
    }

    // jednotlivé restaurace
    public function showRestaurant($restaurantName)
    {
        return view($restaurantName);
    }





    

    /*
    //druhy restaurací          (to je zde necháno, kdyby náhodou něco nefungovalo, tak, jak má)
    public function mexico()
    {
        return view('mexico');
    }

    public function fastfood()
    {
        return view('fastfood');
    }

    public function cina()
    {
        return view('cina');
    }

    public function indie()
    {
        return view('indie');
    }

    public function italie()
    {
        return view('italie');
    }

    public function cesko()
    {
        return view('cesko');
    }

    public function kebab()
    {
        return view('kebab');
    }

    
    //jednotlivé restuarace
    public function mekong()
    {
        return view('mekong');
    }*/
}
