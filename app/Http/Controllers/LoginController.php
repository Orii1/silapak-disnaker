<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticating(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            $user = Auth::user();
            $user_name = Auth::user()->name;
            $id = Auth::user()->id;
            return view('/perusahaan/dashboard', compact('user', 'user_name', 'id'));
        } else {
            Session::flash('error', 'Email atau Password salah!');
            return redirect('/login');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
