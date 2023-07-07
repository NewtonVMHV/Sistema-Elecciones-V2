@extends('layouts.sliderbar')
@section('content')
<section class="container">
    <h2>Agregar Nueva Solicitud</h2>
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
    <div class="cargando row">       
        <div class="d-flex justify-content-center">
            <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Cargando...</span>
            </div>
        </div>
    </div>
    <div class="alert alert-danger" role="alert">
        Error
    </div>
    <div class="alert alert2 alert-danger" role="alert">
        La estructura no existe, <a href="{{ route('Estructura.create') }}" class="alert-link">¡Crealo!</a>
    </div>
    <div class="alert alert3 alert-success" role="alert">
        La estructura existe, ¡Felicidades!
    </div>
    <form action="{{route('Gestiones.store')}}" method="post" class="formulario">
        @csrf
        @method('POST')
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="clave" required>CLAVE</label>
                    <input type="text" name="clave" id="clave" class="form-control" onblur="buscar_datos();" required/>
                    <ul>
                        <li type="disc">Escribir la clave de la estructura para encontrar lo en nuestra base de datos.</li>   
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="seccion" required>SECCION</label>
                    <input type="text" name="seccion" id="seccion" class="form-control" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nombre" required>NOMBRE</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required/>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="a_paterno" required>APELLIDO PATERNO</label>
                    <input type="text" name="a_paterno" id="a_paterno" class="form-control" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="a_materno" required>APELLIDO MATERNO</label>
                    <input type="text" name="a_materno" id="a_materno" class="form-control" required/>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="NumeroGestion" required>NÚMERO DE GESTIÓN</label>
                    <input type="text" name="NumeroGestion" id="NumeroGestion" class="form-control" value="00{{ $contador }}" required/>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example7" required>SOLICITUD</label>
                    <textarea class="form-control" id="form6Example7" rows="4" name="solicitud"></textarea>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example8" required>FECHA DE SOLICITUD</label>
                    <input type="date" name="fecha_solicitud" id="form6Example8" class="form-control" required/>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example9" required>RESPUESTA</label>
                    <textarea class="form-control" id="form6Example9" rows="4" name="respuesta"></textarea>
                </div>
            </div>
            <div class="col">
                <label class="form-label" for="form6Example12" required>FECHA DE RESPUESTA</label>
                <input type="date" name="fecha_respuesta" id="form6Example12" class="form-control" required/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example10" required>OBSERVACIONES</label>
                    <textarea class="form-control" id="form6Example10" rows="4" name="observaciones"></textarea>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example11" required>ESTATUS</label>
                    <select class="form-select" name="estatus" aria-label="Default select example">
                        <option>Selecciona el estatus</option>
                        <option value="Pendiente" selected>Pendiente</option>
                        <option value="En tramite">En trámite</option>
                        <option value="Terminado">Terminado</option>
                      </select>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Agregar Solicitud</button>
            <a href="{{ route('Gestiones.index') }}" class="btn btn-dark" >Volver al inicio</a>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $('.cargando').hide();
    $('.alert').hide();
    $('.alert2').hide();
    $('.alert3').hide();
});  
  function buscar_datos(){
        clave = $("#clave").val();

        var parametros ={
            "buscar": 1,
            "clave" : clave
        }

        $.ajax({
        data:  parametros,
        dataType: 'json',
        url:   '/Gestiones/Autocomplete',
        type:  'get',
        beforeSend: function() {
            $('.formulario').hide();
            $('.cargando').show();
            
        }, 
        error: function(){
            $('.alert').show();
        },
        complete: function() {
            $('.formulario').show();
            $('.cargando').hide();
        
        },
        success:  function (valores) {
            if(valores.existe=="1") {
                $(".alert3").show();
                $("#seccion").val(valores.seccion);
                $("#nombre").val(valores.nombre);
                $("#a_paterno").val(valores.a_paterno);
                $("#a_materno").val(valores.a_materno);
            }else{
                $('.alert2').show();
            }
        }
    }) 
}
</script>
@endsection