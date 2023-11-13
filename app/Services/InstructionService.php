<?php


namespace App\Services;

use App\Models\Instructions;
use App\Models\InstructionsEmployees;

class InstructionService
{

    private Instructions $instructions;

    private InstructionsEmployees $employees;

    private EmployeeService $employeeService;

    public function __construct()
    {
        $this->instructions = new Instructions();
        $this->employeeService = new EmployeeService();
        $this->employees = new InstructionsEmployees();
    }



    public function create($request)
    {
        // list of users instructions
        $users = [];
        foreach ($request['users'] as $key => $value) {
            # code...
            $user = $this->employeeService->findById($value['id']);
            array_push($users, $user);
        }
    }


}