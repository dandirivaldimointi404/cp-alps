<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="alps studio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="alpsstudio, alp studio, alps studio id">
    <!-- Fav Icon  -->

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="@yield('favicon')">
    {{-- <meta name="description"content="Software Pengembangan Website & Aplikasi."> --}}

    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('deskripsi')">
    <meta property="og:image" content="@yield('favicon')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/dashlite.css?ver=3.1.1') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('landing/assets/css/theme.css?ver=3.1.1') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


</head>

<body class="nk-body bg-white npc-landing ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">

            @yield('content')

            @include('layouts.landing2.footer')
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('landing/assets/js/bundle.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('landing/assets/js/scripts.js?ver=3.1.1') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

</body>

</html>
