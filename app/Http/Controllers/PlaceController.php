<?php

namespace App\Http\Controllers;

use App\Services\PlacesService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlaceController extends Controller
{
    //

    private PlacesService $placeService;



    public function __construct()
    {
        $this->placeService = new PlacesService();
    }



    public function index()
    {
        $data = $this->placeService->findAll();
        return view('admin.master.place', ['data' => $data]);
    }


    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->placeService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Tempat Ini");
        return back();
    }
    

}
