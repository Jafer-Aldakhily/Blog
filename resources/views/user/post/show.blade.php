@extends('user.app')

@section('content')

<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('user/img/post-bg.jpg') }}')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">{{ $post->sub_title }}</h2>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <script type="text/javascript" src="https://connect.facebook.net/es_LA/all.js"></script>

  <div id = "fb-root" > </div> <script async defer crossorigin = "anonymous" src = "https://connect.facebook.net/en_AR/sdk.js#xfbml=1&version=v10.0&appId= 479081133292467 & autoLogAppEvents = 1 " nonce = " ppXkuphY " > </script> 
     

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created_at : {{ $post->created_at->diffForHumans() }}</small>
            @foreach ($post->categories as $category)
                <small class="float-right" style="margin-right:20px;">{{ $category->name }}</small>
            @endforeach
          <p>{!! htmlspecialchars_decode($post->body) !!}</p>
            <h3>Tag Clouds</h3>
          @foreach ($post->tags as $tag)
              <small class="float-left" style="margin-right:20px;border-raduis:5px;border:1px solid gray;">{{ $tag->name }}</small>
          @endforeach
        </div>
      </div>

      <div class = "fb-comments" data-href = "https: // localhost: 8000/post/{slug}" data-width = "" data-numposts = "5" > </div>    
    </div>
  </article>

  <hr>


@endsection
