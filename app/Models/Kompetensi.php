<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    use HasFactory;
    protected $table = "kompetensis";
    protected $fillable = [
        'nama',
        'deskripsi',
        'foto_kompetensi'
    ];

}
