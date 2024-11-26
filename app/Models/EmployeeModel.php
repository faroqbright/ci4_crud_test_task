<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'phone'];
    protected $useTimestamps = true;

    protected $validationRules = [
        'name'  => 'required|min_length[3]',
        'email' => 'required|valid_email',
        'phone' => 'required'
    ];
}
