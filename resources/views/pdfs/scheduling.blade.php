<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('dash/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('dash/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('dash/assets/css/app.css') }}">
    <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <script src="https://kit.fontawesome.com/0b08c8a640.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
</head>

<body>

    <section class="step">
        <div id="step08" class="container">
            <div class="row">
                <div class="col-lg-6 mauto finish spc">
                    <h3>Informações agendamento</h3>

                    <p>Nome: {{ $scheduling->name }}</p>
                    <p>E-mail: {{ $scheduling->email }}</p>

                    <p>Opções selecionadas:</p>

                    <ul>
                        <li><i class="fa-regular fa-circle-check"></i> Formato: {{ $scheduling->format() }}</li>
                        <li><i class="fa-regular fa-circle-check"></i> Terá SPA: {{ $scheduling->spa() }}</li>
                        <li><i class="fa-regular fa-circle-check"></i> Azulejo: {{ $scheduling->azulejo() }}</li>
                        <li><i class="fa-regular fa-circle-check"></i> Borda: {{ $scheduling->border() }}</li>
                        <li><i class="fa-regular fa-circle-check"></i> Deck: {{ $scheduling->deck() }}</li>
                        <li><i class="fa-regular fa-circle-check"></i> Plaster: {{ $scheduling->plaster() }}</li>
                    </ul>

                    <p>Data e hora:</p>
                    <p>Data: {{ date('d/m/Y', strtotime($scheduling->date)) }}</p>
                    <p>Horário: {{ $scheduling->time }}</p>
                </div>
            </div>
        </div>
    </section>
</body>
