# Aplikasi Manajemen Gym

Aplikasi manajemen gym berbasis web yang dibuat dengan Laravel Livewire, memungkinkan gym untuk mengelola member, pembayaran, dan rencana keanggotaan (membership). Aplikasi ini menyediakan berbagai fitur seperti pendaftaran member, pembayaran dengan Midtrans, dan manajemen data member yang mudah.

## Fitur

- **Pendaftaran Member**: Proses pendaftaran member gym baru, baik yang sudah menjadi member atau non-member.
- **Pembayaran**: Mendukung pembayaran via tunai (cash) maupun Midtrans (virtual payment gateway).
- **Manajemen Keanggotaan**: Pengelolaan rencana keanggotaan dengan berbagai pilihan paket harga dan durasi.
- **QR Code untuk Validasi Member**: Penggunaan QR code untuk memvalidasi status keanggotaan member saat mereka masuk gym.
- **Dashboard Kasir**: Kasir dapat memproses pembayaran, melihat daftar member dan transaksi mereka.
- **Cetak Bukti Pembayaran**: Fitur untuk mencetak bukti pembayaran member dan non-member.

## Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk membangun aplikasi web.
- **Livewire**: Framework full-stack untuk Laravel yang memungkinkan interaksi dinamis tanpa menulis banyak JavaScript.
- **Midtrans**: Payment gateway untuk transaksi online yang terintegrasi.
- **Bootstrap**: Framework CSS untuk membuat UI responsif dan modern.
- **QR Code**: Digunakan untuk validasi member di gym.

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal aplikasi ini secara lokal:

1. **Clone repository ini**:
   ```bash
   git clone https://github.com/username/repository.git
