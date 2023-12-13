<?php

use App\Http\Controllers\SignController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\loginMiddleware;

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


//Pràctica 2

Route::post('/login',[loginController::class,'loginpost'])->middleware('email');

Route::get('/signin',[loginController::class,'signin']);

Route::get('/signup',[loginController::class,'signup']);

Route::get('/signup',[loginController::class,'dadesusuari']);
Route::get('/error',function(){
    return "Error d'accès";
    })->name('errorAcces.index');




/**Route::get('/sign/signin/{inici}/{sessio}/{de}/{usuari}', function ($inici, $sessio, $de, $usuari) {
    return view('signin');
});

Route::get('/sign/signup/{creació}/{usuari}/{nou}', function ($creació, $usuari, $nou) {
    return view('signup');
});**/
