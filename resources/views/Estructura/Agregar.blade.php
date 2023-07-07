@extends('layouts.sliderbar')
@section('content')
    <section class="container">
        <h2>Agregar Nueva Estructura</h2>
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
        <form action="{{route('Estructura.store')}}" method="post">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="clave" required>CLAVE</label>
                        <input type="text" name="clave" id="clave" class="form-control" value="<?php echo mt_rand(1000000000,9999999999)?>" maxlength="10" required/>
                        <div class="alert alert3 alert-success" role="alert">
                          La clave del propietario asignado.
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2" required>SECCIÓN</label>
                        <input type="text" name="seccion" id="form6Example2" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                      <label class="form-label" for="form6Example3" required>NOMBRE</label>
                      <input type="text" name="nombre" id="form6Example3" class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                      <label class="form-label" for="form6Example4" required>APELLIDO PATERNO</label>
                      <input type="text" name="a_paterno" id="form6Example4" class="form-control" required/>
                    </div>
                </div>
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example5" required>APELLIDO MATERNO</label>
                    <input type="text" name="a_materno" id="form6Example5" class="form-control" required/>
                  </div>
              </div>
            </div>
    
            <div class="row mb-4">
              <div class="col">
                    <div class="form-outline">
                      <label class="form-label" for="form6Example6" required>DIRECCIÓN</label>
                      <input type="text" name="direccion" id="form6Example6" class="form-control" required/>
                    </div>
              </div>
              <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form6Example5" required>COLONIA</label>
                    <input type="text" name="colonia" id="form6Example5" class="form-control" required/>
                  </div>
              </div>
            </div>
    
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example5" required>CÓDIGO POSTAL</label>
                        <input type="number" name="Cod_postal" id="form6Example5" class="form-control" maxlength="5" required/>
                    </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                    <label class="form-label" for="form6Example5" required>CURP</label>
                    <input type="text" name="curp" id="form6Example5" class="form-control" maxlength="18" required/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form6Example5" required>CLAVE ELECTOR</label>
                    <input type="text" name="Clave_elector" id="form6Example5" class="form-control" maxlength="18" required/>
                    </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="f_nacimiento" required>FECHA DE NACIMIENTO</label>
                    <input type="date" name="f_nacimiento" id="f_nacimiento" class="form-control" onblur="insertarFecha();" required/>
                </div>
                </div>
            </div>
        
            <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                <label class="form-label" for="form6Example5">TIPO</label>
                <select class="form-select" name="tipo" aria-label="Default select example" required>
                    <option selected>Selecciona el tipo</option>
                    @foreach ($tipos as $item)
                    <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example5">CORREO ELECTRONICO</label>
                    <input type="email" name="correo" id="form6Example5" class="form-control"/>
                </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline  mb-4">
                    <label class="form-label" for="form6Example5">FACEBOOK</label>
                    <input type="text" name="facebook" id="form6Example5" class="form-control"/>
                </div>
                </div>
            </div>
        
            <div class="row mb-4">
            <div class="col">
                <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">TELEFONO DE CASA</label>
                <input type="number" name="telefono" id="form6Example5" class="form-control"  maxlength="10"/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">CELULAR</label>
                <input type="number" name="celular" id="form6Example5" class="form-control"  maxlength="10"/>
                </div>
            </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                <label class="form-label" for="sexo">SEXO</label>
                <div class="form-outline" data-toggle="buttons">
                    <label class="btn btn-primary">
                        <input type="radio" name="sexo" id="sexo" value="HOMBRE"> HOMBRE
                    </label>
                    <label class="btn btn-danger">
                        <input type="radio" name="sexo" id="sexo" value="MUJER"> MUJER
                    </label>
                </div>
                </div>
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example5">GÉNERO</label>
                    <select class="form-select" name="genero" aria-label="Default select example">
                        <option selected>Selecciona el género</option>
                        <option value="MASCULINO">MASCULINO</option>
                        <option value="FEMENINO">FEMENINO</option>
                    </select>
                </div>
                </div>
            </div>
        
            <div class="row mb-4">
                <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example5">ESTATUS</label>
                    <select class="form-select" aria-label="Default select example" name="estatus">
                        <option selected>Selecciona el estatus</option>
                        @foreach ($estatus as $item)
                            <option value="{{$item->nombre}}">{{$item->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                <div class="col">
                    <label class="form-check-label">ESTRUCTURA</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault1" value="Representante de Casilla">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Representante de Casilla
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Representante General">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Representante General
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Promovido">
                        <label class="form-check-label" for="flexRadioDefault2">
                        Promovido
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Sin Estructura" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                        Sin Estructura
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Agregar Estructura</button>
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