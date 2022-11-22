@include('web.steps.step01')
@include('web.steps.step02')
@include('web.steps.step03')
@include('web.steps.step04')
@include('web.steps.step05')
@include('web.steps.step06')
@include('web.steps.step07')

<script>
    let step_actual = 0;
    let step_final = 8;
    let data = {};
    let value = 0;

    for (var i = 0; i < step_final; i++) {
        $('#step0' + i).hide()
    }

    function nextStep() {
        if (step_actual) {
            data['step0' + step_actual] = value
        }
        $('#step0' + step_actual).hide();

        step_actual += 1
        value = 0
        
        $('#step0' + step_actual).show();

        if (step_actual == 7) $("[name=data]").val(JSON.stringify(data))
    }
    $('[next-step]').click(nextStep);

    $('input[type="checkbox"]').on('change', function() {
        if ( $(this).prop('checked') ) value = $(this).val();
        else value = 0;
        $('input[type="checkbox"]').not(this).prop('checked', false);
    });
    nextStep();
</script>
