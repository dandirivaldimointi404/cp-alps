@extends('layouts.landing2.master')

<style>
    .rounded img {
        border-radius: 10px;
    }

    .rata-kanan {
        text-align: justify;
    }
</style>

@section('content')
    {{-- <header class="header  header-32 has-header-main-s1"> --}}
    @include('layouts.landing2.navbar')
    {{-- </header> --}}



    {{-- <section class="section section-cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5 col-md-4 d-flex justify-content-center">
                    <div class="img-block h-80px mb-4 rounded">
                        <img src="{{ asset('uploads/' . $blog->gambar) }}" class="img-fluid" alt="Your Image">
                    </div>
                </div><!-- .col -->


                <div class="col-xl-12 col-lg-7 col-md-8">
                    <div class="text-block is-compact">
                        <h2 class="title">{{ $blog->judul }}</h2>
                        {!! $blog->konten !!}
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section> --}}


    <section class="section section-service justify-content-center">
        <div class="container">
            <div class="row">
                <div class="section-content">
                    <div class="row gy-gs justify-content-center text-center">
                        <div class="col-mb-6 col-lg-6">
                            <div class="card p-4">
                                <div>
                                    <div class="img-block h-120px mb-4 rounded"> <!-- Adjusted image height -->
                                        <img src="{{ asset('uploads/' . $blog->gambar) }}" class="img-fluid" alt="Your Image">
                                    </div>
                                    {{-- <div class="service-text">
                                        <h5 class="title text-dark">Pembuatan Aplikasi Mobile</h5>
                                    </div> --}}
                                </div><!-- .service -->
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>

                <div class="row flex-row-reverse justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="header-caption">
                            <h2>{{ $blog->judul }}</h2>
                            <br>
                            <div class="header-text">
                                <p class="rata-kanan">{!! $blog->konten !!}</p>
                            </div>
                        </div><!-- .header-caption -->
                    </div><!-- .col -->
                </div><!-- .row -->
                
            </div><!-- .row -->

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
