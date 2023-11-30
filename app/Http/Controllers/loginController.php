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
        }else{
        return view('login.centre')->with('email',$email);
        }
    }
}
