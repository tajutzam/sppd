<?php


namespace App\Services;

use App\Models\Instructions;
use App\Models\InstructionsEmployees;

class InstructionService
{

    private Instructions $instructions;

    private InstructionsEmployees $employees;

    public function __construct()
    {
        $this->instructions = new Instructions();
    }



    public function create()
    {

    }


}