<!DOCTYPE html>
<html lang="en">

<head>
<?php echo $__env->make('user.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

  <?php echo $__env->make('user.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('user.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('user/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('user/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo e(asset('user/js/clean-blog.min.js')); ?>"></script>

  <script src="<?php echo e(asset('user/js/prism.js')); ?>"></script>

</body>

</html>
<?php /**PATH /home/jafer/Downloads/blog/resources/views/user/app.blade.php ENDPATH**/ ?>