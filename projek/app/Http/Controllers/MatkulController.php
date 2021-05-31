<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $data_matkul = \App\Models\Matkul::all();
        return view('matkul.index', ['data_matkul' => $data_matkul]);
    }

    public function create(Request $request)
    {
        \App\Models\Matkul::create($request->all());
        return redirect('/matkul')->with('sukses','Data berhasil ditambahkan!');
    }

    // public function edit($kode)
    // {
    //     $matkul = \App\Models\Matkul::find($kode);
        
    // }
}
