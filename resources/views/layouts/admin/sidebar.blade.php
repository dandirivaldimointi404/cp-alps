<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="#" class="b-brand">
                <img src="{{ asset('assets_panel/assets/images/log.png') }}" alt="Logo" class="logo logo-lg img-fluid" style="max-width: 100px; height: auto;" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item pc-caption">
                    <label>Dashboard</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item">
                    <a href="{{ route('testimoni.index')}}" class="pc-link"><span class="pc-micon"><i
                                class="ti ti-dashboard"></i></span><span class="pc-mtext">Testimoni Klien</span></a>
                </li>
                <li class="pc-item">
                    <a href="{{ route('berita.index')}}" class="pc-link"><span class="pc-micon"><i
                                class="ti ti-device-analytics"></i></span><span
                            class="pc-mtext">Berita</span></a>
                </li>

            </ul>
           
        </div>
    </div>
</nav>