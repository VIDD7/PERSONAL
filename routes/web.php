<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Arr;
use App\Models\Profile;

Route::get('/', function () {
    return view('home', ['title' => "Home", 'nama' => "David Guntoro"]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => "About Us",
        'profile' => Profile::first()
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', ['title' => "Kontak"]);
});

Route::get('/layanan', function () {
    return view('layanan', ['title' => "Layanan"]);
});

Route::get('/blog', function () {
    $category = request('category'); // Mengambil data ?category= dari URL
    
    // Jika ada filter kategori, cari berdasarkan kategori, jika tidak ada, tampilkan semua urutan terbaru
    $posts = $category 
        ? Post::where('category', $category)->orderByDesc('published_at')->get() 
        : Post::orderByDesc('published_at')->get();

    return view('blog', [
        'title' => "Blog Page",
        'posts' => $posts
    ]);
});

Route::get('/blog/{slug}', function ($slug) {
    $post = Post::where('slug', $slug)->firstOrFail(); // cari artiel berdasarkan slug, jika tidak ditemukan maka tampilkan error 404
    return view('post', [
        'title' => $post->title, // mengambil judul artikel untuk ditampilkan sebagai title tab browser
        'post' => $post
    ]);
});