# UTS Praktik Pemrograman Web II

Repository ini dibuat untuk memenuhi tugas **Ujian Tengah Semester (UTS) Praktik Pemrograman Web II** pada Program Studi D3 Teknik Komputer.

## Identitas Mahasiswa

| Keterangan | Detail |
|---|---|
| Nama | Rafael Damanik |
| NIM | 25110127 |
| Program Studi | D3 Teknik Komputer |
| Mata Kuliah | Pemrograman Web II |

## Deskripsi Project

Project ini merupakan aplikasi web sederhana berbasis PHP yang terdiri dari dua bagian utama:

### A. Struk Pembelian

File: `struk.php`

Fitur:
- Menggunakan array multidimensi untuk menyimpan data keranjang.
- Function untuk menghitung subtotal produk.
- Function untuk memformat angka ke format Rupiah.
- Menggunakan `foreach` untuk menampilkan daftar produk.
- Menghitung total belanja secara otomatis.
- Memberikan diskon 10% jika total belanja lebih dari Rp50.000.
- Menampilkan tanggal transaksi dan total pembayaran.

### B. Form Tambah Produk

File: `form_produk.php`

Fitur:
- Form input nama dan harga produk.
- Menggunakan metode POST untuk mengirim data.
- Validasi nama produk agar tidak kosong.
- Validasi harga agar berupa angka lebih dari 0.
- Menampilkan pesan kesalahan dan pesan berhasil.
- Menggunakan `htmlspecialchars()` untuk membantu mencegah eksekusi HTML yang tidak diinginkan pada output.

## Teknologi yang Digunakan

- PHP
- HTML5
- CSS3
- Visual Studio Code
- XAMPP (Apache)

## Struktur Folder

```text
uts-web2-25110127/
│
├── struk.php
├── form_produk.php
├── style.css
└── README.md
```

## Cara Menjalankan Project

1. Pastikan XAMPP sudah terinstal.
2. Pindahkan folder project ke dalam direktori `htdocs`.
3. Jalankan Apache melalui XAMPP Control Panel.
4. Buka browser dan akses alamat berikut:

**Halaman A — Struk Pembelian**
```text
http://localhost/uts-web2-25110127/struk.php
```

**Halaman B — Form Tambah Produk**
```text
http://localhost/uts-web2-25110127/form_produk.php
```

## Hasil Pengujian

- Halaman struk berhasil menampilkan daftar produk dan perhitungan pembayaran.
- Perhitungan diskon berjalan sesuai kondisi yang ditentukan.
- Form produk dapat menerima input nama dan harga.
- Validasi berjalan ketika data kosong atau tidak sesuai.
- Pesan berhasil muncul ketika data valid.

## Tujuan

Project ini bertujuan untuk menerapkan pemahaman dasar PHP, meliputi array, function, perulangan, percabangan, pengolahan form, validasi input, dan keamanan output HTML.

---

**Dibuat oleh Rafael Damanik**  
UTS Praktik Pemrograman Web II — 2026