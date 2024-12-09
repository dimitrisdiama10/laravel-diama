<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


    protected $fillable = [
        "title",
        "intro",
        "description",
        "image",
        "author",
    ];

    protected $casts = [
        "created_at"=> "datetime",
    ];
}
