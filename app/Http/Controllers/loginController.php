<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuari;

class loginController extends Controller
{
    public function logininici(){
        $email= request('email');
        $pwd=request('contrasenya');
        $actualUser= Usuari::where('email',$email)->first();
        $rolusuari= $actualUser-> rol;
        $psswdUser= $actualUser->password;

        if ($actualUser && $rolusuari=='administrador' && $pwd==$psswdUser){
            $llistaProfessorat= Usuari::where('rol','professor')->get();
            if ($llistaProfessorat->isEmpty()) {
                return view('noulogin.mostrarinfoAdmin')->with('llista', null);
            } else {
                return view('noulogin.mostrarinfoAdmin')->with('llista', $llistaProfessorat);
    
            }
           
        }else if($actualUser && $rolusuari=='professor' && $pwd==$psswdUser){
            $llistaAlumnat= Usuari::where('rol','alumne')->get();
            if ($llistaAlumnat->isEmpty()) {
                return view('nouloginAlumnes.mostrarinfoProf')->with('llista', null);
            } else {
                return view('nouloginAlumnes.mostrarinfoProf')->with('llista', $llistaAlumnat);
    
            }
            
        }else if($actualUser && $rolusuari=='alumne' && $pwd==$psswdUser){
            return View("noulogin.mostrarinfoAlumne");
        }else{
            return View("noulogin.error");
        }
    }
    public function signin(){
        return view('noulogin.signin');
    }
    public function signup(){
        return view('noulogin.signup');
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

        $llistaProfessorat= Usuari::where('rol','professor')->get();
        if ($llistaProfessorat->isEmpty()) {
            return view('noulogin.mostrarinfoAdmin')->with('llista', null);
        } else {
            return view('noulogin.mostrarinfoAdmin')->with('llista', $llistaProfessorat);

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
 
        $llistaProfessorat= Usuari::where('rol','professor')->get();
        return view('noulogin.mostrarinfoAdmin')->with('llista', $llistaProfessorat);
    }
    public function editarUsuari($id){
        $user= Usuari::find($id);
        return view('noulogin.updateData')->with("usuari",$user);

   }
   public function delete($id){
        $user=Usuari::find($id);
        $user->delete(); 
        $llistaProfessorat= Usuari::where('rol','professor')->get();
        if ($llistaProfessorat->isEmpty()) {
            return view('noulogin.mostrarinfoAdmin')->with('llista', null);
        } else {
            return view('noulogin.mostrarinfoAdmin')->with('llista', $llistaProfessorat);
        }
       
       

   }
}