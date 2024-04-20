<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Materialize Admin"
        content="Materialize - Material Design Admin Template is the excellent responsive google material design inspired multipurpose admin template." />
    <meta name="keywords"
        content=" admin, chat, dark layout, dashboard, material, react, react admin, react app, react dashboard, html, laravel, react material, web app" />
    <meta name="p:domain_verify" content="5418c1f147b09c6e3f555b49b16e2f3d" />
    <!-- Title -->
    <title>Alps Studio</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/core-img/favicon.png') }}" />
    <!-- Core Stylesheet -->
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Resource style -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>
    <!-- Modernize -->
</head>

<body>
    <!-- ***** Header Area Start ***** -->
    <header class="header_area headroom">
        <div class="container-fluid bg-color" style="width: 100% !important">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 p-0">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-xl navbar-light px-1">
                            <!-- Logo -->
                            <a href="index.html#home"><img src="{{ asset('assets/img/bg-img/logo.png') }}"
                                    class="img-fluid logo-width" alt="Brand Logo" /></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item">
                                        <a class="nav-link px-3" href="index.html#demos" data-toggle="collapse"
                                            data-target=".navbar-collapse">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" href="index.html#features" data-toggle="collapse"
                                            data-target=".navbar-collapse">Layanan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" href="index.html#applications" data-toggle="collapse"
                                            data-target=".navbar-collapse">Produk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" href="index.html#cards" data-toggle="collapse"
                                            data-target=".navbar-collapse">Klien</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link px-3" href="index.html#pages" data-toggle="collapse"
                                            data-target=".navbar-collapse">Profile Kami</a>
                                    </li>
                                    <li class="nav-item buynow-btn mx-auto">
                                        <a class="nav-link px-4" href="https://1.envato.market/materialize_admin"
                                            target="_blank">Konsultasi Gratis</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Welcome Area Start ***** -->
    <section class="wellcome_area" id="home">
        <div class="container-fluid d-flex align-items-center h-100">
            <div class="row d-flex align-items-center mt-5">
                <div class="col-lg-5 col-md w-m-100 order-2 order-xl-1">
                    <div class="wellcome-heading">
                        <h2 class="m-0">Software Pengembangan Website & Aplikasi</h2>

                        <a class="btn submit-btn mt-3 mr-3" href="index.html#demos"><span>Konsultasi</span></a>
                        <a class="btn buy-btn mt-3" href="https://1.envato.market/materialize_admin"
                            target="_blank"><span>Produk</span></a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12 order-1 order-xl-2 full-xl wow fadeInDown pr-0">
                    <div class="row">
                        <div class="col-12 p-0 text-center mt-5">
                            {{-- <a class="btn demo-btn-light mb-4 mr-3" href="../../materialize-vuejs-admin-template/landing/index.html" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="Vuetify Vue & Vue + Laravel Version">
                <img src="{{ asset('assets/img/src-img/vue-icon.png')}}" width="22" alt="icons" class="align-text-bottom mr-1"> Vue + <img src="{{ asset('assets/img/src-img/laravel-icon.png')}}" width="22" alt="icons" class="align-text-bottom mr-1"> Laravel (TS+JS) 
              </a>
              <a class="btn demo-btn-light mb-4 mr-3" href="../../materialize-nextjs-admin-template/landing/index.html" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="MUI React Version">
                <img src="{{ asset('assets/img/src-img/react-icon.png')}}" width="22" alt="icons" class="align-text-bottom mr-1"> React (TS+JS)
              </a>
              <a class="btn demo-btn mb-4" href="index.html#" target="_blank" data-toggle="tooltip" data-placement="top" data-original-title="HTML, Laravel & ASP.NET Core Version">
                <img src="{{ asset('assets/img/src-img/html-icon.png')}}" width="22" alt="icons" class="align-text-bottom"> HTML, Laravel & .NET Core
              </a> --}}
                            <figure class="cd-image-container float-r-lg">
                                <a href="../html/vertical-menu-template-dark/index.html" target="_blank"><img
                                        src="{{ asset('assets/img/bg-img/start.jpeg') }}" alt="Modified Image" /></a>
                                <span class="cd-image-label" data-type="original"></span>
                                <div class="cd-resize-img">
                                    <a class="btn btn-secondary btn-sm" href="../html/vertical-menu-template/index.html"
                                        target="_blank"><img src="{{ asset('assets/img/bg-img/start.jpeg') }}"
                                            alt="Original Image" /></a>
                                    <span class="cd-image-label" data-type="modified"></span>
                                </div>
                                <span class="cd-handle" data-toggle="tooltip" data-placement="top"
                                    title="Drag me"></span>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 order-3 mt-5">
                    {{-- <h6 class="text-center"><strong>Note:</strong> Please note there are some difference between Vue, React, HTML, Laravel & .NET version, <br> make sure to check correct demo before purchasing Materialize.</h6> --}}
                </div>
            </div>
            <a class="btn hire-us" href="https://themeselection.com/hire-us/" target="_blank"><span><span
                        class="ti-user mr-1 align-middle font-900"></span> Halo, bisa kami bantu...?</span></a>


        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    <!-- ***** Demos ***** -->
    <section class="bg-grey p-150" id="demos">
        <div class="special_description_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2>Layanan</h2>
                        </div>
                        <p class="mb-5">
                            Layanan yang kami tawarkan untuk memenuhi kebutuhan digital kamu.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center wow fadeInDown show-image card-hover">
                        <h5 class="mt-4 mb-4"><b class="fw-bold">Vertical Layout</b></h5>
                        <a href="../html/vertical-menu-template/dashboards-crm.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/vertical-layout.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/dashboards-crm.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/dashboard/crm"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/dashboards-crm.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center wow fadeInDown show-image card-hover">
                        <h5 class="mt-4 mb-4"><b class="fw-bold">Bordered Layout</b></h5>
                        <a href="../html/vertical-menu-template-bordered/app-ecommerce-dashboard.html"
                            target="_blank"><img src="{{ asset('assets/img/src-img/bordered-layout.png') }}"
                                alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template-bordered/app-ecommerce-dashboard.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-2/lang/pt"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template-bordered/app-ecommerce-dashboard.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center wow fadeInDown show-image card-hover">
                        <h5 class="mt-4 mb-4"><b class="fw-bold">Semi Dark Layout</b></h5>
                        <a href="../html/vertical-menu-template-semi-dark/index.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/semi-dark-layout.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template-semi-dark/index.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-3/lang/pt"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template-semi-dark/index.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- ***** Design File ***** -->
    <!-- ***** Awesome Features Start ***** -->

    <section class="bg-grey p-150" id="applications">
        <!-- <img src="img/bg-img/bg-circle.png" class="bg-circle-right floating img-fluid" alt="Apps Image" /> -->
        <div class="special_description_area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-heading">
                            <h2>Produk</h2>
                        </div>
                        <p class="mb-5">
                            Buat usahamu berkembang lebih cepat dengan bantuan aplikasi kami.
                        </p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Calendar App</b></h5>
                        <a href="../html/vertical-menu-template/app-calendar.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-calendar.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-calendar.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/calendar"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-calendar.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Chat App</b></h5>
                        <a href="../html/vertical-menu-template/app-chat.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-chat.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-chat.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/chat"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-chat.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-4 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Email App</b></h5>
                        <a href="../html/vertical-menu-template/app-email.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-email.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-email.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/email"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-email.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-5 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Kanban</b></h5>
                        <a href="../html/vertical-menu-template/app-kanban.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-kanban.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-kanban.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/kanban"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-kanban.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-5 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Invoice App</b></h5>
                        <a href="../html/vertical-menu-template/app-invoice-preview.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-invoice.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-invoice-preview.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/invoice/preview"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-invoice-preview.html" target="_blank">.NET
                                Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-5 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">User App</b></h5>
                        <a href="../html/vertical-menu-template/app-user-view-account.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-user.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-user-view-account.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/user/view/account"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-user-view-account.html" target="_blank">.NET
                                Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-5 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Roles</b></h5>
                        <a href="../html/vertical-menu-template/app-access-roles.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-roles.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-access-roles.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/access-roles"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary" href="../html/vertical-menu-template/app-access-roles.html"
                                target="_blank">.NET Core</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-5 text-center card-hover wow fadeInDown mt-5">
                        <h5 class="mb-4 mt-4"><b class="fw-bold">Permissions</b></h5>
                        <a href="../html/vertical-menu-template/app-access-permission.html" target="_blank"><img
                                src="{{ asset('assets/img/src-img/app-permissions.png') }}" alt="Apps Image" /></a>
                        <div class="mt-4">
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-access-permission.html"
                                target="_blank">HTML</a>
                            <a class="btn btn-secondary"
                                href="../../materialize-html-laravel-admin-template/demo-1/app/access-permission"
                                target="_blank">Laravel</a>
                            <a class="btn btn-secondary"
                                href="../html/vertical-menu-template/app-access-permission.html" target="_blank">.NET
                                Core</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Applications End ***** -->
    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool-facts-area clearfix">
        <div class="container-fluid">
            <div class="row text-center">
                <!-- Single Cool Fact-->
                <div class="col-lg-3 col-6 mt-4">
                    <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-area">
                            <h3><span class="counter">8</span></h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>Applications</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-3 col-6 mt-4">
                    <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.6s">
                        <div class="counter-area">
                            <h3><span class="counter">40</span>+</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>Components</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-3 col-6 mt-4">
                    <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.8s">
                        <div class="counter-area">
                            <h3><span class="counter">60</span>+</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>Cards</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-lg-3 col-6 mt-4">
                    <div class="single-cool-fact wow fadeInUp" data-wow-delay="0.4s">
                        <div class="counter-area">
                            <h3><span class="counter">30</span>+</h3>
                        </div>
                        <div class="cool-facts-content">
                            <p>Pages</p>
                        </div>
                    </div>
                </div>
                <!-- Single Cool Fact-->
            </div>
        </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->
    <!-- ***** Advance Cards ***** -->

    <section class="awesome-feature-area bg-grey-darken section_padding_0_50 p-150 clearfix" id="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-heading">
                        <h2>Kenapa Harus Alpsstudio ?</h2>
                    </div>
                    <p>
                        Kami siap bantu kamu mewujudkan aplikasi impian.
                    </p>
                </div>
            </div>
            <div class="row bg-white mt-5 border-radius-15 shadow-1 py-4">
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-layout text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>Professional Developer</h5>
                                <p class="text-sm">
                                    Team kami sudah berpengalaman lebih dari 6 tahun.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-settings ti-settings text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>Maintenance
                                    Support</h5>
                                <p class="text-sm">
                                    Kami siap membantu kamu, di setiap masalah yang kamu hadapi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-paint-bucket text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>Full Customize
                                    App</h5>
                                <p class="text-sm">
                                    Buat aplikasi yang sesuai dengan kebutuhan kamu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-thumb-up ti-settings text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>100+ Projects Created</h5>
                                <p class="text-sm">
                                    Lebih 100 project telah dikerjakan oleh tim kami.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-search text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>Friendly UI/UX
                                    Design</h5>
                                <p class="text-sm">Tampilan produk yang cantik dan mudah kamu pahami.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 p-0">
                    <div class="single-feature px-4 pt-4">
                        <div class="row">
                            <div class="col-lg-3 col-12 text-right text-gradient">
                                <span class="ti-file text-medium"></span>
                            </div>
                            <div class="col-lg-9 col-12">
                                <h5>SEO Friendly
                                    Website</h5>
                                <p class="text-sm">
                                    Bantu website kamu mudah ditemukan oleh klient kamu.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->
    <!-- ***** Applications ***** -->

    <!-- ***** Demos End ***** -->
    <!-- ***** Design File ***** -->
    <section class="cool-facts-area p-150" id="design-file">
        <div class="text-center">
            <img src="{{ asset('assets/img/src-img/figma.png') }}" class="git-bg" alt="Figma" />
            <h4 class="text-white mt-2"><strong>Punya Pertanyaan? Team Kami Siap Membantu Kamu.</strong></h4>
            <p class="text-white mt-4">
                Tanya terkait produk, harga, layanan atau hal lainnya. Team kami siap membantu <br> permasalahan anda.
            </p>
            <a class="btn purchase-btn mt-3 px-4"
                href="https://www.figma.com/file/2mM912mBeNxtweoNFRQuIf/materialize%E2%80%93figma-material-design-dashboard-ui-kit-live?node-id=9883%3A125858&t=8WSepyWpTNCKL1Yz-1"
                target="_blank"><span>Whatsapp</span></a>
        </div>
    </section>


    <!-- ***** Footer Area Start ***** -->
    <footer class="text-center pt-3 clearfix">
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>
                Copyright ©<span class="year"></span> Alpsstudio
            </p>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <script>
        ;
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            (i[r] =
                i[r] ||
                function() {
                    ;
                    (i[r].q = i[r].q || []).push(arguments)
                }),
            (i[r].l = 1 * new Date());
            (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0])
            a.async = 1
            a.src = g
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga')

        ga('create', 'UA-96096445-4', 'auto')
        ga('send', 'pageview')
    </script>

    <script>
        "use strict";

        ! function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void(window.console && console.error && console.error(
                    "Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page",
                        "hide", "off", "on"
                    ],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                        t[e] = t.factory(e);
                    }), t.load = function(t) {
                        var e = 3e5,
                            n = Math.ceil(new Date() / e) * e,
                            o = document.createElement("script");
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src =
                            "https://js.driftt.com/include/" + n + "/" + t + ".js";
                        var i = document.getElementsByTagName("script")[0];
                        i.parentNode.insertBefore(o, i);
                    };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('6ashbsefxhx7');
    </script>

    <!-- End of Async Drift Code -->
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58d9fa1af7a79649"></script>
    <!-- Jquery-2.2.4 JS -->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <!-- Headroom js -->
    <script src="{{ asset('assets/js/headroom.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('assets/js/active.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mobile.custom.min.js') }}"></script>
    <!-- Resource jQuery -->
    <script src="{{ asset('assets/js/main.jsjs/main.js') }}"></script>
    <!-- Resource jQuery -->
    <!-- Headroom -->
    <script>
        $(document).ready(function() {
            var year = new Date().getFullYear()
            $('.year').text(year)
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function(event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash)
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']')
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault()
                            $('html, body').animate({
                                    scrollTop: target.offset().top
                                },
                                1000,
                                function() {
                                    // Callback after animation
                                    // Must change focus!
                                    var $target = $(target)
                                    $target.focus()
                                    if ($target.is(':focus')) {
                                        // Checking if the target was focused
                                        return false
                                    } else {
                                        $target.attr('tabindex',
                                            '-1') // Adding tabindex for elements not focusable
                                        $target.focus() // Set focus again
                                    }
                                }
                            )
                        }
                    }
                })
            // grab an element
            var myElement = document.querySelector('header')
            // construct an instance of Headroom, passing the element
            var headroom = new Headroom(myElement)
            // initialise
            headroom.init()
        })

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <!-- End Headroom -->
</body>

</html>
