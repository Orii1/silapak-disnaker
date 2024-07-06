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

        return view('/kabid/profile/profilekabid', compact('profile'));
    }

    public function monitoring()
    {
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

    public function monitor_pp($id_pp)
    {
        $data = Pengesahanpp::find($id_pp);
        return view('/kabid/monitoring/permohonan-pp/detail', compact('data'));
    }

    public function monitor_pkb($id_pkb)
    {
        $data = Pendaftaranpkb::find($id_pkb);
        return view('/kabid/monitoring/permohonan-pkb/detail', compact('data'));
    }

    public function monitor_pkwt($id_pkwt)
    {
        $data = Pendaftaranpkwt::find($id_pkwt);
        return view('/kabid/monitoring/permohonan-pkwt/detail', compact('data'));
    }

    public function monitor_spsb($id_spsb)
    {

        $data = Pencatatanspsb::find($id_spsb);
        return view('/kabid/monitoring/permohonan-spsb/detail', compact('data'));
    }

    public function monitor_lks($id_lks)
    {
        $data = Pendaftaranlks::find($id_lks);
        return view('/kabid/monitoring/permohonan-lks/detail', compact('data'));
    }

    public function monitor_hi($id_hi)
    {
        $data = Pencatatanperselihan::find($id_hi);
        return view('/kabid/monitoring/permohonan-hi/detail', compact('data'));
    }

    public function monitor_phk($id_phk)
    {
        $data = Pelaporanphk::find($id_phk);
        return view('/kabid/monitoring/permohonan-phk/detail', compact('data'));
    }

    public function rekapitulasi()
    {
        $pp = Pengesahanpp::with('pp_status')->get();

        $jumlah_pp = $pp->count();
        $terima_pp = $pp->pluck('pp_status')->flatten()->where('id_status', '3')->count();
        $proses_pp = $pp->pluck('pp_status')->flatten()->where('id_status', '2')->count();
        $tolak_pp = $pp->pluck('pp_status')->flatten()->where('id_status', '4')->count();


        $pkb = Pendaftaranpkb::with('pkb_status')->get();

        $jumlah_pkb = $pkb->count();
        $terima_pkb = $pkb->pluck('pkb_status')->flatten()->where('id_status', '3')->count();
        $proses_pkb = $pkb->pluck('pkb_status')->flatten()->where('id_status', '2')->count();
        $tolak_pkb = $pkb->pluck('pkb_status')->flatten()->where('id_status', '4')->count();


        $pkwt = Pendaftaranpkwt::with('pkwt_status')->get();

        $jumlah_pkwt = $pkwt->count();
        $terima_pkwt = $pkwt->pluck('pkwt_status')->flatten()->where('id_status', '3')->count();
        $proses_pkwt = $pkwt->pluck('pkwt_status')->flatten()->where('id_status', '2')->count();
        $tolak_pkwt = $pkwt->pluck('pkwt_status')->flatten()->where('id_status', '4')->count();


        $spsb = Pencatatanspsb::with('spsb_status')->get();

        $jumlah_spsb = $spsb->count();
        $terima_spsb = $spsb->pluck('spsb_status')->flatten()->where('id_status', '3')->count();
        $proses_spsb = $spsb->pluck('spsb_status')->flatten()->where('id_status', '2')->count();
        $tolak_spsb = $spsb->pluck('spsb_status')->flatten()->where('id_status', '4')->count();


        $lks = Pendaftaranlks::with('lks_status')->get();

        $jumlah_lks = $lks->count();
        $terima_lks = $lks->pluck('lks_status')->flatten()->where('id_status', '3')->count();
        $proses_lks = $lks->pluck('lks_status')->flatten()->where('id_status', '2')->count();
        $tolak_lks = $lks->pluck('lks_status')->flatten()->where('id_status', '4')->count();


        $hi = Pencatatanperselihan::with('hi_status')->get();

        $jumlah_hi = $hi->count();
        $terima_hi = $hi->pluck('hi_status')->flatten()->where('id_status', '3')->count();
        $proses_hi = $hi->pluck('hi_status')->flatten()->where('id_status', '2')->count();
        $tolak_hi = $hi->pluck('hi_status')->flatten()->where('id_status', '4')->count();


        $phk = Pelaporanphk::with('phk_status')->get();

        $jumlah_phk = $phk->count();
        $terima_phk = $phk->pluck('phk_status')->flatten()->where('id_status', '3')->count();
        $proses_phk = $phk->pluck('phk_status')->flatten()->where('id_status', '2')->count();
        $tolak_phk = $phk->pluck('phk_status')->flatten()->where('id_status', '4')->count();

        return view('/kabid/rekapitulasi/rekapitulasi', compact(
            'jumlah_pp',
            'terima_pp',
            'proses_pp',
            'tolak_pp',
            'jumlah_pkb',
            'terima_pkb',
            'proses_pkb',
            'tolak_pkb',
            'jumlah_pkwt',
            'terima_pkwt',
            'proses_pkwt',
            'tolak_pkwt',
            'jumlah_spsb',
            'terima_spsb',
            'proses_spsb',
            'tolak_spsb',
            'jumlah_lks',
            'terima_lks',
            'proses_lks',
            'tolak_lks',
            'jumlah_hi',
            'terima_hi',
            'proses_hi',
            'tolak_hi',
            'jumlah_phk',
            'terima_phk',
            'proses_phk',
            'tolak_phk',
        ));
    }

    public function rekap_pp()
    {
        $rekap_pp = Pengesahanpp::all();
        return view('kabid.rekapitulasi.rekap-pp', compact('rekap_pp'));
    }

    public function filterByMonth(Request $request)
    {
        $month = $request->input('month');

        if ($month) {
            // Filter data berdasarkan bulan yang dipilih
            $filteredRecords = Pengesahanpp::whereMonth('updated_at', $month)->with('pp_perusahaan', 'pp_status')->get();
        } else {
            // Jika tidak ada bulan yang dipilih, ambil semua data
            $filteredRecords = Pengesahanpp::with('pp_perusahaan', 'pp_status')->get();
        }

        return view('partials.filtered-records', compact('filteredRecords'));
    }
}
