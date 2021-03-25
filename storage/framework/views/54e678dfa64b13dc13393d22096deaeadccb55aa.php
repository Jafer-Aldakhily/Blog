<?php $__env->startSection('content'); ?>
<?php if(Session::has('success')): ?>
    <div class="alert alert-success"><?php echo e(Session('success')); ?></div>
<?php endif; ?>


<!-- SELECT2 EXAMPLE -->
<div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Category Data</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
        
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div class="container">  
          <form action="<?php echo e(route('category.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>   
        <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
              <label class="col-form-label ml-2">Category Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="category_name" placeholder="Category Name">
              </div>

          </div>
          <!-- /.form-group -->
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <div class="row">
        <div class="col-md-6 offset-md-4">
          <div class="form-group">
          <label class="col-form-label ml-2">Category Slug</label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="category_slug" placeholder="Category Slug">
          </div>
          </div>
          <!-- /.form-group -->
          <div class="form-group" style="margin-left:10px;">
            <button class="btn btn-primary">Create Category</button>
          </div>
          <!-- /.form-group -->

        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

          </form>
        </div>


    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      This Page Allow You To Create A New Category 
    </div>
  </div>
  <!-- /.card -->


<?php $__env->stopSection(); ?> 
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jafer/Downloads/blog/resources/views/admin/category/create.blade.php ENDPATH**/ ?>