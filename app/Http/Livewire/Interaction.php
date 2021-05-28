<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\user\Post;
class Interaction extends Component
{
	public $dislike = 0;
	public $post;
	public $likes;
	public $countableLikes;
	public $posts;
	public $newComment;
	public function mount($posts)
	{
		$this->posts = Post::all();
		$sumLikes = DB::table('interations')->get();
		$this->likes = count($sumLikes);
	}
	public function addLike($postId)
	{
		$selectedPost = Post::find($postId);
		if(Auth::check())
		{
			
			$data = array();
			$data['name'] = Auth::user()->name;
			$data['like'] = true;
			$data['post_id'] = $selectedPost['id'];
			DB::table('interations')->insert($data);
			$this->likes ++;

		}else
		{
			return redirect()->route('login');
		}

	}


	public function addDislike()
	{
		$this->dislike ++;
	}

	public function updated($name, $value)
    {
        //
    }


    public function render()
    {
    	$posts = Post::all();
        return view('livewire.interaction' ,compact('posts'));
    }
}

/*
one post has many likes 

like belongs to one post

likes 

user => usename  

like => like number

one user has one like 

dislike 

user => dislike



*/