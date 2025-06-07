@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Gestion de Categorías/ Listado de Categorías</h1>
@stop

@section('content')
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->descripcion }}</td>
                    <td>{{ $category->status ? 'ACTIVO' : 'INACTIVO' }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category->id) }}"><i class="fas fa-eye"></i> </a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@stop

@section('js')
@stop
