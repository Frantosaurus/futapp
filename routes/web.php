<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [RestaurantController::class, 'hlavni_stranka']);

Route::get('/zakladni_udaje', [RestaurantController::class, 'zakladni_udaje']);
Route::post('/zakladni_udaje', [RestaurantController::class, 'udaje'])->name("udaje");

Route::get('/vyber_jidla', [RestaurantController::class, 'vyber_jidla']);

Route::get('/cas', [RestaurantController::class, 'cas'])->name("cas");


//druhy restaurací a jednotlivé restaurace     (měla by být vždy na konci, kvůli /{type}. Zvládne druhy restaurací i jednotlivé restaurace)
Route::get('/{cuisine}/{type}', [RestaurantController::class, 'showType']);





//jednotlivé restaurace   (toto je důležité, pro správné fungování 'cina', nikoli pro zobrazování jednotlivých restaurací)
Route::get('/cina/mekong', [RestaurantController::class, 'mekong'])->name("mekong");
Route::get('/cina/lotus', [RestaurantController::class, 'lotus'])->name("lotus");
Route::get('/cina/chopstix', [RestaurantController::class, 'chopstix'])->name("chopstix");
Route::get('/cina/King_Sheng_Restaurant', [RestaurantController::class, 'King_Sheng_Restaurant'])->name("King_Sheng_Restaurant");
Route::get('/cina/Sayam', [RestaurantController::class, 'Sayam'])->name("Sayam");
Route::get('/cina/U_bileho_dracka', [RestaurantController::class, 'U_bileho_dracka'])->name("U_bileho_dracka");
Route::get('/cina/Zlaty_drak', [RestaurantController::class, 'Zlaty_drak'])->name("Zlaty_drak");
Route::get('/cina/Homy_asian_fusion', [RestaurantController::class, 'Homy_asian_fusion'])->name("Homy_asian_fusion");

Route::get('indie/Bombay_express', [RestaurantController::class, 'Bombay_express'])->name("Bombay_express");
Route::get('/indie/BUDDHA', [RestaurantController::class, 'BUDDHA'])->name("BUDDHA");
Route::get('/indie/Everest', [RestaurantController::class, 'Everest'])->name("Everest");
Route::get('/indie/Gandhi', [RestaurantController::class, 'Gandhi'])->name("Gandhi");
Route::get('/indie/Ganesh', [RestaurantController::class, 'Ganesh'])->name("Ganesh");
Route::get('/indie/Kanchenjunga', [RestaurantController::class, 'Kanchenjunga'])->name("Kanchenjunga");
Route::get('/indie/Kathmandu', [RestaurantController::class, 'Kathmandu'])->name("Kathmandu");
Route::get('/indie/Namaste', [RestaurantController::class, 'Namaste'])->name("Namaste");
Route::get('/indie/Zaika', [RestaurantController::class, 'Zaika'])->name("Zaika");
//Route::get('/restaurant2', [RestaurantController::class, 'restaurant2'])->name("restaurant2");
//Route::get('/restaurant3', [RestaurantController::class, 'restaurant3'])->name("restaurant3");









/*
Route::group([], function () {
    Route::get('/mekong', [RestaurantController::class, 'mekong'])->name("mekong");
    //Route::get('/restaurant2', [RestaurantController::class, 'restaurant2'])->name("restaurant2");
    //Route::get('/restaurant3', [RestaurantController::class, 'restaurant3'])->name("restaurant3");
});


//druhy restaurací          (to je zde necháno, kdyby náhodou něco nefungovalo, tak, jak má)
Route::group([], function () {
    Route::get('/mexico', [RestaurantController::class, 'mexico']);
    Route::get('/fastfood', [RestaurantController::class, 'fastfood']);
    Route::get('/cina', [RestaurantController::class, 'cina']);
    Route::get('/indie', [RestaurantController::class, 'indie']);
    Route::get('/italie', [RestaurantController::class, 'italie']);
    Route::get('/cesko', [RestaurantController::class, 'cesko']);
    Route::get('/kebab', [RestaurantController::class, 'kebab']);
});

// jednotlivé restaurace
Route::group([], function () {
    Route::get('/mekong', [RestaurantController::class, 'mekong'])->name("mekong");
});

// jednotlivé restaurace
Route::get('/{restaurantName}', [RestaurantController::class, 'showRestaurant']);

*/
