<?php

namespace App\Http\Controllers;

use App\Services\BankAccountService;
use App\Services\TransportationService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransportationController extends Controller
{
    //

    private TransportationService $service;


    public function __construct()
    {
        $this->service = new TransportationService();
        // $this->bankAccountService = new BankAccountService();
    }


    public function index()
    {
        $data = $this->service->findAll();
        return view('admin.master.transportation', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->service->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Transportasi Ini");
        return back();
    }
}
