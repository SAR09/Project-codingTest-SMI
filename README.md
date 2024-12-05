# **Product-API E-Commerce**

## 📋 Deskripsi Aplikasi

**Product-API** adalah aplikasi e-commerce berbasis web yang memungkinkan pengguna untuk menjelajahi berbagai produk yang tersedia dengan cara yang mudah dan cepat. Aplikasi ini dibangun menggunakan **Laravel 11** dan memanfaatkan **Tailwind CSS** untuk tampilan responsif yang menarik di desktop dan mobile.

## Screenshot Website
![image](https://github.com/user-attachments/assets/37f804b0-15f8-4cf8-a689-cf67d19ee229)
![image](https://github.com/user-attachments/assets/574cae9a-be26-4ba5-96c7-e4f52fa6095b)
![image](https://github.com/user-attachments/assets/d51828d8-7192-468b-b344-f03784dfff68)



### Fitur Utama:
- **Login dan Logout**: Pengguna dapat login menggunakan kredensial mereka dan mengakses halaman produk. Token autentikasi disimpan untuk sesi pengguna.
- **Pencarian Produk**: Pengguna dapat mencari produk berdasarkan kata kunci tertentu.
- **Daftar Produk**: Menampilkan produk dengan gambar, harga, kategori, dan stok yang tersedia.
- **Detail Produk**: Pengguna dapat melihat detail lengkap setiap produk.
- **Antarmuka yang Responsif**: Aplikasi ini memiliki desain yang responsif dan dapat diakses dengan baik melalui perangkat seluler maupun desktop.


## 🚀 Cara Menjalankan Aplikasi

### 1. Persyaratan Sistem

Pastikan Anda memiliki perangkat lunak berikut di komputer Anda:
- **PHP** (versi 8.0 atau lebih tinggi)
- **Composer** (untuk mengelola dependensi PHP)
- **Node.js dan npm** (untuk mengelola dependensi frontend)
- **Docker** dan **Docker Compose** (untuk menjalankan aplikasi di dalam container)

### 2. Clone Repository

Langkah pertama adalah meng-clone repositori ke dalam folder lokal menggunakan Git:

bash
git clone https://github.com/username/repository-name.git
cd repository-name


### 3. Install Depedensi
- composer install
- npm install

### 4. Jalankan Aplikasi
-php artisan serve

### 5. USERNAME & PASSWORD LOGIN
- USERNAME = emilys
- PASSWORD = emilyspass


## 🖥️ **Bahasa Pemrograman yang Digunakan**

### 1. **PHP (Hypertext Preprocessor)**

- **Deskripsi**: PHP adalah bahasa pemrograman server-side yang digunakan untuk membangun logika backend aplikasi web. PHP dipilih karena kemampuannya untuk menangani logika aplikasi yang kompleks, berinteraksi dengan database, dan mengelola autentikasi pengguna secara aman.
- **Fungsi dalam Aplikasi**: PHP digunakan untuk menangani proses login, pengelolaan produk, dan pengiriman data antara frontend dan backend.
- **Versi yang Digunakan**: PHP 8.0 atau lebih tinggi.


## 🛠️ **Tools dan Framework yang Digunakan**

### 1. **Laravel 11**

- **Deskripsi**: Laravel adalah salah satu framework PHP yang paling populer dan digunakan dalam aplikasi ini untuk membangun backend aplikasi. Laravel menyediakan berbagai fitur canggih seperti routing, middleware, Eloquent ORM (Object-Relational Mapping), dan banyak lagi yang membantu dalam pengembangan aplikasi secara efisien.
- **Fungsi dalam Aplikasi**: Laravel digunakan untuk membangun API untuk produk, menangani logika autentikasi pengguna, dan mengelola sesi dengan token JWT.
- **Fitur Utama yang Digunakan**:
  - **Routing**: Menangani URL dan request dari frontend.
  - **Eloquent ORM**: Menyederhanakan interaksi dengan database.
  - **Artisan Commands**: Memudahkan pengelolaan aplikasi dari command line.

### 2. **Tailwind CSS**

- **Deskripsi**: Tailwind CSS adalah framework CSS yang berbasis utilitas (utility-first), memungkinkan pengembang untuk membangun desain responsif dan modern dengan cepat tanpa menulis banyak kode CSS kustom.
- **Fungsi dalam Aplikasi**: Tailwind digunakan untuk merancang antarmuka pengguna yang elegan, responsif, dan mudah digunakan di berbagai perangkat (desktop, tablet, dan mobile).
- **Versi yang Digunakan**: Tailwind CSS v3.x.




