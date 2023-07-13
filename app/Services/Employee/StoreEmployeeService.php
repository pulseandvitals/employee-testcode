<?php
namespace App\Services\Employee;

use App\Models\Employee;

class StoreEmployeeService {

    public function execute($param, $user)
    {
        $auth = auth()->user()->role;
        $data = [
            'user_id' => $user,
            'employee_job_id' => floor(time()-999999999),
            'job_position' => $auth == 'manager' ? $param['job_position'] : $auth,
        ];
        $merged = array_merge($param, $data);
        Employee::create($merged);

        return $merged;
    }
}
