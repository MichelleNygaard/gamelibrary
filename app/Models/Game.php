<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Add the _token field to the fillable property
    protected $fillable = [
        'title',
        'developer',
        'genre',
        'release_year'
    ];
}
