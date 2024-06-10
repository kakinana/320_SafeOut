<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    
    protected $fillable = [
        'kategori', 'nama', 'no_hp', 'alamat', 'description', 'user_id'
    ];
    

    protected $casts = [
        'kategori' => 'string', // Mengonversi kategori ke string
    ];

    protected $guarded = ['status'];
}
