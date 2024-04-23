@extends('layouts.admin.master')

@section('content')
    <style>
        .rounded-image {
            border-radius: 10px;
            max-width: 100px;
            height: auto;
        }
    </style>
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
                            <h5>Daftar Berita</h5>
                            <a href="{{ route('berita.create') }}" class="btn btn-outline-success d-inline-flex"
                                style="float: right;">
                                <i class="ti ti-circle-plus align-text-bottom"></i>Tambah Data Berita
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered nowrap" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>
                                                NO
                                            </th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Konten</th>
                                            <th>Kategori</th>
                                            <th>created_at</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($berita as $item)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset("uploads/{$item->gambar}") }}" alt="Testimoni Gambar"
                                                        class="rounded-image">
                                                </td>


                                                <td>{{ $item->judul }}</td>
                                                <td>{!! Str::limit($item->konten, 100) !!}</td>
                                                <td>{{ $item->kategori }}</td>
                                                <td>{{ $item->created_at }}</td>

                                                <td class="text-center">
                                                    <form action="{{ route('berita.destroy', $item->slug) }}" method="POST"
                                                        class="delete-form">
                                                        <a href="{{ route('berita.edit', $item->slug) }}"
                                                            class="btn btn-outline-primary"><i class="ti ti-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            data-id="{{ $item->slug }}"><i
                                                                class="ti ti-trash"></i></button>
                                                    </form>
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
    </div>
@endsection
