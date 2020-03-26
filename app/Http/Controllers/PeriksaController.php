<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokter;

class PeriksaController extends Controller
{
    public function periksa(Request $request)
    {
        // $pasienById = Pasien::select('*')->where('id', '=', 1)->get();
        $dokter = Dokter::select('id','nama')->get();
        $pasien = \App\pasien::select('id','nama')->get();

        return view('pasien.periksa',compact('dokter','pasien'));
    }
}
