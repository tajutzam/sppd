<?php

namespace App\Http\Controllers;

use App\Services\AccountService;
use App\Services\UserService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    //


    private AccountService $accountService;

    public function __construct()
    {
        $this->accountService = new AccountService();
    }


    public function index()
    {
        $data = $this->accountService->findAll();
        return view('admin.master.account', ['data' => $data]);
    }


    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->accountService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Akun Ini");
        return back();
    }


    public function create()
    {

    }

    public function edit()
    {

    }

    public function store(Request $request)
    {
        $rules = [
            'role' => 'required',
            'name' => 'required|string|unique:account,name'
        ];


        $data = $this->validate($request, $rules);
        $this->accountService->create($data);
        Alert::success("Sukses", "Berhasil Menambahkan Akun");
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'role' => 'required',
            'name' => 'required|string|unique:account,name'
        ];

        $data = $this->validate($request, $rules);
        $this->accountService->update($id, $data);
        Alert::success("Sukses", "Berhasil Memperbarui Akun");
    }

}
