@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<section class="container">
    <h2><a href="{{ route('Estructura.index') }}"><i class='bx bx-chevrons-left'></i></a> Filtrado de estructura</h2>
        <hr>
        <table  id="tabla" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <tr>
                <th scope="col">ACCIONES</th>
                <th scope="col">#</th>
                <th scope="col">CLAVE</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO PATERNO</th>
                <th scope="col">APELLIDO MATERNO</th>
                <th scope="col">SECCIÓN</th>
                <th scope="col">TIPO</th>
                <th scope="col">ESTATUS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estructura_cambio as $item)
                <tr>
                    <td style="width:13%;">
                        <a class="btn btn-primary" href="{{ route('Estructura.edit',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i class='bx bxs-edit'></i></a>
                        <a href="{{ route('Estructura.eliminar',$item->id) }}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                            <i class='bx bxs-trash-alt' ></i>
                        </a>
                        <a class="btn btn-light" href="{{ route('Estructura.show',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar Detalles"><i class='bx bx-low-vision' ></i></a>
                    </td>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->clave}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->a_paterno}}</td>
                    <td>{{$item->a_materno}}</td>
                    <td>{{$item->seccion}}</td>
                    <td>{{$item->tipo}}</td>
                    <td>
                        @if ($item->estatus == 'Activo')
                            <span class="badge text-bg-success">Activo</span>
                        @else
                            @if ($item->estatus == 'Inactivo')
                                <span class="badge text-bg-danger">Inactivo</span>
                            @endif
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
<script>
    $('#tabla').DataTable({
        responsive:true,
        autowith:false,
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Ningún registro - disculpa",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            "search":"Buscar:",
            "paginate": {
                "next":"Siguiente",
                "previous":"Anterior"
            }
        }
    });
</script>      
@endsection