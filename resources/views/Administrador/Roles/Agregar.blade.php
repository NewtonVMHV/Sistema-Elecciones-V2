@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2><a href="{{ route('roles.index') }}"><i class='bx bx-chevron-left-circle'></i></a> Crear Nuevo Role</h2>
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
    <form action="{{ route('roles.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>
        <div class="row mb-3">
           <div class="col">
            <label for="permission" class="form-label">Permisos</label>
                @foreach ($permission as $item)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $item->id }}" id="permission" name="permission">
                        <label class="form-check-label" for="flexCheckDefault">
                        {{ $item->name }}
                        </label>
                    </div>
                @endforeach
           </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Role</button>
            <a href="{{ route('roles.index') }}" class="btn btn-dark" >Volver al inicio</a>
        </div>
    </form>
</section>
@endsection