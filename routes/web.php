<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Restaurace;
use App\Models\users;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    $typJidla = Restaurace::all();
    return view('zakladni_udaje', ['typJidla' => $typJidla]);
});

Route::post('/', function (){
    $uzivatel = new users();

    $uzivatel->name = request("name");
    $uzivatel->last_name = request("last_name");
    $uzivatel->type_of_food = request("type_of_food");
    $uzivatel->specific_restaurant = request("specific_restaurant");

    $uzivatel->save();
    return redirect("/")->with('mssg', 'Potvrzeno');
})->name("udaje");

Route::get('/cas', function () {
    return view('cas');
})->name("cas");

Route::get('/cina', function () {
    return view('cina');
});

Route::get('/indie', function () {
    return view('indie');
});

Route::get('/italie', function () {
    return view('italie');
});

Route::get('/cesko', function () {
    return view('cesko');
});

Route::get('/kebab', function () {
    return view('kebab');
});

Route::get('/mexico', function () {
    return view('mexico');
});

Route::get('/fastfood', function () {
    return view('fastfood');
});

Route::get('/vyber_jidla', /* [Controller::class, 'vyber'] */function (){
    $restaurace = Restaurace::all();
    return View('vyber_jidla', ['restaurace' => $restaurace]);
});