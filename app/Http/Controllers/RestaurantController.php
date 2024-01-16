<?php

namespace App\Http\Controllers;

use App\Models\Restaurace;
use App\Models\TypyRestauraci;
use App\Models\User;
use App\Models\Pozadavek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    public function hlavni_stranka()
    {
        return view('hlavni_stranka');
    }

    public function zakladni_udaje()
    {
        $nazevRestaurace = Restaurace::orderBy("typ_id")->get();
        $typJidla = TypyRestauraci::all();
    
        return view('zakladni_udaje', ['typJidla' => $typJidla, 'nazevRestaurace' => $nazevRestaurace]);
    }

    public function udaje(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'contact' => 'required|max:25',
            'den' => 'required',
            'od_kdy_hours' => 'required',
            'do_kdy_hours' => 'required',
            'restaurant_type' => 'required',
            'restaurant_name' => 'required',
            

        ]);
    
        $uzivatel = new User();
    
        $uzivatel->name = $validatedData["name"];
        $uzivatel->last_name = $validatedData["last_name"];
        $uzivatel->contact = $validatedData["contact"];

        $uzivatel->save();
    
        return redirect("/")->with('mssg', 'Potvrzeno');
    }


    public function cas()
    {
        return view('cas');
    }

    public function vyber_jidla_z_databaze()
    {
        // Načtěte všechny typy restaurací z databáze
        $typyRestauraci = TypyRestauraci::all();
    
        // Předejte data do šablony
        return view('vyber_jidla_z_databaze', ['typyRestauraci' => $typyRestauraci]);
    }

    public function konkretni_restaurace($typId)
{
    // Získání konkrétních restaurací pro daný typ z databáze
    $konkretniRestaurace = DB::table('konkretni_restaurace')
        ->where('typ_id', $typId)
        ->get();

    // Předání dat na view
    return view('konkretni_restaurace', compact('konkretniRestaurace'));
}

public function detailRestaurace($id)
{
    $konkretniRestaurace = Restaurace::find($id);

    return view('detail_restaurace', compact('konkretniRestaurace'));
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
        $newData = $request->only(['name', 'last_name','contact']);
        $userData = array_merge($userData, $newData);
        Cache::put('user_data', $userData, 600);

        // Přesměrování na další stránku
        return redirect()->route('cas');
    }

    public function casToCache(Request $request)
    {
        // Uložení dat do cache
        $userData = Cache::get('user_data', []);
        $newData = $request->only(['den', 'od_kdy_hours', 'do_kdy_hours']); // Oprava názvů sloupců
        $userData = array_merge($userData, $newData);
        Cache::put('user_data', $userData, 600);
    
        // Přesměrování na další stránku
        return redirect()->route('vyber_jidla_z_databaze');
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
    $uzivatel->contact = $userData['contact'] ?? null;
    $uzivatel->den = $userData['den'] ?? null;
    $uzivatel->od_kdy = $userData['od_kdy_hours'] ?? null; // Oprava názvu sloupce
    $uzivatel->do_kdy = $userData['do_kdy_hours'] ?? null; // Oprava názvu sloupce
    $uzivatel->restaurant_type = $userData['restaurant_type'];
    $uzivatel->restaurant_name = $userData['restaurant_name'];
    $uzivatel->save();

    // Přesměrování na další stránku
    return redirect()->route('match');
}


public function match()
{
    $latestUser = User::latest()->first();

    // Přidání časových podmínek pro překrývající se intervaly
    $peopleWithSameRestaurant = User::where('restaurant_name', $latestUser->restaurant_name)
        ->where('den', $latestUser->den)
        ->where(function($query) use ($latestUser) {
            $query->where(function($q) use ($latestUser) {
                $q->where('od_kdy', '>=', $latestUser->od_kdy)
                  ->where('od_kdy', '<=', $latestUser->do_kdy);
            })
            ->orWhere(function($q) use ($latestUser) {
                $q->where('do_kdy', '>=', $latestUser->od_kdy)
                  ->where('do_kdy', '<=', $latestUser->do_kdy);
            })
            ->orWhere(function($q) use ($latestUser) {
                $q->where('od_kdy', '<=', $latestUser->od_kdy)
                  ->where('do_kdy', '>=', $latestUser->do_kdy);
            });
        })
        ->where('id', '!=', $latestUser->id)
        ->get();

    $peopleWithSameTypeDifferentLocation = User::where('restaurant_type', $latestUser->restaurant_type)
        ->where('den', $latestUser->den)
        ->where(function($query) use ($latestUser) {
            $query->where(function($q) use ($latestUser) {
                $q->where('od_kdy', '>=', $latestUser->od_kdy)
                  ->where('od_kdy', '<=', $latestUser->do_kdy);
            })
            ->orWhere(function($q) use ($latestUser) {
                $q->where('do_kdy', '>=', $latestUser->od_kdy)
                  ->where('do_kdy', '<=', $latestUser->do_kdy);
            })
            ->orWhere(function($q) use ($latestUser) {
                $q->where('od_kdy', '<=', $latestUser->od_kdy)
                  ->where('do_kdy', '>=', $latestUser->do_kdy);
            });
        })
        ->where('restaurant_name', '!=', $latestUser->restaurant_name)
        ->get();

    return view('match', [
        'latestUser' => $latestUser,
        'peopleWithSameRestaurant' => $peopleWithSameRestaurant,
        'peopleWithSameTypeDifferentLocation' => $peopleWithSameTypeDifferentLocation,
    ]);
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