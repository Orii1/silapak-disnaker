<?php

namespace App\Http\Controllers;

use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditSubmissionController extends Controller
{
    public function update_pp_submission(Request $request, $id)
    {
        $pp = Pengesahanpp::find($id);
        $user = $pp->user_id;

        Storage::disk('public')->delete([
            $user . '/pp/' . $pp->fc_wlkp,
            $user . '/pp/' . $pp->fc_akta_pendirian_perusahaan,
            $user . '/pp/' . $pp->fc_sertifikat_peserta_bpjs_ketenagakerjaan,
            $user . '/pp/' . $pp->permohonan_pengesahan_pp,
            $user . '/pp/' . $pp->surat_pernyataan_saran_spsb,
            $user . '/pp/' . $pp->surat_pernyataan_belum_terbentuk_spsb,
            $user . '/pp/' . $pp->surat_pernyataan_struktur_skala_upah,
            $user . '/pp/' . $pp->struktur_skala_upah_asli,
            $user . '/pp/' . $pp->draf_pp,
        ]);

        $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file1 = $user . 'fc_wlkp' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
        $request->file('fc_wlkp')->storeAs($user . '/pp', $file1);

        $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
        $file2 = $user . 'fc_akta_pendirian_perusahaan' . '-' . 'pp' . now()->timestamp . '.' . $extension2;
        $request->file('fc_akta_pendirian_perusahaan')->storeAs($user . '/pp', $file2);

        $extension3 = $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
        $file3 = $user . 'fc_sertifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pp' . now()->timestamp . '.' . $extension3;
        $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->storeAs($user . '/pp', $file3);

        $extension4 = $request->file('permohonan_pengesahan_pp')->getClientOriginalExtension();
        $file4 = $user . 'permohonan_pengesahan_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension4;
        $request->file('permohonan_pengesahan_pp')->storeAs($user . '/pp', $file4);

        $extension5 = $request->file('surat_pernyataan_saran_spsb')->getClientOriginalExtension();
        $file5 = $user . 'surat_pernyataan_saran_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension5;
        $request->file('surat_pernyataan_saran_spsb')->storeAs($user . '/pp', $file5);

        $extension6 = $request->file('surat_pernyataan_belum_terbentuk_spsb')->getClientOriginalExtension();
        $file6 = $user . 'surat_pernyataan_belum_terbentuk_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension6;
        $request->file('surat_pernyataan_belum_terbentuk_spsb')->storeAs($user . '/pp', $file6);

        $extension7 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
        $file7 = $user . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pp' . now()->timestamp . '.' . $extension7;
        $request->file('surat_pernyataan_struktur_skala_upah')->storeAs($user . '/pp', $file7);

        $extension8 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
        $file8 = $user . 'struktur_skala_upah_asli' . '-' . 'pp' . now()->timestamp . '.' . $extension8;
        $request->file('struktur_skala_upah_asli')->storeAs($user . '/pp', $file8);

        $extension9 = $request->file('draf_pp')->getClientOriginalExtension();
        $file9 = $user . 'draf_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension9;
        $request->file('draf_pp')->storeAs($user . '/pp', $file9);

        $pp->update([
            'user_id' => $user,
            'fc_wlkp' => $file1,
            'fc_akta_pendirian_perusahaan' => $file2,
            'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => $file3,
            'permohonan_pengesahan_pp' => $file4,
            'surat_pernyataan_saran_spsb' => $file5,
            'surat_pernyataan_belum_terbentuk_spsb' => $file6,
            'surat_pernyataan_struktur_skala_upah' => $file7,
            'struktur_skala_upah_asli' => $file8,
            'draf_pp' => $file9,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);
        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }


    public function update_pkb_submission(Request $request, $id)
    {
        $pkb = Pendaftaranpkb::find($id);
        $user = $pkb->user_id;

        Storage::disk('public')->delete([
            $user . '/pkb/' . $pkb->fc_wlkp,
            $user . '/pkb/' . $pkb->fc_akta_pendirian_perusahaan,
            $user . '/pkb/' . $pkb->fc_sertifikat_peserta_bpjs_ketenagakerjaan,
            $user . '/pkb/' . $pkb->permohonan_pendaftaran_pkb,
            $user . '/pkb/' . $pkb->surat_pernyataan_struktur_skala_upah,
            $user . '/pkb/' . $pkb->struktur_skala_upah_asli,
            $user . '/pkb/' . $pkb->draft_pkb,
        ]);

        $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file1 = $user . 'fc_wlkp' . '-' . 'pkb' . now()->timestamp . '.' . $extension1;
        $request->file('fc_wlkp')->storeAs($user . '/pkb', $file1);

        $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
        $file2 = $user . 'fc_akta_pendirian_perusahaan' . '-' . 'pkb' . now()->timestamp . '.' . $extension2;
        $request->file('fc_akta_pendirian_perusahaan')->storeAs($user . '/pkb', $file2);

        $extension3 = $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
        $file3 = $user . 'fc_sertifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pkb' . now()->timestamp . '.' . $extension3;
        $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->storeAs($user . '/pkb', $file3);

        $extension4 = $request->file('permohonan_pendaftaran_pkb')->getClientOriginalExtension();
        $file4 = $user . 'permohonan_pendaftaran_pkb' . '-' . 'pkb' . now()->timestamp . '.' . $extension4;
        $request->file('permohonan_pendaftaran_pkb')->storeAs($user . '/pkb', $file4);

        $extension5 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
        $file5 = $user . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pkb' . now()->timestamp . '.' . $extension5;
        $request->file('surat_pernyataan_struktur_skala_upah')->storeAs($user . '/pkb', $file5);

        $extension6 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
        $file6 = $user . 'struktur_skala_upah_asli' . '-' . 'pkb' . now()->timestamp . '.' . $extension6;
        $request->file('struktur_skala_upah_asli')->storeAs($user . '/pkb', $file6);

        $extension7 = $request->file('draft_pkb')->getClientOriginalExtension();
        $file7 = $user . 'draft_pkb' . '-' . 'pkb' . now()->timestamp . '.' . $extension7;
        $request->file('draft_pkb')->storeAs($user . '/pkb', $file7);

        $pkb->update([
            'user_id' => $user,
            'fc_wlkp' => $file1,
            'fc_akta_pendirian_perusahaan' => $file2,
            'fc_setifikat_peserta_bpjs_ketenagakerjaan' => $file3,
            'permohonan_pendaftaran_pkb' => $file4,
            'surat_pernyataan_struktur_skala_upah' => $file5,
            'struktur_skala_upah_asli' => $file6,
            'draft_pkb' => $file7,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);
        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }


    public function update_pkwt_submission(Request $request, $id)
    {
        $pkwt = Pendaftaranpkwt::find($id);
        $user = $pkwt->user_id;

        Storage::disk('public')->delete([
            $user . '/pkwt/' . $pkwt->srt_permohonan_pencatatan_pkwt,
            $user . '/pkwt/' . $pkwt->daftar_nama_pekerja_pkwt,
            $user . '/pkwt/' . $pkwt->pkwt_asli,
            $user . '/pkwt/' . $pkwt->fc_wlkp,
            $user . '/pkwt/' . $pkwt->fc_akta_pendirian_perusahaan,
        ]);

        $extension1 = $request->file('srt_permohonan_pencatatan_pkwt')->getClientOriginalExtension();
        $file1 = $user . 'srt_permohonan_pencatatan_pkwt' . '-' . 'pkwt' . now()->timestamp . '.' . $extension1;
        $request->file('srt_permohonan_pencatatan_pkwt')->storeAs($user . '/pkwt', $file1);

        $extension2 = $request->file('daftar_nama_pekerja_pkwt')->getClientOriginalExtension();
        $file2 = $user . 'daftar_nama_pekerja_pkwt' . '-' . 'pkwt' . now()->timestamp . '.' . $extension2;
        $request->file('daftar_nama_pekerja_pkwt')->storeAs($user . '/pkwt', $file2);

        $extension3 = $request->file('pkwt_asli')->getClientOriginalExtension();
        $file3 = $user . 'pkwt_asli' . '-' . 'pkwt' . now()->timestamp . '.' . $extension3;
        $request->file('pkwt_asli')->storeAs($user . '/pkwt', $file3);

        $extension4 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file4 = $user . 'fc_wlkp' . '-' . 'pkwt' . now()->timestamp . '.' . $extension4;
        $request->file('fc_wlkp')->storeAs($user . '/pkwt', $file4);

        $extension5 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
        $file5 = $user . 'fc_akta_pendirian_perusahaan' . '-' . 'pkwt' . now()->timestamp . '.' . $extension5;
        $request->file('fc_akta_pendirian_perusahaan')->storeAs($user . '/pkwt', $file5);

        $pkwt->update([
            'user_id' => $user,
            'srt_permohonan_pencatatan_pkwt' => $file1,
            'daftar_nama_pekerja_pkwt' => $file2,
            'pkwt_asli' => $file3,
            'fc_wlkp' => $file4,
            'fc_akta_pendirian_perusahaan' => $file5,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);

        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }


    public function update_spsb_submission(Request $request, $id)
    {
        $spsb = Pencatatanspsb::find($id);
        $user = $spsb->user_id;

        Storage::disk('public')->delete([
            $user . '/spsb/' . $spsb->surat_permohonan,
            $user . '/spsb/' . $spsb->ad_art,
            $user . '/spsb/' . $spsb->nama_pembentuk,
            $user . '/spsb/' . $spsb->nama_pengurus,
            $user . '/spsb/' . $spsb->ba_pembentukan,
        ]);

        $extension1 = $request->file('surat_permohonan')->getClientOriginalExtension();
        $file1 = $user . 'surat_permohonan' . '-' . 'spsb' . now()->timestamp . '.' . $extension1;
        $request->file('surat_permohonan')->storeAs($user . '/spsb', $file1);

        $extension2 = $request->file('ad_art')->getClientOriginalExtension();
        $file2 = $user . 'ad_art' . '-' . 'spsb' . now()->timestamp . '.' . $extension2;
        $request->file('ad_art')->storeAs($user . '/spsb', $file2);

        $extension3 = $request->file('nama_pembentuk')->getClientOriginalExtension();
        $file3 = $user . 'nama_pembentuk' . '-' . 'spsb' . now()->timestamp . '.' . $extension3;
        $request->file('nama_pembentuk')->storeAs($user . '/spsb', $file3);

        $extension4 = $request->file('nama_pengurus')->getClientOriginalExtension();
        $file4 = $user . 'nama_pengurus' . '-' . 'spsb' . now()->timestamp . '.' . $extension4;
        $request->file('nama_pengurus')->storeAs($user . '/spsb', $file4);

        $extension5 = $request->file('ba_pembentukan')->getClientOriginalExtension();
        $file5 = $user . 'ba_pembentukan' . '-' . 'spsb' . now()->timestamp . '.' . $extension5;
        $request->file('ba_pembentukan')->storeAs($user . '/spsb', $file5);

        $spsb->update([
            'user_id' => $user,
            'surat_permohonan' => $file1,
            'ad_art' => $file2,
            'nama_pembentuk' => $file3,
            'nama_pengurus' => $file4,
            'ba_pembentukan' => $file5,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);

        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }


    public function update_lks_submission(Request $request, $id)
    {
        $lks = Pendaftaranlks::find($id);
        $user = $lks->user_id;

        Storage::disk('public')->delete([
            $user . '/lks/' . $lks->permohonan_pencatatan_lks_bipartit,
            $user . '/lks/' . $lks->daftar_susunan_pengurus_lks_bipartit,
            $user . '/lks/' . $lks->berita_acara_pembentukan_lks_bipartit,
            $user . '/lks/' . $lks->fc_wlkp,
        ]);

        $extension1 = $request->file('permohonan_pencatatan_lks_bipartit')->getClientOriginalExtension();
        $file1 = $user . 'permohonan_pencatatan_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension1;
        $request->file('permohonan_pencatatan_lks_bipartit')->storeAs($user . '/lks', $file1);

        $extension2 = $request->file('daftar_susunan_pengurus_lks_bipartit')->getClientOriginalExtension();
        $file2 = $user . 'daftar_susunan_pengurus_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension2;
        $request->file('daftar_susunan_pengurus_lks_bipartit')->storeAs($user . '/lks', $file2);

        $extension3 = $request->file('berita_acara_pembentukan_lks_bipartit')->getClientOriginalExtension();
        $file3 = $user . 'berita_acara_pembentukan_lks_bipartit' . '-' . 'lks' . now()->timestamp . '.' . $extension3;
        $request->file('berita_acara_pembentukan_lks_bipartit')->storeAs($user . '/lks', $file3);

        $extension4 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file4 = $user . 'fc_wlkp' . '-' . 'lks' . now()->timestamp . '.' . $extension4;
        $request->file('fc_wlkp')->storeAs($user . '/lks', $file4);

        $lks->update([
            'user_id' => $user,
            'permohonan_pencatatan_lks_bipartit' => $file1,
            'daftar_susunan_pengurus_lks_bipartit' => $file2,
            'berita_acara_pembentukan_lks_bipartit' => $file3,
            'fc_wlkp' => $file4,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);

        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }

    public function update_hi_submission(Request $request, $id)
    {
        $hi = Pencatatanperselihan::find($id);
        $user = $hi->user_id;

        Storage::disk('public')->delete([
            $user . '/perselisihan_hi/' . $hi->permohonan_pencatatan_pphi,
            $user . '/perselisihan_hi/' . $hi->surat_permintaan_perundingan_bipartit,
            $user . '/perselisihan_hi/' . $hi->daftar_hadir_perundingan_bipartit,
            $user . '/perselisihan_hi/' . $hi->risalah_perundingan_bipartit,
        ]);

        $extension1 = $request->file('permohonan_pencatatan_pphi')->getClientOriginalExtension();
        $file1 = $user . 'permohonan_pencatatan_pphi' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension1;
        $request->file('permohonan_pencatatan_pphi')->storeAs($user . '/perselisihan_hi', $file1);

        $extension2 = $request->file('surat_permintaan_perundingan_bipartit')->getClientOriginalExtension();
        $file2 = $user . 'surat_permintaan_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension2;
        $request->file('surat_permintaan_perundingan_bipartit')->storeAs($user . '/perselisihan_hi', $file2);

        $extension3 = $request->file('daftar_hadir_perundingan_bipartit')->getClientOriginalExtension();
        $file3 = $user . 'daftar_hadir_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension3;
        $request->file('daftar_hadir_perundingan_bipartit')->storeAs($user . '/perselisihan_hi', $file3);

        $extension4 = $request->file('risalah_perundingan_bipartit')->getClientOriginalExtension();
        $file4 = $user . 'risalah_perundingan_bipartit' . '-' . 'perselisihan_hi' . now()->timestamp . '.' . $extension4;
        $request->file('risalah_perundingan_bipartit')->storeAs($user . '/perselisihan_hi', $file4);

        $hi->update([
            'user_id' => $user,
            'permohonan_pencatatan_pphi' => $file1,
            'surat_permintaan_perundingan_bipartit' => $file2,
            'daftar_hadir_perundingan_bipartit' => $file3,
            'risalah_perundingan_bipartit' => $file4,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);

        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }

    public function update_phk_submission(Request $request, $id)
    {
        $phk = Pelaporanphk::find($id);
        $user = $phk->user_id;

        Storage::disk('public')->delete([
            $user . '/phk/' . $phk->permohonan_pelaporan_phk,
            $user . '/phk/' . $phk->surat_pemberitahuan_phk,
            $user . '/phk/' . $phk->surat_tanggapan_pemberitahuan_phk,
            $user . '/phk/' . $phk->pb_bipartit,
        ]);

        $extension1 = $request->file('permohonan_pelaporan_phk')->getClientOriginalExtension();
        $file1 = $user . 'permohonan_pelaporan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension1;
        $request->file('permohonan_pelaporan_phk')->storeAs($user . '/phk', $file1);

        $extension2 = $request->file('surat_pemberitahuan_phk')->getClientOriginalExtension();
        $file2 = $user . 'surat_pemberitahuan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension2;
        $request->file('surat_pemberitahuan_phk')->storeAs($user . '/phk', $file2);

        $extension3 = $request->file('surat_tanggapan_pemberitahuan_phk')->getClientOriginalExtension();
        $file3 = $user . 'surat_tanggapan_pemberitahuan_phk' . '-' . 'phk' . now()->timestamp . '.' . $extension3;
        $request->file('surat_tanggapan_pemberitahuan_phk')->storeAs($user . '/phk', $file3);

        $extension4 = $request->file('pb_bipartit')->getClientOriginalExtension();
        $file4 = $user . 'pb_bipartit' . '-' . 'phk' . now()->timestamp . '.' . $extension4;
        $request->file('pb_bipartit')->storeAs($user . '/phk', $file4);

        $phk->update([
            'user_id' => $user,
            'permohonan_pelaporan_phk' => $file1,
            'surat_pemberitahuan_phk' => $file2,
            'surat_tanggapan_pemberitahuan_phk' => $file3,
            'pb_bipartit' => $file4,
            'status' => '3',
            'keterangan' => '',
            'pesan' => '',
            'sk' => '',
        ]);

        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }


}
