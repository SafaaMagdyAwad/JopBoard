
<?php $__env->startSection('title'); ?>
    JOPS
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


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> title</th>
        <th scope="col"> salary</th>
        <th scope="col">type</th>
        <th scope="col">company</th>
        <th scope="col">view jop</th>
        <?php if(@isset($sjops)): ?>
        <th scope="col">waiting list</th>
        <th scope="col">jop requests</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
        <?php endif; ?>
      

      </tr>
    </thead>
    <tbody>


<?php if(@isset($sjops)): ?>
    <?php $__currentLoopData = $sjops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr>
        <th scope="row">*</th>
        <td><?php echo e($jop['title']); ?></td>
        <td><?php echo e($jop['salary']); ?></td>
        <td><?php echo e($jop['type']); ?></td>
        <td><?php echo e($jop['company']); ?></td>
        <td><a href="<?php echo e(route('jop',[$jop['id']])); ?>" class="btn btn-success">view the jop</a></td>
        
        <td><a href="<?php echo e(route('updateJopForm',[$jop['id']])); ?>" class="btn btn-warning">update the jop</a></td>
        <td><a href="<?php echo e(route('deleteJop',[$jop['id']])); ?>" class="btn btn-danger">delete the jop</a></td>
        
    </tr>
   
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>

    <?php $__currentLoopData = $jops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($jop['id']); ?></td>
        <td><?php echo e($jop['title']); ?></td>
        <td><?php echo e($jop['salary']); ?></td>
        <td><?php echo e($jop['type']); ?></td>
        <td><?php echo e($jop['company']); ?></td>
        <td><a href="<?php echo e(route('jop',[$jop['id']])); ?>" class="btn btn-success">view the jop</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>


    </tbody>
</table>






   
<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/jops.blade.php ENDPATH**/ ?>