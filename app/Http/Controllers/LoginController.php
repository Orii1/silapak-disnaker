<?php

namespace App\Http\Controllers;

use App\Models\Pencatatanspsb;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Brian2694\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    public function authenticating(Request $request)
    {
        if (Auth::attempt($request->only('email','password'))){
            $user = Auth::user();
            if ($user->id_role == '1') {
                toastr()->success('Berhasil Login, Selamat Datang Admin!');
                return redirect('/admin/dashboard');
            } else if ($user->id_role == '2') {
                if ($user->status_akun == 'active') {
                    $user = Auth::user()->user_pegawai;
                    toastr()->success('Berhasil Login, Selamat Datang ' . $user->nama_pegawai . '!');
                    return redirect('/mediator/dashboard');
                } else {
                    return redirect('/aktivasi-user');
                }
            } else if ($user->id_role == '3') {
                toastr()->success('Berhasil Login, Selamat Datang Kepala Bidang HI!');
                return redirect('/kabid/dashboard');
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
