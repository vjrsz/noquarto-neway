@extends('dash.admin.includes.master')
@section('title', 'Neway - Horários')

@section('content')
    <div id="app">
        @include('dash.admin.includes.menu')

        <div id="main">
            @include('dash.admin.includes.header')

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h3>Horários Bloqueados</h3>
                        </div>

                        <div class="col-12 col-md-6">
                            <button class="btn" style="float: right" type="button" data-bs-toggle="modal"
                                data-bs-target="#store">Cadastrar</button>
                        </div>
                    </div>
                </div>

                @include('dash.admin.blockeddate.show')
            </div>
        </div>
    </div>
    @include('dash.admin.blockeddate.store')
    @include('dash.admin.blockeddate.edit')
    @include('dash.admin.blockeddate.destroy')

@endsection
