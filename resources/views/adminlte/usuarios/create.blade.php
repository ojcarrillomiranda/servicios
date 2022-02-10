@extends('adminlte::page')

@section('title', 'Crear Usuarios')



@section('content_header')
<div class="mr-0">
    <nav aria-label="breadcrumb" class="float-right">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('usuarios.index') }}">Lista de usuarios</a></li>
          <li class="breadcrumb-item active" aria-current="page">Crear usuarios</li>
        </ol>
      </nav>
</div>
<h1>Crear Usuarios</h1>
@stop

@section('content')
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <form action="{{ route('usuarios.store') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
                <div class="card border">
                    <div class="card-body">
                        
                        @include('partials.form-usuarios')

                    </div>
                </div>
                <div class="card-footer botones">
                    {{ Form::button('<i class="fas fa-save"></i> Guardar', ['type' => 'submit', 'class' => 'btn btn-primary', 'title' => 'Guardar'] )  }}
                    {!! Form::button('<i class="fas fa-broom"></i> Limpiar', ['type' => 'reset','class' => 'btn btn-danger float-right', 'title' => 'Limpiar']) !!}
                </div>
            </div>
        </form>
    </div>
@stop
