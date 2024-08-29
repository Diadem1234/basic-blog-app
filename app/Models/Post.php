<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "body",
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s'
    ];
}
