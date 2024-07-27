@extends('layouts.main')


@section('title', 'Data Slot Jadwal')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Result</li>
                    </ol>
                </div>



                <h4 class="page-title">Result</h4>
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title">Result</h5>
                    </div>
                    <div class="card-body">

                        {{-- <label for="teacherFilter">Filter Guru:</label>
                        <select id="teacherFilter" onchange="filterTable()">
                            <option value="">Semua Guru</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{ $teacher->nama }}</option>
                            @endforeach
                        </select> --}}
                        <div class="table-responsive">
                            <table id="datatable-buttons"
                                class="table table-bordered table-striped dt-responsive nowrap w-100">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 2%">#</th>
                                        <th>Hari</th>
                                        <th>Kelas</th>
                                        <th>Jam</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $result->slot->day->hari }}</td>
                                            <td>{{ $result->class->nama }}</td>
                                            <td>{{ $result->slot->hour->jam_mulai }} -
                                                {{ $result->slot->hour->jam_selesai }}</td>
                                            <td>{{ $result->init == null ? 'EKSKUL' : $result->init?->mapel?->mata_pelajaran }}
                                            </td>
                                            <td>{{ $result->init == null ? 'EKSKUL' : $result->init?->teacher?->nama }}
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

    </div>


@endsection
{{-- @push('custom-scripts')
    <script>
        function filterTable() {
            var teacherFilter = document.getElementById("teacherFilter").value;

            var table = document.getElementById("datatable-buttons");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var teacherCell = rows[i].getElementsByTagName("td")[5]; // Mengganti angka 5 dengan indeks kolom guru Anda

                if (teacherFilter === "" || teacherCell.textContent.trim() === teacherFilter) {
                    rows[i].style.display = "";
                } else {
                    rows[i].style.display = "none";
                }
            }
        }
    </script>
@endpush --}}
