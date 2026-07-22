<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsAndCareer extends Model
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
