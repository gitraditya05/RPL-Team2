@extends('layouts.master')

@section('tittle') {{$matkul->kode}}|{{$matkul->nama}} @endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel">
                <div class="panel-body btn-primary">
                    <h2>{{$matkul->kode}} {{$matkul->nama}}</h2><br>
                    <div class="row">
                        <label for="sks" class=" col-md-2">SKS</label>
                        <p class="col-md-10">: {{$matkul->sks}}</p>
                    </div>
                    <div class="row">
                        <label for="semester" class=" col-md-2">Semester</label>
                        <p class="col-md-10">: {{$matkul->semester}}</p>
                    </div>
                    <div class="row">
                        <label for="sks" class=" col-md-2">Prasyarat</label>
                        <p class="col-md-10">: {{$matkul->prasyarat}}</p>
                    </div>
                    <div class="row">
                        <label for="semester" class=" col-md-2">Deskripsi</label>
                        <p class="col-md-10">: {{$matkul->deskripsi}}</p>
                    </div>
                    <div class="col-md-12 text-right">
                        <a href="/matkul" class="btn btn-success btn-sm">Kembali</a>
                    </div>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection