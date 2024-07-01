
<?php $__env->startSection('title'); ?>
    Notifications
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<form action="<?php echo e(route('contact',[$employee['id']])); ?>" method="post" class="mt-3 w-100 px-3">
    <?php echo csrf_field(); ?>
  <div class="form-group mb-3">
    <label for="" class="text-dark form-label">Title*</label>
    <input type="text" placeholder="title" class="form-control form-control-input py-2"  name="title" value="welcome <?php echo e($employee['name']); ?>"  required>
  </div>
  <div class="form-group mb-3">
    <label for="" class="text-dark form-label">content*</label>
    <textarea name="content" id="" cols="30" rows="10" class="form-control form-control-input py-2">

        We have found that you are a qualified person and we want to communicate with you. We will contact you via your email <?php echo e($employee['email']); ?> and set a date for the interview

    </textarea>
  </div>

  <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">Contact employee</button>
</form>
<?php $__env->stopSection(); ?>
   

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/seeker/notifications.blade.php ENDPATH**/ ?>