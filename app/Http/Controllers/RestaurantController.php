<?php

namespace App\Http\Controllers;

use App\Models\Restaurace;
use App\Models\TypyRestauraci;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RestaurantController extends Controller
{
    public function hlavni_stranka()
    {
        return view('hlavni_stranka');
    }

    public function zakladni_udaje()
    {
        $nazevRestaurace = Restaurace::orderBy("typ")->get();
        $typJidla = TypyRestauraci::all();
    
        return view('zakladni_udaje', ['typJidla' => $typJidla, 'nazevRestaurace' => $nazevRestaurace]);
    }

    public function udaje(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'last_name' => 'required|max:25',

        ]);
    
        $uzivatel = new User();
    
        $uzivatel->name = $validatedData["name"];
        $uzivatel->last_name = $validatedData["last_name"];

    
        $uzivatel->save();
    
        return redirect("/")->with('mssg', 'Potvrzeno');
    }


    public function cas()
    {
        return view('cas');
    }

    public function vyber_jidla()
    {
        $restaurace = Restaurace::all();
        return view('vyber_jidla', ['restaurace' => $restaurace]);
    }
    
    // jednotlivé restaurace
    public function showCusine($cuisine, $type)
    {
        $viewName = $cuisine . '.' . $type;

        if (view()->exists($viewName)) {
            return view($viewName);
        } else {
            abort(404); //kdyby za lomítkem nic neexistovalo, hodí to namísto laravel chyby error 404
        }
    }

    public function showType($type)
    {
        return view($type);
    }


    //Obě funkce slouží pro ukládání dat do cache paměti. Jedna ukládá pouze do cache, druhá ukládá do cache a také do databáze.
    public function zakladni_udajeToCache(Request $request)
    {
        // Uložení dat do cache
        $userData = Cache::get('user_data', []);
        $newData = $request->only(['name', 'last_name']);
        $userData = array_merge($userData, $newData);
        Cache::put('user_data', $userData, 600);

        // Přesměrování na další stránku
        return redirect()->route('cas');
    }

    public function casToCache(Request $request)
    {
        // Uložení dat do cache
        $userData = Cache::get('user_data', []);
        $newData = $request->only(['den', 'od_kdy', 'do_kdy']);
        $userData = array_merge($userData, $newData);
        Cache::put('user_data', $userData, 600);

        // Přesměrování na další stránku
        return redirect()->route('vyber_jidla');
    }




    public function celamezipametToCacheAndSaveToDatabase(Request $request)
{
    // Uložení dat do cache
    $userData = Cache::get('user_data', []);
    $newData = $request->only(['restaurant_type', 'restaurant_name']);
    $userData = array_merge($userData, $newData);
    Cache::put('user_data', $userData, 600);

    // Uložení dat do databáze
    $uzivatel = new User();
    $uzivatel->name = $userData['name'] ?? null;
    $uzivatel->last_name = $userData['last_name'] ?? null;
    $uzivatel->den = $userData['den'] ?? null;
    $uzivatel->od_kdy = $userData['od_kdy'] ?? null;
    $uzivatel->do_kdy = $userData['do_kdy'] ?? null;
    $uzivatel->restaurant_type = $userData['restaurant_type'];
    $uzivatel->restaurant_name = $userData['restaurant_name'];
    $uzivatel->save();

    // Přesměrování na další stránku
    return redirect()->route('match');
}


public function match()
{
    $users = User::all();
    return view('match', ['users' => $users]);
}

    /*


     // jednotlivé restaurace
    public function showRestaurant($restaurantName)
    {
        return view($restaurantName);
    }


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
