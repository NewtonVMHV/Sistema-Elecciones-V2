@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('roles.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Mostrar Detalles</h2>
    <hr>
    <table class="table table-sm">
        <tbody>
            <tr><td><strong>Nombre</strong></td><td>{{ $role->name }}</td></tr>
            <tr><td><strong>Permisos</strong></td><td>
                @if(!empty($rolePermissions))
                    @foreach($rolePermissions as $v)
                        <label class="label label-success">{{ $v->name }},</label>
                    @endforeach
                @endif
            </td></tr>
        </tbody>
    </table>
</section>
@endsection