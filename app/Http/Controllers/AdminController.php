<?php

namespace App\Http\Controllers;

use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pp = Pengesahanpp::count();
        $pkb = Pendaftaranpkb::count();
        $pkwt = Pendaftaranpkwt::count();
        $spsb = Pencatatanspsb::count();
        $lks = Pendaftaranlks::count();
        $hi = Pencatatanperselihan::count();
        $phk = Pelaporanphk::count();

        $total = $pp + $pkb + $pkwt + $spsb + $lks + $hi + $phk;
        return view('/admin/dashboard', compact('total'));
    }

    public function permohonan_pp()
    {
        $pp = Pengesahanpp::all();
        return view('/admin/permohonan-pengesahan-pp', compact('pp'));
    }

    public function permohonan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);
        return view('/admin/detail', compact('data'));
    }

    public function permohonan_pp_terima($id)
    {
        $permohonanpp = Pengesahanpp::find($id);
        $permohonanpp->status = '1';
        $permohonanpp->save();
        return redirect('/admin/permohonan-pengesahan-pp');
    }
}
