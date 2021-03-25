<?php $__env->startSection('content'); ?>

<?php if(Session::has('success')): ?>
    <div class="alert alert-danger"><?php echo e(Session('success')); ?></div>
<?php endif; ?>


<div class="card">
    <div class="card-header">
      <h3 class="card-title">Categories List</h3>
      <center><a href="<?php echo e(route('category.create')); ?>" class="btn btn-success">Add New</a></center>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Category Name</th>
          <th>Category Slug</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        </thead>
        <tbody>
          <?php
              $i = 1;
          ?>
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td><?php echo e($category->slug); ?></td>
                <td><a href="<?php echo e(route('category.edit',$category->id)); ?>"><i class="fas fa-edit"></i></a></td>
                <form id="delete-category-<?php echo e($category->id); ?>" method="POST" action="<?php echo e(route('category.destroy',$category->id)); ?>" style="none;">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <td><a href=""><i class="fas fa-trash-alt text-danger" onclick=" 
                  if(confirm('Are tou sure delete it ?'))
                  {
                    event.preventDefault();
                    document.getElementById('delete-category-<?php echo e($category->id); ?>').submit();
                  }
                  
                  
                  else
                  {
                    event.preventDefault();
                  }
                  
                  "></i></a></td>
                </form>

              </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          

        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jafer/Downloads/blog/resources/views/admin/category/index.blade.php ENDPATH**/ ?>