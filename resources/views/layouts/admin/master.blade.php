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

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <script src="
            https://cdn.jsdelivr.net/npm/leaflet-geosearch@3.11.1/dist/bundle.min.js
            "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/leaflet-geosearch@3.11.1/dist/geosearch.min.css
    "
        rel="stylesheet">


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

    <script>
        var map = L.map('map').setView([-2.5489, 118.0149], 5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        map.fitBounds([
            [-11.0, 94.0],
            [6.0, 141.0]
        ]);

        const search = new GeoSearch.GeoSearchControl({
            provider: new GeoSearch.OpenStreetMapProvider(),
            style: 'bar',
        });

        map.addControl(search);

        map.on('click', function(event) {
            var latitude = event.latlng.lat;
            var longitude = event.latlng.lng;

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

            if (typeof marker !== 'undefined') {
                map.removeLayer(marker);
            }

            marker = L.marker([latitude, longitude]).addTo(map);
        });

        search.on('geosearch/showlocation', function(event) {
            var latitude = event.location.y;
            var longitude = event.location.x;

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

            document.getElementById('latitudeDisplay').innerText = latitude;
            document.getElementById('longitudeDisplay').innerText = longitude;

            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker([latitude, longitude]).addTo(map);

            map.setView([latitude, longitude], 12);
        });
    </script>

</body>

</html>
