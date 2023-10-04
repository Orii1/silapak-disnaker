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
            $user_role = Auth::user()->role_id;
            if ($user_role == '1') {
                return view('/admin/dashboard');
            } else if ($user_role == '2') {
                $user = Auth::user();
                return view('/perusahaan/dashboard', compact('user'));
            }
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
