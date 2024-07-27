<div id="addDataKelas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addDataKelas" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="addDataKelasForm" action="{{route('data-kelas.store')}}">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="kelas" class="form-label">Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="number" name="kelas" required id="kelas" class="form-control"
                            placeholder="7 / 8 / 9">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_kelas" class="form-label">Nama Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="nama_kelas" required id="nama_kelas" class="form-control"
                            placeholder="Masukkan Nama Kelas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
