<?php

namespace App\Http\Controllers;

use App\Exceptions\WebException;
use App\Services\AuthService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    private AuthService $authService;


    public function __construct()
    {
        $this->authService = new AuthService();
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $data = $this->validate($request, $rules);
        $successLogin = $this->authService->login($data['email'], $data['password']);
        if ($successLogin) {
            return redirect('admin/dashboard');
        }
        throw new WebException('Email Atau Password Anda Salah');
    }
}
