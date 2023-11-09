<?php


namespace App\Services;

use App\Exceptions\WebException;
use App\Models\Employee;

use function PHPUnit\Framework\isNull;

class EmployeeService implements Service
{

    private Employee $employee;

    public function __construct()
    {
        $this->employee = new Employee();
    }

    public function create($request)
    {
        $created = $this->employee->create($request);
        return $created;
    }

    public function update($request, $id)
    {
        $employee = $this->findById($id);
        if (!isset($employee)) {
            throw new WebException("Ops , Id Pegawai Tidak Ditemukan");
        }
        $updated = $employee->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Pegawai Terjadi Kesalahan');
    }


    public function delete($id)
    {
        $employee = $this->findById($id);
        try {
            //code...
            $employee->delete();
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function findAll()
    {
        return $this->employee->all();
    }


    public function findById($id)
    {
        $employee = $this->employee->where('id', $id)->first();


        if (!isset($employee)) {
            throw new WebException('Pegawai Tidak Ditemukan');
        }
        return $employee;
    }

}