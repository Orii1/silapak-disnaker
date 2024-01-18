<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request){
        $user = User::create([
            'role_id' => '2',
            'name' => $request->name,
            'owner' => $request->owner,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        event(new Registered($user));

        Auth::login($user);
        return view('/login/verify-email');
        // toastr()->info('Berhasil Membuat Akun!, Silahkan Login');
        // return redirect('/login');
    }


}
