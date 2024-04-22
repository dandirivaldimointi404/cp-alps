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
                    <li class="menu-item"><a href="{{ route('beranda.index') }}" class="menu-link nav-link">Beranda</a></li>
                    
                    <li class="menu-item has-sub">
                        <a href="#" class="menu-link menu-toggle">Layanan</a>
                        <div class="menu-sub">
                            <ul class="menu-list">
                                <li class="menu-item"><a href="{{ route('webdev.index') }}" class="menu-link">Web
                                        Development</a></li>
                                <li class="menu-item"><a href="{{ route('mobiledev.index') }}" class="menu-link">Mobile
                                        Development</a></li>
                                {{-- <li class="menu-item"><a href="{{ route('goverment.index') }}"
                                        class="menu-link">E-Goverment</a></li> --}}
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item has-sub">
                        <a href="#" class="menu-link menu-toggle">Produk</a>
                        <div class="menu-sub">
                            <ul class="menu-list">
                                <li class="menu-item"><a href="{{ route('umum.index') }}" class="menu-link">Umum</a>
                                </li>
                                {{-- <li class="menu-item"><a href="html/index-v3.html" class="menu-link">E-Goverment</a>
                                </li> --}}
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item"><a href="{{ route('klien.index')}}" class="menu-link nav-link">Klien</a></li>
                    <li class="menu-item"><a href="{{ route('blog.index')}}" class="menu-link nav-link">Blog</a></li>
                    </li>
                    <li class="menu-item"><a href="{{ route('profill.index')}}" class="menu-link nav-link">Profile Kami</a>
                    </li>
                </ul>
                <ul class="menu-btns">
                    <li>
                        <a href="https://wa.me/+6283117927964" target="_blank" class="btn btn-primary btn-lg">Konsultasi
                            Gratis</a>
                    </li>
                </ul>
            </nav><!-- .nk-nav-menu -->
        </div><!-- .header-warp-->
    </div><!-- .container-->
</div><!-- .header-main-->
