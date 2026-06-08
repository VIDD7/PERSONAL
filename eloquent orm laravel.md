# DOCUMENTASI TUTORIAL: INTEGRASI DATABASE & ELOQUENT ORM (STUDI KASUS BLOG PORTOFOLIO)

Dokumentasi ini berisi panduan lengkap migrasi data artikel pada halaman Blog yang sebelumnya menggunakan array statis (hardcoded) menjadi dinamis berbasis database MySQL dan Eloquent ORM. Seluruh langkah di bawah ini disesuaikan dengan struktur proyek portfolio saya (Home, About, Layanan, Blog, dan Kontak).

---

## BAGIAN 1: KONFIGURASI DATABASE LOKAL

### Langkah 1: Membuat Database Baru
Buka phpMyAdmin atau MySQL Client di Laragon, lalu jalankan perintah SQL berikut untuk membuat database baru:

CREATE DATABASE prakteklsb;

Catatan: Pastikan nama database ini disinkronkan dengan variabel DB_DATABASE pada file konfigurasi proyek .env Anda.

### Langkah 2: Mengonfigurasi File .env
Buka file .env di root (folder paling luar) proyek Laravel Anda. Cari blok konfigurasi database dan sesuaikan nilainya:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=intromyself
DB_USERNAME=root
DB_PASSWORD=

(Kosongkan DB_PASSWORD jika MySQL bawaan Laragon Anda tidak menggunakan kata sandi).

### Langkah 3: Menguji Koneksi Database
Jalankan perintah Artisan berikut di terminal untuk memastikan framework Laravel telah terhubung dengan server MySQL:

php artisan db:show

Jika berhasil, terminal akan memuat rangkuman informasi status koneksi databasenya 

---

## BAGIAN 2: SKEMA DATABASE (MIGRATION)

### Langkah 4: Membuat Berkas Migration Tabel Posts
Gunakan perintah Artisan berikut untuk membuat cetak biru struktur tabel database posts:

php artisan make:migration create_posts_table

Berkas baru akan terbentuk di direktori database/migrations/[timestamp]_create_posts_table.php.

### Langkah 5: Mendefinisikan Kolom Tabel
Buka file migrasi yang baru saja dibuat, lalu modifikasi metode up() untuk menyusun kolom-kolom yang mewakili data artikel blog Anda:

public function up(): void
{
    Schema::create('posts', function (Blueprint $table) {
        $table->id();                           // Primary Key Auto-Increment
        $table->string('title');                // Tipe VARCHAR untuk Judul Artikel
        $table->string('slug')->unique();       // Tipe VARCHAR unik untuk keperluan URL ramah SEO
        $table->string('author');               // Tipe VARCHAR untuk Nama Penulis
        $table->text('body');                   // Tipe TEXT untuk konten panjang isi artikel
        $table->timestamps();                   // Membuat kolom created_at & updated_at secara otomatis
    });
}

### Langkah 6: Mengeksekusi Migrasi
Jalankan perintah ini di terminal untuk membuat tabel fisik di dalam database MySQL:

php artisan migrate

Penting: File migrasi bawaan Laravel (seperti tabel users, cache, jobs) tidak perlu dihapus karena berfungsi sebagai fondasi penting arsitektur dasar sistem otentikasi framework ke depannya.

---

## BAGIAN 3: MODEL & STRUKTUR DATA (ELOQUENT ORM)

### Langkah 7: Transformasi Kelas ke Eloquent Model
Buka file model Anda di folder app/Models/Post.php. Hapus total seluruh isi data array statis (hardcoded) lama Anda, lalu ubah strukturnya dengan mewarisi kelas dasar Eloquent Model bawaan Laravel.

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Mengimpor core Blueprint Model Laravel

class Post extends Model // Menghubungkan class Post secara otomatis ke tabel 'posts'
{
    use HasFactory;

    /**
     * Mass Assignment Protection
     * Mendaftarkan nama kolom yang diizinkan untuk diisi data secara massal.
     */
    protected $fillable = ['title', 'slug', 'author', 'body'];
}

---

## BAGIAN 4: PENGISIAN DATA AWAL (SEEDER)

### Langkah 8: Membuat Berkas Seeder
Buat file generator seeder data melalui terminal untuk mempermudah proses pengisian data artikel awal proyek:

php artisan make:seeder PostSeeder

### Langkah 9: Mengonfigurasi Data Dummy Kasus Blog
Buka berkas database/seeders/PostSeeder.php, lalu definisikan data 3 artikel awal studi kasus portfolio Anda menggunakan metode penulisan Post::create():

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Import Model Post

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Penerapan Laravel Komponen Modern',
            'slug' => 'penerapan-laravel-komponen-modern',
            'author' => 'David Guntoro',
            'body' => 'Menggunakan Blade Components pada Laravel membuat struktur kode aplikasi web menjadi jauh lebih modular dan bersih. Melalui arsitektur ini, elemen berulang seperti navbar, header, dan layout global dapat dikelola secara terpusat tanpa perlu menduplikasi baris kode HTML standar pada setiap halaman view proyek.'
        ]);

        Post::create([
            'title' => 'Mengenal Arsitektur MVC Laravel',
            'slug' => 'mengenal-arsitektur-mvc-laravel',
            'author' => 'David Guntoro',
            'body' => 'Model-View-Controller atau MVC merupakan sebuah pola desain arsitektur perangkat lunak yang memisahkan logika aplikasi menjadi tiga komponen utama. Model bertanggung jawab mengelola struktur data, View berfokus pada visualisasi antarmuka pengguna, sedangkan Controller bertindak sebagai jembatan penghubung interaksi dinamis di antara keduanya.'
        ]);

        Post::create([
            'title' => 'Tips Konfigurasi Routing Dinamis',
            'slug' => 'tips-konfigurasi-routing-dinamis',
            'author' => 'David Guntoro',
            'body' => 'Routing dinamis di Laravel memungkinkan pengembang untuk menangkap parameter variabel langsung dari baris URL seperti slug atau ID unik. Kombinasi parameter ini dengan fungsi helper bawaan PHP membuat navigasi halaman detail aplikasi web menjadi lebih ramah mesin pencari (SEO-friendly) serta mempermudah pencarian konten spesifik.'
        ]);
    }
}

### Langkah 10: Registrasi Master Seeder
Buka berkas database/seeders/DatabaseSeeder.php, lalu panggil PostSeeder agar dieksekusi secara otomatis oleh master runner:

public function run(): void
{
    $this->call([
        PostSeeder::class,
    ]);
}

### Langkah 11: Menyuntikkan Data ke Database
Jalankan perintah ini di terminal untuk memasukkan data artikel seeder ke dalam tabel database MySQL:

php artisan db:seed

---

## BAGIAN 5: SINKRONISASI WEB ROUTING & TAMPILAN VIEW

### Langkah 12: Hubungkan Routing ke Database (routes/web.php)
Buka routes/web.php dan perbarui logika rute /blog dan /blog/{slug} agar menggunakan instruksi sintaks bawaan database Eloquent ORM:

use App\Models\Post; // Pastikan Model Post sudah di-import di bagian atas berkas

// Rute untuk halaman daftar keseluruhan blog
Route::get('/blog', function () {
    return view('blog', [
        'title' => "Blog", 
        'posts' => Post::all() // Mengambil semua data baris artikel dari database MySQL
    ]);
});

// Rute dinamis untuk halaman detail single artikel berdasarkan parameter slug
Route::get('/blog/{slug}', function ($slug) {
    // Mencari artikel berdasarkan slug, otomatis melempar error 404 jika tidak ditemukan
    $post = Post::where('slug', $slug)->firstOrFail(); 
    
    return view('post', [
        'title' => $post->title, // Judul dinamis ditarik dari kolom database
        'post' => $post
    ]);
});

### Langkah 13: Migrasi Akses Data pada Berkas Tampilan (Blade View)
Sesuai arahan praktikum, karena database Eloquent ORM mengembalikan data dalam bentuk kumpulan data bertipe Object, penulisan variabel di file blade wajib diubah dari gaya akses array ['kolom'] menjadi gaya penunjuk objek ->kolom.

A. Berkas resources/views/blog.blade.php
<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="space-y-8 max-w-4xl mx-auto">

        @foreach ($posts as $post)
            <article class="py-8 border-b border-white/10 last:border-b-0">
                <!-- Perubahan: Menggunakan ->slug dan ->title -->
                <h2 class="mb-2 text-3xl tracking-tight font-bold text-white hover:text-indigo-400 transition-colors">
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h2>

                <!-- Perubahan: Menggunakan ->author dan ->created_at secara dinamis -->
                <div class="text-sm text-gray-400 mb-4">
                    By <a href="#" class="text-indigo-400 hover:underline font-medium">{{ $post->author }}</a> |
                    {{ $post->created_at->format('d F Y') }}
                </div>

                <!-- Perubahan: Menggunakan ->body -->
                <p class="my-4 font-light text-gray-300 leading-relaxed text-justify">
                    {{ Str::limit($post->body, 150) }}
                </p>

                <a href="/blog/{{ $post->slug }}"
                    class="inline-flex items-center font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    Read more &raquo;
                </a>
            </article>
        @endforeach

    </div>
</x-layouts>

B. Berkas resources/views/post.blade.php
<x-layouts>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="max-w-3xl mx-auto py-8">
        <article class="space-y-4">
            <!-- Perubahan: Menggunakan ->title -->
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl">
                {{ $post->title }}
            </h1>

            <!-- Perubahan: Menggunakan ->author dan ->created_at -->
            <div class="text-sm text-gray-400 border-b border-white/10 pb-4">
                By <a href="#" class="text-indigo-400 hover:underline font-medium">{{ $post->author }}</a> | 
                {{ $post->created_at->format('d F Y') }}
            </div>

            <!-- Perubahan: Menggunakan ->body -->
            <p class="text-lg text-gray-300 leading-relaxed text-justify pt-4">
                {{ $post->body }}
            </p>

            <div class="pt-8">
                <a href="/blog"
                    class="inline-flex items-center font-medium text-indigo-400 hover:text-indigo-300 transition-colors">
                    &laquo; Back to posts
                </a>
            </div>
        </article>
    </div>
</x-layouts>

---

## BAGIAN 6: CHEAT SHEET & REFERENSI PERINTAH ELOQUENT ORM

Berikut adalah daftar operasi-operasi dasar penting dari Eloquent ORM Laravel yang wajib diketahui untuk pengembangan aplikasi web di masa mendatang:

1. Read (Mengambil Data)
- Mengambil semua baris data dari database:
  $posts = Post::all();
- Mengambil data spesifik berdasarkan nilai Primary Key (ID):
  $post = Post::find(1);
- Mencari data berdasarkan kondisi kolom tertentu:
  $post = Post::where('slug', 'judul-artikel-1')->first();
- Mengambil data menggunakan sistem halaman (Pagination):
  $posts = Post::paginate(10); // Menampilkan 10 data per halaman
- Mengambil data diurutkan dari yang paling baru:
  $posts = Post::latest()->get();

2. Create (Menambahkan Data)
- Cara 1: Menggunakan fungsi create() (Membutuhkan proteksi $fillable di Model):
  Post::create([
      'title' => 'Artikel Baru',
      'slug'  => 'artikel-baru',
      'author'=> 'Nama Penulis',
      'body'  => 'Isi konten artikel...'
  ]);
- Cara 2: Menggunakan Instance Objek Model Baru:
  $post = new Post();
  $post->title = 'Artikel Baru';
  $post->slug  = 'artikel-baru';
  $post->author = 'Nama Penulis';
  $post->body  = 'Isi konten artikel...';
  $post->save(); // Menyimpan data ke tabel database

3. Update (Mengubah Data)
- Cara 1: Menemukan ID terlebih dahulu kemudian memperbaruinya:
  $post = Post::find(1);
  $post->title = 'Judul yang Diperbarui';
  $post->save();
- Cara 2: Melakukan pembaruan langsung menggunakan klausa kondisi:
  Post::where('id', 1)->update(['title' => 'Judul Baru']);

4. Delete (Menghapus Data)
- Cara 1: Menemukan ID terlebih dahulu kemudian menghapusnya:
  $post = Post::find(1);
  $post->delete();
- Cara 2: Menghapus langsung berdasarkan kondisi spesifik:
  Post::where('id', 1)->delete();

---

## BAGIAN 7: UTILITAS COMMAND TERMINAL SINKRONISASI AKHIR

Setiap kali Anda mengubah struktur database, file seeder, rute web, atau komponen tata letak Blade, gunakan beberapa perintah terminal penting berikut untuk menjaga performa framework tetap sinkron:

- Segarkan total database dari awal sekaligus menyuntikkan ulang data seeder (Sangat penting saat update Seeder):
  php artisan migrate:fresh --seed
- Membersihkan cache kompilasi file Blade View (Wajib jika tampilan lama masih menyangkut di browser):
  php artisan view:clear

---
STATUS PROYEK: SUKSES TERINTEGRASI & SIAP DI-PUSH KE REPOSITORI GITHUB PROYEK PORTFOLIO!