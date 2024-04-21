@extends('layouts.admin.master')
@section('content')
    <div class="pc-container">
        <div class="pc-content">

            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Testimoni</h5>
                            </div>
                            {{-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../navigation/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0)">Customer</a></li>
                                <li class="breadcrumb-item" aria-current="page">Customer List</li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Daftar Testimoni</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-4">
                                    <div class="col-lg-12">
                                        <label class="form-label">Gambar Aplikasi</label>
                                        <input name="gambar" id="gambarr" type="file"
                                            class="form-control @error('gambar') is-invalid @enderror"
                                            data-bouncer-target="#file-error-msg">
                                    </div>
                                    @error('avatar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Nama Kota</label>
                                        <input type="text" class="form-control @error('nama_kota') is-invalid @enderror"
                                            placeholder="Masukan Nama Kota" name="nama_kota" id="nama_kota"
                                            value="{{ old('nama_kota') }}">
                                        @error('nama_kota')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Nama Client</label>
                                        <input type="text"
                                            class="form-control @error('nama_client') is-invalid @enderror"
                                            placeholder="Masukan Nama Client" name="nama_client" id="nama_client"
                                            value="{{ old('nama_client') }}">
                                        @error('nama_client')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Project</label>
                                        <input type="text" class="form-control @error('project') is-invalid @enderror"
                                            placeholder="Masukan Nama Project" name="project" id="project"
                                            value="{{ old('project') }}">
                                        @error('project')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Testimoni</label>
                                        <input type="text" class="form-control @error('testimoni') is-invalid @enderror"
                                            placeholder="Masukan Testimoni" name="testimoni" id="nama_client"
                                            value="{{ old('testimoni') }}">
                                        @error('testimoni')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row mb-3">
                                    <div class="col-lg-6">
                                        <label class="form-label">Latitude</label>
                                        <input type="text" class="form-control @error('latitude') is-invalid @enderror"
                                            placeholder="Masukan Latitude" name="latitude" id="latitude"
                                            value="{{ old('latitude') }}">
                                        @error('latitude')
                                            <small id="file-error-msg"
                                                class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Longitude</label>
                                        <input type="text" class="form-control @error('longitude') is-invalid @enderror"
                                            placeholder="Masukan Longitude" name="longitude" id="nama_client"
                                            value="{{ old('longitude') }}">
                                        @error('longitude')
                                            <small id="file-error-msg"
                                                class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" style="float: right;">Simpan
                                        Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection