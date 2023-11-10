<?php

namespace App\Http\Controllers;

use App\Services\BankAccountService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BankAccountController extends Controller
{
    //

    private BankAccountService $bankAccountService;

    public function __construct()
    {
        $this->bankAccountService = new BankAccountService();
    }


    public function index()
    {
        $data = $this->bankAccountService->findAll();
        // dd($data);
        return view('admin.master.bank-account', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->bankAccountService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Nomor Rekening Ini");
        return back();
    }
}
