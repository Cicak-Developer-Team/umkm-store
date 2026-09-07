# UMKM Store

Aplikasi manajemen toko untuk UMKM berbasis Laravel yang dirancang untuk memudahkan pencatatan produk, kategori, transaksi penjualan (sales & sale items), serta pencatatan keuangan.

## 🚀 Fitur Utama
- **Manajemen Produk & Kategori**: Kelola inventaris barang dan pengelompokan produk UMKM.
- **Transaksi Penjualan**: Catat penjualan beserta detail item dengan struktur migrasi database yang terstruktur.
- **Pencatatan Keuangan**: Pantau arus kas dan laporan keuangan toko.

## 🛠 Tech Stack
- **Framework**: Laravel 11 (PHP 8.2)
- **Database**: MySQL 8.0
- **Containerization**: Docker & Docker Compose

---

## 📦 Panduan Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi menggunakan Docker:

1. **Clone Repository**
   ```bash
   git clone https://github.com/TheZaww/umkm-store.git
   cd umkm-store
   ```

2. **Konfigurasi Environment**
   Salin file contoh environment:
   ```bash
   cp .env.example .env
   ```

3. **Build dan Jalankan Container Docker**
   ```bash
   docker-compose up -d --build
   ```

4. **Install Dependensi & Konfigurasi Laravel**
   Masuk ke container app dan jalankan perintah composer serta generate application key:
   ```bash
   docker-compose exec app composer install
   docker-compose exec app php artisan key:generate
   ```

5. **Jalankan Migrasi Database**
   ```bash
   docker-compose exec app php artisan migrate
   ```

6. **Akses Aplikasi**
   Aplikasi dapat diakses melalui browser pada port default Laravel di dalam container atau web server yang dikonfigurasi.

---

## 🤝 Kontribusi
1. Buat branch baru (`git checkout -b feature/nama-fitur`)
2. Commit perubahan Anda (`git commit -m 'Tambah fitur baru'`)
3. Push ke branch (`git push origin feature/nama-fitur`)
4. Buat Pull Request ke branch `develop`.
