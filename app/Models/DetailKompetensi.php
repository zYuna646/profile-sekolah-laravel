<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKompetensi extends Model
{
    use HasFactory;
    protected $table = "detail_gambar_kompetensi";
    protected $fillable = [
        'id_foto',
        'nama_foto_kompetensi',
    ];
}
