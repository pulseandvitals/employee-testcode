<?php
namespace App\Services\Employee;

use App\Models\Employee;

class UpdateEmployeeService {

    public function execute($param, $id)
    {
        $data = Employee::where('id',$id)->update($param);

        return $data;
    }
}
