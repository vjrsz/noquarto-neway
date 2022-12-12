<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('dash/assets/css/bootstrap.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('dash/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('dash/assets/css/app.css')); ?>">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0b08c8a640.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>
</head>

<body>

    <section class="step">
        <div id="step08" class="container">
            <div class="row">
                <div class="col-lg-6 mauto finish spc">
                    <h3>Informações agendamento</h3>

                    <p>Nome: <?php echo e($scheduling->name); ?></p>
                    <p>E-mail: <?php echo e($scheduling->email); ?></p>

                    <p>Opções selecionadas:</p>

                    <ul>
                        <li><i class="fa-regular fa-circle-check"></i> Formato: <?php echo e($scheduling->format()); ?></li>
                        <li><i class="fa-regular fa-circle-check"></i> Terá SPA: <?php echo e($scheduling->spa()); ?></li>
                        <li><i class="fa-regular fa-circle-check"></i> Azulejo: <?php echo e($scheduling->azulejo()); ?></li>
                        <li><i class="fa-regular fa-circle-check"></i> Borda: <?php echo e($scheduling->border()); ?></li>
                        <li><i class="fa-regular fa-circle-check"></i> Deck: <?php echo e($scheduling->deck()); ?></li>
                        <li><i class="fa-regular fa-circle-check"></i> Plaster: <?php echo e($scheduling->plaster()); ?></li>
                    </ul>

                    <p>Data e hora:</p>
                    <p>Data: <?php echo e(date('d/m/Y', strtotime($scheduling->date))); ?></p>
                    <p>Horário: <?php echo e($scheduling->time); ?></p>
                </div>
            </div>
        </div>
    </section>
</body>
<?php /**PATH C:\xampp\htdocs\neway\app\resources\views/pdfs/scheduling.blade.php ENDPATH**/ ?>