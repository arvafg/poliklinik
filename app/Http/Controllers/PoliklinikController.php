<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliklinikController extends Controller
{
    public function poliklinik()
    {
        $poliklinik = \App\Poliklinik::all();
        return view('poliklinik.info_poliklinik',['data_poliklinik' => $poliklinik ]);

    }

    public function create(Request $request)
    {
        \App\Poliklinik::create($request->all());
        return redirect('poliklinik')->with('sukses','Data Berhasil Dimasukkan !');
    }

    public function edit($id)
    {
        $poliklinik = \App\Poliklinik::find($id);
        return view('poliklinik/edit_poliklinik',['poliklinik' => $poliklinik]);
    }

    public function update(Request $request,$id)
    {
        $poliklinik = \App\Poliklinik::find($id);
        $poliklinik->update($request->all());
        return redirect('poliklinik')->with('sukses','Data Berhasil Diupdate !');
    }
    //hapus data poliklinik
    public function delete($id)
    {
        $poliklinik = \App\poliklinik::find($id);
        $poliklinik->delete();
        return redirect('poliklinik')->with('sukses','Data Berhasil Dihapus !');
    }
}
