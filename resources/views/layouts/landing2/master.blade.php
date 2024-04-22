<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"content="Software Pengembangan Website & Aplikasi.">
    <meta name="keywords" content="alpsstudio Software Pengembangan Website & Aplikasi.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('landing/images/log.png') }}">
    <!-- Page Title  -->
    <title>alpsstudio.id | Software Pengembangan Website & Aplikasi</title>
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
            {{-- @include('layouts.landing2.header') --}}

            @yield('content')

            @include('layouts.landing2.footer')
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('landing/assets/js/bundle.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('landing/assets/js/scripts.js?ver=3.1.1') }}"></script>
</body>

</html>
