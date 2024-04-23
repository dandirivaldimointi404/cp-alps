@extends('layouts.admin.master')
@section('content')
    <div class="pc-container">
        <div class="pc-content">

            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Berita</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tambah Daftar Berita</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mb-4">
                                    <div class="col-lg-12">
                                        <label class="form-label">Gambar Berita</label>
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
                                        <label class="form-label">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                            placeholder="Masukan Judul" name="judul" id="judul"
                                            value="{{ old('judul') }}">
                                        @error('judul')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Kategori</label>
                                        <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                            placeholder="Masukan Kategori" name="kategori" id="kategori"
                                            value="{{ old('kategori') }}">
                                        @error('kategori')
                                            <small id="file-error-msg" class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <div class="card">
                                        <label class="form-label">Konten</label>
                                        <div class="card-body">
                                            <textarea name="konten" id="classic-editor">{{ old('konten') }}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary float-right" type="submit" style="float: right">Simpan Data</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
