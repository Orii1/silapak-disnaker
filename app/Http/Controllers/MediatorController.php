<?php

namespace App\Http\Controllers;

use App\Models\DetailPengecekan;
use App\Models\Pengesahanpp;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pencatatanperselihan;
use App\Models\Pelaporanphk;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class MediatorController extends Controller
{
    public function index()
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

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $permohonan_med = DetailPengecekan::where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
        ->where('hasil_pengecekan', 'Belum di Periksa')->count();
        $permohonan_done = DetailPengecekan::where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
        ->where('hasil_pengecekan', '<>', 'Belum di Periksa')->count();

        return view('mediator.home.home', compact(
            'datestring',
            'dayname',
            'pp_all',
            'pkb_all',
            'pkwt_all',
            'spsb_all',
            'lks_all',
            'hi_all',
            'phk_all',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
            'permohonan_med',
            'permohonan_done'
        ));
    }

    public function profile()
    {
        $mediator = Auth::user();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->count();

        return view('mediator.profile.profilemediator', compact(
            'mediator',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
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
// PP
    public function pengesahan_pp()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $pp = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->orderBy('created_at')
        ->get();

        $pp_done = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();


        return view('mediator.pengesahan-pp.pengesahan-pp', compact(
            'pp',
            'pp_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pengesahan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pengesahan-pp.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pengesahan_pp_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_pp', function ($query) use ($id) {
                $query->where('id_pp', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_pp->pp_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-pp' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/pp/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pengesahan-pp')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pengesahan-pp');
        }
    }
    // PKB
    public function pendaftaran_pkb()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $pkb = pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pkb_done = pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();


        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-pkb.permohonan-pendaftaran-pkb', compact(
            'pkb',
            'pkb_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_pkb_show($id)
    {
        $data = pendaftaranpkb::find($id);
        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-pkb.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_pkb_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_pkb', function ($query) use ($id) {
                $query->where('id_pkb', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_pkb->pkb_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-pkb' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/pkb/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pendaftaran-pkb')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pendaftaran-pkb');
        }
    }
    // PKWT
    public function pendaftaran_pkwt()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $pkwt = pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pkwt_done = pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();


        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-pkwt.permohonan-pendaftaran-pkwt', compact(
            'pkwt',
            'pkwt_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_pkwt_show($id)
    {
        $data = pendaftaranpkwt::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-pkwt.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_pkwt_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_pkwt', function ($query) use ($id) {
                $query->where('id_pkwt', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_pkwt->pkwt_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-pkwt' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/pkwt/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pendaftaran-pkwt')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pendaftaran-pkwt');
        }
    }
    // SPSB
    public function pencatatan_spsb()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $spsb = pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $spsb_done = pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pencatatan-spsb.permohonan-pencatatan-spsb', compact(
            'spsb',
            'spsb_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pencatatan_spsb_show($id)
    {
        $data = pencatatanspsb::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pencatatan-spsb.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pencatatan_spsb_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_spsb', function ($query) use ($id) {
                $query->where('id_spsb', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_spsb->spsb_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-spsb' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/spsb/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pencatatan-spsb')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pendaftaran-lks');
        }

    }
    // LKS
    public function pendaftaran_lks()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $lks = pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $lks_done = pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();


        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-lks-bipartit.permohonan-pendaftaran-lks', compact(
            'lks',
            'lks_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_lks_show($id)
    {
        $data = pendaftaranlks::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pendaftaran-lks-bipartit.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pendaftaran_lks_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_lks', function ($query) use ($id) {
                $query->where('id_lks', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_lks->lks_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-lks' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/lks/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pendaftaran-lks')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pendaftaran-lks');
        }

    }
    // HI
    public function pencatatan_hi()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $hi = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $hi_done = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        return view('mediator.pencatatan-penyelesaian-hi.permohonan-pencatatan-penyelesaian-hi', compact(
            'hi',
            'hi_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pencatatan_hi_show($id)
    {
        $data = Pencatatanperselihan::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        return view('mediator.pencatatan-penyelesaian-hi.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pencatatan_hi_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_hi', function ($query) use ($id) {
                $query->where('id_hi', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_hi->hi_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-hi' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/perselisihan_hi/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pencatatan-hi')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pencatatan-hi');
        }

    }
    // PHK
    public function pelaporan_phk()
    {
        // $mediator = Auth::user()->user_pegawai->id_pegawai;

        $phk = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $phk_done = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', '<>', 'Belum di Periksa');
            });
        })
            ->orderBy('created_at')
            ->get();

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        return view('mediator.pelaporan-phk.permohonan-pelaporan-phk', compact(
            'phk',
            'phk_done',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pelaporan_phk_show($id)
    {
        $data = Pelaporanphk::find($id);

        $pp_not = Pengesahanpp::whereHas('pp_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkb_not = Pendaftaranpkb::whereHas('pkb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $pkwt_not = Pendaftaranpkwt::whereHas('pkwt_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $spsb_not = Pencatatanspsb::whereHas('spsb_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $lks_not = Pendaftaranlks::whereHas('lks_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $hi_not = Pencatatanperselihan::whereHas('hi_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();

        $phk_not = Pelaporanphk::whereHas('phk_status', function ($query) {
            $query->whereHas('status_cek', function ($query) {
                $query->where('id_pegawai', Auth::user()->user_pegawai->id_pegawai)
                    ->where('hasil_pengecekan', 'Belum di Periksa');
            });
        })
        ->count();
        return view('mediator.pelaporan-phk.detail', compact(
            'data',
            'pp_not',
            'pkb_not',
            'pkwt_not',
            'spsb_not',
            'lks_not',
            'hi_not',
            'phk_not',
        ));
    }

    public function pelaporan_phk_hasil(Request $request, $id)
    {
        $data = DetailPengecekan::whereHas('pengecekan_detail', function ($query) use ($id) {
            $query->whereHas('detail_phk', function ($query) use ($id) {
                $query->where('id_phk', $id);
            });
        })->first();

        $data->hasil_pengecekan = $request->hasil_pengecekan;
        $data->pesan = $request->pesan;
        $data->save();

        $pengecekan_detail = $data->pengecekan_detail;
        $pengecekan_detail->keterangan = 'Permohonan Selesai di Periksa';
        $pengecekan_detail->save();

        $hasil = $data->hasil_pengecekan;

        if ($hasil == "Dokumen Valid") {
            $profile = $data->pengecekan_detail->detail_phk->phk_perusahaan;
            $nomor = $data->pengecekan_detail->id_detail_status;
            $pdf = pdf::loadView('pdf.pp', compact('profile', 'nomor'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-phk' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/phk/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang dalam proses penandatanganan';
            $sk->save();
            return redirect('/mediator/permohonan-pelaporan-phk')->with('pdfPath', $pdfPath);
        } else {
            $hasil = $data->pengecekan_detail;
            $hasil->id_status = '4';
            $hasil->keterangan = 'Silahkan Revisi sesuai pesan';
            $hasil->save();
            return redirect('/mediator/permohonan-pelaporan-phk');
        }

    }
}
