# Hadirin - Sistem Presensi Berbasis Barcode

**Hadirin** adalah sebuah platform manajemen kehadiran (presensi) berbasis web yang dibangun menggunakan framework Laravel. Sistem ini dirancang untuk memudahkan pencatatan kehadiran anggota pada berbagai acara (event) menggunakan teknologi pemindaian barcode/ID Card.

---

## 🚀 Fitur Utama

-   **Manajemen Pengguna**: Pengelolaan data anggota/user (Tambah, Edit, Hapus).
-   **Manajemen Acara (Event)**: Membuat dan mengelola berbagai acara yang memerlukan absensi.
-   **Generasi ID & Barcode**: Pembuatan Member ID otomatis beserta barcode unik untuk setiap anggota.
-   **Sistem Pemindaian (Scanning)**: Fitur scan barcode untuk melakukan presensi secara real-time.
-   **Cetak Kartu ID**: Fitur cetak kartu anggota (Bulk Print) yang siap digunakan.
-   **Laporan Presensi**: Cetak laporan presensi harian dan bulanan dalam format yang rapi.
-   **Riwayat Presensi**: Pantau riwayat kehadiran berdasarkan pengguna atau acara tertentu.

---

## 🛠️ Teknologi yang Digunakan

-   **Framework**: [Laravel 11](https://laravel.com/)
-   **Frontend**: [Tailwind CSS](https://tailwindcss.com/) & [Vite](https://vitejs.dev/)
-   **Database**: MySQL / SQLite (Sesuai konfigurasi `.env`)
-   **Barcode Library**: `milon/barcode`
-   **Lainnya**: PHP 8.2+, Composer, NPM.

---

## ⚙️ Instalasi

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di lingkungan lokal Anda:

### 1. Clone Repositori
```bash
git clone https://github.com/RifqiArdian09/hadirin.git
cd hadirin
```

### 2. Instal Dependensi PHP
```bash
composer install
```

### 3. Instal Dependensi Frontend
```bash
npm install
```

### 4. Konfigurasi Lingkungan
Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database Anda.
```bash
cp .env.example .env
```
Setelah itu, generate key aplikasi:
```bash
php artisan key:generate
```

### 5. Migrasi Database
Jalankan migrasi untuk membuat tabel-tabel yang diperlukan:
```bash
php artisan migrate
```

### 6. Jalankan Aplikasi
Jalankan server pengembangan Laravel dan Vite secara bersamaan:
```bash
npm run dev
```
Aplikasi dapat diakses di `http://127.0.0.1:8000`.

---

## 📝 Cara Penggunaan

1.  **Tambah Anggota**: Masuk ke menu Users untuk menambahkan data anggota baru.
2.  **Generate Barcode**: Setelah anggota ditambahkan, generate Member ID dan unduh/cetak barcodenya.
3.  **Buat Event**: Tambahkan acara baru di menu Events.
4.  **Proses Scan**: Buka halaman Scan, pastikan scanner (hardware/kamera) siap, dan arahkan barcode anggota ke pemindai.
5.  **Cetak Laporan**: Gunakan fitur Print untuk melihat ringkasan kehadiran.

---

## 🤝 Kontribusi

Kontribusi selalu terbuka! Silakan lakukan *fork* pada repositori ini dan kirimkan *pull request* Anda.

---

## 👨‍💻 Author

**Rifqi Ardian**
-   GitHub: [@RifqiArdian09](https://github.com/RifqiArdian09)
-   Website: [rifqiardian.my.id](https://rifqiardian.my.id)

---

*Dibuat dengan ❤️ untuk kemudahan manajemen event.*
