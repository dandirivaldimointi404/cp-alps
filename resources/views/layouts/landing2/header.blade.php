<header class="header has-header-main-s1 bg-lighter" id="home">
  <div class="header-main header-main-s1 is-sticky is-transparent">
      <div class="container header-container">
          <div class="header-wrap">
              <div class="header-logo">
                  <a href="html/index.html" class="logo-link">
                      <img class="logo-light logo-img" src="{{ asset('landing/images/log.png') }}"
                          srcset="{{ asset('landing/images/log.png') }}" alt="logo">
                      <img class="logo-dark logo-img" src="{{ asset('landing/images/log.png') }}"
                          srcset="{{ asset('landing/images/log.png') }}" alt="logo-dark">
                  </a>
              </div>
              <div class="header-toggle">
                  <button class="menu-toggler" data-target="mainNav">
                      <em class="menu-on icon ni ni-menu"></em>
                      <em class="menu-off icon ni ni-cross"></em>
                  </button>
              </div><!-- .header-nav-toggle -->
              <nav class="header-menu" data-content="mainNav">
                  <ul class="menu-list ms-lg-auto">
                      <li class="menu-item">
                          <a href="{{ route('beranda.index')}}" class="menu-link menu-toggle">Beranda</a>
                      </li>

                      <li class="menu-item has-sub">
                          <a href="#" class="menu-link menu-toggle">Layanan</a>
                          <div class="menu-sub">
                              <ul class="menu-list">
                                  <li class="menu-item"><a href="{{ route('webdev.index')}}" class="menu-link">Web
                                          Development</a></li>
                                  <li class="menu-item"><a href="html/index-v2.html"
                                          class="menu-link">Mobile Development</a></li>
                                  <li class="menu-item"><a href="html/index-v3.html"
                                          class="menu-link">E-Goverment</a></li>
                              </ul>
                          </div>
                      </li>

                      <li class="menu-item has-sub">
                          <a href="#" class="menu-link menu-toggle">Produk</a>
                          <div class="menu-sub">
                              <ul class="menu-list">
                                  <li class="menu-item"><a href="html/index.html"
                                          class="menu-link">Umum</a></li>
                                  <li class="menu-item"><a href="html/index-v3.html"
                                          class="menu-link">E-Goverment</a></li>
                              </ul>
                          </div>
                      </li>

                      <li class="menu-item"><a href="#blog" class="menu-link nav-link">Blog</a></li>
                      <li class="menu-item"><a href="#klien" class="menu-link nav-link">Klien</a></li>
                      </li>
                      <li class="menu-item"><a href="#feature" class="menu-link nav-link">Profile Kami</a>
                      </li>
                  </ul>
                  <ul class="menu-btns">
                      <li>
                          <a href="https://1.envato.market/e0y3g" target="_blank"
                              class="btn btn-primary btn-lg">Konsultasi Gratis</a>
                      </li>
                  </ul>
              </nav><!-- .nk-nav-menu -->
          </div><!-- .header-warp-->
      </div><!-- .container-->
  </div><!-- .header-main-->

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
  </div><!-- .header-content -->
  
</header>