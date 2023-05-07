<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('/') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <x-app-logo/>
            </span>
            <span class="app-brand-text demo text-capitalize menu-text fw-bolder ms-2">Toko Online</span>
        </a>

        <a href="{{ url('javascript:void(0);') }}"
            class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-tachometer"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="{{ url('javascript:void(0);') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-qr"></i>
                <div data-i18n="Layouts">Manager Produk</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('#') }}" class="menu-link">
                        <div data-i18n="Without menu">Semua Produk</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('#') }}" class="menu-link">
                        <div data-i18n="Without menu">Data Penjualan</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pengguna</span>
        </li>
        <li class="menu-item">
            <a href="{{ url('javascript:void(0);') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('#') }}" class="menu-link">
                        <div data-i18n="Settings">Pengaturan</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="{{ url('javascript:void(0);') }}" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Users Manager">Users Manager</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ url('#') }}" class="menu-link" target="_blank">
                        <div data-i18n="Users">Pengguna</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ url('#') }}" class="menu-link" target="_blank">
                        <div data-i18n="Privacy Policy">Privacy Policy</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<!-- / Menu -->
