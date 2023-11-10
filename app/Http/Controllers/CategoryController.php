<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    //

    private CategoryService $categoryService;

    public function __construct()
    {
        $this->categoryService = new CategoryService();
    }


    public function index()
    {
        $data = $this->categoryService->findAll();
        return view('admin.master.categories', ['data' => $data]);
    }

    public function delete(Request $request)
    {
        $rules = ['id' => 'required'];

        $this->validate($request, $rules);

        $this->categoryService->delete($request->input('id'));
        Alert::success("Sukses", "Berhasil Menghapus Kategori Ini");
        return back();
    }
}
