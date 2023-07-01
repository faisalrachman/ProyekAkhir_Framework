<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    public $fillable = ['nim', 'nama', 'umur', 'alamat', 'kota', 'kelas', 'jurusan', 'image'];
}
