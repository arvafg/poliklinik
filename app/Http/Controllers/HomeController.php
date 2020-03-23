<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }

    public function about()
    {
        return view('home.about');
    }

    public function create(Request $request)
    {
        \App\Pasien::create($request->all());
        return view('home.home');
    }
}
