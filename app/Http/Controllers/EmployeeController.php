<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeeRequest;
use App\Services\Users\getCurrentUser;
use App\Services\Employee\StoreEmployeeService;
use App\Services\Employee\UpdateEmployeeService;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::all()
        ]);
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(EmployeeRequest $request, StoreEmployeeService $employee, getCurrentUser $user)
    {
        abort_if(!auth()->check(), 403, 'Unauthorized.');
        $user = $user->execute();
        $employee = $employee->execute($request->validated(),$user);
        return redirect()->route('employee.index');

    }


    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee
        ]);
    }

    public function update(EmployeeRequest $request, UpdateEmployeeService $employeeService, Employee $employee)
    {
        abort_if(!auth()->check(), 403, 'Unauthorized.');
        $user = $employee->id;
        $employee = $employeeService->execute($request->validated(), $user);

        return redirect()->route('employee.index')->with('success','Successfully Updated.');
    }

    public function destroy(Employee $employee)
    {
        abort_if(!auth()->check(), 403, 'Unauthorized.');
        $employee->delete();

        return redirect()->route('employee.index')->with('success','Successfully deleted.');
    }
}
