@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Editar Tipo</h2>
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
        <form action="{{ route('tipos.update',$tipos) }}" method="post">
            @csrf
            @method('put')
            <div class="row mb-3">
                <div class="col">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $tipos->nombre }}">
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Editar Tipo</button>
                <a href="{{ route('tipos.index') }}" class="btn btn-dark" >Volver al inicio</a>
            </div>
        </form>
    </section>
@endsection