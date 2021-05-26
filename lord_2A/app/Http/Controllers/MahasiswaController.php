<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $user = new \App\Models\User;
        $user->role = 'mahasiswa';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('secret');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $mahasiswa = \App\Models\Mahasiswa::create($request->all());
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
