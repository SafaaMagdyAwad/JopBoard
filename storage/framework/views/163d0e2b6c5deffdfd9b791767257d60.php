
<?php $__env->startSection('title'); ?>
    CREATE JOP
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
    create jop form

    <form action="<?php echo e(route('createJop')); ?>" method="post" class="mt-3 w-100 px-3 bg-dark">
        <?php echo csrf_field(); ?>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Title*</label>
        <input type="text" placeholder="title" class="form-control form-control-input py-2"  name="title"  required>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Salary*</label>
        <input type="text" placeholder="salary" class="form-control form-control-input py-2"  name="salary" >
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Requirements*</label>
        <textarea name="requirements" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Discription*</label>
        <textarea name="discription" id="" cols="30" rows="10"></textarea>
      </div>
      <input type="hidden" name="user_id" value="<?php echo e($user['id']); ?>">
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Location*</label>
        <input type="text" placeholder="location" class="form-control form-control-input py-2"  name="location" >
      </div>
      <div class="col-md-10">
        <select name="type" id="" class="form-control py-1">
          <option value="" disabled>Type</option>
          <option value="partTime">part Time</option>
          <option value="fullTime">full Time</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">company*</label>
        <input type="text" placeholder="company" class="form-control form-control-input py-2"  name="company" >
      </div>
      <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">add jop</button>
    </form>
<?php $__env->stopSection(); ?>
    
   



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/createJop.blade.php ENDPATH**/ ?>