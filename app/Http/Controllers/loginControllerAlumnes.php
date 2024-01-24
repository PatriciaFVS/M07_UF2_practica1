<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;
class loginControllerAlumnes extends Controller
{
    
    public function signin(){
        return view('noulogin.signin');
    }
    public function signup(){
        return view('nouloginAlumnes.signup');
    }
    public function store(){
        $id = request('id');
        $nom= request('name');
        $cognom = request('surname');
        $password = request('password');
        $email= request('email');
        $actiu = request()->has('actiu');
        $rol= request('rol');

        $usuari = new Usuari();

        $usuari->id = $id;
        $usuari->nom = $nom;
        $usuari->cognoms = $cognom;
        $usuari->password = $password;
        $usuari->email = $email;
        $usuari->actiu = $actiu;
        $usuari->rol = $rol;

        $usuari-> save();

        $llistaAlumnes= Usuari::where('rol','alumne')->get();
        if ($llistaAlumnes->isEmpty()) {
            return view('nouloginAlumnes.mostrarinfoProf')->with('llista', null);
        } else {
            return view('nouloginAlumnes.mostrarinfoProf')->with('llista', $llistaAlumnes);

        }
    }

    public function update($id){
        $usuari = Usuari::find($id);

        $usuari->nom = request('name');
        $usuari->cognoms = request('surname');
        $usuari->password = request('password'); 
        $usuari->email = request('email');
        $usuari->rol = request('rol');
        $usuari->actiu = request()->has('actiu');

        $usuari->save();
 
        $llistaAlumnes= Usuari::where('rol','alumne')->get();
        return view('nouloginAlumnes.mostrarinfoProf')->with('llista', $llistaAlumnes);
    }
    public function editarUsuari($id){
        $user= Usuari::find($id);
        return view('nouloginAlumnes.updateDataAlumnes')->with("usuari",$user);

   }
   public function delete($id){
        $user=Usuari::find($id);
        $user->delete();
        $llistaAlumnes= Usuari::where('rol','alumne')->get();
        if ($llistaAlumnes->isEmpty()) {
            return view('nouloginAlumnes.mostrarinfoProf')->with('llista', null);
        } else {
            return view('nouloginAlumnes.mostrarinfoProf')->with('llista', $llistaAlumnes);
        }

   }
}

