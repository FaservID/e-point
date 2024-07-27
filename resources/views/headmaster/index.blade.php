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
            </div>
        </div>
    </div>


@endsection
