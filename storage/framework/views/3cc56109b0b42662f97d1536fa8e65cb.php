
<?php $__env->startSection('title'); ?>
    JOP
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
       <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col"> title</th>
                <th scope="col"> salary</th>
                <th scope="col">type</th>
                <th scope="col">company</th>
                <th scope="col">location</th>
                <th scope="col">requirements</th>
                <th scope="col"> discription</th>
                <th scope="col"> </th>
              
        
              </tr>
            </thead>
            <tbody>
        
        
        
            <tr>
                <th scope="row">*</th>
                <td><?php echo e($jop['title']); ?></td>
                <td><?php echo e($jop['salary']); ?></td>
                <td><?php echo e($jop['type']); ?></td>
                <td><?php echo e($jop['company']); ?></td>
                <td><?php echo e($jop['location']); ?></td>
                <td><?php echo e($jop['requirements']); ?></td>
                <td><?php echo e($jop['discription']); ?></td>
                <td>
                    <form action="<?php echo e(route('jopApply',[$jop['id']])); ?>" method="GET">
                        <button <?php echo e($button); ?>  class="btn btn-danger">request this jop</button>
                    </form>
                </td>
                
                
               
            </tr>
            </tbody>
        </table>
        </div>
<?php $__env->stopSection(); ?>
     

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/employee/jop.blade.php ENDPATH**/ ?>