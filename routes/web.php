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

Route::get('/', [RestaurantController::class, 'index']);
Route::post('/', [RestaurantController::class, 'store'])->name("udaje");
Route::get('/vyber_jidla', [RestaurantController::class, 'vyber_jidla']);
Route::get('/cas', [RestaurantController::class, 'cas'])->name("cas");

//druhy restaurací
Route::get('/{type}', [RestaurantController::class, 'showType']);


// jednotlivé restaurace
Route::group([], function () {
    Route::get('/mekong', [RestaurantController::class, 'mekong'])->name("mekong");

});









/*
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

*/
