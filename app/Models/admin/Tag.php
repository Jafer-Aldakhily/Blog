<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\admin\Post;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'slug'];
    
    public function posts()
    {
        return $this->belongsToMany(Post::class, 'tag__posts')
        ->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
