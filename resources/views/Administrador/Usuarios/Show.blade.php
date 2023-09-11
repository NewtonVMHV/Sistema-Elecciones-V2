@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('users.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Mostrar Usuario</h2>
    <hr>
    <table class="table table-sm">
        <tbody>
            <tr><td><strong>Nombre</strong></td><td>{{ $user->name }}</td></tr>
            <tr><td><strong>Correo Electrónico</strong></td><td>{{ $user->email }}</td></tr>
            <tr><td><strong>Roles</strong></td><td>
                @if(!empty($user->getRoleNames()))
                    @foreach($user->getRoleNames() as $v)
                        <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                    @endforeach
                @endif
            </td></tr>
        </tbody>
    </table>
</section>
@endsection