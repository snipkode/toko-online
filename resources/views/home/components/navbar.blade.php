<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        
        <a class="navbar-brand" href="#">
            {{-- <img src="https://via.placeholder.com/150x50" alt="Logo"> --}}
            {{ config('app.name', 'Toko Online') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                {{-- <li class="nav-item">
                    <input type="text"class="form-control-sm" name="cari" id="cari" placeholder="Cari...">
                </li> --}}
            </ul>
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Keranjang 
                        <span class="badge badge-center bg-label-danger">0</span>
                    </a>
                    
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">Daftar</a>
                            @endif
                        </li>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>