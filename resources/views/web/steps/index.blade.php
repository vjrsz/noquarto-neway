@include('web.steps.step01')
@include('web.steps.step02')
@include('web.steps.step03')
@include('web.steps.step04')
@include('web.steps.step05')
@include('web.steps.step06')
@include('web.steps.step07')
<style>
    .step_img img {
        width: 100%;
        border-radius: 15px;
    }
    .step_img {
        padding: 75px 25px;
        background: white;
        border-radius: 25px
    }
</style>
<script>
    let step_actual = 0;
    const step_final = 8;
    let data = {};
    let value = 0;
    const raiz = 'img/steps/';
    let source = '';
    let values = [
        ['s', 'ls', 'ff'],
        [],
        [],
        ['borda-bege', 'borda-cinza', 'borda-marfim'],
        ['plaster-ac', 'plaster-ae', 'plaster-c'],
        ['deck-bege', 'deck-cinza', 'deck-marfim', ],
    ];

    for (var i = 0; i < step_final; i++) {
        $('#step0' + i).hide()
    }

    function getImg(data) {
        arr = Object.values(data)

        forma = values[0][arr[0] - 1] ? values[0][arr[0] - 1] : '';
        plaster = values[4][arr[4] - 1] ? '-' + values[4][arr[4] - 1] : '';
        deck = values[5][arr[5] - 1] ? '-' + values[5][arr[5] - 1] : '';
        border = values[3][arr[3] - 1] ? '-' + values[3][arr[3] - 1] : '';

        if ((forma || plaster || deck || border) && step_actual != 2) source = forma + plaster + deck + border + '.jpg'
        else if (step_actual == 1) source = 'index.jpg'

    }

    function nextStep() {
        $('#step0' + step_actual).hide();

        step_actual += 1
        value = 0

        check($('#step0' + (step_actual) + ' [checked]'))

        $('#step0' + step_actual).show();

        if (step_actual == 7) {
            data['image'] = source
            $("[name=data]").val(JSON.stringify(data))
            $("#" + step_id + "_img").attr("src", raiz + ("06/") + source);
        }
    }

    function check(el) {
        if (!$(el).prop('checked')) {
            $(el).prop('checked', true);
        }

        value = $(el).val();
        step_id = "step0" + step_actual

        data['step0' + step_actual] = value

        if (step_actual != 3) {
            getImg(data)

            if (step_actual == 2) folder = 1
            else folder = step_actual
            $("#" + step_id + "_img").attr("src", raiz + ("0" + folder + "/") + source);
        } else {
            $("#" + step_id + "_img").attr("src", raiz + "03/" + value + '.png');
        }

        $('input[type="checkbox"]').not(el).prop('checked', false);
    }


    $('[next-step]').click(nextStep);
    $('[before-step]').click(function(){
        if (step_actual > 1) { 
            $('#step0' + step_actual).hide();

            step_actual -= 1
            step_id = "step0" + step_actual
            value = 0

            check($('#step0' + (step_actual) + ' [checked]'))

            $('#step0' + step_actual).show();

        }else{
            $('[next-step]').attr("disabled", true);
        }
    });
    $('input[type="checkbox"]').on('change', (e) => {
        check($(e.currentTarget))
        $('[next-step]').attr("disabled", false);
    });
    nextStep();
</script>
