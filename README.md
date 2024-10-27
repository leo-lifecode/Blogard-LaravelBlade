<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Blogard Community

Blogard Community adalah platform blogging komunitas tempat pengguna dapat berbagi pemikiran, berinteraksi melalui komentar, dan menikmati konten dari kategori yang berbeda. Proyek ini dibangun menggunakan Laravel dan Chart.js, menyediakan fitur autentikasi, manajemen posting, komentar, kategori, serta halaman dashboard dengan analitik post.

## Fitur Utama

- **Membuat dan Mengelola Post**: Pengguna dapat membuat, mengedit, dan menghapus posting blog mereka.
- **Kategori**: Setiap post dapat dikaitkan dengan kategori tertentu untuk membantu pengelompokan konten.
- **Komentar**: Pengguna dapat meninggalkan komentar pada post untuk berinteraksi dengan penulis dan komunitas.
- **Manajemen Pengguna**: Sistem autentikasi dan autorisasi yang memungkinkan akses admin ke fitur khusus.
- **Dashboard Analitik**: Admin dapat melihat statistik posting per bulan menggunakan Chart.js.

## Teknologi yang Digunakan

- **Framework**: Laravel 11
- **Database**: MySQL
- **Frontend**: Blade Template Engine, Chart.js
- **CSS**: Tailwind CSS
- **Autentikasi**: Laravel Auth

## Instalasi

1. **Clone Repository**

   ```bash
   git clone https://github.com/username/blogard-community.git
   cd blogard-community
   ```

2. **Instal Dependensi**

   Jalankan perintah berikut untuk menginstal dependensi PHP dan NPM:

   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Konfigurasi Lingkungan**

   Salin `.env.example` menjadi `.env` dan sesuaikan pengaturan database serta pengaturan lainnya:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi dan Seeder**

   Buat tabel dan data awal dengan perintah berikut:

   ```bash
   php artisan migrate --seed
   ```

5. **Jalankan Server**

   Jalankan server pengembangan dengan:

   ```bash
   php artisan serve
   ```

6. **Akses di Browser**

   Akses aplikasi di `http://localhost:8000`.

## Dokumentasi Endpoint

| Method | Endpoint                       | Description                            |
|--------|--------------------------------|----------------------------------------|
| GET    | `/`                            | Menampilkan halaman utama              |
| GET    | `/post/{post:slug}`            | Menampilkan detail post                |
| POST   | `/comment/commentcreate`       | Menambahkan komentar pada post         |
| GET    | `/category/{category:slug}`    | Menampilkan semua post pada kategori   |
| GET    | `/profile/{user:username}`     | Menampilkan halaman profil pengguna    |
| GET    | `/writeblog`                   | Menampilkan halaman buat posting baru  |
| POST   | `/writeblog/writecreate`       | Menyimpan post baru                    |
| GET    | `/dashboard`                   | Menampilkan halaman dashboard admin    |

## Middleware

- **OnlyAdmin**: Middleware khusus untuk memastikan bahwa hanya admin yang dapat mengakses halaman dan fitur tertentu di dalam dashboard.

## Struktur Database

1. **users**: Menyimpan informasi pengguna seperti username, email, dan status admin.
2. **posts**: Menyimpan detail dari setiap posting termasuk judul, konten, slug, dan ID kategori.
3. **comments**: Menyimpan komentar untuk setiap post yang dibuat oleh pengguna.
4. **categories**: Mengelompokkan setiap post sesuai dengan kategori yang relevan.

## Dashboard Analitik

Dashboard untuk admin dilengkapi dengan analitik jumlah post per bulan menggunakan **Chart.js**, memungkinkan admin untuk memonitor aktivitas blogging di platform.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau buka issue untuk mendiskusikan ide-ide Anda.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

---

Dengan README ini, pengembang dan pengguna lain bisa memahami alur, fitur, dan tujuan dari proyek **Blogard Community**. Sesuaikan detail spesifik jika ada perubahan atau fitur tambahan.
