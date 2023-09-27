<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticating(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            $user_name = Auth::user()->name;
            return view('/perusahaan/dashboard', compact('user_name'));
        }
        $request->flash('failed', 'Username dan Password Salah!');
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
