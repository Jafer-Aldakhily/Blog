<div>
    <h4>
    	<i class="far fa-thumbs-up" wire:click="addLike({{$post->id}})" style="cursor:pointer;"></i>Total of likes
    	@foreach($posts as $postLike)
    	@if($postLike->id == $post->id)
    	{{$likes}}
    	@endif
    	@endforeach
    	<i class="far fa-thumbs-down" wire:click="addDislike" style="cursor:pointer;"></i>
    	Total of dislikes {{$dislike}}
    </h4>
    <input type="text" wire:model="newComment">{{$newComment}}
</div>
