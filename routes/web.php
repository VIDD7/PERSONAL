<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => "Home", 'nama' => "David Guntoro"]);
});

Route::get('/about', function () {
        return view('about', ['title' => "About", 'nama' => "David Guntoro", 'npm' => "1062535", 'kelas' => "1 TRPL B", 'pendidikan' => "D4 Teknologi Rekayasa Perangkat Lunak, Politeknik Manufaktur Negeri Bangka Belitung", 'hobi' => "Membaca buku keuangan, mendengarkan musik, dan menonton film", 'domisili' => "Bangka, Indonesia", 'fokus' => "Web Development (Laravel, PHP, JS) & Network Engineering (MikroTik, OpenWrt)", 'minat' => "Cybersecurity (CTF), Cloud Infrastructure, dan UI/UX Design"]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => "Kontak"]);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => "Layanan"]);
});

Route::get('/blog', function () {
    return view('blog', ['title' => "Blog", 'posts' => Post::all()]);
});

Route::get('/blog/{slug}', function ($slug) {
    // Ambil seluruh data posts dari model
    $allPosts = Post::all();
    
    // Cari 1 artikel yang nilai 'slug'-nya sama dengan parameter {slug} di URL
    $post = Arr::first($allPosts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    // Jika artikel tidak ditemukan di array, lemparkan error kode 404
    if (! $post) {
        abort(404);
    }
    
    // Kirimkan data artikel tunggal yang ditemukan ke halaman view 'post'
    return view('post', [
        'title' => 'Detail Blog',
        'post' => $post
    ]);
});