![Tampilan Home](https://github.com/arditam/hadirin/blob/main/public/doc/home.jpg)
![Tampilan Halaman Input Anggota](https://github.com/arditam/hadirin/blob/main/public/doc/input_anggota.jpg)
![Tampilan Halaman Input Kegiatan](https://github.com/arditam/hadirin/blob/main/public/doc/input_kegiatan.jpg)
![Tampilan Halaman Generate ID](https://github.com/arditam/hadirin/blob/main/public/doc/generate_id.jpg)
![Tampilan Halaman Scan Kehadiran](https://github.com/arditam/hadirin/blob/main/public/doc/scan_kehadiran.jpg)
![Tampilan Halaman Print Kehadiran Harian](https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_harian.jpg)
![Tampilan Halaman Print Kehadiran Bulanan](https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_bulanan.jpg)
![Tampilan Halaman Print ID Anggota](https://github.com/arditam/hadirin/blob/main/public/doc/print_id_anggota.jpg)


## 🛠️ Tech Stack
- Laravel 12
- Tailwind CSS

## ⚙️ Setup Guide

### 1. Clone project
```bash
git clone https://github.com/arditam/hadirin.git
cd hadirin
```

### 2. Setup database pada komputer anda, lalu masukkan kredensial-kredensialnya ke file .env.
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_hadirin5
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Install dependency
```bash
composer install
```
### 4. Generate application key
```bash
php artisan key:generate
```
### 5. Link storage untuk file upload
```bash
php artisan storage:link
```
### 6. Migrasi database
```bash
php artisan migrate
```
### 7. Jalankan aplikasi
```bash
php artisan serve
```




