<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatLamaran extends Model
{
    use HasFactory;
    protected $table = 'riwayat_lamaran';
    public function pelamar()
    {
        return $this->belongsTo(Pelamar::class);
    }
}
