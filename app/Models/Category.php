<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'id' => 'integer',
    ];

    protected function articles()
    {
        return $this->hasMany(Article::class);
    }
}
