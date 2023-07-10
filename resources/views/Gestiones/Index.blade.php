@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<section class="container">
    <h2>Gestiones de Solicitudes</h2>
    <hr>
    @can('gestiones-create')
    <a class="btn btn-outline-success justify-content-end" href="{{route('Gestiones.create')}}">Agregar solicitud <i class='bx bxs-paper-plane'></i></a>
    @endcan
    @can('gestiones-filter')
    <a class="btn btn-outline-success justify-content-end" href="#" data-bs-toggle="modal" data-bs-target="#filtrosFechas">Filtro de búsqueda <i class='bx bx-filter' ></i></a>
    <!-- Modal -->
    <div class="modal fade" id="filtrosFechas" tabindex="-1" aria-labelledby="filtrosFechasLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('Gestiones.filter')}}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filtrosFechasLabel">Filtrado de búsqueda avanzado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-4">
                            <div class="col">
                                <label class="form-label" for="form6Example16" required>FECHA DE SOLICITUD</label>
                                <input type="date" name="fecha_de_solicitud" id="form6Example16" class="form-control"/>
                            </div>
                            <div class="col">
                                <label class="form-label" for="form6Example17" required>FECHA DE RESPUESTA</label>
                                <input type="date" name="fecha_de_respuesta" id="form6Example17" class="form-control"/>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label class="form-label" for="form6Example18" required>ESTATUS</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="flexRadioDefault1" value="Pendiente">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Pendiente
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="flexRadioDefault2" value="En Tramite">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    En Trámite
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="flexRadioDefault2" value="Terminada">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                    Terminada
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Filtro avanzado</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endcan
    <hr>
    <form class="justify-content-center d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" name="buscar">
        <button class="btn btn-success" type="submit">Buscar</button>
    </form>
    <ul class="container justify-content-center">
        <li type="disc">Aquí puedes encontrar los registros por N° de gestión y por clave asignado.</li>   
    </ul>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>
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
                    @can('gestiones-edit')
                    <a class="btn btn-primary" href="{{ route('Gestiones.edit',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i class='bx bxs-edit'></i></a>
                    @endcan
                    @can('gestiones-delete')
                    <a href="{{ route('Gestiones.eliminar',$item->id) }}" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                        <i class='bx bxs-trash-alt' ></i>
                    </a>
                    @endcan
                    <a class="btn btn-light" href="{{ route('Gestiones.details',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar Detalles"><i class='bx bx-low-vision' ></i></a>
                    @can('gestiones-export')
                    <a class="btn btn-warning" href="{{ route('Gestiones.export', $item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Exportar"><i class='bx bx-export' ></i></a>
                    @endcan
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