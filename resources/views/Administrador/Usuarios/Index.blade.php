@extends('layouts.sliderbar')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
<section class="container">
    <h2>Control de usuarios</h2>
    <hr>
        <a type="button" class="btn btn-light" href="{{ route('users.create') }}"> Crear Nuevo Usuario <i class='bx bxs-user-plus'></i></a>
    <hr>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table id="tabla" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Acciones</th>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo Electrónico</th>
                <th scope="col">Roles</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($data as $item)
            <tr>
                <td style="width:13%;">
                    <a class="btn btn-info" href="{{ route('users.show',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Mostrar Detalles"><i class='bx bx-low-vision'></i></a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"><i class='bx bxs-edit'></i></a>
                    <a class="btn btn-danger" href="{{ route('users.eliminar',$item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                        <i class='bx bxs-trash-alt' ></i>
                    </a>
                </td>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->name}}</td>
                <td>{{ $item->email }}</td>
                <td>
                    @if(!empty($item->getRoleNames()))
                        @foreach($item->getRoleNames() as $v)
                            <span class="badge rounded-pill bg-dark">{{ $v }}</span>
                        @endforeach
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