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
    @include('layouts.landing2.navbar')

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
