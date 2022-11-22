@extends('dash.admin.includes.master')
@section('title', 'Neway - Perfill')

@section('content')
    <div id="app">

        @include('dash.admin.includes.menu')

        <div id="main">
            @include('dash.admin.includes.header')

            <div class="main-content container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <h3>Alterar Informações</h3>
                            <p>Este é o seu painel pessoal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <form id="form-photo" class="form form-vertical"
                                            action="{{ route('dashboard.admin.edit_photo.do') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <label for="upload">
                                                <img class="photo-perfil" src="{{ Auth::user()->getPhoto() }}"><br>
                                                <a class="edit-perfil" href="#"><img
                                                        src="{{ asset('dash/img/edit.png') }}"></a>
                                                <p class="edit-name"><b>{{ $auth->name }}</b></p>
                                            </label>
                                            <input id="upload" style="display: none;" type="file"
                                                value="{{ $auth->id }}" name="photo">
                                        </form>
                                    </div>
                                </div>
                                @include('includes.errors')
                                <form class="form form-vertical" action="{{ route('dashboard.admin.edit.do') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-lg-12"><input type="name" value="{{ $auth->name }}"
                                                name="name"></div>
                                        <div class="col-lg-6"><input type="password" placeholder="Senha:" name="password">
                                        </div>
                                        <div class="col-lg-6"><input type="password" placeholder="Confirmar senha:"
                                                name="password_confirm"></div>
                                        <div class="col-lg-12"><input type="email" value="{{ $auth->email }}"
                                                name="email"></div>
                                    </div>
                                    <button>Confirmar Alteração</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("[for='upload']").click(function() {
            $('#upload').click();
        })
        $("#upload").change(function() {
            $('#form-photo').submit()
        })
    </script>
@endsection
