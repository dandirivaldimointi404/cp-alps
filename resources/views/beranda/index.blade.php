@extends('layouts.landing2.master')

@section('content')

<header class="header has-header-main-s1 bg-lighter">
   @include('layouts.landing2.navbar')
  
    <div class="header-content my-auto py-5">
        <div class="container">
            <div class="row flex-lg-row-reverse align-items-center justify-content-between g-gs">
                <div class="col-lg-6 mb-n3 mb-lg-0">
                    <div class="header-image header-image-s2">
                        <img src="{{ asset('landing/images/header/start.jpeg') }}" alt="">
                    </div><!-- .header-image -->
                </div><!-- .col- -->
                <div class="col-lg-5 col-md-10">
                    <div class="header-caption">
  
                        <h1 class="header-title">Software Pengembangan Website & Aplikasi</h1>
                        <ul class="header-action btns-inline">
                            <li>
                                <a href="https://wa.me/+6283117927964" class="btn btn-primary btn-lg">
                                    <span>Konsultasi</span>
                                </a>
                            </li>
                            
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


<section class="section section-service pt-5">
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
                              <img src="{{ asset('landing/images/websites.png') }}"
                                  alt="Your SVG Image">
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
                              <h5 class="title text-dark">Pembuatan Aplikasi E-Government</h5>
                          </div>
                      </div>
                  </div><!-- .service -->
              </div><!-- .col -->
          </div><!-- .row -->
      </div>
  </div><!-- .container -->
</section>


<section class="section bg-dark is-dark">
  <div class="container">
      <div class="row g-gs align-items-center">
          <div class="col-lg-5">
              <div class="text-block is-dark">
                  <h2 class="title">Kenapa Harus Alpsstudio ?</h2>
                  <p class="lead">Kami siap bantu kamu mewujudkan aplikasi impian.</p>
              </div><!-- .text-block -->
          </div><!-- .col -->
          <div class="section-content">
              <div class="row justify-content-center text-center g-gs">
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <div class="service">
                          <div>
                              <img src="{{ asset('landing/images/developer.png') }}" alt="Your SVG Image">
                          </div>
                          <div class="service-text">
                              <h4 class="title">Professional Developer</h4>
                              <p>Team kami sudah berpengalaman lebih dari 6 tahun.</p>
                          </div><!-- .service-text -->
                      </div><!-- .service -->
                  </div><!-- .col -->
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <div class="service">
                          <div>
                              <img src="{{ asset('landing/images/troubleshooting.png') }}"
                                  alt="Your SVG Image">
                          </div>
                          <div class="service-text">
                              <h4 class="title">Maintenance Support</h4>
                              <p>Kami siap membantu kamu, di setiap masalah yang kamu hadapi.</p>
                          </div><!-- .secvice-text -->
                      </div><!-- .service -->
                  </div><!-- .col- -->
                  <div class="col-sm-8 col-md-6 col-lg-4">
                      <div class="service">
                          <div>
                              <img src="{{ asset('landing/images/problem-solving.png') }}"
                                  alt="Your SVG Image">
                          </div>
                          <div class="service-text">
                              <h4 class="title">Full Customize App</h4>
                              <p>Buat aplikasi yang sesuai dengan kebutuhan kamu.</p>
                          </div><!-- .service-text -->
                      </div><!-- .service -->
                  </div><!-- .col -->
              </div><!-- .row -->
          </div><!-- .section-content -->
      </div><!-- .row -->
  </div><!-- .container -->
  <!-- <div class="nk-ovm shape-b shape-cover shape-top"></div> -->
  {{-- <div class="nk-ovm shape-b shape-cover"></div> --}}
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