<?php

namespace App\Http\Controllers;

use App\Models\Pencatatanspsb;
use App\Models\Pengesahanpp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class SubmissionController extends Controller
{
    // Pencatatan Serikat Pekerja / Serikat Buruh
    public function serikat_kerja()
    {

        $user = Auth::user();
        return view('/perusahaan/permohonan/pencatatan-serikat-kerja', compact('user'));
    }

    public function serikat_kerja_store(Request $request)
    {
        $user = Auth::user();

        // Validator::validate($request, [
        //     'attachment' => [
        //         'required',
        //         File::types(['pdf', 'png', 'jpg'])
        //     ],
        // ]);

        $extension1 = $request->file('surat_permohonan')->getClientOriginalExtension();
        $file1 = $user->id . 'surat_permohonan' . '-' . 'spsb' . now()->timestamp . '.' . $extension1;
        $request->file('surat_permohonan')->storeAs('spsb', $file1);


        $extension2 = $request->file('ad_art')->getClientOriginalExtension();
        $file2 = $user->id . 'ad_art' . '-' . 'spsb' . now()->timestamp . '.' . $extension2;
        $request->file('ad_art')->storeAs('spsb', $file2);

        $extension3 = $request->file('nama_pembentuk')->getClientOriginalExtension();
        $file3 = $user->id . 'nama_pembentuk' . '-' . 'spsb' . now()->timestamp . '.' . $extension3;
        $request->file('nama_pembentuk')->storeAs('spsb', $file3);

        $extension4 = $request->file('nama_pengurus')->getClientOriginalExtension();
        $file4 = $user->id . 'nama_pengurus' . '-' . 'spsb' . now()->timestamp . '.' . $extension4;
        $request->file('nama_pengurus')->storeAs('spsb', $file4);

        $extension5 = $request->file('ba_pembentukan')->getClientOriginalExtension();
        $file5 = $user->id . 'ba_pembentukan' . '-' . 'spsb' . now()->timestamp . '.' . $extension5;
        $request->file('ba_pembentukan')->storeAs('spsb', $file5);


        Pencatatanspsb::create([
            'user_id' => $user->id,
            'surat_permohonan' => $file1,
            'ad_art' => $file2,
            'nama_pembentuk' => $file3,
            'nama_pengurus' => $file4,
            'ba_pembentukan' => $file5
        ]);

        return redirect('/dashboard');
    }

    // Pengesahan Peraturan Perusahaan
    public function pengesahan_pp()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pengesahan-peraturan-perusahaan', compact('user'));
    }

    public function pengesahan_pp_store(Request $request)
    {
        $user = Auth::user();

        $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file1 = $user->id . 'fc_wlkp' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
        $request->file('fc_wlkp')->storeAs('pp', $file1);

        $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
        $file2 = $user->id . 'fc_akta_pendirian_perusahaan' . '-' . 'pp' . now()->timestamp . '.' . $extension2;
        $request->file('fc_akta_pendirian_perusahaan')->storeAs('pp', $file2);

        $extension3 = $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
        $file3 = $user->id . 'fc_sertifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pp' . now()->timestamp . '.' . $extension3;
        $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->storeAs('pp', $file3);

        $extension4 = $request->file('permohonan_pengesahan_pp')->getClientOriginalExtension();
        $file4 = $user->id . 'permohonan_pengesahan_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension4;
        $request->file('permohonan_pengesahan_pp')->storeAs('pp', $file4);

        $extension5 = $request->file('surat_pernyataan_saran_spsb')->getClientOriginalExtension();
        $file5 = $user->id . 'surat_pernyataan_saran_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension5;
        $request->file('surat_pernyataan_saran_spsb')->storeAs('pp', $file5);

        $extension6 = $request->file('surat_pernyataan_belum_terbentuk_spsb')->getClientOriginalExtension();
        $file6 = $user->id . 'surat_pernyataan_belum_terbentuk_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension6;
        $request->file('surat_pernyataan_belum_terbentuk_spsb')->storeAs('pp', $file6);

        $extension7 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
        $file7 = $user->id . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pp' . now()->timestamp . '.' . $extension7;
        $request->file('surat_pernyataan_struktur_skala_upah')->storeAs('pp', $file7);

        $extension8 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
        $file8 = $user->id . 'struktur_skala_upah_asli' . '-' . 'pp' . now()->timestamp . '.' . $extension8;
        $request->file('struktur_skala_upah_asli')->storeAs('pp', $file8);

        $extension9 = $request->file('draf_pp')->getClientOriginalExtension();
        $file9 = $user->id . 'draf_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension9;
        $request->file('draf_pp')->storeAs('pp', $file9);

        Pengesahanpp::create([
            'user_id' => $user->id,
            'fc_wlkp' => $file1,
            'fc_akta_pendirian_perusahaan' => $file2,
            'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => $file3,
            'permohonan_pengesahan_pp' => $file4,
            'surat_pernyataan_saran_spsb' => $file5,
            'surat_pernyataan_belum_terbentuk_spsb' => $file6,
            'surat_pernyataan_struktur_skala_upah' => $file7,
            'struktur_skala_upah_asli' => $file8,
            'draf_pp' => $file9
        ]);

        return redirect('/dashboard');
    }


    // Pendaftaran Perjanjian Kerja Bersama
    public function pendaftaran_pkb()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pendaftaran-pkb', compact('user'));
    }

    // Pendaftaran Perjanjian Kerja Waktu Tertentu
    public function perjanjian_pkwt()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu', compact('user'));
    }

    // Pendaftaran LKS Bipartit
    public function pendaftaran_lks()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pendaftaran-lks-bipartit', compact('user'));
    }

    //Pencatatan Penyelesaian Perselisihan Internal
    public function pencatatan_perselisihan_internal()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pencatatan-penyelesaian-perselisihan-internal', compact('user'));
    }


    public function pelaporan_phk()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pelaporan-pemutusan-hubungan-kerja', compact('user'));
    }

}
