<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $table = 'komentar';
    protected $fillable = [
        'nama',
        'email',
        'no_telepon',
        'komentar'
    ];
}
