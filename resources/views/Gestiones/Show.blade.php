@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin=""/>
<style>
    #mapid { height: 400px; }
</style>
<section class="container">
    <h2><a href="{{ route('Gestiones.index') }}"><i class='bx bx-chevrons-left'></i></a> Detalles de la solicitud #{{$gestiones->id}}</h2>  
    <hr>
    <table class="table table-sm">
        <tbody>
            <tr><td><strong>Clave</strong></td><td>{{ $gestiones->clave }}</td></tr>
            <tr><td><strong>Sección</strong></td><td>{{ $gestiones->seccion }}</td></tr>
            <tr><td><strong>Nombre completo</strong></td><td>{{$gestiones->nombre}} {{$gestiones->a_paterno}} {{$gestiones->a_materno}}</td></tr>
            <tr><td><strong>Solicitud</strong></td><td>{{ $gestiones->solicitud }}</td></tr>
            <tr><td><strong>Fecha de solicitud</strong></td><td>{{ $gestiones->fechasol }}</td></td></tr>
            <tr><td><strong>Dirección</strong></td><td>{{ $gestiones->address }}</td></tr>
            <tr><td><strong>Latitud</strong></td><td>{{ $gestiones->latitude }}</td></tr>
            <tr><td><strong>Longitud</strong></td><td>{{ $gestiones->longitude }}</td></tr>
            <tr><td><strong>Estatus</strong></td><td>{{ $gestiones->estatus }}</td></tr>
            <tr><td><strong>Respuesta</strong></td><td>{{ $gestiones->respuesta }}</td></tr>
            <tr><td><strong>Fecha de respuesta</strong></td><td>{{ $gestiones->fecharespuesta }}</td></tr>
            <tr><td><strong>Observaciones</strong></td><td>{{ $gestiones->observaciones }}</td></tr>
        </tbody>
    </table>
    <div class="card-body" id="mapid"></div>
</section>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"
    integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
    crossorigin=""></script>
<script>
    var map = L.map('mapid').setView([{{ $gestiones->latitude }}, {{ $gestiones->longitude }}], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $gestiones->latitude }}, {{ $gestiones->longitude }}]).addTo(map)
        .bindPopup('{!! $gestiones->map_popup_content !!}');
</script>
@endsection