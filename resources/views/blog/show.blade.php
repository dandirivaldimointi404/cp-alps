@extends('layouts.landing2.master')

@section('title', $blog->judul)
@section('favicon', asset('uploads/' . $blog->gambar))
@section('deskripsi', $blog->konten)


<style>
    .rounded img {
        border-radius: 10px;
    }

    .rata-kanan {
        text-align: justify;
    }

    .text-right {
        display: flex;
        justify-content: flex-end;
    }

    .popup-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(5px);
        display: none;
        justify-content: center;
        align-items: center;
    }

    .popup-content {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }
</style>

@section('content')
    @include('layouts.landing2.navbar')

    <section class="section section-service">
        <div class="container col-lg-12">
            <div class="row">
                <div class="section-content">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 align-items-start">
                            <div class="header-caption">
                                <h2>{{ $blog->judul }}</h2>
                                <small>{{ $blog->created_at }}</small>
                                <div style="float: right">
                                    {{-- <p>{{ $kunjungan }}</p> --}}
                                    <a href="https://api.whatsapp.com/send/?text={{ url()->current() }}">
                                        <img src="{{ asset('landing/images/whatsapp.png') }}" alt="WhatsApp"
                                            class="whatsapp-icon" style="width: 25px; height: auto;">
                                    </a>
                                    <button onclick="copyURL()" class="btn btn-round btn-warning">Salin Link</button>
                                </div>
                            </div><!-- .header-caption -->
                            <br>
                            <div class="row justify-content-start text-center">
                                <div class="col-lg-12 mb-n3 mb-lg-0">
                                    <div class="img-block h-120px mb-4 rounded"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                        <img src="{{ asset('uploads/' . $blog->gambar) }}" alt="">
                                        <p></p>
                                        <p style="float: left">
                                            <img src="{{ asset('landing/images/eye.png') }}" alt="WhatsApp"
                                                class="whatsapp-icon" style="width: 25px; height: auto;">
                                            {{ $kunjungan }}
                                        </p>
                                    </div>
                                </div><!-- .col- -->
                            </div><!-- .row -->
                            <p></p>
                            <img src="path_to_your_ad_image.jpg" alt="Iklan" width="830" height="90">

                            <div class="row justify-content-start">
                                <div class="col-lg-12 col-md-12">
                                    <div class="header-caption">
                                        <div class="header-text">
                                            <p class="rata-kanan">{!! $blog->konten !!}</p>
                                        </div>
                                    </div><!-- .header-caption -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .col -->

                        <div class="col-lg-3 col-md-3 p-2 justify-items-end">
                            <div class="sidebar">
                                <article>
                                    <img src="path_to_your_ad_image.jpg" alt="Iklan" width="220" height="220">
                                    <div class="container">
                                        <br>
                                        <h3 class="title text-dark">Artikel Terkait</h3>
                                        <br>
                                        <div class="row">
                                            @foreach ($terkait as $item)
                                                <div class="col-lg-">
                                                    <div class="text-block">
                                                        <div class="g-gs">
                                                            <div class="service service-s3">
                                                                <div class="col-xl-4 col-lg-5 col-md-4">
                                                                    <div class="img-block h-80px mb-4 rounded">
                                                                        <img src="{{ asset('uploads/' . $item->gambar) }}"
                                                                            class="img-fluid" alt="Your Image"
                                                                            style="width: 100px; height: 50px; object-fit: cover;">
                                                                    </div>
                                                                </div>
                                                                <div class="service-text p-2 col-xl-8 col-lg-5 col-md-4">
                                                                    <small class="d-block date text">
                                                                        <small
                                                                            class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</small>
                                                                    </small>
                                                                    <small class="fw-bold"><a
                                                                            href="{{ route('blog.show', $item->slug) }}"
                                                                            style="text-decoration: none; color: black;">{{ $item->judul }}</a>
                                                                    </small>
                                                                </div>
                                                            </div><!-- .service -->
                                                        </div>
                                                    </div><!-- .text-block -->
                                                    <hr>
                                                </div><!-- .col -->
                                            @endforeach
                                        </div><!-- .row -->
                                    </div><!-- .container -->
                                </article>
                            </div>
                        </div><!-- .col -->

                    </div><!-- .row -->
                </div><!-- .section-content -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>


    <section class="section section-cta">
        <div class="container">
            <h3 class="title text-dark">Artikel Terkait</h3>
            <br>
            <div class="row">
                @foreach ($terkait->chunk(2) as $chunk)
                    @foreach ($chunk as $item)
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
                                                <small
                                                    class="text-uppercase border-end brd-gray pe-3 me-3 color-blue4 fw-bold">{{ $item->kategori }}</small>
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
                    @endforeach
                @endforeach
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <section class="section section-comments">
        <div class="container">
            <h3 class="title text-dark">Komentar</h3>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="comment" class="form-label"></label>
                    <textarea class="form-control" id="comment" name="comment" rows="3" required placeholder="Tulis Komentar"></textarea>
                </div>
                <div class="text-right"> <!-- Wrapper div -->
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
            <hr>
            <div class="comments">
                <div class="col-12">
                    <div class="card service service-inline ">
                        <div class="card-inner">
                            <div class="service-icon rounded">
                                <img src="{{ asset('uploads/' . $item->gambar) }}" class="img-fluid" alt="Your Image"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            <div class="service-text">
                                <h6 class="title">dandi rivaldi</h6>
                                <p>pemerintahan yang baik akan menghasilkan hasil yang baik dibidang apapun, mulai dari
                                    ekonomi bahkan sampai ke olah raga. untungnya rakyat indonesia tidak salah pilih
                                    seperti
                                    sebagain warga jakarta dan depok.</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
    </section>

    {{-- <div class="popup-wrapper" id="popupWrapper">
        <div class="popup-content">
            <img src="{{ asset('landing/images/adm.svg') }}" alt="Judul Popup" style="width: 100%; max-width: 200px;">
            <br>
            <button onclick="closePopup()" class="btn btn-primary" style="float: right">Tutup</button>
        </div>
    </div> --}}


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

        function openPopup() {
            document.getElementById("popupWrapper").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popupWrapper").style.display = "none";
        }

        function showPopupAfterDelay() {
            setTimeout(function() {
                openPopup();
            }, 5000);
        }

        showPopupAfterDelay();
    </script>
@endsection
