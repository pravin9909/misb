<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_title', 'slug', 'created_by', 'created_date', 
        'updated_by', 'updated_date', 'status'
    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
