@extends('layouts.master')

@section('matakuliah')
    active
@endsection

@section('content')
<div class="main">
    <div class="main-content">        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                            <input type="text" value="" class="form-control" placeholder="Cari matakuliah...">
                            <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                    </div>     
                    <div class="panel">  
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Matakuliah</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @foreach ($data_matkul as $d)
                                    <tr>
                                        <td>{{$d->kode}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>
                                            <a href="button">Kunjungi</a>
                                            <a href="button">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection



