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
                                <h5 class="m-b-10">Data Testimoni</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Daftar Testimoni</h5>
                            <a href="{{ route('testimoni.create') }}" class="btn btn-outline-success d-inline-flex"
                                style="float: right;">
                                <i class="ti ti-circle-plus align-text-bottom"></i>Tambah Data Testimoni
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
                                            <th>Nama Kota</th>
                                            <th>Nama Client</th>
                                            <th>Project</th>
                                            <th>Testimoni</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimoni as $item)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    <img src="{{ asset("uploads/{$item->gambar}") }}" alt="Testimoni Gambar"
                                                        class="rounded-image">
                                                </td>


                                                <td>{{ $item->nama_kota }}</td>
                                                <td>{{ $item->nama_client }}</td>
                                                <td>{{ $item->project }}</td>
                                                <td>{{ $item->testimoni }}</td>

                                                <td class="text-center">
                                                    <form action="{{ route('testimoni.destroy', $item->id_testimoni) }}"
                                                        method="POST" class="delete-form">
                                                        <a href="{{ route('testimoni.edit', $item->id_testimoni) }}"
                                                            class="btn btn-outline-primary"><i class="ti ti-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger"
                                                            data-id="{{ $item->id_testimoni }}"><i
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
