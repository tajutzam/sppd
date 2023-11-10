<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    //

    private UserService $UserService;

    public function __construct()
    {
        $this->UserService = new UserService();
    }


    public function index()
    {
        $id = Auth::guard('users')->user()->id;
        $data = $this->UserService->findAllWithoutId($id);
        return view('admin.master.user', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->UserService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus User");
        return back();
    }

}
