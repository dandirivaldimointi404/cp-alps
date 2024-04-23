<header class="pc-header">
    <div class="m-header">
        <a href="#" class="b-brand">
            <img src="{{ asset('assets_panel/assets/images/log.png') }}" alt="Logo" class="logo logo-lg img-fluid" style="max-width: 100px; height: auto;" />
        </a>
    
        <div class="pc-h-item">
            <a href="#" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                <i class="ti ti-menu-2"></i>
            </a>
        </div>
    </div>
    <div class="header-wrapper">
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <li class="pc-h-item header-mobile-collapse">
                    <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                        <i class="ti ti-menu-2"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item pc-mega-menu">
                   
                </li>
                <li class="dropdown pc-h-item">
                    
                </li>
                <li class="dropdown pc-h-item">
                   
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false"
                        aria-expanded="false">
                        <img src="{{ asset('assets_panel/assets/images/user/avatar-2.jpg')}}" alt="user-image" class="user-avtar" />
                        <span>
                            <i class="ti ti-settings"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header">
                            <h4>
                                Good Morning,
                                <span class="small text-muted"> Admin</span>
                            </h4>
                            
                            <hr />
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 280px)">
                                <a href="../pages/login-v1.html" class="dropdown-item">
                                    <i class="ti ti-logout"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>