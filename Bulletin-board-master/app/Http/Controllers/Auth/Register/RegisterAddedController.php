<?php

namespace App\Http\Controllers\Auth\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users\User;
use DB;

class RegisterAddedController extends Controller
{
    public function __invoke(Request $request){
        DB::beginTransaction();
        try{
            User::create([
                'username' => $request->username,
                'email' => $request->mail,
                'password' => bcrypt($request->password),
            ]);
            DB::commit();
            return view('auth.register.added');
        }catch(Exception $e){
            DB::rollback();
            return redirect()->route('register');
        }
    }
}
