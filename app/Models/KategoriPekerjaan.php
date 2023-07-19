<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'kategori_pekerjaan';
    public function pekerjaan()
    {
        return $this->hasMany(Pekerjaan::class);
    }
    protected $guarded = [];
}
