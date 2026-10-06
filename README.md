# Konsulin Tech — Laravel 12 + Blade

Konversi template Bexon pada `demo/` menjadi situs Laravel 12. Template asli tetap tersedia. Layout, komponen, warna, font, gambar, CSS, dan animasi Bexon dipakai kembali; tambahan CSS hanya untuk tombol WhatsApp mengambang.

## Menjalankan

```sh
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Jika `.env` sudah ada, gunakan file tersebut tanpa menimpanya. Arahkan document root web server ke `public/`. Situs ini menggunakan aset statis dari `public/assets`, sehingga tidak memerlukan build Node/Vite. Session dan cache menggunakan file; halaman situs tidak membutuhkan database.

## Halaman dan bahasa

| Menu | Indonesia | Inggris |
| --- | --- | --- |
| Beranda | `/id` | `/en` |
| Tentang Kami | `/id/about` | `/en/about` |
| Layanan | `/id/services` | `/en/services` |
| Portofolio | `/id/portfolio` | `/en/portfolio` |
| Kontak Kami | `/id/contact` | `/en/contact` |

`/` mengarah ke bahasa default dari `APP_LOCALE` (default `id`). Pilihan ID/EN menggunakan komponen dropdown template dan mempertahankan halaman aktif. Teks dapat diubah di `lang/id/site.php` dan `lang/en/site.php`, mengikuti [localization Laravel 12](https://laravel.com/docs/12.x/localization). Tidak ada menu atau rute blog, toko, akun, dan halaman demo lainnya.

## WhatsApp dan kontak

Isi konfigurasi pada `.env`:

```dotenv
SITE_NAME="Konsulin Tech"
WHATSAPP_NUMBER=6285710999144
SITE_EMAIL=service@konsulintech.com
SITE_PHONE="085710999144"
SITE_ADDRESS="Jalan Kusuma Bangsa VII Nomor 71 Pemecutan Kaja, Denpasar"
```

Gunakan nomor WhatsApp dengan kode negara, contoh format `62812...`, tanpa angka nol awal lokal. Kosongkan sampai nomor yang benar tersedia. Setelah mengubah konfigurasi, jalankan `php artisan config:clear`.

Tombol mengambang membuka percakapan WhatsApp dengan pesan sesuai bahasa aktif. Jika nomor belum diisi atau tidak valid, tombol mengarah ke formulir kontak. Formulir Beranda dan Kontak Kami memvalidasi input, lalu membuka WhatsApp dengan pesan yang telah disusun; pengunjung tetap harus mengirim pesan di WhatsApp. Formulir tidak mengirim email atau menyimpan data kontak. Jika nomor belum tersedia, formulir menampilkan pesan yang menjelaskan keadaan tersebut. Input dilindungi CSRF dan pembatasan frekuensi permintaan.

Komponen email pada footer membawa pengunjung ke halaman kontak dan mengisi kolom email. Tidak ada fitur langganan newsletter. Pencarian bawaan header mencari teks proyek pada halaman portofolio.

## Mengubah konten

- `resources/views/layouts/site.blade.php`: struktur bersama dan aset.
- `resources/views/partials/`: header, navigasi, footer, WhatsApp, dan pesan validasi.
- `resources/views/pages/`: lima halaman dengan markup dari HTML asli.
- `lang/id/site.php` dan `lang/en/site.php`: konten dua bahasa.
- `config/site.php`: identitas dan kontak utama.

Foto, nama tim, grafik ilustrasi, dan tautan media sosial masih merupakan data/aset contoh template. Ganti teks contoh dengan data perusahaan yang benar sebelum publikasi. Logo memakai gambar yang diberikan pengguna (`public/assets/images/logos/konsulin-tech.png`), dengan nama Konsulin Tech. Kontak dan peta memakai alamat Denpasar dan nomor telepon pengguna. Tautan detail layanan/proyek diarahkan ke kontak karena lingkup situs hanya lima halaman. Lisensi aset template mengikuti lisensi Bexon yang dimiliki pengguna.

## Verifikasi

```sh
php artisan test
php artisan view:cache
vendor/bin/pint --test
```

Enam aset yang dirujuk HTML sumber tidak tersedia: `images/bg/pheader-bg.webp`, `images/shape/pheader-overlay.webp`, `images/shape/separator.svg`, dan `images/project/project-{1,2,3}.webp`. Blade mengabaikan latar gambar tersebut bila filenya tidak tersedia, sehingga tidak membuat permintaan 404. File/gambar lain tidak diganti. Beranda kini menggunakan visual baru pada `public/assets/images/landing/` untuk gambar utama dan contoh solusi. Aset latar lain yang masih dirujuk akan digunakan bila file aslinya ditambahkan. Pagination portofolio tetap komponen contoh statis dari template.

Konsep konten mencakup IT Consulting & Software House dan Legal & Business Consulting. Produk utama adalah HUMI HRIS (https://humi.my.id), Paperwork (https://paperwork.biz.id), dan Mava POS (https://mavapos.id). Section produk digunakan bersama di Beranda dan Layanan, dengan tautan langsung ke setiap website. Layanan accounting, finance, dan tax tidak ditawarkan pada konten situs.

Gambar utama Beranda memakai empat visual ilustratif yang dibuat melalui imagegen bawaan. Prompt, lokasi aset, dan penggunaan didokumentasikan pada `docs/landing-images.md`. Visual ini bukan foto staf sebenarnya atau screenshot produk.
