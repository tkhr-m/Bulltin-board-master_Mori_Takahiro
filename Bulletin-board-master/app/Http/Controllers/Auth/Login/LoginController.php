<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login.login');
    }

    public function checkLogin(Request $request){
        if(Auth::attempt([
            'email' => $request->mail,
            'password' => $request->password,])){
            return redirect()->route('show');
        }else{
            return redirect()->route('login');
        }
    }

}
