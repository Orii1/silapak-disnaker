<?php

namespace App\Http\Controllers;

use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tolak_pp = Pengesahanpp::where('status', '2')->count();
        $tolak_pkp = Pendaftaranpkb::where('status', '2')->count();
        $tolak_pkwt = Pendaftaranpkwt::where('status', '2')->count();
        $tolak_spsb = Pencatatanspsb::where('status', '2')->count();
        $tolak_lks = Pendaftaranlks::where('status', '2')->count();
        $tolak_hi = Pencatatanperselihan::where('status', '2')->count();
        $tolak_phk = Pelaporanphk::where('status', '2')->count();

        $total_tolak = $tolak_pp + $tolak_pkp + $tolak_pkwt + $tolak_spsb + $tolak_lks + $tolak_hi + $tolak_phk;

        $terima_pp = Pengesahanpp::where('status', '1')->count();
        $terima_pkp = Pendaftaranpkb::where('status', '1')->count();
        $terima_pkwt = Pendaftaranpkwt::where('status', '1')->count();
        $terima_spsb = Pencatatanspsb::where('status', '1')->count();
        $terima_lks = Pendaftaranlks::where('status', '1')->count();
        $terima_hi = Pencatatanperselihan::where('status', '1')->count();
        $terima_phk = Pelaporanphk::where('status', '1')->count();

        $total_terima = $terima_pp + $terima_pkp + $terima_pkwt + $terima_spsb + $terima_lks + $terima_hi + $terima_phk;

        $pp = Pengesahanpp::where('status', '0')->count();
        $pkb = Pendaftaranpkb::where('status', '0')->count();
        $pkwt = Pendaftaranpkwt::where('status', '0')->count();
        $spsb = Pencatatanspsb::where('status', '0')->count();
        $lks = Pendaftaranlks::where('status', '0')->count();
        $hi = Pencatatanperselihan::where('status', '0')->count();
        $phk = Pelaporanphk::where('status', '0')->count();

        $total = $pp + $pkb + $pkwt + $spsb + $lks + $hi + $phk;
        return view('/admin/dashboard', compact('total', 'total_terima', 'total_tolak'));
    }

    public function company()
    {
        $perusahaan = User::where('id', '!=', 2)->get();
        return view('/admin/perusahaan/data-perusahaan', compact('perusahaan'));
    }

    public function profile()
    {
        $profile = User::where('id', '2')->get();
        return view('/admin/profile/profileadmin', compact('profile'));
    }

    public function detail_perusahaan($id)
    {
        $detail = User::find($id);
        return view('/admin/perusahaan/detail-perusahaan', compact('detail'));
    }

    public function permohonan_pp()
    {
        $pp = Pengesahanpp::where('status', '0')->get();
        return view('/admin/pengesahan-pp/permohonan-pengesahan-pp', compact('pp'));
    }

    public function permohonan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);
        return view('/admin/pengesahan-pp/detail', compact('data'));
    }

    public function permohonan_pp_terima($id)
    {
        $permohonanpp = Pengesahanpp::find($id);
        $permohonanpp->status = '1';
        $permohonanpp->save();
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function permohonan_pp_tolak($id)
    {
        $permohonanpp = Pengesahanpp::find($id);
        $permohonanpp->status = '2';
        $permohonanpp->save();
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function pendaftaran_pkb()
    {
        $pkb = Pendaftaranpkb::where('status', '0')->get();
        return view('/admin/pendaftaran-pkb/permohonan-pendaftaran-pkb', compact('pkb'));
    }

    public function pendaftaran_pkb_show($id)
    {
        $data = Pendaftaranpkb::find($id);
        return view('/admin/pendaftaran-pkb/detail', compact('data'));
    }

    public function pendaftaran_pkb_terima($id)
    {
        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $pendaftaranpkb->status = '1';
        $pendaftaranpkb->save();
        return redirect('/admin/pendaftaran-pkb');
    }

    public function pendaftaran_pkb_tolak($id)
    {
        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $pendaftaranpkb->status = '2';
        $pendaftaranpkb->save();
        return redirect('/admin/pendaftaran-pkb');
    }
}
