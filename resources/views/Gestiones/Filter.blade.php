@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<section class="container">
    <h2><a href="{{ route('Gestiones.index') }}"><i class='bx bx-chevrons-left'></i></a> Filtrado avanzado</h2>  
    <hr>
    <table id="tabla" class="table table-striped dt-responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ACCIONES</th>
                <th scope="col">#</th>
                <th scope="col">N° DE GESTIÓN</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">APELLIDO PATERNO</th>
                <th scope="col">APELLIDO MATERNO</th>
                <th scope="col">FECHA DE SOLICITUD</th>
                <th scope="col">FECHA DE RESPUESTA</th>
                <th scope="col">ESTATUS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gestiones as $item)
            <tr>
                <td style="width:15%;">
                    <a class="btn btn-primary" href="{{ route('Gestiones.edit',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i class='bx bxs-edit'></i></a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                        <i class='bx bxs-trash-alt' ></i>
                    </button>
                    <a class="btn btn-light" href="{{ route('Gestiones.details',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar Detalles"><i class='bx bx-low-vision' ></i></a>
                    <a class="btn btn-warning" href="{{ route('Gestiones.export', $item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Exportar"><i class='bx bx-export' ></i></a>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Registro</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                Buen día, ¿Usted está seguro de eliminar este registro?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="{{ route('Gestiones.destroy',$item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>{{$item->id}}</td>
                <td>{{$item->NumeroGestion}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->a_paterno}}</td>
                <td>{{$item->a_materno}}</td>
                <td>{{$item->fechasol}}</td>
                <td>{{$item->fecharespuesta}}</td>
                <td>
                    @if ($item->estatus == 'Pendiente')
                        <span class="badge text-bg-danger">Pendiente</span>
                    @else
                        @if ($item->estatus == 'En tramite')
                            <span class="badge text-bg-warning">En trámite</span>
                        @endif
                        @if ($item->estatus == 'Terminado')
                            <span class="badge text-bg-success">Terminado</span>
                        @endif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
</section>
@endsection