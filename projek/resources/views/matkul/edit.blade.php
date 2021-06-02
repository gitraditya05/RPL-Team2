@extends('layouts.master')

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
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                                    placeholder="Nama" value="{{$matkul->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jurusan</label>
                                    <input name="jurusan" type="text" class="form-control" id="exampleInputPassword1" 
                                    placeholder="Jurusan" value="{{$matkul->prasyarat}}">
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

