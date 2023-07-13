<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        switch($this->method()) {
            case 'POST':
                return [
                    'employee_firstname' => 'required|string|max:30',
                    'employee_lastname' => 'required|string|max:30',
                    'job_position' => 'string',
            ];
            case 'PATCH':
                return [
                    'employee_firstname' => 'required|string|max:30',
                    'employee_lastname' => 'required|string|max:30',
                    'job_position' => 'string',
            ];
        }
    }
}
