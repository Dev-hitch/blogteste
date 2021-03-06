<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function authlogin(Request $request)
    {
        $credentials = [
            'email'=> $request->email,
            'password'=> $request->password,

        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        }
        return redirect()->back()->withinput()->withErrors([' Os dados cadastrados não conferem']);
    }

    public function logout()
    {
       Auth::logout();
        return redirect()->route('admin.login');
    }
}
