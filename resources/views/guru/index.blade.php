@extends('layouts.main')


@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                {{-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                    <li class="breadcrumb-item active">Starter</li>
                </ol>
            </div> --}}



                <h4 class="page-title">Dashboard</h4>
                <div class="row">
                    <div class="col-lg-12 mb-md-0 mb-3">
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <h2 class="card-title text-primary">Halo, {{ auth()->user()->name }}! 🎉</h2>
                                        <p class="mb-4">
                                            {{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM YYYY') }}
                                        </p>
                                        <p class="fw-bold text-muted" style="font-size: 13px">
                                            *) Laporan Hari Ini
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-5 text-center text-sm-left">
                                    <div class="card-body pb-0 px-0 px-md-4">
                                        <img src="{{ asset('assets/images/man-with-laptop-light.png') }}" height="140"
                                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="row">
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-tie-voice widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Revenue">Total Guru</h5>
                                <h3 class="mt-3 mb-3">{{ $teachers }}</h3>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-account-tie widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Revenue">Total Hari</h5>
                                <h3 class="mt-3 mb-3">{{ $hari }}</h3>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-book-open-variant widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Revenue">Total Mata Pelajaran</h5>
                                <h3 class="mt-3 mb-3">{{ $mata_pelajaran }}</h3>
                            </div>
                        </div>
                    </div> <!-- end col-->
                    <div class="col-xxl-3 col-sm-6">
                        <div class="card widget-flat">
                            <div class="card-body">
                                <div class="float-end">
                                    <i class="mdi mdi-google-classroom widget-icon"></i>
                                </div>
                                <h5 class="text-muted fw-normal mt-0" title="Revenue">Total Kelas</h5>
                                <h3 class="mt-3 mb-3">{{ $kelas }}</h3>
                            </div>
                        </div>
                    </div> <!-- end col-->
                </div> --}}
                <div class="row">
                    <div class="col-lg-12 mb-md-0 mb-3">
                        <div class="card widget-inline">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card rounded-0 shadow-none m-0">
                                            <div class="card-body text-center">
                                                <i class="ri-briefcase-line text-muted font-24"></i>
                                                <h3><span>{{$guru}}</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Guru</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                            <div class="card-body text-center">
                                                <i class="ri-list-check-2 text-muted font-24"></i>
                                                <h3><span>{{$pelanggaran}}</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Pelanggaran</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                            <div class="card-body text-center">
                                                <i class="ri-group-line text-muted font-24"></i>
                                                <h3><span>{{$siswa}}</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Siswa</p>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card rounded-0 shadow-none m-0 border-start border-light">
                                            <div class="card-body text-center">
                                                <i class="ri-line-chart-line text-muted font-24"></i>
                                                <h3><span>{{$kelas}}</span></h3>
                                                <p class="text-muted font-15 mb-0">Total Kelas</p>
                                            </div>
                                        </div>
                                    </div>
    
                                </div> <!-- end row -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Top Pelanggaran Siswa</h4>
                            </div>
                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Poin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($top_students as $student)
                                            <tr>
                                                <td>
                                                    <h5 class="font-15 mb-1 fw-normal">{{$student->student->nama}}</h5>
                                                    <span class="text-muted font-13">{{$student->student->kelas->nama_kelas}}</span>
                                                </td>
                                                <td class="fw-bold text-danger"><h3>{{$student->total_points}}</h3></td>
                                            </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Top Kategori Pelanggaran</h4>
                            </div>

                            <div class="card-body pt-0">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Pelanggaran</th>
                                                <th>Jumlah</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($top_pelanggaran as $item)
                                            <tr>
                                                <td>
                                                    <h5 class="font-15 mb-1 fw-normal">{{$item->kategori->kategori_pelanggaran}}</h5>
                                                    {{-- <span class="text-muted font-13">Kelas : </span> --}}
                                                </td>
                                                <td class="fw-bold text-danger"><h3>{{$item->jumlah_pelanggaran}}</h3></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                    <div class="col-xl-4 col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h4 class="header-title">Chart</h4>
                            </div>

                            <div class="card-body pt-0">
                                <canvas id="barChart"></canvas>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@push('custom-scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($data['labels']),
            datasets: [{
                label: 'Data',
                data: @json($data['data']),
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
    
@endpush
