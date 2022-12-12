<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset("dash/assets/css/bootstrap.css")); ?>">

    <link rel="stylesheet" href="<?php echo e(asset("dash/assets/vendors/perfect-scrollbar/perfect-scrollbar.css")); ?>">
    <link rel="stylesheet" href="<?php echo e(asset("dash/assets/css/app.css")); ?>">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0b08c8a640.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset("dash/assets/js/feather-icons/feather.min.js")); ?>"></script>
    <script src="<?php echo e(asset("dash/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js")); ?>"></script>
    <script src="<?php echo e(asset("dash/assets/js/app.js")); ?>"></script>
    <script src="<?php echo e(asset("dash/assets/js/main.js")); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\neway\app\resources\views/dash/admin/includes/master.blade.php ENDPATH**/ ?>