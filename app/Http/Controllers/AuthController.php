<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin(Request $request)
    {
        $credetials = [
            'email' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect()->route('admin.dashboard')->with('success', 'Login success');
        }
        return back()->with('error', 'Invalid Email or Password');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
