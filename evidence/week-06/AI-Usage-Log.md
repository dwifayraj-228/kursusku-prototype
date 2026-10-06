AI Usage Log — Pertemuan 6
Project:KursusKu  
Dokumentasi:Catatan penggunaan AI dalam proses pengembangan aplikasi

| No | Area Pengembangan | Permasalahan | Saran yang Dipraktekan | Hasil Praktek |
|---:|---|---|---|---|
| 1 | Data Kursus | Data kursus pada beberapa halaman belum menggunakan daftar dan harga yang sama | Menyesuaikan data pada `index.php`, `registration.php`, `process-registration.php`, dan `loop-lab.php` | Data menjadi seragam: Web Dasar Rp300.000, PHP Dasar Rp350.000, dan Laravel Fundamental Rp500.000 |
| 2 | Perulangan Kursus | Penulisan data kursus secara berulang membuat kode kurang praktis | Menggunakan array dan `foreach` untuk menampilkan data secara otomatis | Ketiga kursus dapat ditampilkan tanpa menulis markup yang sama berulang kali |
| 3 | Perhitungan Biaya | Harga Laravel Fundamental pada bagian kalkulator belum sesuai dengan data pendaftaran | Menyamakan nilai fee dengan data utama KursusKu | Harga Laravel Fundamental menjadi Rp500.000 dan sesuai dengan sistem pendaftaran |
| 4 | Form Minat | Program perlu tetap berjalan ketika pengguna tidak memilih minat | Menambahkan pengecekan terhadap array sebelum menjalankan `implode()` | Jika tidak ada pilihan, ditampilkan keterangan “Minat belum dipilih” |
| 5 | Pilihan Metode | Setiap metode pembelajaran pada form perlu dipastikan dapat digunakan | Memeriksa pilihan online, offline, dan hybrid sebagai bagian pengujian | Ketiga metode berhasil dimasukkan ke dalam skenario pengujian |
| 6 | Navigasi | Tampilan link masih mengikuti warna bawaan browser | Mengatur gaya link agar mengikuti tampilan KursusKu | Link navigasi tampil lebih sesuai dengan tema halaman |
| 7 | Tampilan Aplikasi | Tampilan halaman perlu memiliki identitas visual yang konsisten | Menyesuaikan warna dan font dengan tema KursusKu tanpa mengubah fungsi program | Halaman menggunakan warna tema KursusKu seperti biru muda dan biru tua |
| 8 | Pengujian Sistem | Skenario pengujian perlu mencakup fitur yang telah dibuat | Menyusun test matrix berdasarkan fungsi yang terdapat pada aplikasi | Pengujian mencakup perhitungan, validasi, minat, metode pembelajaran, paket, dan navigasi |

Kesimpulan

AI saya gunakan untuk alat bantu dalam mencari solusi terhadap kendala pemrograman seperti terjadi eror. Setiap saran yang diberikan ai akan saya periksa dan diuji terlebih dahulu sebelum diterapkan pada aplikasi KursusKu.