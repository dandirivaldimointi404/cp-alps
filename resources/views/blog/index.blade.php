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
                                <small
                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</small>
                                <small>{{ $item->created_at->subHour()->locale('id')->diffForHumans() }}</small>
                            </small>
                            <br>
                            <h5 class="title"><a href="{{ route('blog.show', $item->slug) }}" style="text-decoration: none; color: black;">{{ $item->judul }}</a></h5>


                            {!! Str::limit($item->konten, 250) !!}
                        </div>
                    </div><!-- .col -->
                </div><!-- .row -->
                <hr>
            @endforeach
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
