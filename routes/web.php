<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VyberRestauraciController;

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

Route::get('/vyber_jidla', 
[VyberRestauraciController::class, 'konkretniRestaurace']);
