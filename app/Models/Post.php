<?php

namespace App\Models;

class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'penerapan-laravel-komponen-modern',
                'title' => 'Penerapan Laravel Komponen Modern',
                'author' => 'David Guntoro',
                'body' => 'Menggunakan Blade Components pada Laravel membuat struktur kode aplikasi web menjadi jauh lebih modular dan bersih. Melalui arsitektur ini, elemen berulang seperti navbar, header, dan layout global dapat dikelola secara terpusat tanpa perlu menduplikasi baris kode HTML standar pada setiap halaman view proyek.'
            ],
            [
                'id' => 2,
                'slug' => 'mengenal-arsitektur-mvc-laravel',
                'title' => 'Mengenal Arsitektur MVC Laravel',
                'author' => 'David Guntoro',
                'body' => 'Model-View-Controller atau MVC merupakan sebuah pola desain arsitektur perangkat lunak yang memisahkan logika aplikasi menjadi tiga komponen utama. Model bertanggung jawab mengelola struktur data, View berfokus pada visualisasi antarmuka pengguna, sedangkan Controller bertindak sebagai jembatan penghubung interaksi dinamis di antara keduanya.'
            ],
            [
                'id' => 3,
                'slug' => 'tips-konfigurasi-routing-dinamis',
                'title' => 'Tips Konfigurasi Routing Dinamis',
                'author' => 'David Guntoro',
                'body' => 'Routing dinamis di Laravel memungkinkan pengembang untuk menangkap parameter variabel langsung dari baris URL seperti slug atau ID unik. Kombinasi parameter ini dengan fungsi helper bawaan PHP membuat navigasi halaman detail aplikasi web menjadi lebih ramah mesin pencari (SEO-friendly) serta mempermudah pencarian konten spesifik.'
            ]
        ];
    }
}