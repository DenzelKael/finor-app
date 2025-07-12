@extends('adminlte::page')

@section('title', 'Editar Categoría')

@section('content_header')
    <h1>Editar Categoría</h1>
@stop

@section('content')
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea name="descripcion" class="form-control">{{ old('descripcion', $category->descripcion) }}</textarea>
        </div>

        <div class="form-group form-check">
            <input type="hidden" name="status" value="0">
            <input type="checkbox" name="status" id="status" value="1" class="form-check-input"
                {{ old('status', $category->status) ? 'checked' : '' }}>
            <label class="form-check-label" for="status">Activo</label>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@stop
