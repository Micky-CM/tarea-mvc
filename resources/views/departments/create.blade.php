@extends('adminlte::page')
@section('title', 'Crear Departamento')
@section('content_header')
    <h1>Agregar Departamento</h1>
@stop
@section('content')
    <form action="{{route('departments.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Departamento: </label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="location">Ubicación: </label>
            <input type="text" id="location" name="location" class="form-control" required>
        </div>

        <a href="{{route('departments.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop