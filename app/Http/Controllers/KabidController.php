<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;

use Carbon\Carbon;
use App\Models\User;

class KabidController extends Controller
{
    public function dashboard()
    {
        // Log::info('Dashboard method called');
        // $tolak_pp = Pengesahanpp::where('status', '2')->count();
        // $tolak_pkp = Pendaftaranpkb::where('status', '2')->count();
        // $tolak_pkwt = Pendaftaranpkwt::where('status', '2')->count();
        // $tolak_spsb = Pencatatanspsb::where('status', '2')->count();
        // $tolak_lks = Pendaftaranlks::where('status', '2')->count();
        // $tolak_hi = Pencatatanperselihan::where('status', '2')->count();
        // $tolak_phk = Pelaporanphk::where('status', '2')->count();

        // $total_tolak = $tolak_pp + $tolak_pkp + $tolak_pkwt + $tolak_spsb + $tolak_lks + $tolak_hi + $tolak_phk;

        // $terima_pp = Pengesahanpp::where('status', '1')->count();
        // $terima_pkp = Pendaftaranpkb::where('status', '1')->count();
        // $terima_pkwt = Pendaftaranpkwt::where('status', '1')->count();
        // $terima_spsb = Pencatatanspsb::where('status', '1')->count();
        // $terima_lks = Pendaftaranlks::where('status', '1')->count();
        // $terima_hi = Pencatatanperselihan::where('status', '1')->count();
        // $terima_phk = Pelaporanphk::where('status', '1')->count();

        // $total_terima = $terima_pp + $terima_pkp + $terima_pkwt + $terima_spsb + $terima_lks + $terima_hi + $terima_phk;

        // $pp = Pengesahanpp::where('status', '3')->count();
        // $pkb = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb = Pencatatanspsb::where('status', '3')->count();
        // $lks = Pendaftaranlks::where('status', '3')->count();
        // $hi = Pencatatanperselihan::where('status', '3')->count();
        // $phk = Pelaporanphk::where('status', '3')->count();

        // $total = $pp + $pkb + $pkwt + $spsb + $lks + $hi + $phk;

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();

        $now = Carbon::now();
        $now->setLocale('id');
        $datestring = $now->isoFormat('D MMMM Y');
        $dayname = $now->translatedFormat('l');

        $pp_all = Pengesahanpp::all()->count();
        $pkb_all = Pendaftaranpkb::all()->count();
        $pkwt_all = Pendaftaranpkwt::all()->count();
        $spsb_all = Pencatatanspsb::all()->count();
        $lks_all = Pendaftaranlks::all()->count();
        $hi_all = Pencatatanperselihan::all()->count();
        $phk_all = Pelaporanphk::all()->count();

        return view('/kabid/dashboard', compact(
            'datestring',
            'dayname',
            // 'total',
            // 'total_terima',
            // 'total_tolak',
            // 'pp_not',
            // 'pkb_not',
            // 'pkwt_not',
            // 'spsb_not',
            // 'lks_not',
            // 'hi_not',
            // 'phk_not',
            'pp_all',
            'pkb_all',
            'pkwt_all',
            'spsb_all',
            'lks_all',
            'hi_all',
            'phk_all'
        ));
    }
    public function profile()
    {

        $profile = User::where('id', '4')->get();

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/kabid/profile/profilekabid', compact('profile'));
    }

    public function monitoring()
    {

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        $pp = Pengesahanpp::all();
        $pkb = Pendaftaranpkb::all();
        $pkwt = Pendaftaranpkwt::all();
        $spsb = Pencatatanspsb::all();
        $lks = Pendaftaranlks::all();
        $hi = Pencatatanperselihan::all();
        $phk = Pelaporanphk::all();
        return view('/kabid/monitoring/monitoring', compact(
            'pp',
            'pkb',
            'pkwt',
            'spsb',
            'lks',
            'hi',
            'phk'
        ));
    }

    public function rekapitulasi(){


        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
    return view('/kabid/rekapitulasi/rekapitulasi');
    }

    public function detailpermohonan(){


        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
    return view('/kabid/monitoring/detailpermohonan', compact( 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }
}
