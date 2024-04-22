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
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/decoupled-document/ckeditor.js"></script> --}}
    {{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}


    {{-- <style>
        .document-editor {
            border-radius: var(--ck-border-radius);
            max-height: 700px;
            display: flex;
            flex-flow: column nowrap;
        }

        .document-editor__toolbar {
            z-index: 1;
            box-shadow: 0 0 5px hsla(0, 0%, 0%, 0.2);
        }

        .document-editor__toolbar .ck-toolbar {
            border: 0;
            border-radius: 0;
        }

        .document-editor__editable-container {
            padding: calc(2 * var(--ck-spacing-large));
            background: rgba(0, 0, 0, 0.05);
            overflow-y: scroll;
        }

        .document-editor__editable-container .ck-editor__editable.ck-editor__editable_inline {
            width: 21cm;
            min-height: 29.7cm;
            padding: 1cm 2cm 2cm;
            border: 1px hsl(0, 0%, 82.7%) solid;
            border-radius: var(--ck-border-radius);
            background: white;
            box-shadow: 0 0 5px hsla(0, 0%, 0%, 0.1);
            margin: 0 auto;
        }

        .document-editor .ck-content,
        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            font: 16px/1.6 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }

        .document-editor .ck-heading-dropdown .ck-list .ck-button__label {
            line-height: calc(1.7 * var(--ck-line-height-base) * var(--ck-font-size-base));
            min-width: 6em;
        }

        .document-editor .ck-heading-dropdown .ck-list .ck-button:not(.ck-heading_paragraph) .ck-button__label {
            transform: scale(0.8);
            transform-origin: left;
        }

        .document-editor .ck-content h2,
        .document-editor .ck-heading-dropdown .ck-heading_heading1 .ck-button__label {
            font-size: 2.18em;
            font-weight: normal;
        }

        .document-editor .ck-content h2 {
            line-height: 1.37em;
            padding-top: 0.342em;
            margin-bottom: 0.142em;
        }

        .document-editor .ck-content h3,
        .document-editor .ck-heading-dropdown .ck-heading_heading2 .ck-button__label {
            font-size: 1.75em;
            font-weight: normal;
            color: hsl(203, 100%, 50%);
        }

        .document-editor .ck-heading-dropdown .ck-heading_heading2.ck-on .ck-button__label {
            color: var(--ck-color-list-button-on-text);
        }

        .document-editor .ck-content h3 {
            line-height: 1.86em;
            padding-top: 0.171em;
            margin-bottom: 0.357em;
        }

        .document-editor .ck-content h4,
        .document-editor .ck-heading-dropdown .ck-heading_heading3 .ck-button__label {
            font-size: 1.31em;
            font-weight: bold;
        }

        .document-editor .ck-content h4 {
            line-height: 1.24em;
            padding-top: 0.286em;
            margin-bottom: 0.952em;
        }

        .document-editor .ck-content p {
            font-size: 1em;
            line-height: 1.63em;
            padding-top: 0.5em;
            margin-bottom: 1.13em;
        }

        .document-editor .ck-content blockquote {
            font-family: Georgia, serif;
            margin-left: calc(2 * var(--ck-spacing-large));
            margin-right: calc(2 * var(--ck-spacing-large));
        }
    </style> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
        id="main-font-link" />

    {{-- <link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />

    <link rel="stylesheet" href="../assets/fonts/feather.css" />

    <link rel="stylesheet" href="../assets/fonts/fontawesome.css" />

    <link rel="stylesheet" href="../assets/fonts/material.css" />

    <link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
    <link rel="stylesheet" href="../assets/css/style-preset.css" id="preset-style-link" /> --}}

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

    {{-- <div class="pct-c-btn">
        <button class="btn btn-secondary" data-bs-toggle="offcanvas" data-bs-target="#offcanvas_layout">
            <i data-feather="settings"></i>
        </button>
    </div>
    <div class="offcanvas pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_layout">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">Berry Customizer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="pct-body" style="height: calc(100% - 60px)">
            <div class="offcanvas-body">
                <div class="card">
                    <div class="card-header">
                        <h5>Layout</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-1">Mode</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout_mode"
                                id="layoutmodelight" onclick="layout_change('light')" />
                            <label class="form-check-label" for="layoutmodelight">
                                Light
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="layout_mode"
                                id="layoutmodedark" onclick="layout_change('dark')" />
                            <label class="form-check-label" for="layoutmodedark">
                                Dark
                            </label>
                        </div>
                        <div class="pc-rtl">
                            <p class="mt-3 mb-1">Direction</p>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch"
                                    id="layoutmodertl" />
                                <label class="form-check-label" for="layoutmodertl">RTL</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Preset Color</h5>
                    </div>
                    <div class="card-body">
                        <div class="theme-color preset-color">
                            <a href="index.html#!" class="active"
                                data-value="preset-1"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-2"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-3"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-4"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-5"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-6"><span></span><span></span></a>
                            <a href="index.html#!" class data-value="preset-7"><span></span><span></span></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Font Family</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="layout_font"
                                id="layoutfontRoboto" checked onclick="font_change('Roboto')" />
                            <label class="form-check-label" for="layoutfontRoboto">
                                Roboto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="layout_font"
                                id="layoutfontPoppins" onclick="font_change('Poppins')" />
                            <label class="form-check-label" for="layoutfontPoppins">
                                Poppins
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="layout_font"
                                id="layoutfontInter" onclick="font_change('Inter')" />
                            <label class="form-check-label" for="layoutfontInter">
                                Inter
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card pc-boxcontainer">
                    <div class="card-header">
                        <h5>Box Container</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch"
                                id="layoutboxcontainer" />
                            <label class="form-check-label" for="layoutboxcontainer">Container</label>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-light-danger" id="layoutreset">
                        Reset Layout
                    </button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <script src="../assets/js/customizer.js"></script>

    <script src="../assets/js/plugins/apexcharts.min.js"></script>
    <script src="../assets/js/pages/dashboard-default.js"></script> --}}

    <script src="{{ asset('assets_panel/assets/js/customizer.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/pages/dashboard-default.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/uppy.min.js') }}"></script>
    <script src="{{ asset('assets_panel/assets/js/plugins/choices.min.js') }}"></script>



    <script src="{{ asset('assets_panel/assets/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
    {{-- <script src="{{ asset('assets_panel/assets/js/plugins/ckeditor/document/ckeditor.js') }}"></script> --}}
    <script>
        (function() {
            ClassicEditor.create(document.querySelector('#classic-editor')).catch((error) => {
                console.error(error);
            });
        })();
    </script>

    {{-- <script>
        DecoupledEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                const toolbarContainer = document.querySelector('#toolbar-container');

                toolbarContainer.appendChild(editor.ui.view.toolbar.element);
            })
            .catch(error => {
                console.error(error);
            });
    </script> --}}


    {{-- <script>
        (function() {
            DecoupledEditor.create(document.querySelector('.document-editor__editable'))
                .then((editor) => {
                    const toolbarContainer = document.querySelector('.document-editor__toolbar');
                    toolbarContainer.appendChild(editor.ui.view.toolbar.element);
                })
                .catch((error) => {});
        })();
    </script> --}}
</body>

</html>
