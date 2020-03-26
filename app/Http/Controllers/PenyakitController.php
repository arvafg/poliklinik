<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\penyakit;

class PenyakitController extends Controller
{
      //--------------------------------------------------HALAMAN OPERATOR--------------------------------------------------//

    //menampilkan data penyakit
    public function penyakit(Request $request)
    {
        // $penyakitById = penyakit::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $penyakit = \App\penyakit::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $penyakit = \App\penyakit::all();
        }
        return view('penyakit.info_penyakit',['data_penyakit' => $penyakit ]);
    }

    //menambah data penyakit
    public function create(Request $request)
    {
        \App\penyakit::create($request->all());
        return redirect('\penyakit')->with('sukses','Data Sukses Dimasukkan !');
    }

    //merubah data penyakit
    public function edit($id)
    {
        $penyakit = \App\penyakit::find($id);
        return view('penyakit/edit_penyakit',['penyakit' => $penyakit]);
    }

    //udpate data penyakit
    public function update(Request $request,$id)
    {
        $penyakit = \App\penyakit::find($id);
        $penyakit->update($request->all());
        return redirect('penyakit')->with('sukses','Data Berhasil Diupdate !');
    }
    //hapus data penyakit
    public function delete($id)
    {
        $penyakit = \App\penyakit::find($id);
        $penyakit->delete();
        return redirect('penyakit')->with('sukses','Data Berhasil Dihapus !');
    }


    //--------------------------------------------------HALAMAN PENYAKIT--------------------------------------------------//


    public function halpenyakit(Request $request)
    {
        // $penyakitById = penyakit::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $penyakit = \App\penyakit::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $penyakit = \App\penyakit::all();
        }
        return view('penyakit.hal_penyakit',['data_penyakit' => $penyakit ]);
    }
}
