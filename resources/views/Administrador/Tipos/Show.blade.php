@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Detalles del tipo</h2>
        <hr>
        <p><strong>Número: </strong>{{ $tipos->id }}</p>
        <p><strong>Nombre: </strong>{{ $tipos->nombre }}</p>
    </section>
@endsection