# MediaFlow — Sistem Manajemen Tim Media
Aplikasi berbasis web yang dikembangkan sebagai wadah pengelolaan kegiatan Tim Media PT PipoSmart. Dibuat untuk mengatasi pengelolaan data anggota, konten, aktivitas harian, dan arsip video yang sebelumnya masih tersebar di berbagai tempat.

## Tujuan
Menyatukan pengelolaan pekerjaan Tim Media dalam satu sistem agar lebih terorganisir dan mudah dipantau.

## Teknologi

- Laravel
- PHP
- MySQL
- HTML, CSS, JavaScript

## Fitur

- Login Admin dan Anggota
- Manajemen data anggota
- Manajemen konten media sosial
- Pencatatan aktivitas harian
- Validasi pekerjaan
- Arsip video marketing

## 💻 Cara Menjalankan

1. Clone repository:
   ```bash
   git clone URL_REPOSITORY
   ```

2. Masuk ke folder project:
   ```bash
   cd mediaflow-laravel
   ```

3. Instal dependensi:
   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`.

5. Buat database `mediaflow_db` melalui phpMyAdmin, lalu import file `mediaflow_db.sql`.

6. Atur konfigurasi database di `.env`, kemudian jalankan:
   ```bash
   php artisan key:generate
   php artisan storage:link
   php artisan serve
   ```

7. Buka aplikasi:
   `http://127.0.0.1:8000`

## 🔐 Akun Login 

**Admin**
- Email: admin@media
- Password: `admin123`

**Anggota**
- Email: `anggota@media`
- Password: `anggota123`
