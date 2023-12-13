<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginpost(){
        $alumnes= ["alumne@gmail.com","professor@gmail.com","centre@gmail.com"];

        $email=Request('email');
        if($email==$alumnes[0]){
            return view('login.alumne')->with('email',$email);
        }else if($email==$alumnes[1]){
            return view('login.professor')->with('email',$email);
        }else if ($email==$alumnes[2]){
            $professors=[



            ];
            return view('login.centre')->with('email',$email);
        }else
            return "Error d'accés";
        
    }

    public function singin(){
        return view('noulogin.signin');
    }
    public function singup(){
        return view('noulogin.signup');
    }

    public function dadesusuari(){
            $nom= request('nom');
            $cognom = request('cognom');
            $email= request('email');
        
            return view('practica3.mostrarInfo')->with([
                'nom' => $nom,
                'cognom' => $cognom,
                'email' => $email,
                ]);
        
    }
}
