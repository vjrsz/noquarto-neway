<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('img/favicon.png')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css">
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery_validate.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/mask_jquery/dist/jquery.mask.min.js')); ?>"></script>
</body>
<?php /**PATH C:\xampp\htdocs\neway\app\resources\views/web/includes/master.blade.php ENDPATH**/ ?>