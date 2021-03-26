<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Post;

class Category extends Model
{
    use HasFactory;

    
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category__posts')
        ->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
