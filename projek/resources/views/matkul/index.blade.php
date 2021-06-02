@extends('layouts.master')
@extends('matkul.create')

@section('matakuliah')
    active
@endsection

@section('content')
<div class="main">
    <div class="main-content">        
        <div class="container-fluid">
            @if (session('sukses'))
            <a href="#" class="notification-item"><span class="dot bg-success"></span>{{session('sukses')}}</a>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form class="input-group col-md-5" method="GET" action="/matkul">
                            <input name="cari" type="text" value="" class="form-control" placeholder="Cari nama matakuliah...">
                            <span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
                    </form>     
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
                                <div class="col-md-12 btn-primary btn-lg">
                                    <div class="left">
                                        <p>
                                            {{$d->kode}}
                                            {{$d->nama}}
                                        </p>
                                    </div>
                                    <div class="right">
                                        <a href="/matkul/{{$d->id}}/cek" class="btn btn-info btn-sm">Cek</a>
                                        @if (auth()->user()->role == "admin")
                                            <a href="/matkul/{{$d->id}}/edit" class="btn btn-warning btn-sm">Ubah</a>
                                            <a href="/matkul/{{$d->id}}/delete" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Yakin untuk dihapus?')">Hapus</a>                                 
                                        @endif
                                        
                                    </div>
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

