<?php $__env->startSection('content'); ?>

<?php if(session()->has('success')): ?>
    <div class="alert alert-warning"><?php echo e(session('success')); ?></div>
<?php endif; ?>


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Post Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <form action="<?php echo e(route('post.update',$post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            
              <label for="inputEmail3" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Title" name="post_title" value="<?php echo e($post->title); ?>">
              </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group" style="margin-top:35px;">
            <input type="file" name="post_image">
            
              <input class="form-check-input" type="checkbox" name="status" value="1">
              <label class="form-check-label">Publish</label>
              
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Sub Title</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Sub Title" name="sub_title" value="<?php echo e($post->sub_title); ?>">
          </div>
          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group">
            <label>Categories</label>
            <select class="select2" multiple="multiple" name="categories[]" data-placeholder="Select a category one or more" style="width: 100%;">
              <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($category->id); ?>"
                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($postCat->id == $category->id): ?>
                      selected
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                ><?php echo e($category->name); ?></option>    
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              
            </select>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6">
          <div class="form-group">

          <label for="inputPassword3" class="col-sm-2 col-form-label">Slug</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="post_slug" placeholder="Slug" value="<?php echo e($post->slug); ?>">
          </div>

          <label for="inputPassword3" class="col-sm-2 col-form-label">Posted By</label>
          <div class="col-sm-10">
          <input type="password" class="form-control" name="posted_by" placeholder="Posted By">
          </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="form-group">
            <label>Tags</label>
            <select class="select2" multiple="multiple" name="tags[]" data-placeholder="Select a tag one or more" style="width: 100%;">
              <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($tag->id); ?>"
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($postTag->id == $tag->id): ?>
                        selected
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                ><?php echo e($tag->name); ?></option>                  
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->


      
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      Post Titles
    </div>
  </div>
  <!-- /.card -->


  <!-- SELECT2 EXAMPLE -->
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Post Description</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
      
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Post Body:</label>
          <textarea name="editor1" ><?php echo e($post->body); ?></textarea>
        </div>
        <!-- /.form-group -->

        <button type="submit" class="btn btn-primary">Update Post</button>
      </div>
      <!-- /.col -->

    </div>
    <!-- /.row -->
  </form>


  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    This Page Allow You To Create A New Post
  </div>
</div>
<!-- /.card -->


<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jafer/Downloads/blog/resources/views/admin/post/edit.blade.php ENDPATH**/ ?>