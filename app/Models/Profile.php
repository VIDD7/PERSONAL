<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

   protected $fillable = ['name', 'kelas', 'email', 'bio', 'pendidikan', 'hobi', 'fokus', 'minat', 'phone', 'address', 'avatar'];
}