<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile; 

class ProfileSeeder extends Seeder
{
    public function run(): void
    {
        Profile::create([
            'name' => 'David Guntoro',
            'kelas' => '1 TRPL B',
            'email' => 'davidguntoro848@gmail.com',
            'bio' => 'Saya adalah seorang Mahasiswa Teknologi Rekayasa Perangkat Lunak di Politeknik Manufaktur Negeri Bangka Belitung. Berfokus pada Web Development dan Network Engineering.',
            'pendidikan' => 'D4 Teknologi Rekayasa Perangkat Lunak',
            'hobi' => 'Music',
            'fokus' => 'Web & Network',
            'minat' => 'Cybersecurity',
            'phone' => '0831-7581-7064',
            'address' => 'Bangka, Indonesia',
            'avatar' => 'img/me.png'
        ]);
    }
}