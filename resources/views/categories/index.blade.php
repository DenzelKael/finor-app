@extends('adminlte::page')

@section('title', 'Categorías')

@section('content_header')
    <h1>Gestion de Categorías/ Listado de Categorías</h1>
@stop

@section('content')
    <a href="{{ route('categories.create') }}" class="btn btn-success my-3">
        Crear Nueva Categoría
    </a>
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
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}"><i class="fas fa-pen"></i> </a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                            style="display:inline-block;"
                            onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline text-danger" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@stop

@section('js')
@stop
