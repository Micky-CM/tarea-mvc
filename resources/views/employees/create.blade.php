@extends('adminlte::page')
@section('title', 'Agregar Empleado')
@section('content_header')
    <h1>Agregar datos del Empleado</h1>
@stop
@section('content')
    <form action="{{route('employees.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">Nombres: </label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Apellidos: </label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ci">Cédula: </label>
                    <input type="text" id="ci" name="ci" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="email">Correo electrónico: </label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="phone">Teléfono: </label>
                    <input type="text" id="phone" name="phone" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="birth_date">Fecha de nacimiento: </label>
                    <input type="date" id="birth_date" name="birth_date" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="gender">Género: </label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="country">País: </label>
                    <input type="text" id="country" name="country" class="form-control" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="city">Ciudad: </label>
                    <input type="text" id="city" name="city" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="address">Dirección: </label>
                    <input type="text" id="address" name="address" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="department_id">Departamento: </label>
                    <select name="department_id" id="department_id" class="form-control">
                        @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="position_id">Posición: </label>
                    <select name="position_id" id="position_id" class="form-control">
                        @foreach($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->title }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="hire_date">Fecha contratacón: </label>
                    <input type="date" id="hire_date" name="hire_date" class="form-control" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="salary">Salario: </label>
                    <input type="number" id="salary" name="salary" class="form-control" required>
                </div>
            </div>
        </div>
        <a href="{{route('employees.index')}}" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop