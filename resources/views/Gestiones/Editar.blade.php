@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
crossorigin=""/>
<style>
    #mapid { height: 300px; }
</style>
<section class="container">
    <h2>Editar solicitud</h2>
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
    <form action="{{route('Gestiones.update',$gestiones)}}" method="post" class="formulario">
        @method('put')
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example12" required>NÚMERO DE GESTIÓN</label>
                    <input type="text" name="NumeroGestion" id="form6Example12" class="form-control" value="{{$gestiones->NumeroGestion}}" required/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="clave" required>CLAVE</label>
                    <input type="text" name="clave" id="clave" class="form-control" value="{{ $gestiones->clave }}" required/>
                    <ul>
                        <li type="disc">Escribir la clave de la estructura para encontrarlo en nuestra base de datos.</li>   
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="seccion" required>SECCION</label>
                    <input type="text" name="seccion" id="seccion" class="form-control" value="{{$gestiones->seccion}}" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="nombre" required>NOMBRE</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$gestiones->nombre}}" required/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="a_paterno" required>APELLIDO PATERNO</label>
                    <input type="text" name="a_paterno" id="a_paterno" class="form-control" value="{{$gestiones->a_paterno}}" required/>
                </div>
            </div>
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="a_materno" required>APELLIDO MATERNO</label>
                    <input type="text" name="a_materno" id="a_materno" class="form-control" value="{{$gestiones->a_materno}}" required/>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example7" required>SOLICITUD</label>
                    <textarea class="form-control" id="form6Example7" rows="4" name="solicitud">{{$gestiones->solicitud}}</textarea>
                </div>
            </div>
            <div class="col">
                <label class="form-label" for="form6Example8" required>FECHA DE SOLICITUD</label>
                    <input type="date" name="fecha_solicitud" id="form6Example8" class="form-control" value="{{$gestiones->fechasol}}" required/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="address" class="control-label is-required">Dirección</label>
                <input id="address" class="form-control" name="address" value="{{ $gestiones->address }}" required/>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="latitude" class="control-label is-required">Latitud</label>
                <input id="latitude" type="text" class="form-control" name="latitude" value="{{$gestiones->latitude}}" required>
            </div>
            <div class="col">
                <label for="longitude" class="control-label is-required">Longitud</label>
                    <input id="longitude" type="text" class="form-control" name="longitude" value="{{ $gestiones->longitude }}" required>
            </div>
        </div>
        <br>
            <div id="mapid"></div>
        <br>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example9" required>RESPUESTA</label>
                    <textarea class="form-control" id="form6Example9" rows="4" name="respuesta">{{$gestiones->respuesta}}</textarea>
                </div>
            </div>
            <div class="col">
                <label class="form-label" for="form6Example12" required>FECHA DE RESPUESTA</label>
                <input type="date" name="fecha_respuesta" id="form6Example12" class="form-control" value="{{$gestiones->fecharespuesta}}" required/>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example10" required>OBSERVACIONES</label>
                    <textarea class="form-control" id="form6Example10" rows="4" name="observaciones">{{$gestiones->observaciones}}</textarea>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <label class="form-label" for="form6Example11" required>SELECCIONA EL ESTATUS</label>
                    <select class="form-select" name="estatus" aria-label="Default select example">
                        <option selected>{{ $gestiones->estatus }}</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En tramite">En trámite</option>
                        <option value="Terminado">Terminado</option>
                      </select>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Editar Solicitud</button>
            <a href="{{ route('Gestiones.index') }}" class="btn btn-dark" >Volver al inicio</a>
        </div>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script type="text/javascript">
    var mapCenter = [{{ request('latitude', $gestiones->latitude) }}, {{ request('longitude', $gestiones->longitude) }}];
    var map = L.map('mapid').setView(mapCenter, 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker(mapCenter).addTo(map);
    function updateMarker(lat, lng) {
        marker
        .setLatLng([lat, lng])
        .bindPopup("Your location :  " + marker.getLatLng().toString())
        .openPopup();
        return false;
    };

    map.on('click', function(e) {
        let latitude = e.latlng.lat.toString().substring(0, 15);
        let longitude = e.latlng.lng.toString().substring(0, 15);
        $('#latitude').val(latitude);
        $('#longitude').val(longitude);
        updateMarker(latitude, longitude);
    });

    var updateMarkerByInputs = function() {
        return updateMarker( $('#latitude').val() , $('#longitude').val());
    }
    $('#latitude').on('input', updateMarkerByInputs);
    $('#longitude').on('input', updateMarkerByInputs);
</script>    
@endsection