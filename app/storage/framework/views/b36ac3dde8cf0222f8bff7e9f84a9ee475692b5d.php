<?php
    $notifications = Auth::user()->getNotifications();
?>
<nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
            <li class="dropdown nav-icon">
                <a href="#" data-bs-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-lg-inline-block bell">
                        <i data-feather="bell"></i>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                    <h6 class='py-2 px-4'>Notificações</h6>
                    <ul class="list-group rounded-none">
                        <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item border-0 align-items-start">
                                <div class="avatar bg-success me-3">
                                    <span class="avatar-content"><i class="fa fa-commenting-o"
                                            aria-hidden="true"></i></span>
                                </div>

                                <div>
                                    <h6 class='text-bold'>Novo Cadastro</h6>

                                    <p class='text-xs'>
                                        <?php echo e($n->name); ?>, acabou de realizar um cadastro.
                                    </p>
                                </div>

                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </li>
            <li class="dropdown user-style">
                <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <div class="d-md-block d-lg-inline-block">olá, <?php echo e(Auth::user()->name); ?>!</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="<?php echo e(route('dashboard.admin.logout')); ?>"><i data-feather="log-out"></i> Sair</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH C:\xampp\htdocs\neway\app\resources\views/dash/admin/includes/header.blade.php ENDPATH**/ ?>