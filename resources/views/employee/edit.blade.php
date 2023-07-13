@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="d-flex justify-content-end">
            <div>
                <a href="{{ route('employee.index') }}" class="btn btn-secondary mb-2 rounded-0" type="button"> Back </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card rounded-0">
                <div class="card-body">
                    <h5 class="card-title">Edit Employee {{ $employee->employee_firstname }}</h5>
                    @include('employee.partials.updateEmployee', ['employee' => $employee ])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
