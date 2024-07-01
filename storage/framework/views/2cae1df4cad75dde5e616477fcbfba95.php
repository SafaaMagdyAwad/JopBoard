
<?php $__env->startSection('title'); ?>
    all applyers
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
<?php if(@isset($message)): ?>
<div class="container">
  <div class="alert_success">
  <h5><?php echo e($message); ?></h5>  
  </div></div>  
<?php endif; ?>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">employee name</th>
            <th scope="col"> email</th>
            <th scope="col">jop title</th>
            <th scope="col">salary</th>
            <th scope="col">request created at</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>

          </tr>
        </thead>
        <tbody>
      <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row">*</th>
            <td><?php echo e($user['employee_name']); ?></td>
            <td><a href="mailto:<?php echo e($user['employee_email']); ?>"><?php echo e($user['employee_email']); ?></a></td>
            <td><?php echo e($user['title']); ?></td>
            <td><?php echo e($user['salary']); ?></td>
            <td><?php echo e($user['created_at']); ?></td>
            <?php if($user['status']=="notSeen"): ?>
            <td><a href="<?php echo e(route('contact',[$user['employee_id'],$user['jop_id']])); ?>" class="btn btn-light">notify employee with interview</a></td>
            <?php endif; ?>
            <?php if($user['status']=="waiting"): ?>
            <th scope="col"><a href="<?php echo e(route('accepted',[$user['employee_id'],$user['jop_id']])); ?>" class="btn btn-success">accepted</a></th>
            <th scope="col"><a href="<?php echo e(route('rejected',[$user['employee_id'],$user['jop_id']])); ?>" class="btn btn-danger">rejected</a></th>
            <?php endif; ?>
          </tr>
          
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
   
<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/jopApplyers.blade.php ENDPATH**/ ?>