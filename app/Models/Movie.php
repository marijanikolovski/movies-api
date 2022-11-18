<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'director',
        'imageUrl',
        'duration',
        'releaseDate',
        'genre'
    ];

    use HasFactory;

    public static function scopesearchByTitle($query, $title)
    {
        return self::where('title', 'LIKE', '%' . $title . '%');
    }
}
