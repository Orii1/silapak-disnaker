<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\DetailPengecekan;
use App\Models\Pegawai;
use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{
    public function dashboard()
    {
        // $tolak_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
        //     $query->where('id_status', '4');
        // })->count();
        // $tolak_pkb = Pendaftaranpkb::whereHas('pkb_status')->where('id_status', '4')->count();
        // $tolak_pkwt = Pendaftaranpkwt::whereHas('pkwt_status')->where('id_status', '4')->count();
        // $tolak_spsb = Pencatatanspsb::whereHas('spsb_status')->where('id_status', '4')->count();
        // $tolak_lks = Pendaftaranlks::whereHas('lks_status')->where('id_status', '4')->count();
        // $tolak_hi = Pencatatanperselihan::whereHas('hi_status')->where('id_status', '4')->count();
        // $tolak_phk = Pelaporanphk::whereHas('phk_status')->where('id_status', '4')->count();

        // $total_tolak = $tolak_pp + $tolak_pkb + $tolak_pkwt + $tolak_spsb + $tolak_lks + $tolak_hi + $tolak_phk;

        // $terima_pp = Pengesahanpp::whereHas('pp_status')->where('id_status', '3')->count();
        // $terima_pkb = Pendaftaranpkb::whereHas('pkb_status')->where('id_status', '3')->count();
        // $terima_pkwt = Pendaftaranpkwt::whereHas('pkwt_status')->where('id_status', '3')->count();
        // $terima_spsb = Pencatatanspsb::whereHas('spsb_status')->where('id_status', '3')->count();
        // $terima_lks = Pendaftaranlks::whereHas('lks_status')->where('id_status', '3')->count();
        // $terima_hi = Pencatatanperselihan::whereHas('hi_status')->where('id_status', '3')->count();
        // $terima_phk = Pelaporanphk::whereHas('phk_status')->where('id_status', '3')->count();

        // $total_terima = $terima_pp + $terima_pkb + $terima_pkwt + $terima_spsb + $terima_lks + $terima_hi + $terima_phk;

        // $pp = Pengesahanpp::whereHas('pp_status')->where('id_status', '1')->count();
        // $pkb = Pendaftaranpkb::whereHas('pkb_status')->where('id_status', '1')->count();
        // $pkwt = Pendaftaranpkwt::whereHas('pkwt_status')->where('id_status', '1')->count();
        // $spsb = Pencatatanspsb::whereHas('spsb_status')->where('id_status', '1')->count();
        // $lks = Pendaftaranlks::whereHas('lks_status')->where('id_status', '1')->count();
        // $hi = Pencatatanperselihan::whereHas('hi_status')->where('id_status', '1')->count();
        // $phk = Pelaporanphk::whereHas('phk_status')->where('id_status', '1')->count();

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

        return view('/admin/dashboard', compact(
            'datestring',
            'dayname',
            // 'total_tolak',
            // 'total_terima',
            // 'total',
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

    public function company()
    {
        $excludedIds = [1, 2, 3, 4];
        $perusahaan = User::whereNotIn('id', $excludedIds)->get();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/perusahaan/data-perusahaan', compact('perusahaan'));
    }

    public function profile()
    {

        $profile = User::where('id', '1')->get();

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/profile/profileadmin', compact('profile'));
    }

    public function change_password(Request $request, $id)
    {
        $password = $request->password;

        $hashedpass = Auth::user()->password;

        if (Hash::check($password, $hashedpass)) {
            if ($request->newpassword == $request->renewpassword) {
                $curpass = User::find($id);
                $curpass->password = Hash::make($request->newpassword);
                $curpass->save();
                toastr()->info('Password Berhasil Diganti!');
                return redirect()->back();
            } else {
                Session::flash('error', 'Password tidak sesuai!');
                return redirect()->back();
            }
        } else {
            Session::flash('invalid', 'Password saat ini salah!');
            return redirect()->back();
        }
    }

    public function aktivasi_user($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status_akun = 'active'; // Atur status user sesuai kebutuhan
            $user->save();
            return redirect()->back()->with('success', 'User berhasil diaktifkan.');
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
    }

    public function detail_perusahaan($id)
    {
        $detail = User::find($id);

        $lat = $detail->user_perusahaan->latitude;
        $lng = $detail->user_perusahaan->longtitude;

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/perusahaan/detail-perusahaan', compact('detail', 'lat', 'lng'));
    }

    public function permohonan_pp()
    {
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();

        $pp_konfir = Pengesahanpp::whereHas(
            'pp_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $pp_proses = Pengesahanpp::whereHas(
            'pp_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $pp_done = Pengesahanpp::whereHas(
            'pp_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan','<>', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $pp_terima = Pengesahanpp::whereHas(
            'pp_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $pp_tolak = Pengesahanpp::whereHas(
            'pp_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();
        return view('/admin/pengesahan-pp/permohonan-pengesahan-pp', compact('pp_konfir', 'pp_proses', 'pp_terima', 'pp_tolak', 'pp_done'));
    }

    public function permohonan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pengesahan-pp/detail', compact('data'));
    }

    public function permohonan_pp_konfir($id_pp)
    {
        $data = Pengesahanpp::find($id_pp);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pengesahan-pp/konfirmasi', compact('data', 'mediator'));
    }

    public function permohonan_pp_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $permohonanpp = Pengesahanpp::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($permohonanpp && $permohonanpp->pp_status) {
                $permohonanpp->pp_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $permohonanpp->pp_status->id_status = '2';
                $permohonanpp->pp_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $permohonanpp->pp_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pengesahan-pp');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }

    }

    // public function permohonan_pp_update(Request $request, $id)
    // {
    //     $permohonanpp = Pengesahanpp::find($id);

    //     $permohonanpp->keterangan = $request->keterangan;
    //     $permohonanpp->save();
    //     toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
    //     return redirect('/admin/permohonan-pengesahan-pp');
    // }

    // public function permohonan_pp_terima(Request $request, $id)
    // {
    //     $permohonanpp = Pengesahanpp::find($id);

    //     $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
    //     $file1 = $id . 'surat_keputusan' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
    //     $request->file('surat_keputusan')->storeAs($permohonanpp->user_id . '/pp/sk', $file1);

    //     $permohonanpp->status = '1';
    //     $permohonanpp->sk = $file1;
    //     $permohonanpp->keterangan = "Permohonan Selesai";
    //     $permohonanpp->save();
    //     toastr()->success('Permohonan Berhasil Diterima!');
    //     return redirect('/admin/permohonan-pengesahan-pp');
    // }

    // public function permohonan_pp_tolak(Request $request, $id)
    // {
    //     $permohonanpp = Pengesahanpp::find($id);
    //     $permohonanpp->pesan = $request->pesan;
    //     $permohonanpp->keterangan = "Silahkan Revisi beberapa persyaratan sesuai Pesan";
    //     $permohonanpp->status = '2';
    //     $permohonanpp->save();
    //     toastr()->success('Permohonan Berhasil Dikembalikan!');
    //     return redirect('/admin/permohonan-pengesahan-pp');
    // }

    public function pendaftaran_pkb()
    {
        $pkb_konfir = Pendaftaranpkb::whereHas(
            'pkb_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkb_proses = Pendaftaranpkb::whereHas(
            'pkb_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkb_terima = Pendaftaranpkb::whereHas(
            'pkb_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkb_tolak = Pendaftaranpkb::whereHas(
            'pkb_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/permohonan-pendaftaran-pkb', compact('pkb_proses', 'pkb_konfir', 'pkb_terima', 'pkb_tolak'));
    }

    public function pendaftaran_pkb_show($id)
    {
        $data = Pendaftaranpkb::find($id);

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/detail', compact('data'));
    }

    public function pendaftaran_pkb_konfir($id_pkb)
    {
        $data = Pendaftaranpkb::find($id_pkb);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/konfirmasi', compact('data', 'mediator'));
    }

    public function pendaftaran_pkb_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $permohonanpkb = Pendaftaranpkb::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($permohonanpkb && $permohonanpkb->pkb_status) {
                $permohonanpkb->pkb_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $permohonanpkb->pkb_status->id_status = '2';
                $permohonanpkb->pkb_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $permohonanpkb->pkb_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pendaftaran-pkb');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
        // $permohonanpkb = Pendaftaranpkb::find($id);

        // $permohonanpkb->keterangan = $request->keterangan;
        // $permohonanpkb->status = '0';
        // $permohonanpkb->save();
        // toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        // return redirect('/admin/permohonan-pendaftaran-pkb');
    }

    public function pendaftaran_pkb_update(Request $request, $id)
    {
        $permohonanpkb = Pendaftaranpkb::find($id);

        $permohonanpkb->keterangan = $request->keterangan;
        $permohonanpkb->save();
        toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
    }

    public function pendaftaran_pkb_terima(Request $request, $id)
    {
        $permohonanpkb = Pendaftaranpkb::find($id);
        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'pkb' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($permohonanpkb->user_id . '/pkb/sk', $file1);

        $permohonanpkb->status = '1';
        $permohonanpkb->sk = $file1;
        $permohonanpkb->keterangan = "Permohonan Selesai";
        $permohonanpkb->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
    }

    public function pendaftaran_pkb_tolak(Request $request, $id)
    {
        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $pendaftaranpkb->pesan = $request->pesan;
        $pendaftaranpkb->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai Pesan';
        $pendaftaranpkb->status = '2';
        $pendaftaranpkb->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
    }


    public function pendaftaran_pkwt()
    {
        $pkwt_konfir = Pendaftaranpkwt::whereHas(
            'pkwt_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkwt_proses = Pendaftaranpkwt::whereHas(
            'pkwt_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkwt_terima = Pendaftaranpkwt::whereHas(
            'pkwt_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkwt_tolak = Pendaftaranpkwt::whereHas(
            'pkwt_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/permohonan-pendaftaran-pkwt', compact('pkwt_proses', 'pkwt_konfir', 'pkwt_terima', 'pkwt_tolak'));
    }

    public function pendaftaran_pkwt_konfir($id_pkwt)
    {
        $data = Pendaftaranpkwt::find($id_pkwt);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/konfirmasi', compact('data', 'mediator'));
    }

    public function pendaftaran_pkwt_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $permohonanpkwt = Pendaftaranpkwt::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($permohonanpkwt && $permohonanpkwt->pkwt_status) {
                $permohonanpkwt->pkwt_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $permohonanpkwt->pkwt_status->id_status = '2';
                $permohonanpkwt->pkwt_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $permohonanpkwt->pkwt_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pendaftaran-pkwt');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }

    }
    public function pendaftaran_pkwt_update(Request $request, $id)
    {
        $permohonanpkwt = Pendaftaranpkwt::find($id);

        $permohonanpkwt->keterangan = $request->keterangan;
        $permohonanpkwt->save();
        toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
    }

    public function pendaftaran_pkwt_show($id)
    {
        $data = Pendaftaranpkwt::find($id);

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/detail', compact('data'));
    }

    public function pendaftaran_pkwt_terima(Request $request, $id)
    {
        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'pkwt' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($pendaftaranpkwt->user_id . '/pkwt/sk', $file1);

        $pendaftaranpkwt->status = '1';
        $pendaftaranpkwt->sk = $file1;
        $pendaftaranpkwt->keterangan = 'Permohonan Selesai';
        $pendaftaranpkwt->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
    }

    public function pendaftaran_pkwt_tolak(Request $request, $id)
    {
        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $pendaftaranpkwt->pesan = $request->pesan;
        $pendaftaranpkwt->status = '2';
        $pendaftaranpkwt->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai Pesan';
        $pendaftaranpkwt->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
    }


    public function pencatatan_spsb()
    {
        $spsb_konfir = Pencatatanspsb::whereHas(
            'spsb_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $spsb_proses = Pencatatanspsb::whereHas(
            'spsb_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $spsb_terima = Pencatatanspsb::whereHas(
            'spsb_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $spsb_tolak = Pencatatanspsb::whereHas(
            'spsb_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();


        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-spsb/permohonan-pencatatan-spsb', compact('spsb_proses', 'spsb_konfir', 'spsb_terima', 'spsb_tolak',));
    }

    public function pencatatan_spsb_konfir($id_spsb)
    {
        $data = Pencatatanspsb::find($id_spsb);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-spsb/konfirmasi', compact('data', 'mediator'));
    }

    public function pencatatan_spsb_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $pencatatanspsb = Pencatatanspsb::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);
            if ($pencatatanspsb && $pencatatanspsb->spsb_status) {
                $pencatatanspsb->spsb_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $pencatatanspsb->spsb_status->id_status = '2';
                $pencatatanspsb->spsb_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $pencatatanspsb->spsb_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pencatatan-spsb');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function pencatatan_spsb_update(Request $request, $id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);

        $pencatatanspsb->keterangan = $request->keterangan;
        $pencatatanspsb->save();
        toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }

    public function pencatatan_spsb_show($id)
    {
        $data = Pencatatanspsb::find($id);

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-spsb/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_spsb_terima(Request $request, $id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);
        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'spsb' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($pencatatanspsb->user_id . '/spsb/sk', $file1);

        $pencatatanspsb->status = '1';
        $pencatatanspsb->sk = $file1;
        $pencatatanspsb->keterangan = 'Permohonan Selesai';
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }

    public function pencatatan_spsb_tolak(Request $request, $id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);
        $pencatatanspsb->pesan = $request->pesan;
        $pencatatanspsb->status = '2';
        $pencatatanspsb->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai Pesan';
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }


    public function pendaftaran_lks()
    {
        $lks_konfir = Pendaftaranlks::whereHas(
            'lks_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $lks_proses = Pendaftaranlks::whereHas(
            'lks_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $lks_terima = Pendaftaranlks::whereHas(
            'lks_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $lks_tolak = Pendaftaranlks::whereHas(
            'lks_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();

        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-lks-bipartit/permohonan-pendaftaran-lks', compact('lks_proses', 'lks_konfir', 'lks_terima', 'lks_tolak'));
    }

    public function pendaftaran_lks_konfir($id_lks)
    {
        $data = Pendaftaranlks::find($id_lks);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-lks-bipartit/konfirmasi', compact('data', 'mediator'));
    }


    public function pendaftaran_lks_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);

        $pendaftaranlks = Pendaftaranlks::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($pendaftaranlks && $pendaftaranlks->lks_status) {
                $pendaftaranlks->lks_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $pendaftaranlks->lks_status->id_status = '2';
                $pendaftaranlks->lks_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $pendaftaranlks->lks_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pendaftaran-lks');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function pendaftaran_lks_update(Request $request, $id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);

        $pendaftaranlks->keterangan = $request->keterangan;
        $pendaftaranlks->save();
        toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }

    public function pendaftaran_lks_show($id)
    {
        $data = Pendaftaranlks::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-lks-bipartit/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_lks_terima(Request $request, $id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);
        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'lks' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($pendaftaranlks->user_id . '/lks/sk', $file1);

        $pendaftaranlks->status = '1';
        $pendaftaranlks->sk = $file1;
        $pendaftaranlks->keterangan = 'Permohonan Selesai';
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }

    public function pendaftaran_lks_tolak(Request $request, $id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);
        $pendaftaranlks->pesan = $request->pesan;
        $pendaftaranlks->status = '2';
        $pendaftaranlks->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai Pesan';
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }


    public function pencatatan_hi()
    {
        $hi_konfir = Pencatatanperselihan::whereHas(
            'hi_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $hi_proses = Pencatatanperselihan::whereHas(
            'hi_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $hi_terima = Pencatatanperselihan::whereHas(
            'hi_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $hi_tolak = Pencatatanperselihan::whereHas(
            'hi_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-penyelesaian-hi/permohonan-pencatatan-penyelesaian-hi', compact('hi_proses', 'hi_konfir', 'hi_terima', 'hi_tolak'));
    }

    public function pencatatan_hi_konfir($id_hi)
    {
        $data = Pencatatanperselihan::find($id_hi);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-penyelesaian-hi/konfirmasi', compact('data', 'mediator'));
    }

    public function pencatatan_hi_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $pencatatanhi = Pencatatanperselihan::find($id);


        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($pencatatanhi && $pencatatanhi->hi_status) {
                $pencatatanhi->hi_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $pencatatanhi->hi_status->id_status = '2';
                $pencatatanhi->hi_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $pencatatanhi->hi_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pencatatan-hi');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function pencatatan_hi_update(Request $request, $id)
    {
        $pencatatanhi = Pencatatanperselihan::find($id);

        $pencatatanhi->keterangan = $request->keterangan;
        $pencatatanhi->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }

    public function pencatatan_hi_show($id)
    {
        $data = Pencatatanperselihan::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-penyelesaian-hi/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_hi_terima(Request $request, $id)
    {
        $penyelesaianhi = Pencatatanperselihan::find($id);

        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($penyelesaianhi->user_id . '/perselisihan_hi/sk', $file1);

        $penyelesaianhi->status = '1';
        $penyelesaianhi->sk = $file1;
        $penyelesaianhi->keterangan = 'Permohonan Selesai';
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }

    public function pencatatan_hi_tolak(Request $request, $id)
    {
        $penyelesaianhi = Pencatatanperselihan::find($id);
        $penyelesaianhi->pesan = $request->pesan;
        $penyelesaianhi->status = '2';
        $penyelesaianhi->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai pesan';
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }


    public function pelaporan_phk()
    {
        $phk_konfir = Pelaporanphk::whereHas(
            'phk_status',
            function ($query) {
                $query->where('id_status', '1');
            }
        )->orderBy('created_at', 'desc')->get();

        $phk_proses = Pelaporanphk::whereHas(
            'phk_status',
            function ($query) {
                $query->where('id_status', '2');
            }
        )->orderBy('created_at', 'desc')->get();

        $phk_terima = Pelaporanphk::whereHas(
            'phk_status',
            function ($query) {
                $query->where('id_status', '3');
            }
        )->orderBy('created_at', 'desc')->get();

        $phk_tolak = Pelaporanphk::whereHas(
            'phk_status',
            function ($query) {
                $query->where('id_status', '4');
            }
        )->orderBy('created_at', 'desc')->get();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pelaporan-phk/permohonan-pelaporan-phk', compact('phk_proses', 'phk_konfir', 'phk_terima', 'phk_tolak'));
    }

    public function pelaporan_phk_konfir($id_phk)
    {
        $data = Pelaporanphk::find($id_phk);
        $mediator = Pegawai::all();
        // $pp_not = Pengesahanpp::where('status', '3')->count();
        // $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        // $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        // $spsb_not = Pencatatanspsb::where('status', '3')->count();
        // $lks_not = Pendaftaranlks::where('status', '3')->count();
        // $hi_not = Pencatatanperselihan::where('status', '3')->count();
        // $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pelaporan-phk/konfirmasi', compact('data','mediator'));
    }

    public function pelaporan_phk_proses(Request $request, $id)
    {
        $validatedata = $request->validate([
            'id_pegawai' => 'required',
        ],[
            'required' => 'Field :attribute wajib diisi.'
        ]);
        $pelaporanphk = Pelaporanphk::find($id);

        if ($validatedata){
            $cek = DetailPengecekan::create([
                'hasil_pengecekan' => 'Belum di Periksa',
                'id_pegawai' => $request->id_pegawai
            ]);

            if ($pelaporanphk && $pelaporanphk->phk_status) {
                $pelaporanphk->phk_status->keterangan = 'Permohonan Sedang dicek oleh Mediator';
                $pelaporanphk->phk_status->id_status = '2';
                $pelaporanphk->phk_status->id_detail_pengecekan = $cek->id_detail_pengecekan;
                $pelaporanphk->phk_status->save();
            }
            toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
            return redirect('/admin/permohonan-pelaporan-phk');
        }else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function pelaporan_phk_update(Request $request, $id)
    {
        $pelaporanphk = Pelaporanphk::find($id);

        $pelaporanphk->keterangan = $request->keterangan;
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pelaporan-phk');
    }

    public function pelaporan_phk_show($id)
    {
        $data = Pelaporanphk::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pelaporan-phk/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pelaporan_phk_terima(Request $request, $id)
    {
        $pelaporanphk = Pelaporanphk::find($id);
        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'phk' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($pelaporanphk->user_id . '/phk/sk', $file1);

        $pelaporanphk->status = '1';
        $pelaporanphk->sk = $file1;
        $pelaporanphk->keterangan = 'Permohonan Selesai';
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pelaporan-phk');
    }

    public function pelaporan_phk_tolak(Request $request, $id)
    {
        $pelaporanphk = Pelaporanphk::find($id);
        $pelaporanphk->pesan = $request->pesan;
        $pelaporanphk->status = '2';
        $pelaporanphk->keterangan = 'Silahkan Revisi beberapa persyaratan sesuai pesan';
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pelaporan-phk');
    }


    public function asset()
    {
        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();

        $asset_pp = Asset::find('1');
        $asset_pkb = Asset::find('2');
        $asset_pkwt = Asset::find('3');
        $asset_spsb = Asset::find('4');
        $asset_lks = Asset::find('5');
        $asset_hi = Asset::find('6');
        $asset_phk = Asset::find('7');
        return view('/admin/asset/asset', compact('asset_pp', 'asset_pkb', 'asset_pkwt', 'asset_spsb', 'asset_lks', 'asset_hi', 'asset_phk', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function alur_perizinan(Request $request, $id)
    {

        $validatedata = $request->validate([
            'alur_perizinan' => 'required|mimes:png,jpg|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $pp_alur = Asset::find($id);

            $extension1 = $request->file('alur_perizinan')->getClientOriginalExtension();
            $file1 = 'Alur-Perizinan' . now()->timestamp . '.' . $extension1;
            $request->file('alur_perizinan')->storeAs('asset', $file1);

            $pp_alur->alur_perizinan = $file1;
            $pp_alur->save();

            toastr()->success('Alur Perizinan Berhail diperbarui!');
            return redirect('/admin/asset');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function dasar_hukum(Request $request, $id)
    {
        $validatedata = $request->validate([
            'dasar_hukum' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.',
        ]);

        if ($validatedata) {
        $pp_dasar = Asset::find($id);

        $pp_dasar->dasar_hukum = $request->dasar_hukum;
        $pp_dasar->save();

        toastr()->success('Dasar Hukum Berhail diperbarui!');
        return redirect('/admin/asset');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function durasi(Request $request, $id)
    {
        $validatedata = $request->validate([
            'durasi_pemrosesan' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.',
        ]);

        if ($validatedata) {
            $pp_durasi = Asset::find($id);

            $pp_durasi->durasi_pemrosesan = $request->durasi_pemrosesan;
            $pp_durasi->save();

            toastr()->success('Durasi Pemrosesan Berhail diperbarui!');
            return redirect('/admin/asset');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function kontak(Request $request, $id)
    {
        $validatedata = $request->validate([
            'kontak' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.',
        ]);

        if ($validatedata) {
            $kontak = Asset::find($id);

            $kontak->kontak = $request->kontak;
            $kontak->save();

            toastr()->success('Kontak Berhail diperbarui!');
            return redirect('/admin/asset');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }

    }

    public function retribusi(Request $request, $id)
    {
        $validatedata = $request->validate([
            'retribusi' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.',
        ]);

        if ($validatedata) {
        $retribusi = Asset::find($id);

        $extension1 = $request->file('retribusi')->getClientOriginalExtension();
        $file1 = 'Retribusi' . now()->timestamp . '.' . $extension1;
        $request->file('retribusi')->storeAs('asset', $file1);

        $retribusi->retribusi = $file1;
        $retribusi->save();

        toastr()->success('Retribusi Berhail diperbarui!');
        return redirect('/admin/asset');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function maklumat(Request $request, $id)
    {
        $validatedata = $request->validate([
            'maklumat' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.',
        ]);

        if ($validatedata) {
            $maklumat = Asset::find($id);

            $extension1 = $request->file('maklumat')->getClientOriginalExtension();
            $file1 = 'Maklumat' . now()->timestamp . '.' . $extension1;
            $request->file('maklumat')->storeAs('asset', $file1);

            $maklumat->maklumat = $file1;
            $maklumat->save();

            toastr()->success('Maklumat Berhail diperbarui!');
            return redirect('/admin/asset');
        }
    }

    public function visi_misi(Request $request, $id)
    {
        $validatedata = $request->validate([
            'visi_misi' => 'required',
        ], [
            'required' => 'Field :atribut wajib diisi',
        ]);

        if ($validatedata) {
            $visi_misi = Asset::find($id);

            $extension1 = $request->file('visi_misi')->getClientOriginalExtension();
            $file1 = 'Visi-Misi' . now()->timestamp . '.' . $extension1;
            $request->file('visi_misi')->storeAs('asset', $file1);

            $visi_misi->visi_misi = $file1;
            $visi_misi->save();

            toastr()->success('Visi dan Misi Berhail diperbarui!');
            return redirect('/admin/asset');
        }
    }

    public function motto(Request $request, $id)
    {
        $validatedata = $request->validate([
            'motto' => 'required',
        ], [
            'required' => 'Field :atribut wajib diisi',
        ]);

        if ($validatedata) {
            $motto = Asset::find($id);

            $extension1 = $request->file('motto')->getClientOriginalExtension();
            $file1 = 'Motto' . now()->timestamp . '.' . $extension1;
            $request->file('motto')->storeAs('asset', $file1);

            $motto->motto = $file1;
            $motto->save();

            toastr()->success('Visi dan Misi Berhail diperbarui!');
            return redirect('/admin/asset');
        }
    }

    public function download_data_perusahaan($id)
    {
        $data = User::find($id);
        $lat = $data->lat;
        $lng = $data->lng;
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML(view("admin.perusahaan.pdf-perusahaan", compact('data', 'lat', 'lng')));
        $mpdf->Output();
    }



}
