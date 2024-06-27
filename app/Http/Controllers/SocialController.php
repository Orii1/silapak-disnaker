<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            if ($existingUser->status_akun == 'active') {
                Auth::login($existingUser);
                return redirect('/perusahaan/dashboard');
            } else {
                return redirect('/aktivasi-user');
            }
        } else {
            return view('login.register', compact('user'));
        }

    }
}
