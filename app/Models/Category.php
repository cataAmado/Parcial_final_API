<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'classification',
        'image',
        'title',
        'content',
        'status',
        'views',
    ];
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
