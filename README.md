# Sistem Manajemen Pengguna (User Management System)

Sistem manajemen pengguna berbasis web dengan PHP dan MySQL untuk Admin Gudang.

## Fitur

- ✅ Registrasi pengguna dengan email
- ✅ Aktivasi akun melalui email
- ✅ Login dengan validasi
- ✅ Lupa password & reset password
- ✅ Dashboard admin
- ✅ CRUD Produk (Create, Read, Update, Delete)
- ✅ Manajemen profil
- ✅ Ubah password

## Teknologi

- PHP 7.4+
- MySQL/MariaDB
- HTML5, CSS3
- PDO untuk database
- Session management

## Instalasi

1. Clone repository ini
```bash
git clone https://github.com/Antoncianfoski/sistem-manajemen-gudang.git
```

2. Import database
   - Buka phpMyAdmin
   - Buat database baru: `nama database`
   - Import file: yang kalian buat contohnya saya `database.sql`

3. Konfigurasi
   - Edit file `config.php` sesuai dengan setting database Anda

4. Jalankan aplikasi
   - Akses: `http://localhost:8080/sistem-manajemen-gudang/`

## Struktur Database

### Tabel `users`
- id (Primary Key)
- email (Unique)
- password (Hashed)
- nama_lengkap
- role
- status (pending/active/inactive)
- activation_token
- reset_token
- reset_token_expiry
- created_at
- updated_at

### Tabel `products`
- id (Primary Key)
- user_id (Foreign Key)
- kode_produk (Unique)
- nama_produk
- kategori
- harga
- stok
- deskripsi
- created_at
- updated_at

## Screenshot

<img width="1918" height="1010" alt="image" src="https://github.com/user-attachments/assets/e592b4c5-dbcf-41a3-b360-a22548899740" />
<img width="1919" height="1004" alt="image" src="https://github.com/user-attachments/assets/de495785-3596-4db1-9259-e57e7a157650" />
<img width="1919" height="1006" alt="image" src="https://github.com/user-attachments/assets/2c955319-dd8b-49e3-b310-3faf088ac4ab" />
<img width="1919" height="999" alt="image" src="https://github.com/user-attachments/assets/c8fe14f0-4eb3-4673-aed5-a78f5fa2f293" />


## Lisensi

MIT License

## Kontak

davinagung680@gmail.com
