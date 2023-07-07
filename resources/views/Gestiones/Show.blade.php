@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('Gestiones.index') }}"><i class='bx bx-chevrons-left'></i></a> Detalles de la solicitud #{{$gestiones->id}}</h2>  
    <hr>
    <div class="row">
        <div class="col">
            <p><strong>Clave: </strong>{{ $gestiones->clave }}</p>
            <p><strong>Sección: </strong> {{$gestiones->seccion}}</p>
            <p><strong>Nombre: </strong> {{$gestiones->nombre}}</p>
            <p><strong>Solicitud: </strong> {{$gestiones->solicitud}}</p>
            <p><strong>Fecha de solicitud: </strong> {{$gestiones->fechasol}}</p>
            <p><strong>Respuesta: </strong> {{$gestiones->respuesta}}</p>
        </div>
        <div class="col">
            <p><strong>Apellido Paterno: </strong> {{$gestiones->a_paterno}}</p>
            <p><strong>Apellido Materno: </strong> {{$gestiones->a_materno}}</p>
           <p><strong>Fecha de respuesta: </strong> {{$gestiones->fecharespuesta}}</p>
           <p><strong>Observaciones: </strong> {{$gestiones->observaciones}}</p>
           <p><strong>Estatus: </strong> {{ $gestiones->estatus }}</p>
        </div>
    </div>
</section>
@endsection