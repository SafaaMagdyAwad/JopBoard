
<?php $__env->startSection('title'); ?>
<?php echo e($user['name']); ?> home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link1'); ?>
<a href="<?php echo e(route('allJops')); ?>" class="nav-link">ALL JOPS</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link2'); ?>
<a href="<?php echo e(route('notifications')); ?>" class="nav-link">NOTIFICATIONS</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('link3'); ?>
<a href="<?php echo e(route('reqTrack')); ?>" class="nav-link"> TRACKING MY REQUEST</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('link8'); ?>
<a href="<?php echo e(route('logout')); ?>" class="nav-link">LOGOUT</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <h1>
        <?php echo e($user['name']); ?>

    </h1>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/employee/employeeHome.blade.php ENDPATH**/ ?>