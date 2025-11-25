Ini sudah **lumayan benar**, tapi bagian **penutupan code block (```bash)** dan struktur markdown-nya masih tumpang-tindih sehingga README tampil berantakan.

Berikut versi yang **rapi**, **markdown valid**, dan **bash block tertutup dengan benar**:

---

# Praktikum 10 – MySQL & JSON

## IS534-AL – Mobile Application Development

### Nama: Jonathan Chandra

### NIM: 00000094067

---

## 📌 Deskripsi Singkat

Praktikum ini menggunakan **PHP**, **MySQL**, dan **JSON** untuk membuat API sederhana berupa CRUD (Create, Read, Update, Delete) pada tabel **mahasiswa**.
Proyek dijalankan menggunakan **Docker** agar environment konsisten dan mudah dijalankan di semua perangkat.

API yang dibuat:

* `addMahasiswa.php` → Tambah data
* `getMahasiswa.php` → Ambil seluruh data
* `getMahasiswaById.php` → Ambil data berdasarkan ID
* `updateMahasiswa.php` → Update data
* `deleteMahasiswa.php` → Hapus data

Semua output dikembalikan dalam format **JSON**.

---

## 🐳 Cara Clone & Jalankan dengan Docker

### **1. Clone Repository**

```bash
git clone https://github.com/username/praktikum10-mobileapps.git
cd praktikum10-mobileapps
# (ubah URL sesuai repo Anda)
```

### **2. Build Docker Container**

```bash
docker compose build
```

### **3. Jalankan Container**

```bash
docker compose up -d
```

### **4. Akses Sistem**

| Fungsi              | URL                                                                                      |
| ------------------- | ---------------------------------------------------------------------------------------- |
| Interface Web       | [http://localhost:8080/](http://localhost:8080/)                                         |
| API – Get Mahasiswa | [http://localhost:8080/api/getMahasiswa.php](http://localhost:8080/api/getMahasiswa.php) |
| API CRUD lainnya    | tersedia di folder `/api`                                                                |

---