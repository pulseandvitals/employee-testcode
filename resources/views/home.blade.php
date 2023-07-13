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
                <div class="card-header">{{ __('Employees') }}</div>

                <div class="card-body">
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
                          <tr>
                            <th scope="row">1</th>
                            <td>Markqwwwwwwwwwww</td>
                            <td>Ottqweeeeeeeeeeeeo</td>
                            <td>@mdoqqqqqqqqqqqqqqqqqqqqqqqq</td>
                            <td>
                                <div class="d-flex justify-content-end" title="Edit item">
                                <button class="btn btn-light fw-bold btn-sm">
                                    Update
                                </button>
                                <button class="btn btn-light fw-bold btn-sm" title="Delete item"
                                    onclick="return confirm('Do you want to delete this?')">
                                    Delete
                                </button>
                                </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
