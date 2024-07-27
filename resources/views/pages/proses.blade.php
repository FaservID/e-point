@extends('layouts.main')


@section('title', 'Data Slot Jadwal')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">Generate Penjadwalan</li>
                    </ol>
                </div>



                <h4 class="page-title">Generate Penjadwalan</h4>
                <div class="card">
                    <div class="card-header bg-light">
                        <h5 class="card-title">Generate Penjadwalan</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('generate_store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="alpha" class="form-label">Alpha (<i class="mdi mdi-alpha"></i>)</label>
                                <input type="text" class="form-control @error('alpha') is-invalid @enderror"
                                    value="0.01" name="alpha">
                                @error('alpha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="beta" class="form-label">Beta (<i class="mdi mdi-beta"></i>)</label>
                                <input type="text" class="form-control @error('beta') is-invalid @enderror"
                                    value="0.01" name="beta">
                                @error('beta')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="q" class="form-label">Q</label>
                                <input type="text" class="form-control @error('q') is-invalid @enderror"
                                    value="1" name="q">
                                @error('q')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="rho" class="form-label">Rho</label>
                                <input type="text" class="form-control @error('rho') is-invalid @enderror"
                                    value="0.03" name="rho">
                                @error('rho')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="tij" class="form-label">TiJ</label>
                                <input type="text" class="form-control @error('tij') is-invalid @enderror"
                                    value="0.01" name="tij">
                                @error('tij')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mt-3 text-end mb-2">
                                <button class="btn btn-sm btn-primary">Generate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
