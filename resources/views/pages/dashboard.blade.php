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
                <div class="row">
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
                </div>
            </div>
        </div>
    </div>


@endsection
