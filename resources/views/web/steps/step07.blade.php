<div id="step07" class="container">
    <div class="row">
        <div class="col-lg-6 mauto finish spc">
            <div><img src="img/passo07.svg"></div>
            <h2>Step 07 | dados</h2>
            <p>É um facto estabelecido de que um leitor é distraído pelo conteúdo <br> legível de uma página quando
                analisa estilo de a sua mancha gráfica. </p>
            <form action="{{ route('web.scheduling.store') }}" method="post">
                @csrf
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
                <div data-check-time class="row">
                    <div class="col-lg">
                        <span>Selecione outra Data ou Hora para o encontro</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <input data-check type="date" placeholder="Selecionar data" name="date">
                    </div>

                    <div class="col-lg-6">
                        <input data-check type="time" placeholder="Selecionar Horário" name="time">
                    </div>
                </div>
                <input type="hidden" name="data">

                <button type="submit" >Finalizar Agendamento <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
            </form>
        </div>

        <div class="col-lg-6 step_img">
            <img id="step07_img" src="img/steps/index.png">
        </div>
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script>
    $('[data-check]').change(function() {
        if ($('[name=time]').val() && $('[name=date]').val()) {
            $.ajax({
                method: "POST",
                url: "{{ route('web.scheduling.date_valid') }}",
                data: {
                    'time': $('[name=time]').val(),
                    'date': $('[name=date]').val()
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    "X-Requested-With": 'XMLHttpRequest'
                },
                dataType: 'json',
            }).done(function(response) {
                if (response.success) {
                    $('[data-check-time]').hide();
                    $('[type="submit"]').prop('disabled', false);
                } else {
                    $('[data-check-time]').show();
                }
            });
        }
    });
    $('[data-check-time]').hide();
    $('[type="submit"]').prop('disabled', true);

</script>
