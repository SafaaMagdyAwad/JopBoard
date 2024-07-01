<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $__currentLoopData = $jops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h1><?php echo e($jop['title']); ?></h1>
                    <p><?php echo e($jop['salary']); ?></p>
                    ect
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\projects\laravel\JobBoardApplication\resources\views/jops.blade.php ENDPATH**/ ?>