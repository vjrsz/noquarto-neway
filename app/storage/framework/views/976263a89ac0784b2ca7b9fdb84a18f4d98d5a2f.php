
<?php $__env->startSection('title', 'Neway - Pools'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('web.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="information">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Home / Montagem</p>
                </div>
            </div>
        </div>
    </section>

    <section class="step">
        <?php echo $__env->make('web.steps.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </section>

    <?php echo $__env->make('web.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.includes.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\neway\app\resources\views/web/index.blade.php ENDPATH**/ ?>