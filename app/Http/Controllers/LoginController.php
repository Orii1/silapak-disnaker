<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticating(Request $request){
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
            return 'gagal';
    }
}
