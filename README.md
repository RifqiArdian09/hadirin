<h2>🖼️ Tampilan Aplikasi Hadirin</h2>

<table>
  <tr>
    <td align="center"><b>🏠 Home</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/home.jpg" width="250"/></td>
    <td align="center"><b>👤 Input Anggota</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/input_anggota.jpg" width="250"/></td>
    <td align="center"><b>📝 Input Kegiatan</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/input_kegiatan.jpg" width="250"/></td>
  </tr>
  <tr>
    <td align="center"><b>🆔 Generate ID</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/generate_id.jpg" width="250"/></td>
    <td align="center"><b>📷 Scan Kehadiran</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/scan_kehadiran.jpg" width="250"/></td>
    <td align="center"><b>📆 Print Harian</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_harian.jpg" width="250"/></td>
  </tr>
  <tr>
    <td align="center"><b>🗓️ Print Bulanan</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/kehadiran_bulanan.jpg" width="250"/></td>
    <td align="center"><b>🖨️ Print ID</b><br><img src="https://github.com/arditam/hadirin/blob/main/public/doc/print_id_anggota.jpg" width="250"/></td>
    <td align="center"><b>📆 Cetak Harian</b><br><img src="https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/print_harian.png" width="250"/></td>
  </tr>
  <tr>
    <td align="center"><b>🗓️ Cetak Bulanan</b><br><img src="https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/print_blanan.png" width="250"/></td>
    <td align="center"><b>🖨️ Cetak Kartu</b><br><img src="https://github.com/RifqiArdian09/hadirin/blob/main/public/doc/cetak.png" width="250"/></td>
    
  </tr>
</table>



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

