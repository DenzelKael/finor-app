@extends('adminlte::page')

@section('title', 'Detalle de Categoría')

@section('content_header')
    <h1>Detalle de Categoría</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-info text-white">
            <h3 class="card-title">{{ $category->name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nombre:</strong> {{ $category->name }}</p>
            <p><strong>Descripción:</strong> {{ $category->descripcion }}</p>
            <p><strong>Estado:</strong> {{ $category->status ? 'ACTIVO':'INACTIVO' }}</p>

            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
@stop
