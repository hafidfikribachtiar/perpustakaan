<?php

namespace App\Http\Controllers\AuthController;

use Illuminate\Http\Request;
use Auth;
class AuthController extends AuthController
{
    public function index(){
        
        return view ('home');
    }

    public function postlogin (Request $request){
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('register');
    }
}
