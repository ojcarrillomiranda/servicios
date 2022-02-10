@extends('adminlte::page')

@section('title', 'Bienvenido')

@section('content_header')
<h1>Bienvenido</h1>

@stop

@section('content')
<div class="row">
    <div class="col-md-3">
        <x-adminlte-small-box title="{{ $conteoUsuarios }}" text="Usuarios" icon="fas fa-fw fa-users-cog text-white" theme="info" url="usuarios" url-text="Ver usuarios" class="font-weight-bold"/>
    </div>
    <div class="col-md-3">
        <x-adminlte-small-box title="{{ $conteo }}" text="Servicios" icon="fab fa-fw fa-buffer text-dark" theme="warning" url="categorias" url-text="Ir a servicios" class="font-weight-bold"/>
    </div>
    <div class="col-md-3">
        <x-adminlte-small-box title="0" text="Profesionales" icon="fas fa-fw fa-user-tie text-dark" theme="danger" url="#" url-text="Listado de profesionales" id="sbUpdatable" class="font-weight-bold"/>
    </div>
    <div class="col-md-3">
        <x-adminlte-small-box title="424" text="Clientes" icon="fas fa-fw fa-users text-dark" theme="teal" url="#" url-text="Ver clientes" class="font-weight-bold"/>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="public/Adminlte/css/admin_custom.css">
@stop
