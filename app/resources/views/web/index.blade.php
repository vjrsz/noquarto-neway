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
        @include('web.steps.index')
    </section>

    @include('web.includes.footer')
@endsection
