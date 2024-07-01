
<?php $__env->startSection('title'); ?>
JOPS
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
        <th scope="col"> title</th>
        <th scope="col"> salary</th>
        <th scope="col">type</th>
        <th scope="col">company</th>
        <th scope="col">status </th>
        <th scope="col"> </th>
       

      </tr>
    </thead>
    <tbody>


<?php if(@isset($jops)): ?>
    <?php $__currentLoopData = $jops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <th scope="row">*</th>
        <td><?php echo e($jop['title']); ?></td>
        <td><?php echo e($jop['salary']); ?></td>
        <td><?php echo e($jop['type']); ?></td>
        <td><?php echo e($jop['company']); ?></td>
        <td><a href="<?php echo e(route('jop',[$jop['id']])); ?>" class="btn btn-light">view the jop</a></td>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php if(@isset($jop_Status)): ?>
    <?php $__currentLoopData = $jop_Status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <th scope="row">*</th>
        <td><?php echo e($jop['title']); ?></td>
        <td><?php echo e($jop['salary']); ?></td>
        <td><?php echo e($jop['type']); ?></td>
        <td><?php echo e($jop['company']); ?></td>
        <td><?php echo e($jop['status']); ?></td>
        
        <?php if($jop['status']=='rejected'): ?>
        <td><a href="<?php echo e(route('deleteJopREquest',[$jop['id']])); ?>" class="btn btn-light">delete Jop Request</a></td>
        <?php endif; ?>
        <?php if($jop['status']=='notSeen' ||$jop['status']=='waiting'): ?>
        <td><a href="<?php echo e(route('jop',[$jop['id']])); ?>" class="btn btn-light">view the jop</a></td>
        <?php endif; ?>
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    </tbody>
</table>



   
<?php $__env->stopSection(); ?>
  

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/employee/jops.blade.php ENDPATH**/ ?>