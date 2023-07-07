@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('roles.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Mostrar Detalles</h2>
    <hr>
    <p><strong>Nombre: </strong>{{ $role->name }}</p>
    <p><strong>Permisos: </strong>
        @if(!empty($rolePermissions))
            @foreach($rolePermissions as $v)
                <label class="label label-success">{{ $v->name }},</label>
            @endforeach
        @endif
    </p>
</section>
@endsection