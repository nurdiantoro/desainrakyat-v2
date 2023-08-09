<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageInterior extends Model
{
    use HasFactory;
    protected $table = 'image_interior';

    protected $fillable = [
        'id_interior',
        'image',
    ];
}
