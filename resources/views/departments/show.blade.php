@extends('adminlte::page')
@section('title', 'Detalle del Departamento')
@section('content_header')
    <h1>Detalle del Departamento</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <h3 class="card-title">{{$department->name}}</h3>
        </div>
        <div class="card-body">
            <p><strong>Ubicación: </strong>{{$department->location}}</p>
        </div>
        <div class="card-footer">
            <a href="{{route('departments.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('departments.edit', $department)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('departments.destroy', $department)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop