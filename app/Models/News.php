<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'published_at',
        'category',
        'source',
        'author',
        'url',
        'image_url',
        'summary',
        'featured',
        'views',
        'likes',
        'category_id',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

    }
}
