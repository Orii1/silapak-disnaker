<?php

namespace App\Http\Controllers;

use App\Mail\TestEmail;
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
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        $tolak_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '4');
        })->count();
        $tolak_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '4');
        })->count();

        $total_tolak = $tolak_pp + $tolak_pkb + $tolak_pkwt + $tolak_spsb + $tolak_lks + $tolak_hi + $tolak_phk;


        $terima_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '3');
        })->count();
        $terima_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '3');
        })->count();

        $total_terima = $terima_pp + $terima_pkb + $terima_pkwt + $terima_spsb + $terima_lks + $terima_hi + $terima_phk;

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $total_konfir = $konfir_pp + $konfir_pkb + $konfir_pkwt + $konfir_spsb + $konfir_lks + $konfir_hi + $konfir_phk;

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

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        return view('/admin/dashboard', compact(
            'datestring',
            'dayname',
            'total_tolak',
            'total_terima',
            'total_konfir',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
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
        $perusahaan = User::where('id_role', '4')->get();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/perusahaan/data-perusahaan', compact(
            'perusahaan',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function profile()
    {

        $profile = User::where('id', '1')->get();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/profile/profileadmin', compact(
            'profile',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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
            $user->status_akun = 'active';
            $user->save();

            return redirect()->back()->with('success', 'User berhasil diaktifkan.');
        } else {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }
    }

    public function manage_user()
    {
        $user = User::where('id_role', '2')->get();
        $kabid = User::where('id_role', '3')->get()->first();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('admin.manage.manage-user', compact(
            'user',
            'kabid',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function user_store(Request $request)
    {
        $validatedata = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.'
        ]);

        if ($validatedata) {
            $user = User::create([
                'id_role' => '2',
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status_akun' => 'active',
            ]);

            Pegawai::create([
                'id_user' => $user->id,
                'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'jabatan' => $request->jabatan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama,
            ]);
            toastr()->success('Pegawai Berhasil Ditambah!');
            return redirect('/admin/manajemen-user');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function user_delete($id)
    {
        $user = User::findOrFail($id);

        $user->status_akun = 'inactive';
        $user->save();
        toastr()->success('Akun Pegawai Berhasil Dinonaktifkan!');
        return redirect('/admin/manajemen-user');
    }


    public function user_edit($id)
    {
        $data = User::find($id);

        $user = User::where('id_role', '2')->get();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/manage/edit-user', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function user_update(Request $request, $id)
    {
        $validatedata = $request->validate([
            'email' => 'required',
            'password' => 'required',
            'nip' => 'required',
            'nama_pegawai' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
        ], [
            'required' => 'Field :attribute wajib diisi.'
        ]);
        if ($validatedata) {
            $data = User::findOrFail($id);
            $data->update([
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $data->user_pegawai->update([
                'id_pegawai' => $request->id_pegawai,
                'nip' => $request->nip,
                'nama_pegawai' => $request->nama_pegawai,
                'jenis_kelamin' => $request->jenis_kelamin,
                'agama' => $request->agama
            ]);
            toastr()->success('Data Pegawai Berhasil di Perbarui!');
            return redirect('/admin/manajemen-user');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    public function detail_perusahaan($id)
    {
        $detail = User::find($id);

        $lat = $detail->user_perusahaan->latitude;
        $lng = $detail->user_perusahaan->longtitude;

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/perusahaan/detail-perusahaan', compact(
            'detail',
            'lat',
            'lng',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function permohonan_pp()
    {
        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();


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

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pengesahan-pp/permohonan-pengesahan-pp', compact(
            'aktif_not',
            'pp_konfir',
            'pp_proses',
            'pp_terima',
            'pp_tolak',
            'pp_done',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function permohonan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pengesahan-pp/detail', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function permohonan_pp_konfir($id_pp)
    {
        $data = Pengesahanpp::find($id_pp);
        $mediator = Pegawai::all();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/pengesahan-pp/konfirmasi', compact(
            'data',
            'mediator',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function permohonan_pp_terima(Request $request, $id_pp)
    {
        $permohonanpp = Pengesahanpp::find($id_pp);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanpp->pp_perusahaan->id . '/pp/sk' . $permohonanpp->pp_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanpp->pp_perusahaan->nama_perusahaan . '-pp' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanpp->pp_perusahaan->id . '/pp/sk', $file1);

            $sk = $permohonanpp->pp_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pengesahan-pp');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkb_done = Pendaftaranpkb::whereHas(
            'pkb_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pendaftaran-pkb/permohonan-pendaftaran-pkb', compact(
            'aktif_not',
            'pkb_proses',
            'pkb_konfir',
            'pkb_done',
            'pkb_terima',
            'pkb_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_pkb_show($id)
    {
        $data = Pendaftaranpkb::find($id);
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/pendaftaran-pkb/detail', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_pkb_konfir($id_pkb)
    {
        $data = Pendaftaranpkb::find($id_pkb);
        $mediator = Pegawai::all();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        return view('/admin/pendaftaran-pkb/konfirmasi', compact(
            'data',
            'mediator',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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
    }

    public function pendaftaran_pkb_terima(Request $request, $id_pkb)
    {
        $permohonanpkb = Pendaftaranpkb::find($id_pkb);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanpkb->pkb_perusahaan->id . '/pkb/sk' . $permohonanpkb->pkb_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanpkb->pkb_perusahaan->nama_perusahaan . '-pkb' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanpkb->pkb_perusahaan->id . '/pkb/sk', $file1);

            $sk = $permohonanpkb->pkb_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pendaftaran-pkb');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $pkwt_done = Pendaftaranpkwt::whereHas(
            'pkwt_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pendaftaran-pkwt/permohonan-pendaftaran-pkwt', compact(
            'aktif_not',
            'pkwt_proses',
            'pkwt_konfir',
            'pkwt_done',
            'pkwt_terima',
            'pkwt_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_pkwt_konfir($id_pkwt)
    {
        $data = Pendaftaranpkwt::find($id_pkwt);
        $mediator = Pegawai::all();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pendaftaran-pkwt/konfirmasi', compact(
            'data',
            'mediator',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function pendaftaran_pkwt_show($id)
    {
        $data = Pendaftaranpkwt::find($id);
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        return view('/admin/pendaftaran-pkwt/detail', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_pkwt_terima(Request $request, $id_pkwt)
    {
        $permohonanpkwt = Pendaftaranpkwt::find($id_pkwt);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanpkwt->pkwt_perusahaan->id . '/pkwt/sk' . $permohonanpkwt->pkwt_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanpkwt->pkwt_perusahaan->nama_perusahaan . '-pkwt' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanpkwt->pkwt_perusahaan->id . '/pkwt/sk', $file1);

            $sk = $permohonanpkwt->pkwt_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pendaftaran-pkwt');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $spsb_done = Pencatatanspsb::whereHas(
            'spsb_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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


        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pencatatan-spsb/permohonan-pencatatan-spsb', compact(
            'aktif_not',
            'spsb_proses',
            'spsb_done',
            'spsb_konfir',
            'spsb_terima',
            'spsb_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pencatatan_spsb_konfir($id_spsb)
    {
        $data = Pencatatanspsb::find($id_spsb);
        $mediator = Pegawai::all();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        return view('/admin/pencatatan-spsb/konfirmasi', compact(
            'data',
            'mediator',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function pencatatan_spsb_show($id)
    {
        $data = Pencatatanspsb::find($id);
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        return view('/admin/pencatatan-spsb/detail', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pencatatan_spsb_terima(Request $request, $id_spsb)
    {
        $permohonanspsb = Pencatatanspsb::find($id_spsb);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanspsb->spsb_perusahaan->id . '/spsb/sk' . $permohonanspsb->spsb_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanspsb->spsb_perusahaan->nama_perusahaan . '-spsb' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanspsb->spsb_perusahaan->id . '/spsb/sk', $file1);

            $sk = $permohonanspsb->spsb_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pencatatan-spsb');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $lks_done = Pendaftaranlks::whereHas(
            'lks_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pendaftaran-lks-bipartit/permohonan-pendaftaran-lks', compact(
            'aktif_not',
            'lks_proses',
            'lks_done',
            'lks_konfir',
            'lks_terima',
            'lks_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_lks_konfir($id_lks)
    {
        $data = Pendaftaranlks::find($id_lks);
        $mediator = Pegawai::all();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pendaftaran-lks-bipartit/konfirmasi', compact(
            'aktif_not',
            'data',
            'mediator',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function pendaftaran_lks_show($id)
    {
        $data = Pendaftaranlks::find($id);
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        return view('/admin/pendaftaran-lks-bipartit/detail', compact(
            'aktif_not',
            'data',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pendaftaran_lks_terima(Request $request, $id_lks)
    {
        $permohonanlks = Pendaftaranlks::find($id_lks);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanlks->lks_perusahaan->id . '/lks/sk' . $permohonanlks->lks_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanlks->lks_perusahaan->nama_perusahaan . '-lks' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanlks->lks_perusahaan->id . '/lks/sk', $file1);

            $sk = $permohonanlks->lks_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pendaftaran-lks');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $hi_done = Pencatatanperselihan::whereHas(
            'hi_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pencatatan-penyelesaian-hi/permohonan-pencatatan-penyelesaian-hi', compact(
            'aktif_not',
            'hi_proses',
            'hi_done',
            'hi_konfir',
            'hi_terima',
            'hi_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pencatatan_hi_konfir($id_hi)
    {
        $data = Pencatatanperselihan::find($id_hi);
        $mediator = Pegawai::all();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pencatatan-penyelesaian-hi/konfirmasi', compact(
            'aktif_not',
            'data',
            'mediator',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function pencatatan_hi_show($id)
    {
        $data = Pencatatanperselihan::find($id);
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('/admin/pencatatan-penyelesaian-hi/detail', compact(
            'aktif_not',
            'data',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pencatatan_hi_terima(Request $request, $id_hi)
    {
        $permohonanhi = Pencatatanperselihan::find($id_hi);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanhi->hi_perusahaan->id . '/perselisihan_hi/sk' . $permohonanhi->hi_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanhi->hi_perusahaan->nama_perusahaan . '-hi' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanhi->hi_perusahaan->id . '/perselisihan_hi/sk', $file1);

            $sk = $permohonanhi->hi_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pencatatan-hi');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
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
                $query->where('id_status', '2')->where('keterangan', 'Permohonan Sedang dicek oleh Mediator');
            }
        )->orderBy('created_at', 'desc')->get();

        $phk_done = Pelaporanphk::whereHas(
            'phk_status',
            function ($query) {
                $query->where('id_status', '2')->where('keterangan', '<>', 'Permohonan Sedang dicek oleh Mediator');
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

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pelaporan-phk/permohonan-pelaporan-phk', compact(
            'aktif_not',
            'phk_proses',
            'phk_done',
            'phk_konfir',
            'phk_terima',
            'phk_tolak',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function pelaporan_phk_konfir($id_phk)
    {
        $data = Pelaporanphk::find($id_phk);
        $mediator = Pegawai::all();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pelaporan-phk/konfirmasi', compact(
            'data',
            'mediator',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
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

    public function pelaporan_phk_show($id)
    {
        $data = Pelaporanphk::find($id);

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        return view('/admin/pelaporan-phk/detail', compact(
            'data',
            'aktif_not',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function draft_phk(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_phk', function ($query) use ($id) {
                $query->where('id_phk', $id);
            });
        })->first();

        $profile = $data->pengecekan_detail->detail_phk->phk_perusahaan;
        $nomor = $data->pengecekan_detail->id_detail_status;
        $nama = $request->nama;
        $jabatan = $request->jabatan;
        $nip = $request->nip;
        $no_surat = $request->no_surat;
        $tgl_surat = $request->tgl_surat;
        $pdf = Pdf::loadView('pdf/phk', compact('profile', 'nomor', 'nama', 'jabatan', 'nip', 'no_surat', 'tgl_surat'))->setPaper('a4');

        $pdfname = 'SK_' . $profile->nama_perusahaan . '-phk' . now()->timestamp . '.pdf';
        $pdfPath = $profile->id . '/phk/sk/' . $pdfname;
        Storage::put($pdfPath, $pdf->output());
        $sk = $data->pengecekan_detail;
        $sk->sk = $pdfname;
        $sk->save();

        toastr()->success('Draft Berhasil Dibuat!');
        return redirect('/permohonan-pelaporan-phk/' . $id);
    }

    public function pelaporan_phk_terima(Request $request, $id_phk)
    {
        $permohonanphk = Pelaporanphk::find($id_phk);

        $validatedata = $request->validate([
            'sk' => 'required|mimes:pdf|file|max:2048',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
            'max' => 'File :attribute tidak boleh lebih besar dari :max mb.',
        ]);

        if ($validatedata) {
            Storage::disk('public')->delete([
                $permohonanphk->phk_perusahaan->id . '/phk/sk' . $permohonanphk->phk_status->sk
            ]);

            $extension1 = $request->file('sk')->getClientOriginalExtension();
            $file1 = 'SK_' . $permohonanphk->phk_perusahaan->nama_perusahaan . '-phk' . now()->timestamp . '.' . $extension1;
            $request->file('sk')->storeAs($permohonanphk->phk_perusahaan->id . '/phk/sk', $file1);

            $sk = $permohonanphk->phk_status;
            $sk->id_status = '3';
            $sk->sk = $file1;
            $sk->keterangan = "Permohonan Selesai";
            $sk->save();
            toastr()->success('Permohonan Berhasil Diterima!');
            return redirect('/admin/permohonan-pelaporan-phk');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }


    public function asset()
    {
        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        $asset_pp = Asset::find('1');
        $asset_pkb = Asset::find('2');
        $asset_pkwt = Asset::find('3');
        $asset_spsb = Asset::find('4');
        $asset_lks = Asset::find('5');
        $asset_hi = Asset::find('6');
        $asset_phk = Asset::find('7');
        return view('/admin/asset/asset', compact(
            'aktif_not',
            'asset_pp',
            'asset_pkb',
            'asset_pkwt',
            'asset_spsb',
            'asset_lks',
            'asset_hi',
            'asset_phk',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
        ));
    }

    public function alur_perizinan(Request $request, $id)
    {

        $validatedata = $request->validate([
            'alur_perizinan' => 'required|mimes:png,jpg|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $pp_alur = Asset::find($id);

            $extension1 = $request->file('alur_perizinan')->getClientOriginalExtension();
            $file1 = 'Alur-Perizinan' . now()->timestamp . '.' . $extension1;
            $request->file('alur_perizinan')->storeAs('asset', $file1);

            $pp_alur->alur_perizinan = $file1;
            $pp_alur->save();

            toastr()->success('Alur Perizinan Berhasil diperbarui!');
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

        toastr()->success('Dasar Hukum Berhasil diperbarui!');
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

            toastr()->success('Durasi Pemrosesan Berhasil diperbarui!');
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

            toastr()->success('Kontak Berhasil diperbarui!');
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

        toastr()->success('Retribusi Berhasil diperbarui!');
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

            toastr()->success('Maklumat Berhasil diperbarui!');
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

            toastr()->success('Visi dan Misi Berhasil diperbarui!');
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

            toastr()->success('Motto Berhasil diperbarui!');
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

    public function buku_registrasi()
    {
        $aktif_not = User::where('status_akun', 'inactive')->where('id_role', '4')->count();
        $data_pp = Pengesahanpp::whereHas('pp_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_lks = Pendaftaranlks::whereHas('lks_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_hi = Pencatatanperselihan::whereHas('hi_status', function ($query){
            $query->where('id_status',' 3');
        })->get();
        $data_phk = Pelaporanphk::whereHas('phk_status', function ($query){
            $query->where('id_status',' 3');
        })->get();

        $konfir_pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkb = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_pkwt = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_spsb = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_lks = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->where('id_status', '1');
        })->count();
        $konfir_phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->where('id_status', '1');
        })->count();

        return view('admin/buku-registrasi/buku-registrasi', compact(
            'data_pp',
            'data_pkb',
            'data_pkwt',
            'data_spsb',
            'data_lks',
            'data_hi',
            'data_phk',
            'konfir_pp',
            'konfir_pkb',
            'konfir_pkwt',
            'konfir_spsb',
            'konfir_lks',
            'konfir_hi',
            'konfir_phk',
            'aktif_not'
        ));
    }

}
