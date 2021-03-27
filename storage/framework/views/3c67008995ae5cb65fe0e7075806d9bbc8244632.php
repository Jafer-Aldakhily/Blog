<?php $__env->startSection('content'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo e(Storage::disk('local')->url($post->image)); ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo e($post->title); ?></h1>
            <h2 class="subheading"><?php echo e($post->sub_title); ?></h2>
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
            <small>Created_at : <?php echo e($post->created_at->diffForHumans()); ?></small>
            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(route('post.by.cat',$category)); ?>">
                  <small class="float-right" style="margin-right:20px;"><?php echo e($category->name); ?></small>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <p><?php echo htmlspecialchars_decode($post->body); ?></p>
            <h3>Tag Clouds</h3>
          <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('post.by.tag', $tag)); ?>">
                <small class="float-left" style="margin-right:20px;border-raduis:5px;border:1px solid gray;"><?php echo e($tag->name); ?></small>
              </a>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>

      <div class = "fb-comments" data-href = "https: // localhost: 8000/post/{slug}" data-width = "" data-numposts = "5" > </div>    
    </div>
  </article>

  <hr>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jafer/Downloads/blog/resources/views/user/post/show.blade.php ENDPATH**/ ?>