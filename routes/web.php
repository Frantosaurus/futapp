<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Restaurace;

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
    return view('zakladni_udaje');
});

Route::get('/cas', function () {
    return view('cas');
});

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