<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        $user = $request->user;
        $password = $request->password;
        if($user == "admin" && $password == "admin"){
            return redirect()->route("admin_bonos");
        } else if($user == "user" && $password == "user"){
            
        }
        else if($user == "cliente" && $password == "cliente"){
            return redirect()->route("home");
        }
    }
}
