<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Position;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->get();
        $employees = Employee::with('position')->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        $positions = Position::all();
        return view('employees.create', compact('departments', 'positions'));
    }

    public function store(Request $request)
    {
        Employee::create($request->all());
        return redirect()->route('employees.index')->with('success', 'El empleado fue creado correctamente');
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function edit(string $id)
    {
        $departments = Department::all();
        $positions = Position::all();
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee' , 'departments', 'positions'));
    }

    public function update(Request $request, string $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->update($request->all());
        return redirect()->route('employees.index')->with('success', 'El empleado se ha modificado correctamente');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'El empleado fue eliminado correctamente');
    }
}