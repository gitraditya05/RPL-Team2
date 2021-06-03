@extends('layouts.master')

@section('tittle') Ubah Matakuliah @endsection

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Inputs Matkul</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/matkul/{{$matkul->id}}/update" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode</label>
                                    <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                    placeholder="KOM-331" value="{{$matkul->kode}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                    placeholder="Nama" value="{{$matkul->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">SKS</label>
                                    <input name="sks" type="text" class="form-control" id="exampleInputPassword1" 
                                    placeholder="3" value="{{$matkul->sks}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Semester</label>
                                    <input name="semester" type="text" class="form-control" id="exampleInputPassword1" 
                                    placeholder="4" value="{{$matkul->semester}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Prasyarat</label>
                                    <input name="prasyarat" type="text" class="form-control" id="exampleInputPassword1" 
                                    placeholder="KOM200/KOM202" value="{{$matkul->prasyarat}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deskripsi</label>
                                    {{-- <input name="deskripsi" type="text-area" class="form-control" id="exampleInputPassword1" placeholder=""> --}}
                                    <input name="deskripsi" class="form-control" type="text"
                                    placeholder="Deskripsi matakuliah" rows="4" value="{{$matkul->deskripsi}}">
                                </div>
                
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

