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
        return view('blog', [
        'title' => "Blog",
        'posts' => Post::all() // ambil semua data artikel dari model Post dan kirimkan ke halaman view 'blog'
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail(); // cari artiel berdasarkan slug, jika tidak ditemukan maka tampilkan error 404
    return view('post', [
        'title' => $post->title, // mengambil judul artikel untuk ditampilkan sebagai title tab browser
        'post' => $post
    ]);
});