<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['name','text','post_id'];

    // public function post()
    // {
    // 	return $this->belongsTo(Post::class);
    // }

}
