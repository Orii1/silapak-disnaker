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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

        $pp = Pengesahanpp::where('status', '3')->count();
        $pkb = Pendaftaranpkb::where('status', '3')->count();
        $pkwt = Pendaftaranpkwt::where('status', '3')->count();
        $spsb = Pencatatanspsb::where('status', '3')->count();
        $lks = Pendaftaranlks::where('status', '3')->count();
        $hi = Pencatatanperselihan::where('status', '3')->count();
        $phk = Pelaporanphk::where('status', '3')->count();

        $total = $pp + $pkb + $pkwt + $spsb + $lks + $hi + $phk;

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/dashboard', compact('total', 'total_terima', 'total_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function company()
    {
        $perusahaan = User::where('id', '!=', 1)->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/perusahaan/data-perusahaan', compact('perusahaan', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function profile()
    {

        $profile = User::where('id', '1')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/profile/profileadmin', compact('profile', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
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

    public function detail_perusahaan($id)
    {
        $detail = User::find($id);

        $lat = $detail->lat;
        $lng = $detail->lng;

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/perusahaan/detail-perusahaan', compact('detail', 'lat', 'lng', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function permohonan_pp()
    {
        $pp_proses = Pengesahanpp::where('status', '0')->orderBy('updated_at', 'desc')->get();
        $pp_konfir = Pengesahanpp::where('status', '3')->orderBy('updated_at', 'desc')->get();
        $pp_terima = Pengesahanpp::where('status', '1')->orderBy('updated_at', 'desc')->get();
        $pp_tolak = Pengesahanpp::where('status', '2')->orderBy('updated_at', 'desc')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pengesahan-pp/permohonan-pengesahan-pp', compact('pp_proses', 'pp_konfir', 'pp_terima', 'pp_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function permohonan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pengesahan-pp/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function permohonan_pp_konfir($id)
    {
        $data = Pengesahanpp::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pengesahan-pp/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function permohonan_pp_proses(Request $request, $id)
    {
        $permohonanpp = Pengesahanpp::find($id);

        $permohonanpp->keterangan = $request->keterangan;
        $permohonanpp->status = '0';
        $permohonanpp->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function permohonan_pp_update(Request $request, $id)
    {
        $permohonanpp = Pengesahanpp::find($id);

        $permohonanpp->keterangan = $request->keterangan;
        $permohonanpp->save();
        toastr()->info('Keterangan Pemrosesan Berhasil Diperbaharui!');
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function permohonan_pp_terima(Request $request, $id)
    {
        $permohonanpp = Pengesahanpp::find($id);

        $extension1 = $request->file('surat_keputusan')->getClientOriginalExtension();
        $file1 = $id . 'surat_keputusan' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
        $request->file('surat_keputusan')->storeAs($permohonanpp->user_id . '/pp/sk', $file1);

        $permohonanpp->status = '1';
        $permohonanpp->sk = $file1;
        $permohonanpp->keterangan = "Permohonan Selesai";
        $permohonanpp->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function permohonan_pp_tolak(Request $request, $id)
    {
        $permohonanpp = Pengesahanpp::find($id);
        $permohonanpp->pesan = $request->pesan;
        $permohonanpp->keterangan = "Silahkan Revisi beberapa persyaratan sesuai Pesan";
        $permohonanpp->status = '2';
        $permohonanpp->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function pendaftaran_pkb()
    {
        $pkb_proses = Pendaftaranpkb::where('status', '0')->get();
        $pkb_konfir = Pendaftaranpkb::where('status', '3')->get();
        $pkb_terima = Pendaftaranpkb::where('status', '1')->get();
        $pkb_tolak = Pendaftaranpkb::where('status', '2')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/permohonan-pendaftaran-pkb', compact('pkb_proses', 'pkb_konfir', 'pkb_terima', 'pkb_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_pkb_show($id)
    {
        $data = Pendaftaranpkb::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_pkb_konfir($id)
    {
        $data = Pendaftaranpkb::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkb/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_pkb_proses(Request $request, $id)
    {
        $permohonanpkb = Pendaftaranpkb::find($id);

        $permohonanpkb->keterangan = $request->keterangan;
        $permohonanpkb->status = '0';
        $permohonanpkb->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
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
        $pkwt_proses = Pendaftaranpkwt::where('status', '0')->get();
        $pkwt_konfir = Pendaftaranpkwt::where('status', '3')->get();
        $pkwt_terima = Pendaftaranpkwt::where('status', '1')->get();
        $pkwt_tolak = Pendaftaranpkwt::where('status', '2')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/permohonan-pendaftaran-pkwt', compact('pkwt_proses', 'pkwt_konfir', 'pkwt_terima', 'pkwt_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_pkwt_konfir($id)
    {
        $data = Pendaftaranpkwt::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_pkwt_proses(Request $request, $id)
    {
        $permohonanpkwt = Pendaftaranpkwt::find($id);

        $permohonanpkwt->keterangan = $request->keterangan;
        $permohonanpkwt->status = '0';
        $permohonanpkwt->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
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

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-pkwt/detail', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
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
        $spsb_proses = Pencatatanspsb::where('status', '0')->get();
        $spsb_konfir = Pencatatanspsb::where('status', '3')->get();
        $spsb_terima = Pencatatanspsb::where('status', '1')->get();
        $spsb_tolak = Pencatatanspsb::where('status', '2')->get();


        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-spsb/permohonan-pencatatan-spsb', compact('spsb_proses', 'spsb_konfir', 'spsb_terima', 'spsb_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_spsb_konfir($id)
    {
        $data = Pencatatanspsb::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-spsb/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_spsb_proses(Request $request, $id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);

        $pencatatanspsb->keterangan = $request->keterangan;
        $pencatatanspsb->status = '0';
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pencatatan-spsb');
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

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
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
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }


    public function pendaftaran_lks()
    {
        $lks_proses = Pendaftaranlks::where('status', '0')->get();
        $lks_konfir = Pendaftaranlks::where('status', '3')->get();
        $lks_terima = Pendaftaranlks::where('status', '1')->get();
        $lks_tolak = Pendaftaranlks::where('status', '2')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-lks-bipartit/permohonan-pendaftaran-lks', compact('lks_proses', 'lks_konfir', 'lks_terima', 'lks_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pendaftaran_lks_konfir($id)
    {
        $data = Pendaftaranlks::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pendaftaran-lks-bipartit/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }


    public function pendaftaran_lks_proses(Request $request, $id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);

        $pendaftaranlks->keterangan = $request->keterangan;
        $pendaftaranlks->status = '0';
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pendaftaran-lks');
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
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }


    public function pencatatan_hi()
    {
        $hi_proses = Pencatatanperselihan::where('status', '0')->get();
        $hi_konfir = Pencatatanperselihan::where('status', '3')->get();
        $hi_terima = Pencatatanperselihan::where('status', '1')->get();
        $hi_tolak = Pencatatanperselihan::where('status', '2')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-penyelesaian-hi/permohonan-pencatatan-penyelesaian-hi', compact('hi_proses', 'hi_konfir', 'hi_terima', 'hi_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_hi_konfir($id)
    {
        $data = Pencatatanperselihan::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pencatatan-penyelesaian-hi/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pencatatan_hi_proses(Request $request, $id)
    {
        $pencatatanhi = Pencatatanperselihan::find($id);

        $pencatatanhi->keterangan = $request->keterangan;
        $pencatatanhi->status = '0';
        $pencatatanhi->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pencatatan-hi');
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
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }

    public function pencatatan_hi_tolak(Request $request, $id)
    {
        $penyelesaianhi = Pencatatanperselihan::find($id);
        $penyelesaianhi->pesan = $request->pesan;
        $penyelesaianhi->status = '2';
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }


    public function pelaporan_phk()
    {
        $phk_proses = Pelaporanphk::where('status', '0')->get();
        $phk_konfir = Pelaporanphk::where('status', '3')->get();
        $phk_terima = Pelaporanphk::where('status', '1')->get();
        $phk_tolak = Pelaporanphk::where('status', '2')->get();

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pelaporan-phk/permohonan-pelaporan-phk', compact('phk_proses', 'phk_konfir', 'phk_terima', 'phk_tolak', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pelaporan_phk_konfir($id)
    {
        $data = Pelaporanphk::find($id);

        $pp_not = Pengesahanpp::where('status', '3')->count();
        $pkb_not = Pendaftaranpkb::where('status', '3')->count();
        $pkwt_not = Pendaftaranpkwt::where('status', '3')->count();
        $spsb_not = Pencatatanspsb::where('status', '3')->count();
        $lks_not = Pendaftaranlks::where('status', '3')->count();
        $hi_not = Pencatatanperselihan::where('status', '3')->count();
        $phk_not = Pelaporanphk::where('status', '3')->count();
        return view('/admin/pelaporan-phk/konfirmasi', compact('data', 'pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }

    public function pelaporan_phk_proses(Request $request, $id)
    {
        $pelaporanphk = Pelaporanphk::find($id);

        $pelaporanphk->keterangan = $request->keterangan;
        $pelaporanphk->status = '0';
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Dikonfirmasi, Silahkan untuk diproses lebih lanjut!');
        return redirect('/admin/permohonan-pelaporan-phk');
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
        return view('/admin/asset/asset', compact('pp_not', 'pkb_not', 'pkwt_not', 'spsb_not', 'lks_not', 'hi_not', 'phk_not'));
    }
}
