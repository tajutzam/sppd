<?php

namespace App\Exports;

use App\Services\EmployeeService;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class EmployeeExport implements FromView
{

    private EmployeeService $employeeService;

    public function __construct()
    {
        $this->employeeService = new EmployeeService();
    }

    public function view(): View
    {
        return view('exports.employee-export', [
            'data' => $this->employeeService->findAllEmployees()
        ]);
    }


}
