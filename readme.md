# Sistem E-Library Peminjaman Buku  
**Berbasis Web menggunakan Laravel 12**

---

## 👥 Tim Pengembang  
**Kelas 17.6A.26 – Universitas Bina Sarana Informatika**

- **Eka Tama Prasetya** — _17225004_  
- **Muh Bintang Mahardani** — _17225123_  
- **Taufiq Ismail** — _17215032_  

---

## 📚 Deskripsi Aplikasi

Sistem **E-Library Peminjaman Buku** ini dikembangkan menggunakan **Framework Laravel 12**.  
Aplikasi ini dirancang untuk digunakan di **sekolah maupun instansi umum**, dengan sistem pengelolaan peminjaman buku yang terstruktur dan mudah digunakan.

Aplikasi ini memiliki **3 role pengguna**, yaitu:
- **Administrator Perpustakaan**
- **Operator Perpustakaan**
- **Anggota Perpustakaan**

Beberapa fitur **CRUD** diimplementasikan menggunakan **AJAX** untuk meningkatkan pengalaman pengguna dengan mengurangi perpindahan halaman.

---

## ⚙️ Prasyarat Sistem

Pastikan perangkat telah terinstal:

- [Composer](https://getcomposer.org/)
- PHP **8.1**
- MySQL **14.5.x**
- Laragon

---

## ✨ Fitur Aplikasi

- CRUD Pengguna  
- CRUD Kategori Buku  
- CRUD Buku  
- Informasi & histori peminjaman buku  

---

## 🖼️ Preview Tampilan

**Dashboard**  
![Dashboard](https://i.imgur.com/IOgIyIi.png)

**Daftar Pengguna**  
![Pengguna](https://i.imgur.com/e3rkQ45.png)

**Daftar Kategori Buku**  
![Kategori Buku](https://i.imgur.com/WVEAyKi.png)

**Daftar Buku**  
![Buku](https://i.imgur.com/3Jarbbv.png)

**Daftar Peminjam Buku**  
![Peminjam](https://i.imgur.com/4z18siI.png)

**Histori Peminjaman Buku**  
![Histori](https://i.imgur.com/nzqiVSv.png)

---

## 🚀 Langkah Instalasi

1. **Install seluruh dependency**
   ```bash
   composer install

2. **Konfigurasi environment**
   ```bash
   cp .env.example .env
Atur konfigurasi database pada file .env

Ubah nilai APP_NAME sesuai nama aplikasi

3. **Migrasi dan seeding database**
   ```bash
   php artisan migrate --seed

4. **Migrasi dan seeding database**
   ```bash
   php artisan migrate --seed

5. **Jalankan server lokal**
   ```bash
   php artisan serve

## 🔐 Akun Default Login
Administrator Perpustakaan
Email    : admin@mail.com
Password : secret

Operator Perpustakaan
Email    : operator@mail.com
Password : secret

Anggota Perpustakaan
Email    : anggota@mail.com
Password : secret

## 🛠️ Dibuat Menggunakan

Laravel — PHP Web Framework

## 📄 Lisensi

Aplikasi ini bebas digunakan, dibagikan, dan dimodifikasi untuk keperluan pembelajaran.
Tidak diperbolehkan untuk diperjualbelikan.

## 🙏 Ucapan Terima Kasih

Terima kasih kepada rekan tim Kelas 17.6A.26 Universitas Bina Sarana Informatika, yang telah berkontribusi dan bekerja sama selama semester 6 dalam pengembangan aplikasi Sistem E-Library Peminjaman Buku ini.

