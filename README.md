# UMKM Store

Aplikasi manajemen toko untuk UMKM berbasis Laravel.

## Instalasi

1. Pastikan Docker dan Docker Compose sudah terinstal.
2. Clone repository ini:
   ```bash
   git clone https://github.com/TheZaww/umkm-store.git
   cd umkm-store
   ```
3. Salin file `.env`:
   ```bash
   cp .env.example .env
   ```
4. Jalankan aplikasi menggunakan Docker:
   ```bash
   docker-compose up -d
   ```
5. Install dependensi:
   ```bash
   docker-compose exec app composer install
   docker-compose exec app php artisan key:generate
   ```
