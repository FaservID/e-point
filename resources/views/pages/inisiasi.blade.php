@extends('layouts.main')


@section('title', 'Data Slot Jadwal')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Inisiasi Mata Pelajaran</li>
                    </ol>
                </div>



                <h4 class="page-title">Inisisasi Mata Pelajaran</h4>
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">List Inisisasi Mata Pelajaran</h5>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#standard-modal"><i class="mdi mdi-plus-box"></i> Inisisasi Mata
                                Pelajaran</button>
                            <!-- Standard modal -->
                            <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog"
                                aria-labelledby="standard-modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="standard-modalLabel">Inisiasi Mata Pelajaran</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-hidden="true"></button>
                                        </div>
                                        <form action="{{ route('inisiasi-mapel.store') }}" method="POST">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group mb-2">
                                                    <label for="teachers_id" class="form-label">Guru <span
                                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                                    <select name="teachers_id" id="teachers_id"
                                                        class="form-control @error('teachers_id') is-invalid @enderror">
                                                        <option value="" selected disabled>-- Pilih Guru --</option>
                                                        @foreach ($teachers as $teacher)
                                                            <option value="{{ $teacher->id }}"
                                                                {{ old('teachers_id') == $teacher->id ? 'selected' : '' }}>
                                                                {{ $teacher->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('teachers_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label for="mata_pelajarans_id" class="form-label">Mata Pelajaran <span
                                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                                    <select name="mata_pelajarans_id" id="mata_pelajarans_id"
                                                        class="form-control @error('mata_pelajarans_id') is-invalid @enderror">
                                                        <option value="" selected disabled>-- Pilih Mata Pelajaran --
                                                        </option>
                                                        @foreach ($mapels as $mapel)
                                                            <option value="{{ $mapel->id }}"
                                                                {{ old('mata_pelajarans_id') == $mapel->id ? 'selected' : '' }}>
                                                                {{ $mapel->mata_pelajaran }} - {{$mapel->jurusan}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('mata_pelajarans_id')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="status" class="form-label">Kelas <span
                                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                                    <select name="status" 
                                                        class="form-control @error('status') is-invalid @enderror">
                                                        <option value="" selected disabled>-- Pilih Kelas --</option>
                                                        @foreach ($kelas as $k)
                                                            <option value="{{ $k->status }}"
                                                                {{ old('status') == $k->status ? 'selected' : '' }}>
                                                                {{ $k->status }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('status')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan Data</button>
                                            </div>
                                        </form>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable-buttons"
                                class="table table-bordered table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 2%">#</th>
                                        <th>id</th>
                                        <th>Guru</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inisiasi as $i)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ ucWords($i->id) }}</td>
                                            <td>{{ ucWords($i->teacher->nama) }}</td>
                                            <td>{{ ucWords($i->mapel->mata_pelajaran)}} - {{$i->mapel->jurusan}}</td>
                                            <td>{{ $i->status}}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center">
                                                    <button class="btn btn-sm btn-info me-1" data-bs-toggle="modal"
                                                        data-bs-target="#detail-modal-{{ $i->id }}"><i
                                                            class="mdi mdi-eye"></i></button>
                                                    <button class="btn btn-sm btn-warning me-1" data-bs-toggle="modal"
                                                        data-bs-target="#edit-modal-{{ $i->id }}"><i
                                                            class="mdi mdi-application-edit"></i></button>
                                                    <form action="{{ route('inisiasi-mapel.destroy', $i->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <button class="btn btn-sm btn-danger delete" type="submit"><i
                                                                class="mdi mdi-trash-can"></i></button>
                                                    </form>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL DETAIL -->
        @foreach ($inisiasi as $slot)
            <!-- Standard modal -->
            <div id="detail-modal-{{ $slot->id }}" class="modal fade" tabindex="-1" role="dialog"
                aria-labelledby="detail-modal-{{ $slot->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="standard-modalLabel">{{ $slot->teacher->nama }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group mb-2">
                                <label for="teacher" class="form-label">Guru </label>
                                <input type="text" name="teacher" class="form-control " readonly
                                    placeholder="Masukkan teacher" value="{{ $slot->teacher->nama }}">

                            </div>
                            <div class="form-group mb-2">
                                <label for="mapel" class="form-label">Mata Pelajaran </label>
                                <input type="text" name="mapel" class="form-control " readonly
                                    placeholder="Masukkan mapel"
                                    value="{{ $slot->mapel->mata_pelajaran }}">

                            </div>
                            <div class="form-group mb-2">
                                <label for="status" class="form-label">Status </label>
                                <input type="text" name="status" class="form-control " readonly
                                    placeholder="Masukkan status"
                                    value="{{ $slot->status }}">

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        @endforeach
        <!-- END MODAL DETAIL -->

        <!-- MODAL EDIT -->
        @foreach ($inisiasi as $slot)
            <!-- Standard modal -->
            <div id="edit-modal-{{ $slot->id }}" class="modal fade" tabindex="-1" role="dialog"
                aria-labelledby="edit-modal-{{ $slot->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="standard-modalLabel">{{ $slot->teacher->nama }}</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-hidden="true"></button>
                        </div>
                        <form action="{{ route('inisiasi-mapel.update', $slot->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">

                                <div class="form-group mb-2">
                                    <label for="teachers_id" class="form-label">Guru <span
                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                    <select name="teachers_id" id="teachers_id"
                                        class="form-control @error('teachers_id') is-invalid @enderror">
                                        <option value="" selected disabled>-- Pilih Guru --</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id }}"
                                                {{ $slot->teachers_id == $teacher->id ? 'selected' : '' }}>
                                                {{ $teacher->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('teachers_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-2">
                                    <label for="mata_pelajarans_id" class="form-label">Mata Pelajaran <span
                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                    <select name="mata_pelajarans_id" id="mata_pelajarans_id"
                                        class="form-control @error('mata_pelajarans_id') is-invalid @enderror">
                                        <option value="" selected disabled>-- Pilih Mata Pelajaran --
                                        </option>
                                        @foreach ($mapels as $mapel)
                                            <option value="{{ $mapel->id }}"
                                                {{ $slot->mata_pelajarans_id == $mapel->id ? 'selected' : '' }}>
                                                {{ $mapel->mata_pelajaran }} - {{$mapel->jurusan}}</option>
                                        @endforeach
                                    </select>
                                    @error('mata_pelajarans_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label for="status" class="form-label">Kelas <span
                                            class="text-danger">*<sup>) Harap Diisi</sup></span></label>
                                    <select name="status" 
                                        class="form-control @error('status') is-invalid @enderror">
                                        <option value="" selected disabled>-- Pilih Kelas --</option>
                                        @foreach ($kelas as $k)
                                            <option value="{{ $k->status }}"
                                                {{ $slot->status == $k->status ? 'selected' : '' }}>
                                                {{ $k->status }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
            <!-- /.modal -->
        @endforeach
        <!-- END MODAL EDIT -->

    </div>


@endsection
