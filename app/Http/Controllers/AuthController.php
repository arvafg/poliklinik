<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(\App\Operator::attempt($request->only('user_name','password'))){
            return view('/dashboard');
        }
            return redirect('/login');
    }

}
