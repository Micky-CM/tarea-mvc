@extends('adminlte::page')
@section('title', 'Empleados')
@section('content_header')
    <h1>Empleados</h1>
@stop
@section('content')
    <a href="{{route('employees.create')}}" class="btn btn-primary">Nuevo Empleado</a>
    <table class="table table-bordered mt-12">
        <thead>
            <th width="30px">Nro.</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Cédula</th>
            <th>Email</th>
            <th>Departamento</th>
            <th>Posición</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td>{{$employee->id}}</td>
                    <td>{{$employee->first_name}}</td>
                    <td>{{$employee->last_name}}</td>
                    <td>{{$employee->ci}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->department->name}}</td>
                    <td>{{$employee->position->title}}</td>
                    <td>
                        <a href="{{route('employees.edit', $employee)}}" class="btn btn-dark btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="{{route('employees.show', $employee)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <form action="{{route('employees.destroy', $employee)}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop