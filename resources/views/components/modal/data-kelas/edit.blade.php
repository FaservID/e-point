<div id="editDataKelas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editDataKelas" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Perbarui Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="editDataKelasForm" >
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="kelas" class="form-label">Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="number" name="kelas" required id="kelas_edit" class="form-control"
                            placeholder="7 / 8 / 9">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_kelas" class="form-label">Nama Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="nama_kelas" required id="nama_kelas_edit" class="form-control"
                            placeholder="Masukkan Nama Kelas">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
