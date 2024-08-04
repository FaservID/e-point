<div id="addDataGuru" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addDataGuru" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="addDataGuruForm"
                action="{{ request()->routeIs('manajemen-user.index') ? route('manajemen-user.store') : route('data-guru.store') }}">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="nip" class="form-label">NIP <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="number" name="nip" required id="nip" class="form-control"
                            placeholder="Masukkan NIP" value="{{ old('nip') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nama <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="text" name="name" required id="name" class="form-control"
                            placeholder="Masukkan Nama Guru" value="{{ old('name') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="form-label">Email <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <input type="email" name="email" required id="email" class="form-control"
                            placeholder="Masukkan Email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir <span class="text-danger">*<sup>)
                                    Harap Diisi</sup></span></label>
                        <input type="text" name="tempat_lahir" required id="tempat_lahir" class="form-control"
                            placeholder="Masukkan Tempat Lahir" value="{{ old('tempat_lahir') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*<sup>)
                                    Harap Diisi</sup></span></label>
                        <input type="date" name="tanggal_lahir" required id="tanggal_lahir" class="form-control"
                            value="{{ old('tanggal_lahir') }}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin <span class="text-danger">*<sup>)
                                    Harap Diisi</sup></span></label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control form-select">
                            <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>
                                Laki-Laki</option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>
                                Perempuan</option>
                        </select>
                    </div>
                    {{-- <div class="form-group mb-2">
                        <label for="kelas_id" class="form-label">Wali Kelas <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <select name="kelas_id" id="kelas_id" class="form-control form-select">
                            <option value="" disabled selected>-- Pilih Kelas --</option>
                            @foreach ($kelas as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('kelas_id') == $item->id ? 'selected' : '' }}>{{ $item->nama_kelas }}
                                </option>
                            @endforeach
                        </select>
                    </div> --}}
                    @if (request()->routeIs('manajemen-user.index'))
                        <div class="form-group mb-2">
                            <label for="is_guru_bk" class="form-label">Is Guru BK <span class="text-danger">*<sup>)
                                        Harap Diisi</sup></span></label>
                            <select name="is_guru_bk" id="is_guru_bk" class="form-control form-select">
                                <option value="" disabled selected>-- Pilih Opsi --</option>
                                <option value="true" {{ old('is_guru_bk') == 'true' ? 'selected' : '' }}>Iya</option>
                                <option value="false" {{ old('is_guru_bk') == 'false' ? 'selected' : '' }}>Tidak
                                </option>
                            </select>
                        </div>
                        <div class="form-group mb-2">
                            <label for="type" class="form-label">Role Akun <span class="text-danger">*<sup>) Harap
                                        Diisi</sup></span></label>
                            <select name="type" id="type" class="form-control form-select">
                                <option value="" disabled selected>-- Pilih Opsi --</option>
                                <option value="0" {{ old('type') == '0' ? 'selected' : '' }}>Guru</option>
                                <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Admin</option>
                                <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Eksekutif</option>
                            </select>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<!-- Check for validation errors and show the modal -->
@if ($errors->any())
    <script type="text/javascript">
        $(document).ready(function() {
            $('#addDataGuru').modal('show');
        });
    </script>
@endif