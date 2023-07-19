<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    use HasFactory;
    protected $table = 'pelamar';
    public function dokumen()
    {
        return $this->hasOne(Dokumen::class);
    }
    protected $guarded = [];
    public $timestamps = false;
    public function riwayat()
    {
        return $this->belongsTo(RiwayatLamaran::class);
    }
    public function lowongan()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_lowongan');
    }
}
