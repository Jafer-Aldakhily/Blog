<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Category;
use App\Models\admin\Tag;
use App\Models\user\Post;
use App\Models\user\Comment;

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

    public function likes()
    {
        return $this->hasMany(Interaction::class , 'like_id');   
    }

    public function disLikes()
    {
        return $this->hasMany(Interaction::class , 'dislike_id');   
    }

    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }

    // Note getRouteKeyName function using to tell laravel I want to get post data by using slug
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
