@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2><a href="{{ route('Estructura.index') }}"><i class='bx bx-chevrons-left'></i></a> Detalle de la estructura</h2>
        <hr>
        <div class="row">
            <div class="col align-self-start">
                <p><strong>Clave: </strong> {{$estructura_cambio->clave}}</p>
                <p><strong>Sección: </strong> {{$estructura_cambio->seccion}}</p>
                <p><strong>Nombre completo: </strong> {{$estructura_cambio->nombre}} {{$estructura_cambio->a_paterno}} {{$estructura_cambio->a_materno}}</p>
                <p><strong>Dirección: </strong> {{$estructura_cambio->direccion}}</p>
                <p><strong>Colonia: </strong> {{$estructura_cambio->colonia}}</p>
                <p><strong>Código postal: </strong> {{$estructura_cambio->codigo_postal}}</p>
                <p><strong>Curp: </strong> {{$estructura_cambio->curp}}</p>
                <p><strong>Clave Elector: </strong> {{$estructura_cambio->clave_elector}}</p>
                <p><strong>Género: </strong> {{$estructura_cambio->genero}}</p>
                <p><strong>Sexo: </strong> {{$estructura_cambio->sexo}}</p>
            </div>
            <div class="col align-self-start">
                <p><strong>Fecha de nacimiento: </strong> {{$estructura_cambio->f_nacimiento}}</p>
                <p><strong>Tipo: </strong> {{$estructura_cambio->tipo}}</p>
                <p><strong>Correo Electronico: </strong> {{$estructura_cambio->correo}}</p>
                <p><strong>Facebook: </strong> {{$estructura_cambio->facebook}}</p>
                <p><strong>Telefono: </strong> {{$estructura_cambio->telefono}}</p>
                <p><strong>Celular: </strong> {{$estructura_cambio->celular}}</p>
                <p><strong>Estatus: </strong> {{ $estructura_cambio->estatus }}</p>
                <p><strong>Estructura: </strong> {{$estructura_cambio->estructuras}}</p>
            </div>
        </div>
    </section>
@endsection