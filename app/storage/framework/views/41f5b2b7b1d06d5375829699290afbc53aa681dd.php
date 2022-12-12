<div id="step07" class="container">
    <div class="row">
        <div class="col-lg-6 mauto finish spc">
            <div><img src="img/passo07.svg"></div>
            <h2>Step 07 | dados</h2>
            <p>É um facto estabelecido de que um leitor é distraído pelo conteúdo <br> legível de uma página quando
                analisa estilo de a sua mancha gráfica. </p>
            <form action="<?php echo e(route('web.scheduling.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <input placeholder="Nome" type="text" name="name">
                <input placeholder="E-mail" type="email" name="email">

                <div class="row">
                    <div class="col-lg-6">
                        <input type="text" placeholder="Contato" name="number_phone" data-mask="+#">
                    </div>

                    <div class="col-lg-6">
                        <input type="text" placeholder="Estado" name="state">
                    </div>
                </div>

                <input placeholder="Endereço" type="text" name="address">

                <div class="row">
                    <div class="col-lg-6">
                        <input type="date" placeholder="Selecionar data" name="date">
                    </div>

                    <div class="col-lg-6">
                        <input type="time" placeholder="Selecionar Horário" name="time">
                    </div>
                </div>
                <input type="hidden" name="data">

                <button>Finalizar Agendamento <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
            </form>
        </div>

        <div class="col-lg-6 step_img">
            <img src="img/foto.png">
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\neway\app\resources\views/web/steps/step07.blade.php ENDPATH**/ ?>