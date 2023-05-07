# Kursus Laravel Toko Online

## Persiapan Pengembangan
- Siapkan XAMPP versi 8.1 ke atas.
- Ubah informasi koneksi Database (disesuaikan) pada .env
- Kemudian jalankan migration terlebih dahulu dan database seedernya menggunakan perintah dibawah ini:

```shell
php artisan migrate:fresh --seed
```

- Jalankan server xampp & Arahkan document root VHOST ke htdocs/toko-online/public
- Buka pada browser http://localhost:8080

## Akun Login & Roles

- Admin
```shell
 username: developer2.jamkrindo@gmail.com
 password: 123456
```
- User
```shell
 username: alamhafidz61@gmail.com
 password: 123456
```