@include('admin.partials.header')
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('admin.components.sidebar')
        <!-- Layout container -->
        <div class="layout-page">
            @include('admin.components.navbar')
            @yield('content')
        </div>
        <!-- / Layout page -->
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->
@include('admin.partials.footer');
