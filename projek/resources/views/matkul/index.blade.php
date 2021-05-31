@extends('layouts.master')
@extends('matkul.create')
@extends('matkul.edit')

@section('matakuliah')
    active
@endsection

@section('content')
<div class="main">
    <div class="main-content">        
        <div class="container-fluid">
            @if (session('sukses'))
            <a href="#" class="notification-item"><span class="dot bg-success"></span>Data Berhasil ditambah</a>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                            <input type="text" value="" class="form-control" placeholder="Cari matakuliah...">
                            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>     
                    <div class="panel">  
                        <div class="panel-heading">
                            <h3 class="panel-title">Matakuliah</h3>
                            <div class="right">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn" data-toggle="modal" data-target="#createModal">
                                <i class="lnr lnr-file-add"></i></button>
                            </div>
                        </div>
                        <div class="panel-body">
                            @foreach ($data_matkul as $d)
                            <div class="panel">
                                <div class="col-md-12">
                                    <tr>
                                        <td>{{$d->kode}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>
                                            <div class="right">
                                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editModal">Ubah</button>
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>                                       
                                            </div>
                                        </td>
                                    </tr>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection

