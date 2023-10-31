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
        $perusahaan = User::where('id', '!=', 1)->get();
        return view('/admin/perusahaan/data-perusahaan', compact('perusahaan'));
    }

    public function profile()
    {

        $profile = User::where('id', '1')->get();
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
                toastr()->success('Password Berhasil Diganti!');
                return back();
            } else {
                Session::flash('error', 'Password tidak sesuai!');
                return back();
            }
        } else {
            Session::flash('invalid', 'Password saat ini salah!');
            return back();
        }
    }

    public function detail_perusahaan($id)
    {
        $detail = User::find($id);
        return view('/admin/perusahaan/detail-perusahaan', compact('detail'));
    }

    public function delete_perusahaan($id)
    {
        $detail = User::find($id);
        $detail->delete();
        return redirect('/admin/data-perusahaan');
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
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pengesahan-pp');
    }

    public function permohonan_pp_tolak($id)
    {
        $permohonanpp = Pengesahanpp::find($id);
        $permohonanpp->status = '2';
        $permohonanpp->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
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
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
    }

    public function pendaftaran_pkb_tolak($id)
    {
        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $pendaftaranpkb->status = '2';
        $pendaftaranpkb->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-pkb');
    }


    public function pendaftaran_pkwt()
    {
        $pkwt = Pendaftaranpkwt::where('status', '0')->get();
        return view('/admin/pendaftaran-pkwt/permohonan-pendaftaran-pkwt', compact('pkwt'));
    }

    public function pendaftaran_pkwt_show($id)
    {
        $data = Pendaftaranpkwt::find($id);
        return view('/admin/pendaftaran-pkwt/detail', compact('data'));
    }

    public function pendaftaran_pkwt_terima($id)
    {
        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $pendaftaranpkwt->status = '1';
        $pendaftaranpkwt->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
    }

    public function pendaftaran_pkwt_tolak($id)
    {
        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $pendaftaranpkwt->status = '2';
        $pendaftaranpkwt->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-pkwt');
    }


    public function pencatatan_spsb()
    {
        $spsb = Pencatatanspsb::where('status', '0')->get();
        return view('/admin/pencatatan-spsb/permohonan-pencatatan-spsb', compact('spsb'));
    }

    public function pencatatan_spsb_show($id)
    {
        $data = Pencatatanspsb::find($id);
        return view('/admin/pencatatan-spsb/detail', compact('data'));
    }

    public function pencatatan_spsb_terima($id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);
        $pencatatanspsb->status = '1';
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }

    public function pencatatan_spsb_tolak($id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);
        $pencatatanspsb->status = '2';
        $pencatatanspsb->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-spsb');
    }


    public function pendaftaran_lks()
    {
        $lks = Pendaftaranlks::where('status', '0')->get();
        return view('/admin/pendaftaran-lks-bipartit/permohonan-pendaftaran-lks', compact('lks'));
    }

    public function pendaftaran_lks_show($id)
    {
        $data = Pendaftaranlks::find($id);
        return view('/admin/pendaftaran-lks-bipartit/detail', compact('data'));
    }

    public function pendaftaran_lks_terima($id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);
        $pendaftaranlks->status = '1';
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }

    public function pendaftaran_lks_tolak($id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);
        $pendaftaranlks->status = '2';
        $pendaftaranlks->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pendaftaran-lks');
    }


    public function pencatatan_hi()
    {
        $hi = Pencatatanperselihan::where('status', '0')->get();
        return view('/admin/pencatatan-penyelesaian-hi/permohonan-pencatatan-penyelesaian-hi', compact('hi'));
    }

    public function pencatatan_hi_show($id)
    {
        $data = Pencatatanperselihan::find($id);
        return view('/admin/pencatatan-penyelesaian-hi/detail', compact('data'));
    }

    public function pencatatan_hi_terima($id)
    {
        $penyelesaianhi = Pencatatanperselihan::find($id);
        $penyelesaianhi->status = '1';
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }

    public function pencatatan_hi_tolak($id)
    {
        $penyelesaianhi = Pencatatanperselihan::find($id);
        $penyelesaianhi->status = '2';
        $penyelesaianhi->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pencatatan-hi');
    }


    public function pelaporan_phk()
    {
        $phk = Pelaporanphk::where('status', '0')->get();
        return view('/admin/pelaporan-phk/permohonan-pelaporan-phk', compact('phk'));
    }

    public function pelaporan_phk_show($id)
    {
        $data = Pelaporanphk::find($id);
        return view('/admin/pelaporan-phk/detail', compact('data'));
    }

    public function pelaporan_phk_terima($id)
    {
        $pelaporanphk = Pelaporanphk::find($id);
        $pelaporanphk->status = '1';
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Diterima!');
        return redirect('/admin/permohonan-pelaporan-phk');
    }

    public function pelaporan_phk_tolak($id)
    {
        $pelaporanphk = Pelaporanphk::find($id);
        $pelaporanphk->status = '2';
        $pelaporanphk->save();
        toastr()->success('Permohonan Berhasil Dikembalikan!');
        return redirect('/admin/permohonan-pelaporan-phk');
    }


    public function asset()
    {
        return view('/admin/asset/asset');
    }
}
