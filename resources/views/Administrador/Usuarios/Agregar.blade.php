@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('users.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Crear Nuevo Usuario</h2>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="name" class="form-label">Nombre Completo</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col">
                <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirm-password" name="confirm-password">
            </div>
        </div>
        <div class=" row mb-3">
            <div class="col">
                <label class="form-label" for="form6Example3">Roles</label>
                <select name="roles" class="form-select" aria-label="Default select example">
                    <option selected>Selecciona el Role</option>
                    @foreach ($roles as $item)
                        <option value="{{$item->name}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
            <a href="{{ route('users.index') }}" class="btn btn-dark" >Volver al inicio</a>
        </div>
    </form>
</section>
@endsection