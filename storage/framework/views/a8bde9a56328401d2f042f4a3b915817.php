<?php $__env->startSection('title'); ?>
    all exams
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>
<a href="<?php echo e(route('loginForm')); ?>" class="nav-link">login</a>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>
<a href="<?php echo e(route('registerForm')); ?>" class="nav-link">register</a>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="">
        <div class="row">
          <h1>ترحيب ومعلومات عن الموقع شغل فرونت</h1>
          <div class="card">
            عرض وظائف بدون تفاصيل
          </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/welcome.blade.php ENDPATH**/ ?>