<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function dokter(Request $request)
    {
        if($request->has('find')){
            $dokter = \App\dokter::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $dokter = \App\Dokter::all();
        }
        return view('dokter.info_dokter',['data_dokter' => $dokter]);
    }
    public function create(Request $request)
    {
        \App\Dokter::create($request->all());
        return redirect('/dokter')->with('sukses','Data Berhasil Dimasukkan !');
    }

    public function edit($id)
    {
        $dokter = \App\dokter::find($id);
        return view('dokter.edit_dokter',['dokter' => $dokter]);
    }

    public function update(Request $request,$id)
    {
        $dokter = \App\dokter::find($id);
        $dokter->update($request->all());
        return redirect('dokter')->with('sukses','Data Berhasil Diupdate !');
    }
    public function delete($id)
    {
        $dokter = \App\dokter::find($id);
        $dokter->delete();
        return redirect('dokter')->with('delete','Data Berhasil Dihapus !');
    }

    //--------------------------------------------------HALAMAN dokter--------------------------------------------------//


    public function haldokter(Request $request)
    {
        // $dokterById = dokter::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $dokter = \App\dokter::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $dokter = \App\dokter::all();
        }
        return view('dokter.hal_dokter',['data_dokter' => $dokter ]);
    }
}
