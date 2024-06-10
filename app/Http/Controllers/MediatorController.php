<?php

namespace App\Http\Controllers;

use App\Models\DetailPengecekan;
use App\Models\Pengesahanpp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MediatorController extends Controller
{
    public function index()
    {
        return view('mediator.home.home');
    }

    public function profile()
    {
        $mediator = Auth::user()->user_pegawai;
        return view('mediator.profile.profilemediator',compact('mediator'));
    }

    public function pengesahan_pp()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek',function ($query) {
                $query->where('id_pegawai',Auth::user()->user_pegawai->id_pegawai);
            });
        })
        ->orderBy('created_at')
        ->get();
        return view('mediator.pengesahan-pp.pengesahan-pp',compact('pp'));
    }
}
