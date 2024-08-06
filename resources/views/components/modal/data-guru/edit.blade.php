<div id="editDataGuru" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editDataGuru" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="editDataGuruForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nip" class="form-label">NIP <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="number" name="nip" required id="nip_edit" class="form-control"
                            placeholder="Masukkan NIP">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nama Guru <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="name" required id="name_edit" class="form-control"
                            placeholder="Masukkan Nama Guru">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jabatan" class="form-label">Jabatan <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="jabatan" required id="jabatan_edit" class="form-control"
                            placeholder="Masukkan Jabatan" value="{{ old('jabatan') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="email" name="email" required id="email_edit" class="form-control"
                            placeholder="Masukkan Email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">*<sup>)
                                    Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="tempat_lahir" required id="tempat_lahir_edit" class="form-control"
                            placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*<sup>)
                                    Harap
                                    Diisi</sup></span></label>
                        <input type="date" name="tanggal_lahir" required id="tanggal_lahir_edit"
                            class="form-control">
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
                    {{-- <div class="form-group mb-2">
                        <label for="kelas_id" class="form-label">Wali Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <select name="kelas_id" id="kelas_id_edit" class="form-control form-select">
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    @if (request()->routeIs('manajemen-user.index'))
                        <div class="form-group mb-2">
                            <label for="is_guru_bk" class="form-label">Is Guru BK <span class="text-danger">*<sup>)
                                        Harap
                                        Diisi</sup></span></label>
                            <select name="is_guru_bk" id="is_guru_bk_edit" class="form-control form-select">
                                <option value="" disabled selected>-- Pilih Opsi --</option>
                                <option value="true">Iya</option>
                                <option value="false">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="type" class="form-label">Role Akun<span class="text-danger">*<sup>) Harap
                                        Diisi</sup></span></label>
                            <select name="type" id="type_edit" class="form-control form-select">
                                <option value="" disabled selected>-- Pilih Opsi --</option>
                                <option value="0">Guru</option>
                                <option value="1">Admin</option>
                                <option value="2">Eksekutif</option>
                            </select>
                        </div>
                    @endif
                    {{-- <div class="form-group mb-2">
                        <label for="no_wa_ortu" class="form-label">Nomor Whatsapp Orang Tua <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="no_wa_ortu" required id="no_wa_ortu" class="form-control"
                            placeholder="082122112211">
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Perbarui Data</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
