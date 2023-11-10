<?php

namespace App\Http\Controllers;

use App\Services\CostService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CostController extends Controller
{
    //

    private CostService $costService;

    public function __construct()
    {
        $this->costService = new CostService();
    }


    public function index()
    {
        $data = $this->costService->findAll();
        return view('admin.master.cost', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->costService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Biaya Ini");
        return back();
    }
}
