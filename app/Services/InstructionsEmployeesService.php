<?php

namespace App\Services;

use App\Exceptions\WebException;
use App\Models\InstructionsEmployees;
use Carbon\Carbon;

class InstructionsEmployeesService
{

    private InstructionsEmployees $employees;

    public function __construct()
    {
        $this->employees = new InstructionsEmployees();
    }

    public function create($request)
    {
        // dd($request);
        try {
            //code...
            // dd($request);
            return $this->employees->create($request);
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }


    public function validateEmployees($userId)
    {
        $users = $this->employees
            ->with([
                'instructions' => function ($query) {
                    $query->latest()->first(); // Fetch the latest instruction
                },
            ])
            ->where('users', $userId)
            ->get()
            ->toArray();

        foreach ($users as $key => $value) {
            # code...

            if (!isset($value['instructios'])) {

            } else {
                $returnDate = Carbon::parse($value['instructions']['return_date'])->addDay();
                if (Carbon::now()->isBefore($returnDate)) {
                    throw new WebException("Maaf Pegawai Masih Dalam Status Bertugas.");
                }
            }

        }
    }


}