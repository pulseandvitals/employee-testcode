@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="d-flex justify-content-end">
                <div>
                    <a href="{{ route('employee.create') }}" class="btn btn-success mb-2 rounded-0" type="button"> Create Employee </a>
                </div>
            </div>
            <div class="card rounded-0">
                <div class="card-body">
                    @include('components.alerts.success')
                    <h5 class="card-title">Create new employee</h5>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Employee ID</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Position</th>
                            <th scope="col">&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <th scope="row">{{ $employee->employee_job_id }}</th>
                                <td>{{ $employee->employee_firstname }}</td>
                                <td>{{ $employee->employee_lastname }}</td>
                                <td>
                                    <div class="{{ $employee->job_position == 'manager' ? 'badge bg-primary' : 'badge bg-success' }}">
                                        {{ $employee->job_position }}
                                    </div>
                                </td>
                                <td>
                                    @if(auth()->user()->role == $employee->job_position || auth()->user()->role == 'manager')
                                    <div class="d-flex justify-content-end" title="Edit item">
                                    <a href="{{ route('employee.edit',$employee) }}" class="btn btn-light fw-bold btn-sm">
                                        Edit
                                    </button>
                                    <a href="{{ route('employee.destroy',$employee) }}" class="btn btn-light fw-bold btn-sm" title="Delete item"
                                        onclick="return confirm('Do you want to delete this?')">
                                        Delete
                                    </a>
                                    </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
