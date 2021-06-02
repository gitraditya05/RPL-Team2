<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_matkul = \App\Models\Matkul::where('nama','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_matkul = \App\Models\Matkul::all();
        }
        return view('matkul.index', ['data_matkul' => $data_matkul]);
    }

    public function create(Request $request)
    {
        \App\Models\Matkul::create($request->all());
        return redirect('/matkul')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $matkul = \App\Models\Matkul::find($id);
        return view('matkul/edit',['matkul'=>$matkul]);
    }

    public function update(Request $request, $id)
    {
        $matkul = \App\Models\Matkul::find($id);
        $matkul->update($request->all());
        return redirect('/matkul')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $matkul = \App\Models\Matkul::find($id);
        $matkul->delete($matkul);
        return redirect('/matkul')->with('sukses', 'Data berhasil dihapus!');
    }
}
