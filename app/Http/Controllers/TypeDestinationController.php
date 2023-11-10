<?php

namespace App\Http\Controllers;

use App\Services\TypeDestinationService;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TypeDestinationController extends Controller
{
    //  


    private TypeDestinationService $typeDestinationService;

    public function __construct()
    {
        $this->typeDestinationService = new TypeDestinationService();
    }


    public function index()
    {
        $data = $this->typeDestinationService->findAll();
        return view('admin.master.type-destination', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->typeDestinationService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Tipe Tujuan");
        return back();
    }
}
