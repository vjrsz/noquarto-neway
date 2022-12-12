@extends('dash.admin.includes.master')
@section('title', 'Login - Neway')

@section('content')
<div id="auth">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 mx-auto">
                <div class="pt-4">
                    <div class="card-body">

                        <div class="text-center">
                            <img style="width: 25%;" src="{{asset('dash/img/logo.png')}}" class='mb-3'>
                        </div>

                        <div class="mb-5 login-text">
                            <h3>Login</h3>
                            <p>Bem vindo ao Sistema de Agendamento Neway.</p>
                        </div>

                        <form action="{{ route('dashboard.admin.login.do') }}" method="post">
                            @csrf
                            @include('includes.errors')
                            <div class="form-vertical">
                                <input type="email" placeholder="E-mail" name="email">
                                <input type="password" placeholder="Senha" name="password">
                            </div>

                            <div class='form-check clearfix my-4'>
                                <div class="checkbox float-start">
                                    <input type="checkbox" id="checkbox1" name='remember' class='form-check-input'>
                                    <label for="checkbox1">Lembrar Login</label>
                                </div>
                                <div class="float-end">
                                    <a href="auth-register.html">Esqueceu a senha?</a>
                                </div>
                            </div>
                            <div class="form-login">
                                <button class="btn btn-primary float-end">Login</button>
                            </div>
                        </form>

                        <div class="foooter">
                            <p>Copyright ©2022 Neway</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection