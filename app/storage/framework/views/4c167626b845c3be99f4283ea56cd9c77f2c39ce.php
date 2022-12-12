
<?php $__env->startSection('title', 'Login - Neway'); ?>

<?php $__env->startSection('content'); ?>
    <div id="app">
        <?php echo $__env->make('dash.admin.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="main">
            <?php echo $__env->make('dash.admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Acompanhe Agendamentos</h3>
                            <p>Fique de olho nós agendamentos!</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <form class="pesquisar">
                                <input type="text" name="filter_name" placeholder="Filtar por cliente" value="<?php echo e(old('filter_name') ?? ''); ?>">
                            </form>
                        </div>
                    </div>
                </div>

                <?php echo $__env->make('dash.admin.schedulings.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dash.admin.includes.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\neway\app\resources\views/dash/admin/home.blade.php ENDPATH**/ ?>