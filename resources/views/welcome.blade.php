<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'UMKM Store') }} - Marketplace UMKM Lokal</title>

    <!-- Bootstrap 5.3 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
            color: white;
            border-radius: 1rem;
        }

        .card-product {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: none;
            border-radius: 0.75rem;
        }

        .card-product:hover {
            transform: translateY(-5px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }

        .category-badge {
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary fs-4" href="{{ url('/') }}">
                <i class="bi bi-shop me-2"></i>UMKM Store
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                </ul>
                <div class="d-flex align-items-center gap-2">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-outline-light rounded-pill px-4">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-light rounded-pill px-3">Masuk</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary rounded-pill px-3">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Banner -->
    <div class="container my-4">
        <div class="hero-section p-5 shadow-sm text-center text-lg-start">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-light text-primary fw-semibold px-3 py-2 rounded-pill mb-3">Dukung Produk
                        Lokal 🇮🇩</span>
                    <h1 class="display-5 fw-bold mb-3">Dukungan Nyata untuk UMKM Indonesia</h1>
                    <p class="lead mb-4 opacity-90">Temukan berbagai produk berkualitas dari para pelaku UMKM lokal
                        terpercaya. Belanja mudah, cepat, dan aman.</p>
                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start">
                        <a href="#produk" class="btn btn-light text-primary btn-lg fw-bold px-4 rounded-pill">Jelajahi
                            Produk</a>
                        <a href="#" class="btn btn-outline-light btn-lg fw-bold px-4 rounded-pill">Daftar Jadi
                            Penjual</a>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block text-center">
                    <i class="bi bi-bag-heart display-1 text-white opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Keunggulan Section -->
    <div class="container my-5">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="fs-1 text-primary mb-2"><i class="bi bi-patch-check"></i></div>
                    <h5 class="fw-bold">Produk Asli & Berkualitas</h5>
                    <p class="text-muted small mb-0">Semua produk berasal langsung dari pengrajin dan produsen UMKM
                        terverifikasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="fs-1 text-success mb-2"><i class="bi bi-truck"></i></div>
                    <h5 class="fw-bold">Pengiriman Cepat</h5>
                    <p class="text-muted small mb-0">Dukungan berbagai pilihan kurir lokal untuk menjangkau seluruh
                        Indonesia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="fs-1 text-warning mb-2"><i class="bi bi-shield-lock"></i></div>
                    <h5 class="fw-bold">Pembayaran Aman</h5>
                    <p class="text-muted small mb-0">Sistem transaksi terjamin aman dengan berbagai pilihan metode
                        pembayaran.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products -->
    <div class="container my-5" id="produk">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h3 class="fw-bold mb-1">Produk Unggulan</h3>
                <p class="text-muted mb-0">Pilihan produk UMKM terbaik minggu ini</p>
            </div>
            <a href="#" class="btn btn-link text-decoration-none fw-semibold">Lihat Semua <i
                    class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card card-product shadow-sm h-100">
                    <div class="bg-light p-4 text-center rounded-top">
                        <i class="bi bi-cup-hot text-secondary display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary-subtle text-primary category-badge mb-2 w-auto me-auto">Makanan &
                            Minuman</span>
                        <h6 class="card-title fw-bold text-truncate">Kopi Robusta Lokal Premium 250g</h6>
                        <p class="text-primary fw-bold fs-5 mb-3">Rp 45.000</p>
                        <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto">
                            <i class="bi bi-cart-plus me-1"></i> Tambah Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card card-product shadow-sm h-100">
                    <div class="bg-light p-4 text-center rounded-top">
                        <i class="bi bi-handbag text-secondary display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span
                            class="badge bg-success-subtle text-success category-badge mb-2 w-auto me-auto">Kerajinan</span>
                        <h6 class="card-title fw-bold text-truncate">Tas Anyaman Bambu Tradisional</h6>
                        <p class="text-primary fw-bold fs-5 mb-3">Rp 120.000</p>
                        <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto">
                            <i class="bi bi-cart-plus me-1"></i> Tambah Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card card-product shadow-sm h-100">
                    <div class="bg-light p-4 text-center rounded-top">
                        <i class="bi bi-person-workspace text-secondary display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span
                            class="badge bg-warning-subtle text-warning category-badge mb-2 w-auto me-auto">Fashion</span>
                        <h6 class="card-title fw-bold text-truncate">Batik Tulis Motif Klasik</h6>
                        <p class="text-primary fw-bold fs-5 mb-3">Rp 250.000</p>
                        <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto">
                            <i class="bi bi-cart-plus me-1"></i> Tambah Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card card-product shadow-sm h-100">
                    <div class="bg-light p-4 text-center rounded-top">
                        <i class="bi bi-flower1 text-secondary display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span
                            class="badge bg-info-subtle text-info category-badge mb-2 w-auto me-auto">Kecantikan</span>
                        <h6 class="card-title fw-bold text-truncate">Minyak Kelapa Murni (VCO) 100ml</h6>
                        <p class="text-primary fw-bold fs-5 mb-3">Rp 35.000</p>
                        <button class="btn btn-outline-primary btn-sm rounded-pill mt-auto">
                            <i class="bi bi-cart-plus me-1"></i> Tambah Keranjang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <h5 class="fw-bold text-primary mb-3"><i class="bi bi-shop me-2"></i>UMKM Store</h5>
                    <p class="text-white small">Platform e-commerce yang didedikasikan untuk memajukan produk-produk
                        UMKM lokal Indonesia.</p>
                </div>
                <div class="col-md-2">
                    <h6 class="fw-bold mb-3">Navigasi</h6>
                    <ul class="list-unstyled text-white small">
                        <li><a href="#" class="text-decoration-none text-white">Beranda</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Produk</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Kategori</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Bantuan</h6>
                    <ul class="list-unstyled text-white small">
                        <li><a href="#" class="text-decoration-none text-white">Cara Pembelian</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-decoration-none text-white">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="fw-bold mb-3">Hubungi Kami</h6>
                    <p class="text-white small mb-1"><i class="bi bi-envelope me-2"></i>support@umkmstore.com</p>
                    <p class="text-white small"><i class="bi bi-telephone me-2"></i>+62 812 3456 7890</p>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-white small">
                &copy; {{ date('Y') }} UMKM Store. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
