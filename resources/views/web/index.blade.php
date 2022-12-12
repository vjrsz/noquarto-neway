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
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div style="border: none;" class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/SdtRrQDyjRc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    @include('web.includes.footer')
@endsection
