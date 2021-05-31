<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Ubah Data Matakuliah</h3>
            </div>
            <div class="modal-body">
                <form action="/matkul/{kode}/update" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="KOM-331"
                        value="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rekayasa Perangkat Lunak">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SKS</label>
                        <input name="sks" type="text" class="form-control" id="exampleInputPassword1" placeholder="3">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Semester</label>
                        <input name="semester" type="text" class="form-control" id="exampleInputPassword1" placeholder="4">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prasyarat</label>
                        <input name="prasyarat" type="text" class="form-control" id="exampleInputPassword1" placeholder="KOM200/KOM202">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi</label>
                        {{-- <input name="deskripsi" type="text-area" class="form-control" id="exampleInputPassword1" placeholder=""> --}}
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi matakuliah" rows="4"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    </div>