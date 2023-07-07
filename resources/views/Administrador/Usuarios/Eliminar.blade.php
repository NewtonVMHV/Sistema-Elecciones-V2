@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <div class="card">
            <div class="card-header">
              <h3>Eliminar Registro</h3>
            </div>
            <form action="{{ route('users.destroy',$user->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $user->name }}</h5>
                    <p class="card-text text-center">¿Deseas eliminar este registro?</p>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Eliminar Usuario</button>
                        <a href="{{ route('users.index') }}" class="btn btn-dark" >Volver al inicio</a>
                    </div>
                </div>
            </form>
          </div>
    </section>
@endsection