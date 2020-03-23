<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function operator(Request $request)
    {
        if($request->has('find')){
            $operator = \App\operator::where('nama','LIKE','%'.$request->find.'%')->get();
        }else{
        $operator = \App\Operator::all();
        }
        return view('operator.info_operator',['data_operator' => $operator]);
    }
    public function create(Request $request)
    {
        \App\Operator::create($request->all());
        return redirect('/operator')->with('sukses','Data Berhasil Dimasukkan !');
    }

    public function edit($id)
    {
        $operator = \App\operator::find($id);
        return view('operator.edit_operator',['operator' => $operator]);
    }

    public function update(Request $request,$id)
    {
        $operator = \App\operator::find($id);
        $operator->update($request->all());
        return redirect('operator')->with('sukses','Data Berhasil Diupdate !');
    }
    public function delete($id)
    {
        $operator = \App\operator::find($id);
        $operator->delete();
        return redirect('operator')->with('delete','Data Berhasil Dihapus !');
    }



}

