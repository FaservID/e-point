<div id="editDataSiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editDataSiswa" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Perbarui Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="editDataSiswaForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nisn" class="form-label">NISN <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="nisn" required id="nisn_edit" class="form-control"
                            placeholder="Masukkan NISN">
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama Siswa <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="nama" required id="nama_edit" class="form-control"
                            placeholder="Masukkan Nama Siswa">
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat" class="form-label">Alamat <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <textarea name="alamat" id="alamat_edit" required cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*<sup>)
                                    Harap
                                    Diisi</sup></span></label>
                        <select name="jenis_kelamin" id="jenis_kelamin_edit" class="form-control form-select">
                            <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="kelas_id" class="form-label">Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <select name="kelas_id" id="kelas_id_edit" class="form-control form-select">
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="no_wa_ortu" class="form-label">Nomor Whatsapp Orang Tua <span
                                class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="no_wa_ortu" required id="no_wa_ortu_edit" class="form-control"
                            placeholder="082122112211">
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
