<div id="addDataSiswa" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addDataSiswa" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="addDataSiswaForm" action="{{ route('data-siswa.store') }}">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nis" class="form-label">NIS <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="number" name="nis" required id="nis" class="form-control" placeholder="Masukkan NIS" value="{{ old('nis') }}">
                        @if ($errors->has('nis'))
                            <span class="text-danger">{{ $errors->first('nis') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="nisn" class="form-label">NISN <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="number" name="nisn" required id="nisn" class="form-control" placeholder="Masukkan NISN" value="{{ old('nisn') }}">
                        @if ($errors->has('nisn'))
                            <span class="text-danger">{{ $errors->first('nisn') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama" class="form-label">Nama Siswa <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="text" name="nama" required id="nama" class="form-control" placeholder="Masukkan Nama Siswa" value="{{ old('nama') }}">
                        @if ($errors->has('nama'))
                            <span class="text-danger">{{ $errors->first('nama') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat" class="form-label">Alamat <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <textarea name="alamat" id="alamat" required cols="30" rows="5" class="form-control">{{ old('alamat') }}</textarea>
                        @if ($errors->has('alamat'))
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-select">
                            <option value="" disabled {{ old('jenis_kelamin') === null ? 'selected' : '' }}>-- Pilih Jenis Kelamin --</option>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @if ($errors->has('jenis_kelamin'))
                            <span class="text-danger">{{ $errors->first('jenis_kelamin') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="tempat" class="form-label">Tempat Lahir <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="text" name="tempat" required id="tempat" class="form-control" placeholder="Masukkan Tempat Lahir" value="{{ old('tempat') }}">
                        @if ($errors->has('tempat'))
                            <span class="text-danger">{{ $errors->first('tempat') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal" class="form-label">Tanggal Lahir <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="date" name="tanggal_lahir" required id="tanggal" class="form-control" value="{{ old('tanggal_lahir') }}">
                        @if ($errors->has('tanggal_lahir'))
                            <span class="text-danger">{{ $errors->first('tanggal_lahir') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="kelas_id" class="form-label">Kelas <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <select name="kelas_id" id="kelas_id" class="form-control form-select">
                            <option value="" disabled {{ old('kelas_id') === null ? 'selected' : '' }}>-- Pilih Kelas --</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}" {{ old('kelas_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_kelas }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('kelas_id'))
                            <span class="text-danger">{{ $errors->first('kelas_id') }}</span>
                        @endif
                    </div>
                    {{-- <div class="form-group mb-2">
                        <label for="no_wa_ortu" class="form-label">Nomor Whatsapp Orang Tua <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="text" name="no_wa_ortu" required id="no_wa_ortu" class="form-control" placeholder="082122112211" value="{{ old('no_wa_ortu') }}">
                        @if ($errors->has('no_wa_ortu'))
                            <span class="text-danger">{{ $errors->first('no_wa_ortu') }}</span>
                        @endif
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
