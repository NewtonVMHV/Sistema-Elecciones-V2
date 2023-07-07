@extends('layouts.sliderbar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center">Bienvenido(a) {{ Auth::user()->name }}</h1>
                    <br>
                    <br>
                    <p>Este sistema es el conjunto procedimientos que regulan las etapas de los
                    procesos de las eleciones. A partir de estos, la voluntad de la ciudadanía se transforma
                    en órganos de gobierno de representación política. </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
