<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }
    public function postLogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('admin');
        }
        return redirect()->route('login')->with('pesan', 'anda gagal login mungkin salah username atau password');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
