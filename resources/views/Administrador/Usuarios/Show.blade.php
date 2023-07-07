@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('users.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Mostrar Usuario</h2>
    <hr>
    <p><strong>Nombre: </strong>{{ $user->name }}</p>
    <p><strong>Correo Electrónico: </strong>{{ $user->email }}</p>
    <p><strong>Roles: </strong>
        @if(!empty($user->getRoleNames()))
            @foreach($user->getRoleNames() as $v)
                <span class="badge rounded-pill bg-dark">{{ $v }}</span>
            @endforeach
        @endif
    </p>
</section>
@endsection