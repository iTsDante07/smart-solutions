<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $__env->yieldContent('title'); ?></title>
<link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
        <?php echo $__env->yieldContent('content'); ?>
</div>
    <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH C:\laragon\www\smart-solutions\resources\views/layouts/app.blade.php ENDPATH**/ ?>