<?php

namespace App\Models;

use app\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory,HasUuid;
    protected $fillable = [
        'user_id',
        'employee_job_id',
        'employee_firstname',
        'employee_lastname',
        'job_position'
    ];
}
