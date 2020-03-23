<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Pasien;

class PasienController extends Controller
{
    //--------------------------------------------------HALAMAN OPERATOR--------------------------------------------------//

    //menampilkan data pasien
    public function pasien(Request $request)
    {
        // $pasienById = Pasien::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $pasien = \App\pasien::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $pasien = \App\pasien::all();
        }
        return view('pasien.info_pasien',['data_pasien' => $pasien ]);
    }

    //menambah data pasien
    public function create(Request $request)
    {
        \App\Pasien::create($request->all());
        return redirect('\pasien')->with('sukses','Data Sukses Dimasukkan !');
    }

    //merubah data pasien
    public function edit($id)
    {
        $pasien = \App\Pasien::find($id);
        return view('pasien/edit_pasien',['pasien' => $pasien]);
    }

    //udpate data pasien
    public function update(Request $request,$id)
    {
        $pasien = \App\pasien::find($id);
        $pasien->update($request->all());
        return redirect('pasien')->with('sukses','Data Berhasil Diupdate !');
    }
    //hapus data pasien
    public function delete($id)
    {
        $pasien = \App\pasien::find($id);
        $pasien->delete();
        return redirect('pasien')->with('sukses','Data Berhasil Dihapus !');
    }


    //--------------------------------------------------HALAMAN PASIEN--------------------------------------------------//


    public function halpasien(Request $request)
    {
        // $pasienById = Pasien::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $pasien = \App\pasien::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $pasien = \App\pasien::all();
        }
        return view('pasien.hal_pasien',['data_pasien' => $pasien ]);
    }
}
