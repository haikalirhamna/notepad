# NotePad

NotePad adalah aplikasi pencatat sederhana yang dibangun menggunakan Laravel. Panduan ini akan memandu Anda melalui langkah-langkah untuk mengkloning repositori NotePad dari GitHub dan menyiapkannya di mesin lokal Anda.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki hal-hal berikut yang terinstal di mesin Anda:

- **Git**: [Install Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- **Composer**: [Install Composer](https://getcomposer.org/download/)
- **PHP**: Pastikan Anda memiliki PHP terinstal. Anda dapat memeriksanya dengan menjalankan `php -v` di terminal Anda.
- **Node.js and npm**: [Install Node.js](https://nodejs.org/) (yang sudah termasuk npm)
- **Vite**: Kita akan menggunakan Vite alih-alih Laravel Mix untuk kompilasi aset.
  
## Mengkloning Repositori

1. **Kloning Repositori**

   Buka terminal Anda dan jalankan perintah berikut untuk mengkloning repositori NotePad:

   ```bash
   git clone https://github.com/haikalirhamna/notepad.git
   ```

2. **Masuk ke Direktori Proyek**

   Pindah ke direktori repositori yang baru saja dikloning:

   ```bash
   cd notepad
   ```

## Memasang Dependensi

1. **Pasang Dependensi PHP**

   Gunakan Composer untuk memasang dependensi PHP yang diperlukan:

   ```bash
   composer install
   ```

   Jika Anda menemui masalah dengan Composer, pastikan Composer terinstal dengan benar dengan menjalankan:
   
   ```bash
   composer -v
   ```

2. **Pasang Dependensi JavaScript**

   Pasang dependensi JavaScript yang diperlukan menggunakan npm:

   ```bash
   npm install
   ```

## Menyiapkan Lingkungan

1. **Salin File Lingkungan**

   Salin file `.env.example` ke `.env`:

   ```bash
   cp .env.example .env
   ```

2. **Hasilkan Kunci Aplikasi**

   Jalankan perintah berikut untuk menghasilkan kunci aplikasi baru:
   
   ```bash
   php artisan key:generate
   ```

4. **Konfigurasi Database**

   Buka file `.env` di editor teks favorit Anda dan perbarui pengaturan database agar sesuai dengan lingkungan lokal Anda:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

   Ganti `your_database_name`, `your_database_user`, dan `your_database_password`  dengan detail database Anda yang sebenarnya.
   
## Menjalankan Migrasi

Jalankan migrasi untuk menyiapkan skema database:

```bash
php artisan migrate
```

## Menjalankan Aplikasi

1. **Mulai Server Pengembangan**

   Gunakan perintah Artisan untuk memulai server pengembangan:

   ```bash
   php artisan serve
   ```

   Anda sekarang dapat mengakses aplikasi di `http://localhost:8000`.

2. **Kompilasi Aset**

   Di jendela terminal lain, jalankan perintah berikut untuk mengompilasi aset menggunakan Vite:
   
   ```bash
   npm run dev
   ```

   Ini akan memulai server pengembangan Vite dan mengompilasi aset Anda.

## Troubleshooting

- **Composer Not Installed**: Jika Anda melihat kesalahan yang menunjukkan bahwa Composer tidak terinstal, pastikan untuk mengunduh dan menginstal Composer dari [the official site](https://getcomposer.org/download/).
- **Database Connection Issues**: Periksa kembali file `.env` Anda untuk memastikan kredensial database Anda benar.
- **Node.js or npm Not Installed**: Jika `npm install` gagal, pastikan Node.js dan npm terinstal dengan benar dengan menjalankan `node -v` dan `npm -v`.

## Conclusion

You have successfully set up the NotePad application. Happy coding!