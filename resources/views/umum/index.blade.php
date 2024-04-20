@extends('layouts.landing2.master')

<style>
    .rounded img {
        border-radius: 10px;
    }
</style>

@section('content')
    <header class="header has-header-main-s1 bg-lighter" id="umum">
        @include('layouts.landing2.navbar')

        <div class="header-content my-auto py-5">
            <div class="container">
                <div class="row flex-lg-row-reverse align-items-center justify-content-between g-gs">

                    <div class="col-xl-6 col-lg-5 col-md-4">
                        <div class="img-block h-80px mb-4 rounded">
                            <img src="{{ asset('landing/images/Cover.png') }}" class="img-fluid" alt="Your Image">
                        </div>
                    </div><!-- .col -->
                    <div class="col-lg-5 col-md-10">
                        <div class="header-caption">

                            <h1 class="header-title">Kembangkan Bisnis Kamu</h1>
                            <div class="header-text">
                                <p>Kami menyediakan aplikasi yang sesuai denang kebutuhan kamu sebagai pelaku bisnis untuk
                                    memudahakan manajemen produk kamu, maupun mempermudah pelayanan usahamu.</p>
                            </div>
                            <ul class="header-action btns-inline">
                                <li><a href="https://wa.me/+6283117927964" class="btn btn-primary btn-lg"><span>Konsultasi</span></a>
                                </li>
                                <li><a href="#" class="link link-block link-gray"><em
                                            class="icon icon-lg ni ni-play-circle"></em><span>Produk</span></a>
                                </li>
                            </ul>
                        </div><!-- .header-caption -->
                    </div><!-- .col -->

                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .header-content -->

    </header>



    {{-- <section class="section section-service pt-5" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-md-8">
                    <div class="section-head">
                        <h2 class="title text-dark">Daftar Aplikasi</h2>
                        <p>Berikut daftar aplikasi yang kami miliki untuk anda dapat pesan</p>
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
                                    <h5 class="title text-dark">Company Profile</h5>
                                    <p>Buat website perusahaan kamu lebih menarik dan responsif.</p>
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
                                    <h5 class="title text-dark">Landing Page</h5>
                                    <p>Buat landing page untuk kebutuhan iklan, maupun untuk menarik perhatian pelanggan.
                                    </p>
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
                                    <h5 class="title text-dark">Web Apps</h5>
                                </div>
                            </div>
                        </div><!-- .service -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div>
        </div><!-- .container -->
    </section> --}}

    <section class="section section-dashboard" id="previews">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <div class="section-head">
                        <h2 class="title fw-medium">Daftar Aplikasi</h2>
                        <p>Berikut daftar aplikasi yang kami miliki untuk anda dapat pesan</p>
                    </div><!-- .section-head -->
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row g-gs justify-center">
                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo1/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/siskada.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Landing Page Siskada</h6>
                            <p class="sub-title">Aplikasi Pemantauan Relawan Pemilu bagi Calon Legistlatif dan Kepala Daerah sebagai salah satu Alat Bantu dan Solusi Cerdas dalam Manajemen Relawan di Pilcaleg dan Pilkada</p>
                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->

                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo2/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/perumahan.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Landing Page Warna Indonesia</h6>
                            <p class="sub-title">Aplikasi Warna Indonesia
                                Salah satu Alat Bantu dan Solusi Cerdas dalam
                                Lingkungan Perumahan</p>

                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->

                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo3/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/perumhana_mobile.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Waris Mobile</h6>
                            <p class="sub-title">keterangan</p>

                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->

                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo4/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/mount1.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Aplikasi Tracker Gunung</h6>
                            <p class="sub-title">keterangan</p>

                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->

                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo5/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/sipesat.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Si Pesat</h6>
                            <p class="sub-title">keterangan</p>

                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->

                <div class="col-lg-4 col-sm-6 col-mb-9">
                    <a href="/demo6/index.html" class="card card-shadow product product-s2">
                        <div class="card-inner product-img bg-warning">
                            <img src="{{ asset('landing/images/product/siskadamobile.png')}}" alt="">
                        </div>
                        <div class="card-inner product-info">
                            <h6 class="title">Siskada Mobile</h6>
                            <p class="sub-title">keterangan</p>

                        </div><!-- .card-inner-->
                    </a><!-- .card -->
                </div><!-- .col -->
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
