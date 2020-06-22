<?php

namespace App\Http\Controllers;
use App\operator;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
        public function login()
        {
            return view('auth.login')->with('sukses','Anda Berhasil Login');
        }

        public function postlogin(Request $request)
        {
            // if(Auth::attempt($request->only('user_name','password'))){
            //     $akun = operator::where('user_name', $request->user_name)->first();
            // }


            $data1 = operator::where('user_name',$request->user_name)->where('password',$request->password)->get();

            if(count($data1)>0){
                Auth::guard('operator')->loginUsingId($data1[0]['id']);
                return redirect('operator');
            }
            else{
                return redirect('/login')->with('gagal','Incorrect Username and Password !');
            }
        }

        public function logout()
        {
            if(Auth::guard('operator')->check()){
                Auth::guard('operator')->logout();
            }
            return redirect('/');
        }

}
