@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Actualización de información</h2>
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
        <form action="{{ route('perfil.update',Auth::user()->id) }}" method="post">
            @csrf
            @method('put')
            <div class=" row mb-3">
                <div class="col">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="name" value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="email" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="cargo" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="cargo" name="cargo" value="{{ Auth::user()->cargo }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ Auth::user()->telefono }}">
                </div>
                <div class="col">
                    <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="nacimiento" name="fecha_nacimiento" value="{{ Auth::user()->fecha_nacimiento }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="genero" class="form-label">Género:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="0" {{ Auth::user()->genero == '0'?'checked':'' }}>
                        <label class="form-check-label" for="genero">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="1" {{ Auth::user()->genero == '1'?'checked':'' }}>
                        <label class="form-check-label" for="genero">Femenino</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="genero" id="genero" value="2" {{ Auth::user()->genero == '2'?'checked':'' }}>
                        <label class="form-check-label" for="genero">Otro</label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Actualizar perfil</button>
                <a href="{{ route('perfil.details',Auth::user()->id) }}" class="btn btn-dark" >Volver a mi perfil</a>
            </div>
        </form>
    </section>
@endsection