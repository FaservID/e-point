<div id="addJenisSanksi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="addJenisSanksi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="standard-modalLabel">Tambah Data</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <form method="POST" novalidate id="addJenisSanksiForm" action="{{route('jenis-sanksi.store')}}">
                @csrf
                @method('POST')
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label for="total_poin" class="form-label">Total Point <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <input type="number" name="total_poin" required id="total_poin" class="form-control" placeholder="Total Point" value="{{ old('total_poin') }}">
                        @if ($errors->has('total_poin'))
                            <span class="text-danger">{{ $errors->first('total_poin') }}</span>
                        @endif
                    </div>
                    <div class="form-group mb-2">
                        <label for="tindakan_sanksi" class="form-label">Tindakan / Sanksi <span class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                        <textarea name="tindakan_sanksi" id="tindakan_sanksi" required cols="30" rows="5" class="form-control">{{ old('tindakan_sanksi') }}</textarea>
                        @if ($errors->has('tindakan_sanksi'))
                            <span class="text-danger">{{ $errors->first('tindakan_sanksi') }}</span>
                        @endif
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
