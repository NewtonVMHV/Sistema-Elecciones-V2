@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Detalles del tipo</h2>
        <hr>
        <table class="table table-sm">
            <tbody>
                <tr><td><strong>Número</strong></td><td>{{ $tipos->id }}</td></tr>
                <tr><td><strong>Nombre</strong></td><td>
                    {{ $tipos->nombre }}
                </td></tr>
            </tbody>
        </table>
    </section>
@endsection