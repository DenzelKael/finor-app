@extends('adminlte::page')

@section('title', 'Crear Categoria')

@section('content')
    <div class="container">
        <h2>Crear Categoria</h2>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ups!</strong> Hubo un problema con tu solicitud.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulario --}}
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Description</label>
                <textarea name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" name="status" value="1" class="form-check-input" id="status"
                    {{ old('status') ? 'checked' : '' }}>
                <label class="form-check-label" for="status">Activo</label>
            </div>


            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
