<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; // Panggil Blueprint Eloquent

class Post extends Model // Mengextend class Model bawaan Laravel
{
    use HasFactory;

    // Mendaftarkan kolom mana saja yang boleh diisi data (Mass Assignment)
    protected $fillable = ['title', 'slug', 'author', 'body']; //
}