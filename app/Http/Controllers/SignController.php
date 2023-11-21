<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($v1,$v2,$v3,$v4){
        $titol_signin = $v1." ".$v2." ".$v3." ".$v4;
        
        return view('signin')->with('titol_vista', $titol_signin);
    }
    public function signup($v1,$v2,$v3){
        $titol_signup = $v1." ".$v2." ".$v3;
        return view('signup')->with('titol_vista_signup',$titol_signup);

    }
}
