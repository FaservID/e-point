<div id="editKategoriPelanggaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editKategoriPelanggaran"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="editKategoriPelanggaranForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="kategori_pelanggaran" class="form-label">Kategori Pelanggaran <span
                                class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="kategori_pelanggaran" required id="kategori_pelanggaran_edit"
                            class="form-control" placeholder="Masukkan Kategori Pelanggaran">
                    </div>
                    <div class="form-group mb-2">
                        <label for="poin" class="form-label">Point <span
                                class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="number" name="poin" required id="poin_edit"
                            class="form-control" placeholder="Masukkan Poin">
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
