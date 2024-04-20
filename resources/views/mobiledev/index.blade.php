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
                            <h1 class="header-title">Buat Bisnis Kamu Berkembang</h1>
                            <div class="header-text">
                                <p>Buat aplikasi mobile untuk menunjang bisnis kamu, kami siap membantu kamu dalam mewujudkan aplikasi impianmu.</p>
                            </div>
                            <ul class="header-action btns-inline">
                                <li><a href="#" class="btn btn-primary btn-lg"><span>Konsultasi</span></a>
                                </li>
                                <li><a href="#" class="link link-block link-gray"><em
                                            class="icon icon-lg ni ni-play-circle"></em><span>Produk</span></a>
                                </li>
                            </ul>
                        </div><!-- .header-caption -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div>
    </header>



    <section class="section section-cta">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-7 col-md-8">
                    <div class="text-block is-compact">
                        <h2 class="title">Profesional Mobile Developer</h2>
                        <p class="lead">Selain membuat aplikasi berbasis website, kami juga menyediakan jasa pembuatan aplikasi berbasis mobile Android dan Lintas Platform menggunakan Flutter.</p>
                    </div>
                </div><!-- .col -->
                <div class="col-xl-6 col-lg-5 col-md-4">
                    <div class="img-block h-80px mb-4 rounded">
                        <img src="{{ asset('landing/images/Cover.png') }}" class="img-fluid" alt="Your Image">
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    

    <section class="section section-service pt-3">
        <div class="container">
            <div class="row">
                {{-- <div class="row justify-content-center text-center"> --}}
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
                                    <h5 class="title text-dark">Android</h5>
                                    <p>Buat aplikasi khusus uuntuk pengguna Android  dengan menggunakan Kotlin.</p>
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
                                    <h5 class="title text-dark">Cross Flatform</h5>
                                    <p>Buat aplikasi Android maupun IOS, lebih mudah, menggunakan Flutter.</p>
                                </div>
                            </div><!-- .service -->
                        </div>
                    </div><!-- .col- -->
                </div><!-- .row -->
            </div>
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
                                <a href="https://1.envato.market/e0y3g" target="_blank"
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
