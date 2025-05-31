@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Categorias</h1>
@stop

@section('content')
    <p>Listado de Categorias</p>
    <ul>
        @foreach ($categories as $category)
            <li class="bg-warning">
                <p>{{ $category->name }}</p>
                <p>{{ $category->descripcion }}</p>
            </li>
        @endforeach
    </ul>

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script>
        console.log("Hola Mundo desde Categorias");
    </script>
@stop
