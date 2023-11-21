<?php

use App\Http\Controllers\SignController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/getNom', function () {
    return "Hello World";
});


Route::get('/getNom/{nom}', function ($nom) {
    return "Hello". $nom;
});

Route::get('/getNom/{nom}/{id}', function ($nom,$id) {
    return "Hello". $nom. $id;
});

Route::get('/mostrar', function () {
    return view('mostrar');
});

Route::get('/sign/signin/{inici}/{sessio}/{de}/{usuari}',[SignController::class,'signin']);

Route::get('/sign/signup/{creacio}/{usuari}/{nou}',[SignController::class,'signup']);


/**Route::get('/sign/signin/{inici}/{sessio}/{de}/{usuari}', function ($inici, $sessio, $de, $usuari) {
    return view('signin');
});

Route::get('/sign/signup/{creació}/{usuari}/{nou}', function ($creació, $usuari, $nou) {
    return view('signup');
});**/
