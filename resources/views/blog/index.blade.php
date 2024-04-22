@extends('layouts.landing2.master')

<style>
    .rounded img {
        border-radius: 10px;
    }
</style>

@section('content')
    <header class="header  header-32 has-header-main-s1 bg-lighter">
        @include('layouts.landing2.navbar')
        <div class="header-content mt-0 py-5">
            <div class="container">
                <div class="row flex-row-reverse justify-content-center text-center g-gs">
                    <div class="col-lg-8 col-md-10">
                        <div class="header-caption">
                            <h1 class="header-title">Artikel Terbaru</h1>
                            <div class="header-text">
                                <p>Tambah wawasan dan temukan artikel menarik seputar dunia teknologi, dari kami.</p>
                            </div>
                            {{-- <ul class="header-action btns-inline">
                                <li><a href="https://wa.me/+6283117927964"
                                        class="btn btn-primary btn-lg"><span>Konsultasi</span></a>
                                </li>
                                <li><a href="#" class="link link-block link-gray"><em
                                            class="icon icon-lg ni ni-play-circle"></em><span>Produk</span></a>
                                </li>
                            </ul> --}}
                        </div><!-- .header-caption -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
    </header>



    <section class="section section-cta">
        <div class="container">
            @foreach ($blog as $item)
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-4">
                        <div class="img-block h-80px mb-4 rounded">
                            <img src="{{ asset('uploads/' . $item->gambar) }}" class="img-fluid" alt="Your Image">
                        </div>
                    </div><!-- .col -->
                    <div class="col-xl-8 col-lg-7 col-md-8">
                        <div class="text-block is-compact">
                            <small class="d-block date text">
                                <a href="javascript:void(0)"
                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</a>
                                <i class="bi bi-clock me-1"></i>
                                <a href="javascript:void(0)"
                                    class="op-8">{{ $item->created_at->subHour()->locale('id')->diffForHumans() }}</a>
                            </small>
                            <h5 class="title"><a
                                    href="{{ route('blog.show', ['blog' => $item->id]) }}">{{ $item->judul }}</a></h5>
                                    {!! Str::limit($item->konten, 250) !!}

                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <hr>
            @endforeach
        </div><!-- .container -->
    </section>



    {{-- <section class="section section-service pt-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-8">
                    <div class="section-head">
                        <h2 class="title text-dark">Layanan</h2>
                        <p>Layanan yang kami tawarkan untuk memenuhi kebutuhan digital kamu.</p>
                    </div><!-- .section-head -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="section-content">
                <div class="row gy-gs justify-content-center text-center">
                    <div class="col-mb-6 col-lg-4">
                        <div class="card card-full service service-s4 after-bg-info">
                            <div class="card-inner">
                                <div>
                                    <img src="{{ asset('landing/images/websites.png') }}" alt="Your SVG Image">
                                </div>
                                <div class="service-text">
                                    <h5 class="title text-dark">Pembuatan Website</h5>
                                </div>
                            </div>
                        </div><!-- .service -->
                    </div><!-- .col -->

                    <div class="col-mb-6 col-lg-4">
                        <div class="card card-full service service-s4">
                            <div class="card-inner">
                                <div>
                                    <img src="{{ asset('landing/images/mobile.png') }}" alt="Your SVG Image"
                                        style="width: auto; height: 162px;">
                                </div>
                                <div class="service-text">
                                    <h5 class="title text-dark">Pembuatan Aplikasi Mobile</h5>
                                </div>
                            </div><!-- .service -->
                        </div>
                    </div><!-- .col- -->
                    <div class="col-mb-6 col-lg-4">
                        <div class="card card-full service service-s4 after-bg-danger">
                            <div class="card-inner">
                                <div>
                                    <img src="{{ asset('landing/images/gover.png') }}" alt="Your SVG Image"
                                        style="width: auto; height: 162px;">
                                </div>
                                <div class="service-text">
                                    <h5 class="title text-dark">Pembuatan Web & App Design</h5>
                                </div>
                            </div>
                        </div><!-- .service -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section> --}}

    <section class="section section-cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="text-block is-compact">
                        <h2 class="title">Punya Pertanyaan? Team Kami Siap Membantu Kamu.</h2>
                        <p class="lead">Tanya terkait produk, harga, layanan atau hal lainnya. Team kami siap
                            membantu permasalahan anda.</p>
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
@endsection