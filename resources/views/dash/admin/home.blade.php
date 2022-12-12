@extends('dash.admin.includes.master')
@section('title', 'Login - Neway')

@section('content')
    <div id="app">
        @include('dash.admin.includes.menu')

        <div id="main">
            @include('dash.admin.includes.header')

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Acompanhe Agendamentos</h3>
                            <p>Fique de olho nós agendamentos!</p>
                        </div>

                        <div class="col-12 col-md-6">
                            <form class="pesquisar">
                                <input type="text" name="filter_name" placeholder="Filtar por cliente" value="{{ old('filter_name') ?? '' }}">
                            </form>
                        </div>
                    </div>
                </div>

                @include('dash.admin.schedulings.show')
            </div>
        </div>
    </div>
@endsection
