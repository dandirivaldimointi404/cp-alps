@extends('layouts.landing2.master')

<meta property="og:title" content="{{ $blog->judul }}">
<meta property="og:description" content="{{ $blog->deskripsi }}">
<meta property="og:image" content="{{ asset('uploads/' . $blog->gambar) }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="article">


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
        <div class="container col-lg-10">
            <div class="row">
                <div class="section-content">
                    <div class="row flex-row-reverse justify-content-center">
                        <div class="col-lg-10 col-md-10 align-items-center">
                            <div class="header-caption">
                                <h4>{{ $blog->judul }}</h4>
                                <small>{{ $blog->created_at }}</small>
                                <div style="float: right">
                                    <a href="https://api.whatsapp.com/send/?text={{ url()->current() }}">
                                        <img src="{{ asset('landing/images/whatsapp.png') }}" alt="WhatsApp"
                                        class="whatsapp-icon" style="width: 25px; height: auto;">
                                    </a>
                                    <button onclick="copyURL()" class="btn btn-round btn-warning">Salin Link</button>
                                </div>
                            </div><!-- .header-caption -->
                        </div>
                        
                    </div><!-- .row -->
                    <br>
                    <div class="row gy-gs justify-content-center text-center">
                        <div class="col-lg-10 mb-n3 mb-lg-0">
                            <div class="img-block h-120px mb-4 rounded">
                                <img src="{{ asset('uploads/' . $blog->gambar) }}" alt="">
                            </div>
                        </div><!-- .col- -->
                        {{-- <div class="col-mb-6 col-lg-6">
                            <div class="card">
                                <div>
                                    <div class="img-block h-120px mb-4 rounded">
                                        <img src="{{ asset('uploads/' . $blog->gambar) }}" class="img-fluid"
                                            alt="Your Image">
                                    </div>
                                </div><!-- .service -->
                            </div>
                        </div><!-- .col --> --}}
                    </div><!-- .row -->
                </div>
                <br>
                <div class="row flex-row-reverse justify-content-center">
                    <div class="col-lg-10 col-md-10">
                        <div class="header-caption">
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

    <script>
        function copyURL() {
            var urlInput = document.createElement('input');
            urlInput.value = window.location.href;
            document.body.appendChild(urlInput);
            urlInput.select();
            document.execCommand('copy');
            document.body.removeChild(urlInput);
            alert('Link berhasil disalin!');
        }
    </script>
@endsection
