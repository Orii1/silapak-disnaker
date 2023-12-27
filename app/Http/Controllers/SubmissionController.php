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
use Alert;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class SubmissionController extends Controller
{
    // Pencatatan Serikat Pekerja / Serikat Buruh
    public function serikat_kerja()
    {
        $user = Auth::user();

        $asset_spsb = Asset::find('4');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pencatatan-serikat-kerja', compact('user', 'asset', 'asset_spsb'));
    }

    public function serikat_kerja_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'surat_permohonan' => 'required|mimes:png,jpg,pdf|file',
            'ad_art' => 'required|mimes:png,jpg,pdf|file',
            'nama_pembentuk' => 'required|mimes:png,jpg,pdf|file',
            'nama_pengurus' => 'required|mimes:png,jpg,pdf|file',
            'ba_pembentukan' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('surat_permohonan')->getClientOriginalExtension();
            $file1 = $user->id . 'surat_permohonan' . '-' . 'spsb' . now()->timestamp . '.' . $extension1;
            $request->file('surat_permohonan')->storeAs($user->id . '/spsb', $file1);

            $extension2 = $request->file('ad_art')->getClientOriginalExtension();
            $file2 = $user->id . 'ad_art' . '-' . 'spsb' . now()->timestamp . '.' . $extension2;
            $request->file('ad_art')->storeAs($user->id . '/spsb', $file2);

            $extension3 = $request->file('nama_pembentuk')->getClientOriginalExtension();
            $file3 = $user->id . 'nama_pembentuk' . '-' . 'spsb' . now()->timestamp . '.' . $extension3;
            $request->file('nama_pembentuk')->storeAs($user->id . '/spsb', $file3);

            $extension4 = $request->file('nama_pengurus')->getClientOriginalExtension();
            $file4 = $user->id . 'nama_pengurus' . '-' . 'spsb' . now()->timestamp . '.' . $extension4;
            $request->file('nama_pengurus')->storeAs($user->id . '/spsb', $file4);

            $extension5 = $request->file('ba_pembentukan')->getClientOriginalExtension();
            $file5 = $user->id . 'ba_pembentukan' . '-' . 'spsb' . now()->timestamp . '.' . $extension5;
            $request->file('ba_pembentukan')->storeAs($user->id . '/spsb', $file5);


            Pencatatanspsb::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'surat_permohonan' => $file1,
                'ad_art' => $file2,
                'nama_pembentuk' => $file3,
                'nama_pengurus' => $file4,
                'ba_pembentukan' => $file5,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }

    }


    // Pengesahan Peraturan Perusahaan
    public function pengesahan_pp()
    {
        $user = Auth::user();

        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pengesahan-peraturan-perusahaan', compact('user', 'asset'));
    }

    public function pengesahan_pp_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'fc_wlkp' => 'required|mimes:png,jpg,pdf|file',
            'fc_akta_pendirian_perusahaan' => 'required|mimes:png,jpg,pdf|file',
            'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => 'required|mimes:png,jpg,pdf|file',
            'permohonan_pengesahan_pp' => 'required|mimes:png,jpg,pdf|file',
            'surat_pernyataan_saran_spsb' => 'required|mimes:png,jpg,pdf|file',
            'surat_pernyataan_belum_terbentuk_spsb' => 'required|mimes:png,jpg,pdf|file',
            'surat_pernyataan_struktur_skala_upah' => 'required|mimes:png,jpg,pdf|file',
            'struktur_skala_upah_asli' => 'required|mimes:png,jpg,pdf|file',
            'draf_pp' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
            $file1 = $user->id . 'fc_wlkp' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
            $request->file('fc_wlkp')->storeAs($user->id . '/pp', $file1);

            $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
            $file2 = $user->id . 'fc_akta_pendirian_perusahaan' . '-' . 'pp' . now()->timestamp . '.' . $extension2;
            $request->file('fc_akta_pendirian_perusahaan')->storeAs($user->id . '/pp', $file2);

            $extension3 = $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
            $file3 = $user->id . 'fc_sertifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pp' . now()->timestamp . '.' . $extension3;
            $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->storeAs($user->id . '/pp', $file3);

            $extension4 = $request->file('permohonan_pengesahan_pp')->getClientOriginalExtension();
            $file4 = $user->id . 'permohonan_pengesahan_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension4;
            $request->file('permohonan_pengesahan_pp')->storeAs($user->id . '/pp', $file4);

            $extension5 = $request->file('surat_pernyataan_saran_spsb')->getClientOriginalExtension();
            $file5 = $user->id . 'surat_pernyataan_saran_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension5;
            $request->file('surat_pernyataan_saran_spsb')->storeAs($user->id . '/pp', $file5);

            $extension6 = $request->file('surat_pernyataan_belum_terbentuk_spsb')->getClientOriginalExtension();
            $file6 = $user->id . 'surat_pernyataan_belum_terbentuk_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension6;
            $request->file('surat_pernyataan_belum_terbentuk_spsb')->storeAs($user->id . '/pp', $file6);

            $extension7 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
            $file7 = $user->id . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pp' . now()->timestamp . '.' . $extension7;
            $request->file('surat_pernyataan_struktur_skala_upah')->storeAs($user->id . '/pp', $file7);

            $extension8 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
            $file8 = $user->id . 'struktur_skala_upah_asli' . '-' . 'pp' . now()->timestamp . '.' . $extension8;
            $request->file('struktur_skala_upah_asli')->storeAs($user->id . '/pp', $file8);

            $extension9 = $request->file('draf_pp')->getClientOriginalExtension();
            $file9 = $user->id . 'draf_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension9;
            $request->file('draf_pp')->storeAs($user->id . '/pp', $file9);



            Pengesahanpp::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'fc_wlkp' => $file1,
                'fc_akta_pendirian_perusahaan' => $file2,
                'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => $file3,
                'permohonan_pengesahan_pp' => $file4,
                'surat_pernyataan_saran_spsb' => $file5,
                'surat_pernyataan_belum_terbentuk_spsb' => $file6,
                'surat_pernyataan_struktur_skala_upah' => $file7,
                'struktur_skala_upah_asli' => $file8,
                'draf_pp' => $file9,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);

            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }


    // Pendaftaran Perjanjian Kerja Bersama
    public function pendaftaran_pkb()
    {
        $user = Auth::user();

        $asset_pkb = Asset::find('2');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pendaftaran-pkb', compact('user', 'asset', 'asset_pkb'));
    }

    public function pendaftaran_pkb_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'fc_wlkp' => 'required|mimes:png,jpg,pdf|file',
            'fc_akta_pendirian_perusahaan' => 'required|mimes:png,jpg,pdf|file',
            'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => 'required|mimes:png,jpg,pdf|file',
            'permohonan_pengesahan_pkb' => 'required|mimes:png,jpg,pdf|file',
            'surat_pernyataan_struktur_skala_upah' => 'required|mimes:png,jpg,pdf|file',
            'struktur_skala_upah_asli' => 'required|mimes:png,jpg,pdf|file',
            'draft_pkb' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
            $file1 = $user->id . 'fc_wlkp' . '-' . 'pkb' . now()->timestamp . '.' . $extension1;
            $request->file('fc_wlkp')->storeAs($user->id . '/pkb', $file1);

            $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
            $file2 = $user->id . 'fc_akta_pendirian_perusahaan' . '-' . 'pkb' . now()->timestamp . '.' . $extension2;
            $request->file('fc_akta_pendirian_perusahaan')->storeAs($user->id . '/pkb', $file2);

            $extension3 = $request->file('fc_setifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
            $file3 = $user->id . 'fc_setifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pkb' . now()->timestamp . '.' . $extension3;
            $request->file('fc_setifikat_peserta_bpjs_ketenagakerjaan')->storeAs($user->id . '/pkb', $file3);

            $extension4 = $request->file('permohonan_pendaftaran_pkb')->getClientOriginalExtension();
            $file4 = $user->id . 'permohonan_pendaftaran_pkb' . '-' . 'pkb' . now()->timestamp . '.' . $extension4;
            $request->file('permohonan_pendaftaran_pkb')->storeAs($user->id . '/pkb', $file4);

            $extension5 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
            $file5 = $user->id . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pkb' . now()->timestamp . '.' . $extension5;
            $request->file('surat_pernyataan_struktur_skala_upah')->storeAs($user->id . '/pkb', $file5);

            $extension6 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
            $file6 = $user->id . 'struktur_skala_upah_asli' . '-' . 'pkb' . now()->timestamp . '.' . $extension6;
            $request->file('struktur_skala_upah_asli')->storeAs($user->id . '/pkb', $file6);

            $extension7 = $request->file('draft_pkb')->getClientOriginalExtension();
            $file7 = $user->id . 'draft_pkb' . '-' . 'pkb' . now()->timestamp . '.' . $extension7;
            $request->file('draft_pkb')->storeAs($user->id . '/pkb', $file7);

            Pendaftaranpkb::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'fc_wlkp' => $file1,
                'fc_akta_pendirian_perusahaan' => $file2,
                'fc_setifikat_peserta_bpjs_ketenagakerjaan' => $file3,
                'permohonan_pendaftaran_pkb' => $file4,
                'surat_pernyataan_struktur_skala_upah' => $file5,
                'struktur_skala_upah_asli' => $file6,
                'draft_pkb' => $file7,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    // Pendaftaran Perjanjian Kerja Waktu Tertentu
    public function perjanjian_pkwt()
    {
        $user = Auth::user();

        $asset_pkwt = Asset::find('3');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu', compact('user', 'asset', 'asset_pkwt'));
    }

    public function perjanjian_pkwt_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'srt_permohonan_pencatatan_pkwt' => 'required|mimes:png,jpg,pdf|file',
            'daftar_nama_pekerja_pkwt' => 'required|mimes:png,jpg,pdf|file',
            'pkwt_asli' => 'required|mimes:png,jpg,pdf|file',
            'fc_wlkp' => 'required|mimes:png,jpg,pdf|file',
            'fc_akta_pendirian_perusahaan' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('srt_permohonan_pencatatan_pkwt')->getClientOriginalExtension();
            $file1 = $user->id . 'srt_permohonan_pencatatan_pkwt' . '-' . 'pkwt' . now()->timestamp . '.' . $extension1;
            $request->file('srt_permohonan_pencatatan_pkwt')->storeAs($user->id . '/pkwt', $file1);

            $extension2 = $request->file('daftar_nama_pekerja_pkwt')->getClientOriginalExtension();
            $file2 = $user->id . 'daftar_nama_pekerja_pkwt' . '-' . 'pkwt' . now()->timestamp . '.' . $extension2;
            $request->file('daftar_nama_pekerja_pkwt')->storeAs($user->id . '/pkwt', $file2);

            $extension3 = $request->file('pkwt_asli')->getClientOriginalExtension();
            $file3 = $user->id . 'pkwt_asli' . '-' . 'pkwt' . now()->timestamp . '.' . $extension3;
            $request->file('pkwt_asli')->storeAs($user->id . '/pkwt', $file3);

            $extension4 = $request->file('fc_wlkp')->getClientOriginalExtension();
            $file4 = $user->id . 'fc_wlkp' . '-' . 'pkwt' . now()->timestamp . '.' . $extension4;
            $request->file('fc_wlkp')->storeAs($user->id . '/pkwt', $file4);

            $extension5 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
            $file5 = $user->id . 'fc_akta_pendirian_perusahaan' . '-' . 'pkwt' . now()->timestamp . '.' . $extension5;
            $request->file('fc_akta_pendirian_perusahaan')->storeAs($user->id . '/pkwt', $file5);

            Pendaftaranpkwt::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'srt_permohonan_pencatatan_pkwt' => $file1,
                'daftar_nama_pekerja_pkwt' => $file2,
                'pkwt_asli' => $file3,
                'fc_wlkp' => $file4,
                'fc_akta_pendirian_perusahaan' => $file5,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    // Pendaftaran LKS Bipartit
    public function pendaftaran_lks()
    {
        $user = Auth::user();

        $asset_lks = Asset::find('5');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pendaftaran-lks-bipartit', compact('user', 'asset', 'asset_lks'));
    }

    public function pendaftaran_lks_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'permohonan_pencatatan_lks_bipartit' => 'required|mimes:png,jpg,pdf|file',
            'daftar_susunan_pengurus_lks_bipartit' => 'required|mimes:png,jpg,pdf|file',
            'berita_acara_pembentukan_lks_bipartit' => 'required|mimes:png,jpg,pdf|file',
            'fc_wlkp' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('permohonan_pencatatan_lks_bipartit')->getClientOriginalExtension();
            $file1 = $user->id . 'permohonan_pencatatan_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension1;
            $request->file('permohonan_pencatatan_lks_bipartit')->storeAs($user->id . '/lks', $file1);

            $extension2 = $request->file('daftar_susunan_pengurus_lks_bipartit')->getClientOriginalExtension();
            $file2 = $user->id . 'daftar_susunan_pengurus_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension2;
            $request->file('daftar_susunan_pengurus_lks_bipartit')->storeAs($user->id . '/lks', $file2);

            $extension3 = $request->file('berita_acara_pembentukan_lks_bipartit')->getClientOriginalExtension();
            $file3 = $user->id . 'berita_acara_pembentukan_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension3;
            $request->file('berita_acara_pembentukan_lks_bipartit')->storeAs($user->id . '/lks', $file3);

            $extension4 = $request->file('fc_wlkp')->getClientOriginalExtension();
            $file4 = $user->id . 'fc_wlkp' . '-' . 'lks' . now()->timestamp . '.' . $extension4;
            $request->file('fc_wlkp')->storeAs($user->id . '/lks', $file4);

            Pendaftaranlks::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'permohonan_pencatatan_lks_bipartit' => $file1,
                'daftar_susunan_pengurus_lks_bipartit' => $file2,
                'berita_acara_pembentukan_lks_bipartit' => $file3,
                'fc_wlkp' => $file4,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    //Pencatatan Penyelesaian Perselisihan Internal
    public function pencatatan_perselisihan_internal()
    {
        $user = Auth::user();

        $asset_hi = Asset::find('6');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pencatatan-penyelesaian-perselisihan-internal', compact('user', 'asset', 'asset_hi'));
    }

    public function pencatatan_perselisihan_internal_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'permohonan_pencatatan_pphi' => 'required|mimes:png,jpg,pdf|file',
            'surat_permintaan_perundingan_bipartit' => 'required|mimes:png,jpg,pdf|file',
            'daftar_hadir_perundingan_bipartit' => 'required|mimes:png,jpg,pdf|file',
            'risalah_perundingan_bipartit' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('permohonan_pencatatan_pphi')->getClientOriginalExtension();
            $file1 = $user->id . 'permohonan_pencatatan_pphi' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension1;
            $request->file('permohonan_pencatatan_pphi')->storeAs($user->id . '/perselisihan_hi', $file1);

            $extension2 = $request->file('surat_permintaan_perundingan_bipartit')->getClientOriginalExtension();
            $file2 = $user->id . 'surat_permintaan_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension2;
            $request->file('surat_permintaan_perundingan_bipartit')->storeAs($user->id . '/perselisihan_hi', $file2);

            $extension3 = $request->file('daftar_hadir_perundingan_bipartit')->getClientOriginalExtension();
            $file3 = $user->id . 'daftar_hadir_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension3;
            $request->file('daftar_hadir_perundingan_bipartit')->storeAs($user->id . '/perselisihan_hi', $file3);

            $extension4 = $request->file('risalah_perundingan_bipartit')->getClientOriginalExtension();
            $file4 = $user->id . 'risalah_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension4;
            $request->file('risalah_perundingan_bipartit')->storeAs($user->id . '/perselisihan_hi', $file4);

            Pencatatanperselihan::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'permohonan_pencatatan_pphi' => $file1,
                'surat_permintaan_perundingan_bipartit' => $file2,
                'daftar_hadir_perundingan_bipartit' => $file3,
                'risalah_perundingan_bipartit' => $file4,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }

    //Pelaporan PHK
    public function pelaporan_phk()
    {
        $user = Auth::user();

        $asset_phk = Asset::find('7');
        $asset = Asset::find('1');
        return view('/perusahaan/permohonan/pelaporan-pemutusan-hubungan-kerja', compact('user', 'asset', 'asset_phk'));
    }

    public function pelaporan_phk_store(Request $request)
    {
        $user = Auth::user();

        $validatedata = $request->validate([
            'peruntukan' => 'required',
            'permohonan_pelaporan_phk' => 'required|mimes:png,jpg,pdf|file',
            'surat_pemberitahuan_phk' => 'required|mimes:png,jpg,pdf|file',
            'surat_tanggapan_pemberitahuan_phk' => 'required|mimes:png,jpg,pdf|file',
            'pb_bipartit' => 'required|mimes:png,jpg,pdf|file',
        ], [
            'required' => 'Field :attribute wajib diisi.',
            'mimes' => 'File :attribute harus berupa format png, jpg, atau pdf.',
            'file' => 'Field :attribute harus berupa file.',
        ]);

        if ($validatedata) {
            $extension1 = $request->file('permohonan_pelaporan_phk')->getClientOriginalExtension();
            $file1 = $user->id . 'permohonan_pelaporan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension1;
            $request->file('permohonan_pelaporan_phk')->storeAs($user->id . '/phk', $file1);

            $extension2 = $request->file('surat_pemberitahuan_phk')->getClientOriginalExtension();
            $file2 = $user->id . 'surat_pemberitahuan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension2;
            $request->file('surat_pemberitahuan_phk')->storeAs($user->id . '/phk', $file2);

            $extension3 = $request->file('surat_tanggapan_pemberitahuan_phk')->getClientOriginalExtension();
            $file3 = $user->id . 'surat_tanggapan_pemberitahuan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension3;
            $request->file('surat_tanggapan_pemberitahuan_phk')->storeAs($user->id . '/phk', $file3);

            $extension4 = $request->file('pb_bipartit')->getClientOriginalExtension();
            $file4 = $user->id . 'pb_bipartit' . '-' . 'phk' . now()->timestamp . '.' . $extension4;
            $request->file('pb_bipartit')->storeAs($user->id . '/phk', $file4);

            Pelaporanphk::create([
                'user_id' => $user->id,
                'peruntukan' => $request->peruntukan,
                'permohonan_pelaporan_phk' => $file1,
                'surat_pemberitahuan_phk' => $file2,
                'surat_tanggapan_pemberitahuan_phk' => $file3,
                'pb_bipartit' => $file4,
                'keterangan' => 'Menunggu Konfirmasi'
            ]);
            toastr()->success('Permohonan Berhasil Dikirim!');
            return redirect('perusahaan/dashboard');
        } else {
            return redirect('')->withErrors($validatedata)->withInput();
        }
    }
}
