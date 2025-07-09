<h1 align="center">  Sistem Informasi Puskesmas Samuda </h1>

<p align="center">
Repositori ini berisi source code untuk Sistem Informasi Pendaftaran Pasien Puskesmas Samuda yang dibangun menggunakan PHP dan MySQL. Sistem ini ditujukan untuk memudahkan proses pendaftaran pasien, manajemen data pasien, dan layanan kesehatan secara umum di lingkungan Puskesmas Samuda.
</p>

---

## 📁 Struktur Folder

```bash
Puskesmas-Samuda/
├── assets/              # Berisi file CSS, JavaScript, dan gambar
├── config/              # Konfigurasi database
├── pages/               # Halaman utama dan sub-menu sistem
├── proses/              # Proses backend seperti simpan, edit, hapus
├── index.php            # Halaman utama aplikasi
├── login.php            # Halaman login admin/petugas
├── logout.php           # Logout sesi pengguna
├── README.md            # Dokumentasi proyek
```
---

## 🧰 Teknologi yang Digunakan

<p align="left">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5"/>
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3"/>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript"/>
</p>

---

## ⚙️ Fitur Aplikasi

- 🔐 **Login dan Logout Petugas**
- 👤 **Manajemen Data Pasien** (Tambah, Ubah, Hapus, Lihat)
- 📋 **Pendaftaran Pasien Baru**
- 📅 **Riwayat Kunjungan Pasien**
- 🧾 **Cetak Bukti Pendaftaran**
- 📊 **Dashboard Ringkasan Data**
- 🛡️ **Hak Akses Pengguna** (opsional)

---

## 📦 Cara Instalasi


### 1. Clone repositori ini ke komputer Anda
```
git clone https://github.com/username/Puskesmas-Samuda.git
```
### 2. Pindahkan ke folder server lokal (misalnya XAMPP - htdocs)
```
cp -r Puskesmas-Samuda /xampp/htdocs/
```
### 3. Buka phpMyAdmin melalui browser. Lalu buat database baru, misalnya: db_puskesmas

### 4. Import file .sql (jika ada) ke database tersebut melalui menu Import

### 5. Edit file koneksi database di:
```
config/koneksi.php
```
###    Sesuaikan dengan konfigurasi lokal Anda:
```
$koneksi = mysqli_connect("localhost", "root", "", "db_puskesmas");
```
### 6. Jalankan aplikasi di browser:
```
http://localhost/Puskesmas-Samuda/
```
