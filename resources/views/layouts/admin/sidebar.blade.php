<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html" class="b-brand">
                <img src="{{ asset('assets_panel/assets/images/log.png')}}" alt class="logo logo-lg" />
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
                {{-- <li class="pc-item">
                    <a href="analytics.html" class="pc-link"><span class="pc-micon"><i
                                class="ti ti-device-analytics"></i></span><span
                            class="pc-mtext">Analytics</span></a>
                </li> --}}

            </ul>
           
        </div>
    </div>
</nav>