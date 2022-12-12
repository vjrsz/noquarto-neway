<div class="row" id="table-hover-row">
    <p class="display-none">Arraste para o lado direito para visualizar <img src="<?php echo e(asset('dash/img/seta-icon.svg')); ?>">
    </p>
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <!-- table hover -->
                <?php echo $__env->make('includes.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Nome:</th>
                                <th>E-mail:</th>
                                <th>Especificações</th>
                                <th>Data:</th>
                                <th>Horas:</th>
                                <th>Ação:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $schedulings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-bold-500"><?php echo e($sch->name); ?></td>
                                    <td><?php echo e($sch->email); ?></td>
                                    <td class="text-bold-500" ><a target="_blanck" href="<?php echo e(route('dashboard.admin.pdf.view', ['scheduling' => $sch->id])); ?>">PDF</a></td>
                                    <td><?php echo e(date('d/m/Y', strtotime($sch->date))); ?></td>
                                    <td><?php echo e($sch->time); ?></td>
                                    <td class="ver"><b><a type="button"
                                                data-href=<?php echo e(route('dashboard.admin.scheduling.edit', ['scheduling' => $sch->id])); ?>

                                                data-time=<?php echo e($sch->time); ?> data-date=<?php echo e($sch->date); ?>

                                                data-bs-toggle="modal" data-bs-target="#newDate">Confirmar</a></b></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Eventos-->
<div class="modal fade" id="newDate" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="newDateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body anuncio">
                <form id="newdateform" action="" method="post">
                    <?php echo method_field('put'); ?>
                    <?php echo csrf_field(); ?>
                    <h3>Aprove o agendamento</h3>
                    <p>Aprover, ou adicione uma nova data ou horario.</p>
                    <input type="date" placeholder="Data" name="date">
                    <input type="time" placeholder="Horas" name="time">
                    <div class="text-center"><button type="submit" class="btn btn-primary">Confirmar
                            Agendamento</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('[data-bs-target="#newDate"]').click(function() {
        $('input[type=date]').val($(this).data('date'));
        $('input[type=time]').val($(this).data('time'));
        $('#newdateform').attr('action', $(this).data('href'));
    })
</script>
<?php /**PATH C:\xampp\htdocs\neway\app\resources\views/dash/admin/schedulings/show.blade.php ENDPATH**/ ?>