@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Categorías</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Listado de Categorías</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->descripcion }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">No hay categorías registradas para mostrar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
@stop