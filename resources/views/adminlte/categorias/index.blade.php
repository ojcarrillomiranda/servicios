@extends('adminlte::page')

@section('title', 'Listado de categorias')

@section('content_header')
<div class="mr-0 link">
    <nav aria-label="breadcrumb" class="float-right">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lista de categorias</li>
        </ol>
    </nav>
</div>
<h1 class="text-xs-center text-sm-center">Gestion de Categorias</h1>
@stop

@section('content')
<div class="container-fluid">

<div class="card">
    <div class="card-body">
            <a href="{{ route('categorias.create') }}" class="btn btn-primary btn-sm font-weight-bold boton">+ Categoria</a>
            <table id="categorias" class="table table-striped table-hover table-sm table-responsive-sm">
                <thead class="bg-dark">
                    <tr class="text-uppercase text-center">
                        <th>id</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>foto</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td id="descripcion"><p>{{$categoria->descripcion}}</p></td>
                        <td><img src="{{ $categoria->image->url}}" class="img-fluid img-thumbnail" width="70" height="70"></td>
                        <td>
                            <button data-toggle="modal" data-target="#categorias{{ $categoria->id }}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Editar">
                                <i class="fa fa-lg fa-fw fa-pen"></i>
                            </button>




                            <button data-toggle="modal" data-target="#verCategoria{{ $categoria->id }}" class="btn btn-xs btn-default text-success mx-1 shadow" title="Ver" id="cat">
                                <i class="fa fa-lg fa-fw fa-eye"></i>
                            </button>


                              <form action="/categorias/{{ $categoria->id }}" method="POST" class="d-inline eliminarCategoria">
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
<script>
    $(document).ready(function() {
        $('#categorias').DataTable({
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
             },

            });
        });

</script>
@if(session('info') == 'ok')
<script>
    Swal.fire(
        '¡Exelente!'
        , '¡La categoria se creó con exito!'
        , 'success'
    , )

</script>
@endif
@if(session('update') == 'ok')
<script>
    Swal.fire(
        '¡Exelente!'
        , '¡Los datos fueron actualizados con exito!'
        , 'success'
    , )

</script>
@endif


<script>
    $(".eliminarCategoria").submit(function(e) {
        e.preventDefault();


        Swal.fire({
            title: '¿Estas seguro?',
            text: "¡La categoría se eliminara definitivamente!",
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
        });

    });

</script>
@if (session('eliminar') == 'ok')
    <script>
        Swal.fire(
            '¡Correcto!',
            'La Categoría se elimino con exito.',
            'success'
        );

    </script>
@endif

<script>
    document.getElementById("image").onchange = function(e) {
        // Creamos el objeto de la clase FileReader
        let reader = new FileReader();

        // Leemos el archivo subido y se lo pasamos a nuestro fileReader
        reader.readAsDataURL(e.target.files[0]);

        // Le decimos que cuando este listo ejecute el código interno
        reader.onload = function() {
            let preview = document.getElementById('categoria')
                , image = document.createElement('img');

            image.src = reader.result;

            preview.innerHTML = '';
            preview.append(image);
        };
    }

</script>
@endsection

