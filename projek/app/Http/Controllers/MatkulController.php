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
}
