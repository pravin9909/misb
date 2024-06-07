<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_title', 'category_id', 'blog_slug', 'description', 'main_image', 
        'video_url', 'meta_title', 'meta_description', 'author_id', 'tags',
        'created_by', 'created_date', 'updated_by', 'updated_date', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
