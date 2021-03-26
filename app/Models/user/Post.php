<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Category;
use App\Models\admin\Tag;

class Post extends Model
{
    use HasFactory;


    public function categories()
    {
        return $this->belongsToMany(Category::class,'category__posts')->withTimestamps();
    }

    

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag__posts')->withTimestamps();
    }

    // Note getRouteKeyName function using to tell laravel I want to get post data using slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
