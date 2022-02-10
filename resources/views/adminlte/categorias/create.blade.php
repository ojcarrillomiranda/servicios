@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('adminlte_css')
    <style>
        .card-footer button:hover {
            transform: scale(1.1);
        }

        .card-footer a:hover {
            transform: scale(1.1);
        }

        #ver {
            width: 50%;
            height: 144px;
        }

        #ver img {
            width: 100%;
            height: 100%;
        }

    </style>
@endsection

@section('content_header')
    <div class="mr-0">
        <nav aria-label="breadcrumb" class="float-right">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
                <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Lista de categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Crear categoria</li>
            </ol>
        </nav>
    </div>
    <h1>Crear Categoria</h1>
@stop

@section('content')
<div class="col-8 container">
    <div class="card">
        {!! Form::open(['route' => 'categorias.store', 'files' => true]) !!}
        <div class="card-body">
            <div class="card">
                <div class="card-body border">
                    @include('partials.form-categorias')
                </div>
            </div>
        </div>
        <div class="card-footer pb-3">
            {{ Form::button('<i class="fas fa-save"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-md px-5', 'title' => 'Guardar']) }}
            {!! Form::button('<i class="fas fa-broom"></i>', ['type' => 'reset', 'class' => 'btn btn-danger pull-right btn-md ml-2 px-5', 'title' => 'Limpiar']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
@stop
