@extends('layouts.landing2.master')

@section('styles')
    <style>
        .rounded img {
            border-radius: 15px;
        }
    </style>
@endsection

@section('content')
    <header class="header header-32 has-header-main-s1 bg-lighter">
        @include('layouts.landing2.navbar')
        <div class="header-content py-6 is-dark mt-lg-n1 bg-dark mt-n3">
            <div class="container">
                <div class="row flex-row-reverse justify-content-center g-gs">

                    <div class="col-lg-12 col-md-7">
                        <div class="header-caption">
                            @php
                                $postBlog = $blog->last();
                            @endphp
                            <div class="img-block mb-4 rounded-4"
                                style="max-width: 100%; overflow: hidden; height: 400px; position: relative;">
                                <img src="{{ asset('uploads/' . $postBlog->gambar) }}" class="img-fluid" alt="Your Image"
                                    style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                <div class="text-overlay"
                                    style="position: absolute; bottom: 0; left: 0; width: 100%; height: 40%; background-color: rgba(0, 0, 0, 0.5); color: #fff; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                                    <small>{{ $postBlog->kategori }}</small>
                                    <h3 class="title" style="margin-top: 10px;">
                                        <a href="{{ route('blog.show', $postBlog->slug) }}"
                                            style="text-decoration: none; color: rgb(255, 255, 255);">
                                            {{ $postBlog->judul }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div><!-- .header-caption -->
                    </div><!-- .col -->

                    {{-- <div class="img-block mb-4 rounded-4"
                        style="max-width: 100%; overflow: hidden; height: 400px; position: relative;">
                        <img src="{{ asset('uploads/' . $postBlog->gambar) }}" class="img-fluid" alt="Your Image"
                            style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                        <div class="text-overlay"
                            style="position: absolute; bottom: 0; left: 0; width: 100%; height: 100%; background-image: linear-gradient(to top, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0) 100%); color: #fff; display: flex; flex-direction: column; justify-content: flex-end; align-items: center; text-align: center;">
                            <small>{{ $postBlog->kategori }}</small>
                            <h3 class="title" style="margin-top: 10px;">
                                <a href="{{ route('blog.show', $postBlog->slug) }}"
                                    style="text-decoration: none; color: rgb(255, 255, 255);">
                                    {{ $postBlog->judul }}
                                </a>
                            </h3>
                        </div>
                    </div> --}}

                    <div id="carouselExampleSlidesOnly" class="carousel slide col-lg-12" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php $active = true; @endphp
                            @foreach ($blog->chunk(4) as $chunk)
                                <div class="carousel-item {{ $active ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($chunk as $item)
                                            <div class="col-3">
                                                <div class="review">
                                                    <div class="review-brand">
                                                        <img src="{{ asset('uploads/' . $item->gambar) }}" alt="img-artikel"
                                                            class="rounded-4"
                                                            style="width: 100%; height: 150px; object-fit: cover;">
                                                    </div>
                                                    <small>{{ $item->kategori }}</small>
                                                    <br>
                                                    <h6 class="fw-bold"><a href="{{ route('blog.show', $item->slug) }}"
                                                            style="text-decoration: none; color: rgb(255, 255, 255);">{{ Str::limit($item->judul, 50) }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php $active = false; @endphp
                            @endforeach
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>

                    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide col-lg-9 col-md-7" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @php $active = true; @endphp
                            @foreach ($blog->chunk(4) as $chunk)
                                <div class="carousel-item {{ $active ? 'active' : '' }}">
                                    <div class="row">
                                        @foreach ($chunk as $item)
                                            <div class="col-3">
                                                <div class="review">
                                                    <div class="review-brand rounded">
                                                        <img src="{{ asset('uploads/' . $item->gambar) }}" alt=""
                                                            style="max-width: 100%; max-height: 100%;">
                                                    </div>
                                                    <small>{{ $item->kategori }}</small>
                                                    <h6><a href="{{ route('blog.show', $item->slug) }}"
                                                            style="text-decoration: none; color: rgb(255, 255, 255);">{{ $item->judul }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @php $active = false; @endphp
                            @endforeach
                        </div>
                    </div> --}}
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->


    </header>


    {{-- <section class="section section-cta">
        <div class="container">
            <h3 class="title text-dark">Artikel Terbaru</h3>
            <div class="row flex-row-reverse align-items-center justify-content-between g-gs">
                <div class="col-xl-7 col-lg-7">
                    <div class="text-block">
                        <div class="row g-gs justify-content-center">
                            <div class="col-mb-12">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($blog as $item)
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-5 col-md-4">
                                                        <div class="img-block h-80px mb-4 rounded">
                                                            <img src="{{ asset('uploads/' . $item->gambar) }}"
                                                                class="img-fluid" alt="Your Image">
                                                        </div>
                                                    </div><!-- .col -->
                                                    <div class="col-xl-8 col-lg-7 col-md-8">
                                                        <div class="text-block is-compact">
                                                            <small
                                                                class=" border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</small>
                                                            <br>
                                                            <small><a href="{{ route('blog.show', $item->slug) }}"
                                                                    style="text-decoration: none; color: black;">{{ Str::limit($item->judul, 50) }}</a>
                                                            </small>
                                                        </div>
                                                    </div><!-- .col -->
                                                </div><!-- .row -->
                                                <hr>
                                            </div><!-- .col-md-6 -->
                                        @endforeach
                                    </div><!-- .row -->
                                </div><!-- .container -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .text-block -->
                </div><!-- .col -->


                <div class="col-xl-5 col-lg-5 p-5">
                    <div class="img-block img-block-s2 ps-xl-6">
                        <img src="{{ asset('uploads/' . $postBlog->gambar) }}" alt="img">
                        <small>{{ $postBlog->kategori }}</small>
                        <p class="title"><a href="{{ route('blog.show', $postBlog->slug) }}"
                                style="text-decoration: none; color: rgb(0, 0, 0);">{{ $postBlog->judul }}</a>
                        </p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .section --> --}}


    <section class="section section-cta">
        <div class="container">
            <h3 class="title text-dark">Artikel Terbaru</h3>
            <br>
            <div class="row">
                @foreach ($blog->chunk(2) as $chunk)
                    @foreach ($chunk as $item)
                        {{-- <div class="row flex-row-reverse align-items-center justify-content-between g-gs"> --}}
                        <div class="col-lg-6">
                            <div class="text-block">
                                <div class="g-gs">
                                    <div class="service service-s3">
                                        <div class="col-xl-4 col-lg-5 col-md-4">
                                            <div class="img-block h-80px mb-4 rounded">
                                                <img src="{{ asset('uploads/' . $item->gambar) }}" class="img-fluid"
                                                    alt="Your Image"
                                                    style="width: 200px; height: 150px; object-fit: cover;">
                                            </div>
                                        </div>
                                        <div class="service-text p-2 col-xl-8 col-lg-5 col-md-4">
                                            <small class="d-block date text">
                                                <small class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</small>
                                                <small>{{ $item->created_at->subHour()->locale('id')->diffForHumans() }}</small>
                                            </small>
                                            <small class="fw-bold"><a href="{{ route('blog.show', $item->slug) }}"
                                                    style="text-decoration: none; color: black;">{{ $item->judul }}</a>
                                            </small>
                                        </div>
                                    </div><!-- .service -->
                                </div>
                            </div><!-- .text-block -->
                            <hr>
                        </div><!-- .col -->
                        {{-- </div><!-- .row --> --}}
                    @endforeach
                @endforeach
            </div><!-- .row -->
        </div><!-- .container -->
    </section>


    <section class="section section-cta">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="text-block is-compact">
                        <h2 class="title">Punya Pertanyaan? Team Kami Siap Membantu Kamu.</h2>
                        <p class="lead">Tanya terkait produk, harga, layanan atau hal lainnya. Team kami siap membantu
                            permasalahan anda.</p>
                        <ul class="btns-inline">
                            <li>
                                <a href="https://wa.me/+6283117927964" target="_blank"
                                    class="btn btn-xl btn-primary">Whatsapp</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-xl-6 col-lg-5 col-md-4">
                    <div class="img-block h-150px mb-4">
                        <img src="{{ asset('landing/images/adm.svg') }}" class="img-fluid" alt="Your Image">
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <script>
        $(document).ready(function() {
            $('#carouselExampleSlidesOnly').carousel({
                interval: 3000
            });
        });
    </script>
@endsection
