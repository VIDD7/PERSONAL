<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post; // Panggil model Post untuk melakukan seeding data

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Penerapan Laravel Komponen Modern',
            'slug' => 'penerapan-laravel-komponen-modern',
            'author' => 'David Guntoro',
            'category' => 'Web Development',
            'body' => 'Menggunakan Blade Components pada Laravel membuat struktur kode aplikasi web menjadi jauh lebih modular dan bersih. Melalui arsitektur ini, elemen berulang seperti navbar, header, dan layout global dapat dikelola secara terpusat tanpa perlu menduplikasi baris kode HTML standar pada setiap halaman view proyek.',
            'published_at' => '2026-06-15',
        ]);

        Post::create([
            'title' => 'Mengenal Arsitektur MVC Laravel',
            'slug' => 'mengenal-arsitektur-mvc-laravel',
            'author' => 'David Guntoro',
            'category' => 'Web Development',
            'body' => 'Model-View-Controller atau MVC merupakan sebuah pola desain arsitektur perangkat lunak yang memisahkan logika aplikasi menjadi tiga komponen utama. Model bertanggung jawab mengelola struktur data, View berfokus pada visualisasi antarmuka pengguna, sedangkan Controller bertindak sebagai jembatan penghubung interaksi dinamis di antara keduanya.',
            'published_at' => '2026-06-15',
        ]);

        Post::create([
            'title' => 'Tips Konfigurasi Routing Dinamis',
            'slug' => 'tips-konfigurasi-routing-dinamis',
            'author' => 'David Guntoro',
            'category' => 'Web Development',
            'body' => 'Routing dinamis di Laravel memungkinkan pengembang untuk menangkap parameter variabel langsung dari baris URL seperti slug atau ID unik. Kombinasi parameter ini dengan fungsi helper bawaan PHP membuat navigasi halaman detail aplikasi web menjadi lebih ramah mesin pencari (SEO-friendly) serta mempermudah pencarian konten spesifik.',
            'published_at' => '2026-06-15',
        ]);
    }
}
