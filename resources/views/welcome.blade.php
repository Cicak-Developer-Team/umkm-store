@extends('layouts.app')

@section('title', 'Beranda - UMKM Store')

@section('content')
    <!-- Hero Banner -->
    <div class="container my-4">
        <div class="hero-section p-5 shadow-sm text-center text-lg-start">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <span class="badge bg-light text-primary fw-semibold px-3 py-2 rounded-pill mb-3">Dukung Produk Lokal 🇮🇩</span>
                    <h1 class="display-5 fw-bold mb-3">Dukungan Nyata untuk UMKM Indonesia</h1>
                    <p class="lead mb-4 opacity-90">Temukan berbagai produk berkualitas dari para pelaku UMKM lokal terpercaya. Belanja mudah, cepat, dan aman.</p>
                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start">
                        <a href="#produk" class="btn btn-light text-primary btn-lg fw-bold px-4 rounded-pill">Jelajahi Produk</a>
                        <a href="#" class="btn btn-outline-light btn-lg fw-bold px-4 rounded-pill">Daftar Jadi Penjual</a>
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
                    <p class="text-muted small mb-0">Semua produk berasal langsung dari pengrajin dan produsen UMKM terverifikasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="fs-1 text-success mb-2"><i class="bi bi-truck"></i></div>
                    <h5 class="fw-bold">Pengiriman Cepat</h5>
                    <p class="text-muted small mb-0">Dukungan berbagai pilihan kurir lokal untuk menjangkau seluruh Indonesia.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded-3 shadow-sm h-100">
                    <div class="fs-1 text-warning mb-2"><i class="bi bi-shield-lock"></i></div>
                    <h5 class="fw-bold">Pembayaran Aman</h5>
                    <p class="text-muted small mb-0">Sistem transaksi terjamin aman dengan berbagai pilihan metode pembayaran.</p>
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
            <a href="#" class="btn btn-link text-decoration-none fw-semibold">Lihat Semua <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="row g-4">
            <!-- Product Card 1 -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card card-product shadow-sm h-100">
                    <div class="bg-light p-4 text-center rounded-top">
                        <i class="bi bi-cup-hot text-secondary display-4"></i>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <span class="badge bg-primary-subtle text-primary category-badge mb-2 w-auto me-auto">Makanan & Minuman</span>
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
                        <span class="badge bg-success-subtle text-success category-badge mb-2 w-auto me-auto">Kerajinan</span>
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
                        <span class="badge bg-warning-subtle text-warning category-badge mb-2 w-auto me-auto">Fashion</span>
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
                        <span class="badge bg-info-subtle text-info category-badge mb-2 w-auto me-auto">Kecantikan</span>
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
@endsection
