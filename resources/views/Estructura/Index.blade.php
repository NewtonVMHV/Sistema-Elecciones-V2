@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <section class="container">
        <h2>Estructura del cambio</h2>
        <hr>
        <a class="btn btn-outline-success justify-content-end" href="{{route('Estructura.create')}}">Agregar estructura <i class='bx bxs-user-plus' ></i></a>
        <a class="btn btn-outline-success justify-content-end" href="#" data-bs-toggle="modal" data-bs-target="#filtros">Filtros de búsqueda <i class='bx bx-filter' ></i></a>
        <button type="button" class="btn btn-outline-success justify-content-end" data-bs-toggle="modal" data-bs-target="#estructuras">Filtros por estructura <i class='bx bx-filter' ></i></button>
        <div class="modal fade" id="estructuras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('Estructura.FilterEstructura') }}">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Filtrado por estructura</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col">
                                <label class="form-check-label">ESTRUCTURA</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault1" value="Representante de casilla">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Representante de Casilla
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estructura" id="flexRadioDefault2" value="Representante general">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Filtro avanzado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            
        <div class="modal fade" id="filtros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filtrado de búsqueda avanzado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('Estructura.filter') }}">
                            <ul>
                                <li type="disc">Aquí puedes filtrar los registros por seccion, apellidos, fecha de nacimiento, tipo, colonia y estatus.</li>   
                            </ul>
                            @csrf     
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">SECCIÓN</label>
                                        <input type="text" id="form6Example1" class="form-control" name="seccion" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">APELLIDO PATERNO</label>
                                        <input type="text" id="form6Example2" class="form-control" name="apellido_paterno"/>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example2">APELLIDO MATERNO</label>
                                        <input type="text" id="form6Example2" class="form-control" name="apellido_materno"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example1">FECHA DE NACIMIENTO</label>
                                    <input type="date" id="form6Example1" class="form-control" name="f_nacimiento"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-outline">
                                    <label class="form-label" for="form6Example2">COLONIA</label>
                                    <input type="text" id="form6Example2" class="form-control" name="colonia"/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">TIPOS</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option></option>
                                            @foreach ($tipos as $item)
                                                <option value="{{ $item->nombre }}">{{ $item->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form6Example1">ESTATUS</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estatus" id="flexRadioDefault1" value="ACTIVO">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                            ACTIVO
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="estatus" id="flexRadioDefault2" value="INACTIVO">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                            INACTIVO
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
        </div>
        <hr>
        <form class="container justify-content-center d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" name="buscar">
            <button class="btn btn-success" type="submit">Buscar</button>
        </form>
        <ul class="container justify-content-center">
            <li type="disc">Aquí puedes encontrar los registros por clave, colonia, clave elector, nombre, apellido y curp.</li>   
        </ul>
        <br>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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