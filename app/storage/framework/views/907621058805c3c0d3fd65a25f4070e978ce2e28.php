
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
        <div id="step08" class="container">
            <div class="row">
                <div class="col-lg-6 mauto finish spc">
                    <h3>Informações agendamento</h3>

                    <form>
                        <input class="mb-3" placeholder="Nome: <?php echo e($scheduling->name); ?>" type="" disabled>
                        <input placeholder="E-mail: <?php echo e($scheduling->email); ?>" type="" disabled>
                    </form>

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

                    <form>
                        <input class="mb-3" placeholder="Data: <?php echo e(date('d/m/Y', strtotime($scheduling->date))); ?>" type="" disabled>
                        <input placeholder="Horário: <?php echo e($scheduling->time); ?>" type="" disabled>
                    </form>

                    <button onclick="window.location.href = '<?php echo e(route('web.index')); ?>'">Retornar para home <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>

                <div class="col-lg-6 check_img mauto">
                    <img src="<?php echo e(asset('img/check.png')); ?>">
                    <h3>Agendamento Finalizado</h3>
                    <p>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando
                        analisa
                        estilo de a sua mancha gráfica. </p>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('web.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.includes.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\neway\app\resources\views/web/finish.blade.php ENDPATH**/ ?>