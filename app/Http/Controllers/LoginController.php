<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(){
        return view('login');
    }

    function store(Request $request){
        if($request->email == 'fabio@gmail.com' && $request->senha == '12345'){
            dd("Parabéns! Você está logado em sua conta!");
        } else {
            return back()->with('error',"Suas credenciais estão inválidas!");
        }
    }
}
