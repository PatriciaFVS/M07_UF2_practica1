<?php

use App\Http\Controllers\SignController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\loginControllerAlumnes;
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
//Route::post('/login',[loginController::class,'loginpost'])->middleware('email');

//Pràctica 5

Route::controller(loginController::class)->group(function(){
    Route::post('/prof/login','logininici')->name('prof.login');
    Route::get('/prof/signin','signin')->name('prof.inici');
    Route::get('/prof/signup','signup')->name('prof.crearUsuari');
    Route::post('/prof/store','store')->name('prof.store');
    Route::get('/prof/editar/{id}','editarUsuari')->name('prof.editarUsuari');
    Route::put('/prof/{id}','update')->name('prof.update');
    Route::delete('/prof/{id}','delete')->name('prof.delete');
    
});

Route::controller(loginControllerAlumnes::class)->group(function(){
    Route::post('/alum/login','logininici')->name('alum.login');
    Route::get('/alum/signup','signup')->name('alum.crearUsuari');
    Route::post('/alum/store','store')->name('alum.store');
    Route::get('/alum/editar/{id}','editarUsuari')->name('alum.editarUsuari');
    Route::put('/alum/{id}','update')->name('alum.update');
    Route::delete('/alum/{id}','delete')->name('alum.delete');
    
});


/**Route::get('/sign/signin/{inici}/{sessio}/{de}/{usuari}', function ($inici, $sessio, $de, $usuari) {
    return view('signin');
});

Route::get('/sign/signup/{creació}/{usuari}/{nou}', function ($creació, $usuari, $nou) {
    return view('signup');
});**/
