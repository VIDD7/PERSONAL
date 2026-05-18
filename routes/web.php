<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['nama' => "David Guntoro"]);
});

Route::get('/about', function () {
        return view('about', ['nama' => "David Guntoro", 'npm' => "1062535", 'kelas' => "1 TRPL B", 'pendidikan' => "D4 Teknologi Rekayasa Perangkat Lunak, Politeknik Manufaktur Negeri Bangka Belitung", 'hobi' => "Membaca buku keuangan, mendengarkan musik, dan menonton film", 'domisili' => "Bangka, Indonesia", 'fokus' => "Web Development (Laravel, PHP, JS) & Network Engineering (MikroTik, OpenWrt)", 'minat' => "Cybersecurity (CTF), Cloud Infrastructure, dan UI/UX Design"]);
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/layanan', function () {
    return view('layanan');
});