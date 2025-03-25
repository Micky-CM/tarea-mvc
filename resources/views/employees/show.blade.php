@extends('adminlte::page')
@section('title', 'Detalle del Empleado')
@section('content_header')
    <h1>Detalle del Empleado</h1>
@stop
@section('content')
    <div class="card bg-gradient-dark">
        <div class="card-header">
            <strong><h3 class="card-title">{{$employee->first_name . ' ' . $employee->last_name}}</h3></strong>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4"><p><strong>Cédula: </strong>{{$employee->ci}}</p></div>
                <div class="col-md-4"><p><strong>Fecha de nacimiento: </strong>{{$employee->birth_date}}</p></div>
                <div class="col-md-4"><p><strong>Género: </strong>{{$employee->gender}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-4"><p><strong>Correo electrónico: </strong>{{$employee->email}}</p></div>
                <div class="col-md-4"><p><strong>Teléfono: </strong>{{$employee->phone}}</p></div>
                <div class="col-md-4"><p><strong>Fecha de contratación: </strong>{{$employee->hire_date}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-4"><p><strong>Departamento: </strong>{{$employee->department->name}}</p></div>
                <div class="col-md-4"><p><strong>Posición: </strong>{{$employee->position->title}}</p></div>
                <div class="col-md-4"><p><strong>Salario: </strong>{{$employee->salary}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-4"><p><strong>País: </strong>{{$employee->country}}</p></div>
                <div class="col-md-4"><p><strong>Ciudad: </strong>{{$employee->city}}</p></div>
                <div class="col-md-4"><p><strong>Dirección: </strong>{{$employee->address}}</p></div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{route('employees.index')}}" class="btn btn-secondary">Volver</a>
            <a href="{{route('employees.edit', $employee)}}" class="btn btn-primary">Modificar</a>
            <form action="{{route('employees.destroy', $employee)}}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
@stop