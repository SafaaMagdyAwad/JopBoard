
<?php $__env->startSection('title'); ?>
LOGIN
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container bg-dark" >
    <div class="row justify-content-center mt-5">
      <div class="col-lg-5 main position-relative mt-5 d-flex flex-column align-items-center">
        <h2 class="text-white mt-5 fw-bold">Login Form</h2>
        <h3>
            <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        </h3>

        <form action="<?php echo e(route('login')); ?>" method="post" class="mt-3 w-100 px-3 bg-dark">
            <?php echo csrf_field(); ?>
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">Email*</label>
            <input type="email" placeholder="Email" class="form-control form-control-input py-2"  name="email"  required>
          </div>
          <div class="form-group mb-3">
            <label for="" class="text-white form-label">Password*</label>
            <input type="password" placeholder="Password" class="form-control form-control-input py-2"  name="password"  required>
          </div>
         
          <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">login</button>
          <a href="<?php echo e(route('registerForm')); ?>" class="text-center d-block fs-4 text-white mb-5">don't have account?</a>
        </form>
       
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/login.blade.php ENDPATH**/ ?>