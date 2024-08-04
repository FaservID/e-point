@extends('layouts.main')


@section('title', 'Data Siswa')

@push('custom-styles')
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css " rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Laporan</li>
                    </ol>
                </div>
                {{-- <h4 class="page-title">Laporan</h4> --}}

            </div>
        </div>
        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">List Laporan</h5>
                    </div>
                </div> --}}
                <div class="card-body">
                    @php
                        $route = '';
                        if (request()->routeIs('admin.laporan.index')) {
                            $route = 'admin.laporan.export';
                        } elseif (request()->routeIs('guru.laporan.index')) {
                            $route = 'guru.laporan.export';
                        } elseif (request()->routeIs('eksekutif.laporan.index')) {
                            $route = 'eksekutif.laporan.export';
                        } else {
                            $route = 'eksekutif.laporan.export';
                        }

                    @endphp
                    <form action="{{ route($route) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group mb-3">
                            <label for="kelas_id" class="form-label">Nama Kelas</label>
                            <select name="kelas_id" id="kelas_id" class="form-select select2">
                                <option value="" selected disabled>-- Pilih Kelas --</option>
                                <option value="all">Semua</option>
                                @foreach ($kelas as $kel)
                                    <option value="{{ $kel->id }}">{{ $kel->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="student_id" class="form-label">Nama Siswa</label>
                            <select name="student_id" id="student_id" class="form-select select2">
                                <option value="" selected disabled>-- Pilih Siswa --</option>
                                <option value="all">Semua</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}">{{ $student->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="date_range" class="form-label">Pilih Tanggal / Bulan</label>
                            <input type="text" name="daterange" class="form-control" value="07/01/2024 - 07/31/2024" />
                        </div>
                        <button class="btn btn-sm btn-primary w-100">Export</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom-scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <script>
        $(function() {
            $('input[name="daterange"]').daterangepicker({
                opens: 'left'
            }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end
                    .format('YYYY-MM-DD'));
            });
        });
    </script>
@endpush
