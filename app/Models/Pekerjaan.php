<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table = 'lowongan_pekerjaan';
    protected $fillable = [
        'kategori',
        'judul',
        'deskripsi',
        'gambar',
        'kualifikasi'
    ];
    public function category()
    {
        return $this->belongsTo(KategoriPekerjaan::class, 'kategori', 'id');
    }
}

