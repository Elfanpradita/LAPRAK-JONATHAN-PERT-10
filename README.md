# Praktikum 10 – MySQL & JSON  
## IS534-AL – Mobile Application Development  
### Nama: Jonathan Chandra  
### NIM: 00000094067  

---

## 📌 Deskripsi Singkat
Praktikum ini menggunakan **PHP**, **MySQL**, dan **JSON** untuk membuat API sederhana berupa CRUD (Create, Read, Update, Delete) pada tabel **mahasiswa**.  
Proyek dijalankan menggunakan **Docker** agar environment konsisten dan mudah dijalankan di semua perangkat.

API yang dibuat:
- addMahasiswa.php → Tambah data  
- getMahasiswa.php → Ambil seluruh data  
- getMahasiswaById.php → Ambil data berdasarkan ID  
- updateMahasiswa.php → Update data  
- deleteMahasiswa.php → Hapus data  

Semua output dikembalikan dalam format **JSON**.

---

## 📂 Struktur Proyek
praktikum10/
├── docker-compose.yml
├── php/Dockerfile
├── mysql/init.sql
├── src/ (API PHP)
└── public/index.html (interface)

---

## 🐳 Cara Clone & Jalankan dengan Docker

### **1. Clone Repository**
```bash
git clone https://github.com/username/praktikum10-mobileapps.git
cd praktikum10-mobileapps
(ubah URL sesuai repo bapak)
2. Build Docker Container
docker compose build
3. Jalankan
docker compose up -d
4. Akses Sistem
Fungsi	URL
Interface Web	http://localhost:8080/
API – Get Mahasiswa	http://localhost:8080/api/getMahasiswa.php
API CRUD lain	terdapat dalam folder /api
✅ Selesai
Proyek berhasil menjalankan API CRUD berbasis PHP + JSON, serta database MySQL di dalam container Docker sesuai kebutuhan praktikum Mobile Application Development.