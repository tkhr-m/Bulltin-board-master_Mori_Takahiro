<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterFormRequest;

class RegisterConfirmController extends Controller
{
    public function __invoke(RegisterFormRequest $request){

        $user_info = [
            'username' => $request->username,
            'mail' => $request->mail,
            'password' => $request->password,
        ];
        return view('auth.register.confirm',$user_info);
    }
}
