@extends('adminlte::page')
@section('title', 'Editar Departamento')
@section('content_header')
    <h1>Editar Departamento</h1>
@stop
@section('content')
    <form action="{{route('departments.update', $department)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Departamento: </label>
            <input type="text" name="name" id="name" class="form-control" value="{{$department->name}}" required>
        </div>
        <div class="form-group">
            <label for="location">Ubicación: </label>
            <input type="text" id="location" name="location" class="form-control" value="{{$department->location}}" step="0.01" required>
        </div>

        <a href="{{route('departments.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </form>
@stop