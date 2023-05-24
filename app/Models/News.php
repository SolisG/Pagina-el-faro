<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'content', 'author', 'date', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
