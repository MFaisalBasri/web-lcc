# Web LCC Kopi 

Aplikasi web untuk **Life Cycle Cost (LCC) Kopi** yang dibangun menggunakan **CodeIgniter 3 (CI3)**. Aplikasi ini membantu pengguna untuk menghitung dan menganalisis biaya yang terkait dengan siklus hidup kopi dari proses produksi, distribusi, hingga konsumsi. Fitur-fitur yang tersedia memungkinkan pengguna untuk memantau dan mengoptimalkan biaya produksi kopi dalam jangka panjang.

## Fitur
- **Analisis Biaya Siklus Hidup**: Menghitung biaya total dari berbagai tahap dalam proses produksi kopi, mulai dari perkebunan, pemrosesan, distribusi, hingga konsumsi.
- **Visualisasi Biaya**: Menyediakan grafik dan diagram yang mudah dipahami untuk menggambarkan pembagian biaya di setiap tahap siklus hidup kopi.
- **Perbandingan Biaya**: Pengguna dapat membandingkan biaya siklus hidup kopi dari berbagai sumber atau metode produksi.
- **Simulasi Pengurangan Biaya**: Pengguna dapat mencoba mengurangi biaya dengan berbagai skenario untuk menemukan solusi optimal.

## Teknologi
- **Backend**: PHP dengan CodeIgniter 3
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL
- **Grafik dan Visualisasi**: Chart.js (untuk grafik dan diagram)

## Instalasi

Untuk menjalankan aplikasi ini, ikuti langkah-langkah berikut:

### 1. Clone Repository
   ```bash
   git clone https://github.com/mfaisalbasri/web-lcc-kopi.git
   ```
   
### 2. Instalasi Dependencies

Setelah meng-clone repositori, pastikan Anda sudah menginstal `PHP versi 7.3` < `PHP versi 8.2` dan Composer untuk mengelola dependensi proyek. **Proyek ini belum mendukug php versi 8.2** Berikut adalah langkah-langkah untuk menginstal dependensi yang dibutuhkan oleh proyek ini.

**Langkah 1: Instal PHP dan Composer
Instalasi PHP**

Pastikan PHP versi 7.3 ke atas sudah terinstal. Berikut cara menginstal PHP di beberapa sistem operasi:
- **Linux (Ubuntu/Debian):**
```bash
sudo apt update
sudo apt install php php-cli php-mbstring php-xml php-curl php-mysql
```
- **Windows:** Unduh PHP dari [situs resmi PHP](https://www.php.net/downloads.php) atau gunakan paket XAMPP yang sudah mencakup PHP.


**Instalasi Composer**
**Composer** adalah alat untuk mengelola dependensi PHP. Ikuti langkah-langkah berikut untuk menginstal Composer.
- **Di Windows:** Unduh **Composer** dari [situs resmi Composer](https://getcomposer.org/download/) dan ikuti petunjuk penginstalan di sana.


**Langkah 2: Menginstal Dependensi**
Setelah Composer terinstal, masuk ke dalam folder proyek yang sudah Anda clone dan jalankan perintah berikut untuk menginstal semua dependensi yang diperlukan oleh proyek ini:
```bash
composer install
```
Perintah ini akan mengunduh dan menginstal semua paket yang diperlukan yang tercantum dalam file `composer.json.`

### 3. Menyiapkan Database
Pastikan Anda sudah menyiapkan database MySQL sesuai dengan kebutuhan proyek ini. Sesuaikan pengaturan database.

Contoh pengaturan untuk MySQL di `application -> config -> database.php:`
```bash
'hostname'     => 'localhost',
'username'     => 'root',
'password'     => '',
'database'     => 'db_lcc',
```

### 4. Menjalankan Aplikasi
Sekarang, Anda siap untuk menjalankan aplikasi menggunakan server xampp Jalankan perintah berikut:
- Jalankan localhost: Aplikasi Anda akan berjalan pada http://localhost/

### 5. Akses Aplikasi
Buka browser Anda dan akses aplikasi di http://localhost/

## Kontribusi

Kami membuka kesempatan bagi Anda yang ingin berkontribusi dalam mengembangkan website Bank Sampah ini. Jika Anda tertarik untuk berkolaborasi, silakan fork repository ini dan kirimkan pull request!

