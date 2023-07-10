@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2>Editar Registro</h2>
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
    <form action="{{ route('Estructura.update',$estructura_cambio) }}" method="post">
        @csrf
        @method('put')
        <div class="row mb-4">
            <div class="col">
                <label class="form-label" for="clave" required>CLAVE</label>
                <input type="text" name="clave" id="clave" class="form-control" value="{{$estructura_cambio->clave}}"/>
                <div class="alert alert3 alert-success" role="alert">
                  La clave del propietario asignado.
                </div>
            </div>
            <div class="col">
                <label class="form-label" for="form6Example2">SECCIÓN</label>
                <input type="text" name="seccion" id="form6Example2" class="form-control" value="{{$estructura_cambio->seccion}}" required/>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form6Example3">NOMBRE</label>
              <input type="text" name="nombre" id="form6Example3" class="form-control" value="{{$estructura_cambio->nombre}}" required/>
            </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example4">APELLIDO PATERNO</label>
              <input type="text" name="a_paterno" id="form6Example4" class="form-control" value="{{$estructura_cambio->a_paterno}}" required/>
          </div>
          <div class="col">
              <label class="form-label" for="form6Example4" required>APELLIDO MATERNO</label>
              <input type="text" name="a_materno" id="form6Example4" class="form-control" value="{{$estructura_cambio->a_materno}}" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example6">DIRECCIÓN</label>
              <input type="text" name="direccion" id="form6Example6" class="form-control" value="{{$estructura_cambio->direccion}}" required/>
          </div>  
          <div class="col">
              <label class="form-label" for="form6Example5">COLONIA</label>
              <input type="text" name="colonia" id="form6Example5" class="form-control" value="{{$estructura_cambio->colonia}}" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">CÓDIGO POSTAL</label>
              <input type="number" name="Cod_postal" id="form6Example5" class="form-control" value="{{$estructura_cambio->codigo_postal}}" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">CURP</label>
              <input type="text" name="curp" id="form6Example5" class="form-control" value="{{$estructura_cambio->curp}}" required/>
          </div>
          <div class="col">
              <label class="form-label" for="form6Example5">CLAVE ELECTOR</label>
              <input type="text" name="Clave_elector" id="form6Example5" class="form-control" value="{{$estructura_cambio->clave_elector}}" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="f_nacimiento">FECHA DE NACIMIENTO</label>
              <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control" onblur="insertarFecha();" value="{{$estructura_cambio->f_nacimiento}}" required/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">SELECCIONA EL TIPO</label>
              <select class="form-select" name="tipo" aria-label="Default select example" required>
                  <option selected>{{ $estructura_cambio->tipo }}</option>
                  @foreach ($tipos as $item)
                    <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                  @endforeach
              </select>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">CORREO ELECTRONICO</label>
              <input type="email" name="correo" id="form6Example5" class="form-control" value="{{$estructura_cambio->correo}}"/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">FACEBOOK</label>
              <input type="text" name="facebook" id="form6Example5" class="form-control" value="{{$estructura_cambio->facebook}}"/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">TELEFONO DE CASA</label>
              <input type="number" name="telefono" id="form6Example5" class="form-control" value="{{$estructura_cambio->telefono}}"/>
          </div>
          <div class="col">
              <label class="form-label" for="form6Example5">CELULAR</label>
              <input type="number" name="celular" id="form6Example5" class="form-control" value="{{$estructura_cambio->celular}}"/>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
            <label class="form-label" for="sexo">SEXO</label>
            <div class="form-outline" data-toggle="buttons">
              <label class="btn btn-primary">
                <input type="radio" name="sexo" id="sexo" value="HOMBRE" {{ $estructura_cambio->sexo == 'HOMBRE'?'checked':'' }}> HOMBRE
              </label>
              <label class="btn btn-danger">
                <input type="radio" name="sexo" id="sexo" value="MUJER" {{ $estructura_cambio->sexo == 'MUJER'?'checked':'' }}> MUJER
              </label>
            </div>
          </div>
          <div class="col">
                <label class="form-label" for="form6Example5">GÉNERO</label>
                <select class="form-select" name="genero" aria-label="Default select example" required>
                    <option selected>{{ $estructura_cambio->genero }}</option>
                    <option value="MASCULINO">MASCULINO</option>
                    <option value="FEMENINO">FEMENINO</option>
                </select>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col">
              <label class="form-label" for="form6Example5">ESTATUS</label>
              <select class="form-select" aria-label="Default select example" name="estatus">
                <option selected>{{ $estructura_cambio->estatus }}</option>
                @foreach ($estatus as $item)
                    <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                @endforeach
              </select>
          </div>
          <div class="col">
            <label class="form-check-label">ESTRUCTURA</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault1" value="Representante de Casilla" {{ $estructura_cambio->estructuras == 'Representante de Casilla'?'checked':'' }}>
                <label class="form-check-label" for="flexRadioDefault1">
                  Representante de Casilla
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Representante General" {{ $estructura_cambio->estructuras == 'Representante General'?'checked':'' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                  Representante General
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Promovido" {{ $estructura_cambio->estructuras == 'Promovido'?'checked':'' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                  Promovido
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Sin Estructura" {{ $estructura_cambio->estructuras == 'Sin Estructura'?'checked':'' }}>
                <label class="form-check-label" for="flexRadioDefault2">
                  Sin Estructura
                </label>
              </div>
          </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Editar Estructura</button>
            <a href="{{ route('Estructura.index') }}" class="btn btn-dark" >Volver al inicio</a>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){
    $(".alert3").hide();
  }); 
function insertarFecha(){ 
    $.ajax({
        success:  function () {
          fecha = $('#f_nacimiento').val();
          let dia = fecha.substr(8,2);
          let mes = fecha.substr(5,2);
          let anio = fecha.substr(2,2);
          let numeros = Math.round(Math.random() * (9999 - 1000) + 1000);
          let resultado = dia+mes+anio+numeros;
          $('.alert3').show();
          $('#clave').val(resultado);
        }
      }) 
}
</script>
@endsection