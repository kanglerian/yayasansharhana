<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'cover',
        'title',
        'date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
