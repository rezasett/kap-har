<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class newsAndCareer extends Model
{
    
 protected $fillable = [
        'title',
        'slug',
        'kategori',
        'tanggal_publish',
        'berita',
        'image',
        'status',
        'author',
    ];

    
}
