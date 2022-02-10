@extends('adminlte::page')

@section('title', 'Listado de usuarios')

@section('content_header')
<div class="mr-0">
    <nav aria-label="breadcrumb" class="float-right">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de usuarios</li>
        </ol>
    </nav>
</div>
<h1>Gestion de usuarios</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm boton"><i class="fas fa-user-plus"></i></a>

            <table id="usuarios" class="table table-striped table-hover table-sm table-responsive-sm">
                <thead class="bg-dark text-center">
                    <tr class="text-capitalize">
                        <th>id</th>
                        <th>tipo documento</th>
                        <th>documento</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>telefono</th>
                        <th>email</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->tipo_documento}}</td>
                        <td>{{$usuario->documento}}</td>
                        <td>{{$usuario->nombres}}</td>
                        <td>{{$usuario->primer_apellido}}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{$usuario->email}}</td>
                        <td>
                            <button data-toggle="modal" data-target="#usuarios{{ $usuario->id }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>


                             <button data-toggle="modal" data-target="#verCategoria{{ $usuario->id }}" class="btn btn-xs btn-default text-success mx-1 shadow" title="Ver">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>



                                <!-- Boton eliminar -->
                            <form action="/usuarios/{{ $usuario->id }}" method="POST" class="d-inline eliminarUsuario">
                                @method('delete')
                                @csrf
                                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Eliminar">
                                        <i class="fa fa-lg fa-fw fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@stop

@section('adminlte_js')
{{-- datatables --}}
<script>
    $(document).ready(function() {
        $('#usuarios').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ resgistros"
                , "zeroRecords": "No se encontraron resultados"
                , "info": "Mostrando registros del _START_ al _END_  de un total de  _TOTAL_ registros"
                , "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros"
                , "infoFiltered": "(Filtrado de un total de _MAX_ registros)"
                , "sSearch": "Buscar"
                , "oPaginate": {
                    "sFirst": "Primero"
                    , "sLast": "Ultimo"
                    , "sNext": "Siguiente"
                    , "sPrevious": "Anterior"
                }
                , "sProcessing": "Procesando..."
            }
        });
    });

</script>
@if(session('info') == 'ok')
<script>
    Swal.fire(
        '¡Exelente!'
        , '¡El usuario se creó con exito!'
        , 'success'
    , )

</script>
@endif
@if(session('update') == 'ok')
<script>
    Swal.fire(
        '¡Exelente!'
        , 'Los datos fueron actualizados con exito!'
        , 'success'
    , )

</script>
@endif
<script>
    $(".eliminarUsuario").submit(function(e) {
        e.preventDefault();


        Swal.fire({
            title: '¿Estas seguro?',
            text: "¡El usuario se eliminara definitivamente!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Si,  Eliminar!',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if (result.isConfirmed) {

                this.submit();
            }
        })

    });

</script>
@if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
            '¡Correcto!',
            'El usuario se elimino con exito.',
            'success'
        );

    </script>
@endif
@endsection

