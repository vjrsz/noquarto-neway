@extends('web.includes.master')
@section('title', 'Neway - Pools')

@section('content')
    @include('web.includes.header')

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
                        <input class="mb-3" placeholder="Nome: {{$scheduling->name}}" type="" disabled>
                        <input placeholder="E-mail: {{$scheduling->email}}" type="" disabled>
                    </form>

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

                    <form>
                        <input class="mb-3" placeholder="Data: {{date('d/m/Y', strtotime($scheduling->date))}}" type="" disabled>
                        <input placeholder="Horário: {{$scheduling->time}}" type="" disabled>
                    </form>

                    <button onclick="window.location.href = 'https://projetos.agencianoquarto.com.br/neway/'">Retornar para home <i class="fa-solid fa-arrow-right-to-bracket"></i></button>
                </div>

                <div class="col-lg-6 check_img mauto">
                    <img src="{{asset('img/check.png')}}">
                    <h3>Agendamento Finalizado</h3>
                    <p>É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando
                        analisa
                        estilo de a sua mancha gráfica. </p>
                </div>
            </div>
        </div>
    </section>

    @include('web.includes.footer')
@endsection
