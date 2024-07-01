
<?php $__env->startSection('title'); ?>
     notifications
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
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">company</th>
        <th scope="col">from</th>
        <th scope="col"> title</th>
        <th scope="col">content</th>
        <th scope="col">jop title</th>
        <th scope="col">salary</th>
        
      </tr>
    </thead>
    <tbody>
<?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <th scope="row"><?php echo e($notification['id']); ?></th>
        <td><?php echo e($notification['company']); ?></td>
        <td><?php echo e($notification['sender_name']); ?></td>
        <td><?php echo e($notification['title']); ?></td>
        <td><?php echo e($notification['content']); ?></td>
        <td><?php echo e($notification['jop_title']); ?></td>
        <td><?php echo e($notification['jop_salary']); ?></td>
      </tr>
      
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
  

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/employee/notifications.blade.php ENDPATH**/ ?>