
<?php $__env->startSection('title'); ?>
    all exams
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
      <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> title</th>
                <th scope="col"> salary</th>
                <th scope="col">type</th>
                <th scope="col">company</th>
                <th scope="col">jop requests</th>
                <th scope="col">waiting list</th>
                <th scope="col">accepted list</th>
              
        
              </tr>
            </thead>
            <tbody>
        
        
        
            <tr>
                <th scope="row">*</th>
                <td><?php echo e($jop['title']); ?></td>
                <td><?php echo e($jop['salary']); ?></td>
                <td><?php echo e($jop['type']); ?></td>
                <td><?php echo e($jop['company']); ?></td>
                <td><a href="<?php echo e(route('allJopRequests',[$jop['id']])); ?>" class="btn btn-success">view the jop requests</a></td>
                <td> <a href="<?php echo e(route('waitingList',[$jop['id']])); ?>" class="btn btn-warning">waiting list</a></td>
                <td> <a href="<?php echo e(route('acceptedList',[$jop['id']])); ?>" class="btn btn-success">Accepted list</a></td>
               
            </tr>
            </tbody>
        </table>
        </div>

<?php $__env->stopSection(); ?>

    
      
  

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/jop.blade.php ENDPATH**/ ?>