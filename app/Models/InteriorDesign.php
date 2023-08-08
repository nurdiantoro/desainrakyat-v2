<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InteriorDesign extends Model
{
    use HasFactory;
    protected $table = 'interior_design';
    protected $fillable = [
        'judul',
        'link',
        'deskripsi',
        'thumbnail',
    ];
}
