<?php

namespace App\Http\Controllers;

use App\Services\EmployeeService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeeController extends Controller
{
    //

    private EmployeeService $employeeService;

    public function __construct()
    {
        $this->employeeService = new EmployeeService();
    }

    public function employees()
    {
        $data = $this->employeeService->findAllEmployees();
        return view('admin.master.employee', ['data' => $data]);
    }

    public function cadress()
    {
        $data = $this->employeeService->findAllCadress();

        return view('admin.master.cadress', ['data' => $data]);
    }


    public function deleteEmployee(Request $request)
    {

        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->employeeService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Pegawai");
        return back();
    }


    public function storeEmployee(Request $request)
    {
        $rules = [
            'name' => 'required',
            'nip' => 'required|numeric',
            'rank' => 'required',
            'group' => 'required',
            'position' => 'required',
            'daily_money' => 'required|numeric',
            'transport_money' => 'required|numeric',
            'food_money' => 'required|numeric',
            'role' => 'required'
        ];

        $message = [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'nip.required' => 'Nip Tidak Boleh Kosong',
            'rank.required' => 'Pangkat Tidak Boleh Kosong',
            'group.required' => "Golongan Tidak Boleh Kosong",
            'position.required' => 'Jabatan Tidak Boleh Kosong',
            'daily_money.required' => 'Uang Harian Tidak Boleh Kosong',
            'food_money.required' => 'Uang Makan Tidak Boleh Kosong',
            'transport_money.required' => 'Uang Transportasi tidak boleh kosong',
            'daily_money.numeric' => 'Uang Harian Harus Berupa number',
            'food_money.numeric' => 'Uang Makan Harus Berupa Number',
            'transport_money.numeric' => 'Uang Transportasi Harus Berupa Number'
        ];

        $data = $this->validate($request, $rules, $message);
        $this->employeeService->create($data);
        Alert::success("Sukses", "Berhasil Menambahkan Pegawai");
    }


    public function storeCadress(Request $request)
    {
        $rules = [
            'name' => 'required',
            'nip' => 'required|numeric',
            'rank' => 'required',
            'group' => 'required',
            'position' => 'required',
            'daily_money' => 'required|numeric',
            'transport_money' => 'required|numeric',
            'food_money' => 'required|numeric',
            'role' => 'required'
        ];

        $message = [
            'name.required' => 'Nama Tidak Boleh Kosong',
            'nip.required' => 'Nip Tidak Boleh Kosong',
            'rank.required' => 'Pangkat Tidak Boleh Kosong',
            'group.required' => "Golongan Tidak Boleh Kosong",
            'position.required' => 'Jabatan Tidak Boleh Kosong',
            'daily_money.required' => 'Uang Harian Tidak Boleh Kosong',
            'food_money.required' => 'Uang Makan Tidak Boleh Kosong',
            'transport_money.required' => 'Uang Transportasi tidak boleh kosong',
            'daily_money.numeric' => 'Uang Harian Harus Berupa number',
            'food_money.numeric' => 'Uang Makan Harus Berupa Number',
            'transport_money.numeric' => 'Uang Transportasi Harus Berupa Number'
        ];

        $data = $this->validate($request, $rules, $message);
        $this->employeeService->create($data);
        Alert::success("Sukses", "Berhasil Menambahkan Kader");
    }

}
