# 🏪 UMKM Store

Aplikasi manajemen toko untuk UMKM berbasis **Laravel 11** yang dirancang khusus untuk membantu pelaku usaha kecil dan menengah (UMKM) dalam mengelola inventaris, mencatat transaksi penjualan secara terstruktur, serta memantau kondisi keuangan usaha dengan mudah.

---

## 🚀 Fitur Utama

- **📦 Manajemen Produk & Kategori**: Kelola stok barang, harga, dan kategorisasi produk dengan rapi.
- **🛒 Transaksi Penjualan**: Pencatatan transaksi penjualan yang terintegrasi langsung antara tabel `sales` dan `sale_items`.
- **💰 Laporan Keuangan**: Pantau kas masuk, kas keluar, dan ringkasan laba/rugi usaha secara real-time.
- **🐳 Dockerized Environment**: Lingkungan pengembangan yang terisolasi dan konsisten menggunakan Docker.

---

## 🛠 Tech Stack

- **Framework**: Laravel 11 (PHP 8.2)
- **Database**: MySQL 8.0
- **Containerization**: Docker & Docker Compose
- **Web Server**: Artisan Development Server (via Docker container)

---

## 📦 Panduan Instalasi & Menjalankan Aplikasi

Ikuti langkah-langkah di bawah ini untuk menyiapkan dan menjalankan aplikasi di lingkungan lokal Anda menggunakan Docker:

### 1. Clone Repository
Clone repository ini terlebih dahulu dan masuk ke direktori project:
```bash
git clone https://github.com/TheZaww/umkm-store.git
cd umkm-store
```

### 2. Salin File Environment (.env)
Buat file konfigurasi `.env` dari `.env.example`:
```bash
cp .env.example .env
```
Sesuaikan konfigurasi database pada file `.env` agar sesuai dengan yang ada di `docker-compose.yml`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=password
```
*(Catatan: Jika dijalankan di dalam container, `DB_HOST` akan secara otomatis diarahkan ke container database `db`.)*

### 3. Build & Jalankan Container Docker
Jalankan Docker Compose untuk mengunduh image, melakukan build, dan menjalankan container di latar belakang (*detached mode*):
```bash
docker-compose up -d --build
```

### 4. Install Dependensi PHP (Composer)
Unduh dan install seluruh package/dependensi PHP yang dibutuhkan aplikasi:
```bash
docker-compose exec app composer install
```

### 5. Generate Application Key
Buat key keamanan unik untuk aplikasi Laravel Anda:
```bash
docker-compose exec app php artisan key:generate
```

### 6. Jalankan Migrasi Database (dan Seeder jika ada)
Buat struktur tabel database yang dibutuhkan oleh aplikasi (karena urutan tabel migrasi sudah diperbaiki agar `sales` terbuat sebelum `sale_items`):
```bash
docker-compose exec app php artisan migrate
```

### 7. Akses Aplikasi
Aplikasi sekarang dapat diakses melalui browser pada alamat:
* **Web App**: `http://localhost:8000` (atau port lain yang sesuai dengan mapping port web server Anda)

---

## 🐳 Perintah Docker yang Sering Digunakan

Berikut adalah beberapa perintah docker-compose yang berguna untuk manajemen container:

* **Menghentikan container**:
  ```bash
  docker-compose down
  ```
* **Melihat log container**:
  ```bash
  docker-compose logs -f
  ```
* **Masuk ke dalam terminal container app**:
  ```bash
  docker-compose exec app bash
  ```
* **Masuk ke dalam terminal database MySQL**:
  ```bash
  docker-compose exec db mysql -u root -p
  ```

---

## 🤝 Kontribusi

Jika Anda ingin berkontribusi dalam pengembangan project ini:
1. Pastikan Anda berada di branch `develop`.
2. Buat branch fitur baru (`git checkout -b feature/nama-fitur`).
3. Lakukan commit perubahan Anda dengan pesan yang jelas (`git commit -m 'Menambahkan fitur XYZ'`).
4. Push ke branch fitur Anda (`git push origin feature/nama-fitur`).
5. Buat **Pull Request** ke branch `develop`.
