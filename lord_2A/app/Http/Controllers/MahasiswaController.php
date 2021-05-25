<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari'))
        {
            $data_mhs = \App\Models\Mahasiswa::where('nama_depan','LIKE','%'.$request->cari.'%')->get();
        }
        else
        {
            $data_mhs = \App\Models\Mahasiswa::all();
        }
        return view('mahasiswa.index', ['data_mhs' => $data_mhs]);
    }

    public function create(Request $request)
    {
        \App\Models\Mahasiswa::create($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mhs = \App\Models\Mahasiswa::find($id);
        return view('mahasiswa/edit',['mahasiswa' => $mhs]);
    }

    public function update(Request $request, $id)
    {
        $mhs = \App\Models\Mahasiswa::find($id);
        $mhs->update($request->all());
        return redirect('/mahasiswa')->with('sukses','Data berhasil diupdate!');
    }

    public function delete($id)
    {
        $mhs = \App\Models\Mahasiswa::find($id);
        $mhs->delete($mhs);
        return redirect('/mahasiswa')->with('sukses', 'Data berhasil dihapus!');
    }
}
