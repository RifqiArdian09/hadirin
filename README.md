## 🖼️ Tampilan Aplikasi Hadirin

| Halaman | Gambar |
|--------|--------|
| 🏠 Home | ![Home](https://github.com/arditam/hadirin/blob/main/public/doc/home.jpg) |
| 👤 Input Anggota | ![Input Anggota](https://github.com/arditam/hadirin/blob/main/public/doc/input_anggota.jpg) |
| 📝 Input Kegiatan | ![Input Kegiatan](https://github.com/arditam/hadirin/blob/main/public/doc/input_kegiatan.jpg) |
| 🆔 Generate ID Anggota | ![Generate ID](https://github.com/arditam/hadirin/blob/main/public/doc/generate_id.jpg) |
| 📷 Scan Kehadiran | ![Scan Kehadiran](https://github.com/arditam/hadirin/blob/main/public/doc/scan_kehadiran.jpg) |
| 📆 Print Kehadiran Harian | ![Print Harian](https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_harian.jpg) |
| 🗓️ Print Kehadiran Bulanan | ![Print Bulanan](https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_bulanan.jpg) |
| 🖨️ Print ID Anggota | ![Print ID](https://github.com/arditam/hadirin/blob/main/public/doc/print_id_anggota.jpg) |

## 📦 Versi Cetak Tambahan

| Halaman | Gambar |
|--------|--------|
| 📆 Cetak Harian | ![Cetak Harian](https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/print_harian.png) |
| 🗓️ Cetak Bulanan | ![Cetak Bulanan](https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/print_blanan.png) |
| 🖨️ Cetak Kartu | ![Cetak Kartu](https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/cetak.png) |


## ⚙️ Setup Guide

### 1. Clone project
```bash
git clone https://github.com/RifqiArdian09/hadirin.git
cd hadirin
```
### 2. Copy file .env.example
```bash
copy .env.example .env
```
### 3. Setup database pada komputer anda, lalu masukkan kredensial-kredensialnya ke file .env.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_hadirin5
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Install dependency
```bash
composer install
```

### 5. Generate application key
```bash
php artisan key:generate
```
### 6. Link storage untuk file upload
```bash
php artisan storage:link
```
### 7. Migrasi database
```bash
php artisan migrate
```
### 8. Jalankan aplikasi
```bash
php artisan serve
```


Sc.Rifqi Ardian

