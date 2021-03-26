<?php $__env->startSection('content'); ?>

<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo e(asset('user/img/home-bg.jpg')); ?>')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h1>Clean Blog</h1>
          <span class="subheading">A Blog Theme by Start Bootstrap</span>
        </div>
      </div>
    </div>
  </div>
</header>



<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="post-preview">
          <a href="<?php echo e(route('post.slug' , $post->slug)); ?>">
            <h2 class="post-title">
              <?php echo e($post->title); ?>

            </h2>
            <h3 class="post-subtitle">
              <?php echo e($post->sub_title); ?>

            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            <?php echo e($post->created_at->diffForHumans()); ?></p>
        </div>
        <hr> 

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
        <!-- Pager -->
        <div class="clearfix">
          
        </div>
      </div>
    </div>
  </div>

  <hr>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jafer/Downloads/blog/resources/views/user/home.blade.php ENDPATH**/ ?>