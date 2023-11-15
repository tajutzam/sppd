<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Services\LawService;

use Illuminate\Http\Request;

class LawController extends Controller
{
    //
    private LawService $lawService;

    public function __construct()
    {
        $this->lawService = new LawService();
    }


    public function index()
    {
        $data = $this->lawService->findAll();
        return view("admin.master.law", ['data' => $data]);
    }

}
