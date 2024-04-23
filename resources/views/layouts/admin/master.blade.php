<!DOCTYPE html>
<html lang="en">

<head>
    <title>| Alpsstudio</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Software Pengembangan Website & Aplikasi." />
    <meta name="keywords" content="Software Pengembangan Website & Aplikasi." />
    <meta name="author" content="CodedThemes" />

    <link rel="icon" href="{{ asset('assets_panel/assets/images/log.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        id="main-font-link" />

    <link rel="stylesheet" href="{{ asset('assets_panel/assets/fonts/tabler-icons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets_panel/assets/fonts/feather.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets_panel/assets/fonts/fontawesome.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets_panel/assets/fonts/material.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets_panel/assets/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assets_panel/assets/css/style-preset.css') }}" id="preset-style-link" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


</head>

<body>
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')

    @yield('content')

    @include('layouts.admin.footer')

    <script src="{{ asset('assets_panel/assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/config.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/pcoded.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/feather.min.js') }}"></script>

    <script src="{{ asset('assets_panel/assets/js/plugins/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5
        });
    </script>

    <script src="{{ asset('assets_panel/assets/js/customizer.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/uppy.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>

    <script>
        (function() {
            ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
                console.error(error);
            });
        })();
    </script>

</body>

</html>
