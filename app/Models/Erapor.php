<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erapor extends Model
{
    use HasFactory;
    protected $table = "link_erapor";
    protected $fillable = [
        'link',
    ];
}
