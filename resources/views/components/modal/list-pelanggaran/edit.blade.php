<div id="editListPelanggaran" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="editListPelanggaran"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Perbarui Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="editListPelanggaranForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="student_id" class="form-label">Nama Siswa <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <select name="student_id" id="student_id_edit" class="form-select form-control select2Edit">
                            <option value="" selected disabled>-- Pilih Siswa --</option>
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{ $student->nama }} :: Kelas
                                    {{ $student->kelas->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="kategori_id" class="form-label">Kategori Pelanggaran<span
                                class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <select name="kategori_id" id="kategori_id_edit" class="form-select form-control select2Edit">
                            <option value="" selected disabled>-- Pilih Siswa --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->kategori_pelanggaran }} - Point
                                    {{ $category->poin }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="catatan" class="form-label">Pelanggaran <span class="text-danger">*<sup>) Harap
                                    Diisi</sup></span></label>
                        <textarea name="catatan" id="catatan_edit" required cols="30" rows="10" class="form-control"></textarea>
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
