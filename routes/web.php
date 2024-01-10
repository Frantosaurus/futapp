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

Route::get('/cas', [RestaurantController::class, 'cas'])->name('cas');

Route::get('/hlavni_stranka', [RestaurantController::class, 'hlavni_stranka'])->name('hlavni_stranka');

//pro ukládání do cache paměti
Route::post('/zakladni_udajeToCache', [RestaurantController::class, 'zakladni_udajeToCache'])->name('zakladni_udajeToCache');   //zpracuje data z formuláře a uloží je do cache paměti
Route::post('/casToCache', [RestaurantController::class, 'casToCache'])->name('casToCache');
Route::post('/restauraceToCacheAndSaveToDatabase', [RestaurantController::class, 'restauraceToCacheAndSaveToDatabase'])->name('restauraceToCacheAndSaveToDatabase');  //zpracuje data z formuláře, uloží je do cache paměti a také je uloží do databáze


//druhy restaurací a jednotlivé restaurace     (měla by být vždy na konci, kvůli /{type}. Zvládne druhy restaurací i jednotlivé restaurace)
Route::get('/{type}', [RestaurantController::class, 'showType']);

Route::get('/{cuisine}/{type}', [RestaurantController::class, 'showCusine']);

Route::get('/vyber_jidla', [RestaurantController::class, 'vyber_jidla'])->name('vyber_jidla');

Route::post('/zakladni-udaje', [RestaurantController::class, 'zakladni_udajeToCache'])->name('zakladni_udajeToCacheToCache');


//jednotlivé restaurace   (toto je důležité, pro správné fungování 'cina', nikoli pro zobrazování jednotlivých restaurací)
Route::get('/cina/mekong', [RestaurantController::class, 'mekong'])->name("mekong");
Route::get('/cina/lotus', [RestaurantController::class, 'lotus'])->name("lotus");
Route::get('/cina/chopstix', [RestaurantController::class, 'chopstix'])->name("chopstix");
Route::get('/cina/King_Sheng_Restaurant', [RestaurantController::class, 'King_Sheng_Restaurant'])->name("King_Sheng_Restaurant");
Route::get('/cina/Sayam', [RestaurantController::class, 'Sayam'])->name("Sayam");
Route::get('/cina/Victory_Asia_Restaurant', [RestaurantController::class, 'Victory_Asia_Restaurant'])->name("Victory_Asia_Restaurant");
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

Route::get('/cesko/Lokal', [RestaurantController::class, 'Lokal'])->name("Lokal");
Route::get('/cesko/NaSpilce', [RestaurantController::class, 'NaSpilce'])->name("NaSpilce");
Route::get('/cesko/Plzenka', [RestaurantController::class, 'Plzenka'])->name("Plzenka");
Route::get('/cesko/Potrefena_husa', [RestaurantController::class, 'Potrefena_husa'])->name("Potrefena_husa");
Route::get('/cesko/Svejk_35', [RestaurantController::class, 'Svejk_35'])->name("Svejk_35");
Route::get('/cesko/Svejk_Tivoli', [RestaurantController::class, 'Svejk_Tivoli'])->name("Svejk_Tivoli");
Route::get('/cesko/UMansfelda', [RestaurantController::class, 'UMansfelda'])->name("UMansfelda");
Route::get('/cesko/UMotliku', [RestaurantController::class, 'UMotliku'])->name("UMotliku");
Route::get('/cesko/Velbloud', [RestaurantController::class, 'Velbloud'])->name("Velbloud");
Route::get('/cesko/Zumbera', [RestaurantController::class, 'Zumbera'])->name("Zumbera");

Route::get('/italie/Bolevecka_pizzerie', [RestaurantController::class, 'Bolevecka_pizzerie'])->name("Bolevecka_pizzerie");
Route::get('/italie/Da_Nico', [RestaurantController::class, 'Da_Nico'])->name("Da_Nico");
Route::get('/italie/Da_Vinci', [RestaurantController::class, 'Da_Vinci'])->name("Da_Vinci");
Route::get('/italie/daPietro', [RestaurantController::class, 'daPietro'])->name("daPietro");
Route::get('/italie/I_love_pizza', [RestaurantController::class, 'I_love_pizza'])->name("I_love_pizza");
Route::get('/italie/Mamma_Mia', [RestaurantController::class, 'Mamma_Mia'])->name("Mamma_Mia");
Route::get('/italie/Massimo', [RestaurantController::class, 'Massimo'])->name("Massimo");
Route::get('/italie/Rango', [RestaurantController::class, 'Rango'])->name("Rango");

Route::get('/kebab/Alanya', [RestaurantController::class, 'Alanya'])->name("Alanya");
Route::get('/kebab/Ali_Baba_Kebab', [RestaurantController::class, 'Ali_Baba_Kebab'])->name("Ali_Baba_Kebab");
Route::get('/kebab/Alibaba_Kebab', [RestaurantController::class, 'Alibaba_Kebab'])->name("Alibaba_Kebab");
Route::get('/kebab/Family_Kebab', [RestaurantController::class, 'Family_Kebab'])->name("Family_Kebab");
Route::get('/kebab/I_love_Kebab', [RestaurantController::class, 'I_love_Kebab'])->name("I_love_Kebab");
Route::get('/kebab/JH_Kebab_House', [RestaurantController::class, 'JH_Kebab_House'])->name("JH_Kebab_House");
Route::get('/kebab/Masarykova_Kebab', [RestaurantController::class, 'Masarykova_Kebab'])->name("Masarykova_Kebab");
Route::get('/kebab/Tylova_Kebab', [RestaurantController::class, 'Tylova_Kebab'])->name("Tylova_Kebab");
Route::get('/kebab/UTuzexu', [RestaurantController::class, 'UTuzexu'])->name("UTuzexu");

Route::get('/fastfood/Angus', [RestaurantController::class, 'Angus'])->name("Angus");
Route::get('/fastfood/Bageterie', [RestaurantController::class, 'Bageterie'])->name("Bageterie");
Route::get('/fastfood/BigBurger', [RestaurantController::class, 'BigBurger'])->name("BigBurger");
Route::get('/fastfood/Buffalo', [RestaurantController::class, 'Buffalo'])->name("Buffalo");
Route::get('/fastfood/BurgerKing', [RestaurantController::class, 'BurgerKing'])->name("BurgerKing");
Route::get('/fastfood/Delish', [RestaurantController::class, 'Delish'])->name("Delish");
Route::get('/fastfood/FancyFries', [RestaurantController::class, 'FancyFries'])->name("FancyFries");
Route::get('/fastfood/KFC', [RestaurantController::class, 'KFC'])->name("KFC");
Route::get('/fastfood/McDonald', [RestaurantController::class, 'McDonald'])->name("McDonald");
Route::get('/fastfood/NewYork', [RestaurantController::class, 'NewYork'])->name("NewYork");

Route::get('/Menza/Menza_Bory', [RestaurantController::class, 'Menza_Bory'])->name("Menza_Bory");
Route::get('/Menza/Menza_Kollarova', [RestaurantController::class, 'Menza_Kollarova'])->name("Menza_Kollarova");

Route::get('/mexico/La_Chica', [RestaurantController::class, 'La_Chica'])->name("La_Chica");
Route::get('/mexico/Pancho', [RestaurantController::class, 'Pancho'])->name("Pancho");


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
