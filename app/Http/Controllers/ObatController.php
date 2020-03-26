<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Obat;

class ObatController extends Controller
{
    //--------------------------------------------------HALAMAN OPERATOR--------------------------------------------------//

    //menampilkan data obat
    public function obat(Request $request)
    {
        // $obatById = Obat::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $obat = \App\obat::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $obat = \App\obat::all();
        }
        return view('obat.info_obat',['data_obat' => $obat ]);
    }

    //menambah data obat
    public function create(Request $request)
    {
        \App\Obat::create($request->all());
        return redirect('\obat')->with('sukses','Data Sukses Dimasukkan !');
    }

    //merubah data obat
    public function edit($id)
    {
        $obat = \App\Obat::find($id);
        return view('obat/edit_obat',['obat' => $obat]);
    }

    //udpate data obat
    public function update(Request $request,$id)
    {
        $obat = \App\obat::find($id);
        $obat->update($request->all());
        return redirect('obat')->with('sukses','Data Berhasil Diupdate !');
    }
    //hapus data obat
    public function delete($id)
    {
        $obat = \App\obat::find($id);
        $obat->delete();
        return redirect('obat')->with('sukses','Data Berhasil Dihapus !');
    }


    //--------------------------------------------------HALAMAN OBAT--------------------------------------------------//


    public function halobat(Request $request)
    {
        // $obatById = obat::select('*')->where('id', '=', 1)->get();
        $operator = \App\Operator::all();

        if($request->has('find')){
            $obat = \App\obat::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $obat = \App\obat::all();
        }
        return view('obat.hal_obat',['data_obat' => $obat ]);
    }
}
