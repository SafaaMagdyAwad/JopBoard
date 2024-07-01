
<?php $__env->startSection('title'); ?>
<?php echo e($user['name']); ?> home
<?php $__env->stopSection(); ?>


<?php $__env->startSection('link1'); ?>
<a href="<?php echo e(route('createJopForm')); ?>" class="nav-link">create Jop</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>
<a href="<?php echo e(route('allJops')); ?>" class="nav-link">all Jops</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link3'); ?>
<a href="<?php echo e(route('allSeekerJops')); ?>" class="nav-link">all my Jops</a>
<?php $__env->stopSection(); ?>






<?php $__env->startSection('link8'); ?>
<a href="<?php echo e(route('logout')); ?>" class="nav-link">logout</a>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    <h1>
        <?php echo e($user['name']); ?>

    </h1>

<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/seekerHome.blade.php ENDPATH**/ ?>