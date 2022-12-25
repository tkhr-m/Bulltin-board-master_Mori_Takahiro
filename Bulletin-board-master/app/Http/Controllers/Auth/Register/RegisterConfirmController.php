<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterConfirmController extends Controller
{
    public function __invoke(Request $request){
        $user_info = [
            'username' => $request->username,
            'mail' => $request->mail,
            'password' => $request->password,
        ];
        return view('auth.register.confirm',$user_info);
    }
}
