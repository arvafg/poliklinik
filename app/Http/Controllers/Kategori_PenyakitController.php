<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kategori_PenyakitController extends Controller
{
    public function kategori_penyakit(Request $request)
    {
        if($request->has('find')){
            $kategori_penyakit = \App\kategori_penyakit::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $kategori_penyakit = \App\kategori_penyakit::all();
        }
        return view('kategori_penyakit.info_kategori_penyakit',['data_kategori_penyakit' => $kategori_penyakit]);
    }
    public function create(Request $request)
    {
        \App\kategori_penyakit::create($request->all());
        return redirect('/kategori_penyakit')->with('sukses','Data Berhasil Dimasukkan !');
    }

    public function edit($id)
    {
        $kategori_penyakit = \App\kategori_penyakit::find($id);
        return view('kategori_penyakit.edit_kategori_penyakit',['kategori_penyakit' => $kategori_penyakit]);
    }

    public function update(Request $request,$id)
    {
        $kategori_penyakit = \App\kategori_penyakit::find($id);
        $kategori_penyakit->update($request->all());
        return redirect('kategori_penyakit')->with('sukses','Data Berhasil Diupdate !');
    }
    public function delete($id)
    {
        $kategori_penyakit = \App\kategori_penyakit::find($id);
        $kategori_penyakit->delete();
        return redirect('kategori_penyakit')->with('delete','Data Berhasil Dihapus !');
    }

}
