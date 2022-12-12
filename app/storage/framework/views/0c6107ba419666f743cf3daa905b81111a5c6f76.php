
<?php $__env->startSection('title', 'Neway - Perfill'); ?>

<?php $__env->startSection('content'); ?>
    <div id="app">

        <?php echo $__env->make('dash.admin.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div id="main">
            <?php echo $__env->make('dash.admin.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h3>Alterar Informações</h3>
                            <p>Este é o seu painel pessoal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <form id="form-photo" class="form form-vertical"
                                            action="<?php echo e(route('dashboard.admin.edit_photo.do')); ?>" method="post"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('put'); ?>
                                            <label for="upload">
                                                <img class="photo-perfil" src="<?php echo e(Auth::user()->getPhoto()); ?>"><br>
                                                <a class="edit-perfil" href="#"><img
                                                        src="<?php echo e(asset('dash/img/edit.png')); ?>"></a>
                                                <p class="edit-name"><b><?php echo e($auth->name); ?></b></p>
                                            </label>
                                            <input id="upload" style="display: none;" type="file"
                                                value="<?php echo e($auth->id); ?>" name="photo">
                                        </form>
                                    </div>
                                </div>
                                <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <form class="form form-vertical" action="<?php echo e(route('dashboard.admin.edit.do')); ?>"
                                    method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('put'); ?>
                                    <div class="row">
                                        <div class="col-lg-12"><input type="name" value="<?php echo e($auth->name); ?>"
                                                name="name"></div>
                                        <div class="col-lg-6"><input type="password" placeholder="Senha:" name="password">
                                        </div>
                                        <div class="col-lg-6"><input type="password" placeholder="Confirmar senha:"
                                                name="password_confirm"></div>
                                        <div class="col-lg-12"><input type="email" value="<?php echo e($auth->email); ?>"
                                                name="email"></div>
                                    </div>
                                    <button>Confirmar Alteração</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("[for='upload']").click(function() {
            $('#upload').click();
        })
        $("#upload").change(function() {
            $('#form-photo').submit()
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dash.admin.includes.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\neway\app\resources\views/dash/admin/perfil.blade.php ENDPATH**/ ?>