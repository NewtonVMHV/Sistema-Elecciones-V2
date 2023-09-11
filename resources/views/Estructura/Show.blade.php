@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2><a href="{{ route('Estructura.index') }}"><i class='bx bx-chevrons-left'></i></a> Detalle de la estructura</h2>
        <hr>
        <table class="table table-sm">
            <tbody>
                <tr><td><strong>Clave</strong></td><td>{{$estructura_cambio->clave}}</td></tr>
                <tr><td><strong>Sección</strong></td><td>{{$estructura_cambio->seccion}}</td></tr>
                <tr><td><strong>Nombre completo</strong></td><td>{{$estructura_cambio->nombre}} {{$estructura_cambio->a_paterno}} {{$estructura_cambio->a_materno}}</td></tr>
                <tr><td><strong>Dirección</strong></td><td>{{$estructura_cambio->direccion}}</td></tr>
                <tr><td><strong>Colonia</strong></td><td>{{$estructura_cambio->colonia}}</td></tr>
                <tr><td><strong>Codigo postal</strong></td><td>{{$estructura_cambio->codigo_postal}}</td></tr>
                <tr><td><strong>Curp</strong></td><td>{{$estructura_cambio->curp}}</td></tr>
                <tr><td><strong>Clave Elector</strong></td><td>{{$estructura_cambio->clave_elector}}</td></tr>
                <tr><td><strong>Género</strong></td><td>{{$estructura_cambio->genero}}</td></tr>
                <tr><td><strong>Sexo</strong></td><td>{{$estructura_cambio->sexo}}</td></tr>
                <tr><td><strong>Fecha de nacimineto</strong></td><td>{{$estructura_cambio->f_nacimiento}}</td></tr>
                <tr><td><strong>Tipo</strong></td><td>{{$estructura_cambio->tipo}}</td></td></tr>
                <tr><td><strong>Correo Electrónico</strong></td><td>{{$estructura_cambio->correo}}</td></td></tr>
                <tr><td><strong>Facebook</strong></td><td>{{$estructura_cambio->facebook}}</td></td></tr>
                <tr><td><strong>Telefono</strong></td><td>{{$estructura_cambio->telefono}}</td></td></tr>
                <tr><td><strong>Celular</strong></td><td>{{$estructura_cambio->celular}}</td></td></tr>
                <tr><td><strong>Estatus</strong></td><td>{{ $estructura_cambio->estatus }}</td></td></tr>
                <tr><td><strong>Estructura</strong></td><td>{{$estructura_cambio->estructuras}}</td></td></tr>
            </tbody>
        </table>
    </section>
@endsection