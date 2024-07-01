
<?php $__env->startSection('title'); ?>
    all exams
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
     create jop form

    <form action="<?php echo e(route('updateJop',[$jop['id']])); ?>" method="post" class="mt-3 w-100 px-3 bg-dark">
        <?php echo csrf_field(); ?>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Title*</label>
        <input type="text" placeholder="title" class="form-control form-control-input py-2"  name="title" value="<?php echo e($jop['title']); ?>" required>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Salary*</label>
        <input type="text" placeholder="salary" class="form-control form-control-input py-2" value="<?php echo e($jop['salary']); ?>" name="salary" >
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Requirements*</label>
        <textarea name="requirements" id="" cols="30" rows="10"><?php echo e($jop['requirements']); ?></textarea>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Discription*</label>
        <textarea name="discription" id="" cols="30" rows="10"><?php echo e($jop['discription']); ?></textarea>
      </div>
      <input type="hidden" name="user_id" value="<?php echo e($jop['user_id']); ?>">
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">Location*</label>
        <input type="text" placeholder="location" class="form-control form-control-input py-2" value="<?php echo e($jop['location']); ?>"  name="location" >
      </div>
      <div class="col-md-10">
        <select name="type" id="" class="form-control py-1">
          <option value="" disabled>select type</option>
          <option <?php echo e($jop['type']=="partTime"?"selected": ""); ?> value="partTime">part Time</option>
          <option <?php echo e($jop['type']=="fullTime"?"selected":""); ?> value="fullTime">full Time</option>
        </select>
      </div>
      <div class="form-group mb-3">
        <label for="" class="text-white form-label">company*</label>
        <input type="text" placeholder="company" class="form-control form-control-input py-2" value="<?php echo e($jop['company']); ?>" name="company" >
      </div>
      <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">update</button>
    </form>
<?php $__env->stopSection(); ?>
   
   


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/updateJop.blade.php ENDPATH**/ ?>