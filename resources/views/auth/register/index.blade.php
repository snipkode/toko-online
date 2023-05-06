@include('auth.partials.header')
<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Login -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="{{ url('index.html') }}" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                @include('auth.components.application-logo')
                            </span>
                            <span
                                class="app-brand-text demo text-body fw-bolder text-capitalize">{{ config('app.name', 'Toko Online') }}</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to {{ config('app.name', 'Toko Online') }}! 👋</h4>
                    <p class="mb-4">Dapatkan akses ratusan produk premium tak terbatas kapanpun dan dimanapun.</p>
                    @include('auth.register.form')
                    <p class="text-center">
                        <span>Sudah punya akun?</span>
                        <a href="auth-login-basic.html">
                          <span>Masuk</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /login -->
        </div>
    </div>
</div>
<!-- / Content -->
@include('auth.partials.footer')
