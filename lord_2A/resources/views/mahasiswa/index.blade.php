@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Mahasiswa</h3>
                                <div class="right">
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-file-add"></i></button>
                                </div>                            
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($data_mhs as $mhs)
                                            <tr>
                                                <td>{{$mhs->nama_depan}}</td>
                                                <td>{{$mhs->nama_belakang}}</td>
                                                <td>{{$mhs->jenis_kelamin}}</td>
                                                <td>{{$mhs->jurusan}}</td>
                                                <td>
                                                    <a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                    <a href="/mahasiswa/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" 
                                                    onclick="return confirm('Yakin untuk dihapus?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Create Data Mahasiswa</h3>
            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button> --}}
        </div>
        <div class="modal-body">
            <form action="/mahasiswa/create" method="POST">
                {{ csrf_field() }}
                {{-- <div class="form-group">
                    <label for="exampleInputEmail1">NIM</label>
                    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIM">
                </div> --}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Depan</label>
                    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Belakang</label>
                    <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jurusan</label>
                    <input name="jurusan" type="text" class="form-control" id="exampleInputPassword1" placeholder="Jurusan">
                    <small id="emailHelp" class="form-text text-muted">isi tanpa singkatan serta huruf kapital diawal kata, cth: 'Ilmu Komputer'.</small>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
    </div>
    </div>
@endsection

        


