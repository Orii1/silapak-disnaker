<?php

namespace App\Http\Controllers;

use App\Models\DetailPengecekan;
use App\Models\Pengesahanpp;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

        return view('mediator.pengesahan-pp.pengesahan-pp', compact('pp', 'pp_done'));
    }

    public function pengesahan_pp_show($id)
    {
        $data = Pengesahanpp::find($id);
        return view('mediator.pengesahan-pp.detail', compact('data'));
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

            $pdf = pdf::loadView('pdf.pp', compact('profile'))->setPaper('a4');

            $pdfname = 'SK_' . $profile->nama_perusahaan . '-pp' . now()->timestamp . '.pdf';
            $pdfPath = $profile->id . '/pp/sk/' . $pdfname;
            Storage::put($pdfPath, $pdf->output());
            $sk = $data->pengecekan_detail;
            $sk->sk = $pdfname;
            $sk->keterangan = 'SK sedang di tanda tangan';
            $sk->save();
            return redirect('/mediator/permohonan-pengesahan-pp')->with('pdfPath', $pdfPath);
        } else {
            return ('haloopo');
        }

    }
}
