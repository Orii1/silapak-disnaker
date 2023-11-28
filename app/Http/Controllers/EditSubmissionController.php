<?php

namespace App\Http\Controllers;

use App\Models\Pengesahanpp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EditSubmissionController extends Controller
{
    public function update_pp_submission(Request $request, $id)
    {
        // dd('ini controller edit');
        $pp = Pengesahanpp::find($id);
        $user = $pp->user_id;

        Storage::disk('public')->delete([
            'pp/' . $pp->fc_wlkp,
            'pp/' . $pp->fc_akta_pendirian_perusahaan,
            'pp/' . $pp->fc_sertifikat_peserta_bpjs_ketenagakerjaan,
            'pp/' . $pp->permohonan_pengesahan_pp,
            'pp/' . $pp->surat_pernyataan_saran_spsb,
            'pp/' . $pp->surat_pernyataan_belum_terbentuk_spsb,
            'pp/' . $pp->surat_pernyataan_struktur_skala_upah,
            'pp/' . $pp->struktur_skala_upah_asli,
            'pp/' . $pp->draf_pp,
        ]);

        $extension1 = $request->file('fc_wlkp')->getClientOriginalExtension();
        $file1 = $user . 'fc_wlkp' . '-' . 'pp' . now()->timestamp . '.' . $extension1;
        $request->file('fc_wlkp')->storeAs('pp', $file1);

        $extension2 = $request->file('fc_akta_pendirian_perusahaan')->getClientOriginalExtension();
        $file2 = $user . 'fc_akta_pendirian_perusahaan' . '-' . 'pp' . now()->timestamp . '.' . $extension2;
        $request->file('fc_akta_pendirian_perusahaan')->storeAs('pp', $file2);

        $extension3 = $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->getClientOriginalExtension();
        $file3 = $user . 'fc_sertifikat_peserta_bpjs_ketenagakerjaan' . '-' . 'pp' . now()->timestamp . '.' . $extension3;
        $request->file('fc_sertifikat_peserta_bpjs_ketenagakerjaan')->storeAs('pp', $file3);

        $extension4 = $request->file('permohonan_pengesahan_pp')->getClientOriginalExtension();
        $file4 = $user . 'permohonan_pengesahan_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension4;
        $request->file('permohonan_pengesahan_pp')->storeAs('pp', $file4);

        $extension5 = $request->file('surat_pernyataan_saran_spsb')->getClientOriginalExtension();
        $file5 = $user . 'surat_pernyataan_saran_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension5;
        $request->file('surat_pernyataan_saran_spsb')->storeAs('pp', $file5);

        $extension6 = $request->file('surat_pernyataan_belum_terbentuk_spsb')->getClientOriginalExtension();
        $file6 = $user . 'surat_pernyataan_belum_terbentuk_spsb' . '-' . 'pp' . now()->timestamp . '.' . $extension6;
        $request->file('surat_pernyataan_belum_terbentuk_spsb')->storeAs('pp', $file6);

        $extension7 = $request->file('surat_pernyataan_struktur_skala_upah')->getClientOriginalExtension();
        $file7 = $user . 'surat_pernyataan_struktur_skala_upah' . '-' . 'pp' . now()->timestamp . '.' . $extension7;
        $request->file('surat_pernyataan_struktur_skala_upah')->storeAs('pp', $file7);

        $extension8 = $request->file('struktur_skala_upah_asli')->getClientOriginalExtension();
        $file8 = $user . 'struktur_skala_upah_asli' . '-' . 'pp' . now()->timestamp . '.' . $extension8;
        $request->file('struktur_skala_upah_asli')->storeAs('pp', $file8);

        $extension9 = $request->file('draf_pp')->getClientOriginalExtension();
        $file9 = $user . 'draf_pp' . '-' . 'pp' . now()->timestamp . '.' . $extension9;
        $request->file('draf_pp')->storeAs('pp', $file9);

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
            'status' => '0',
            'pesan' => '',
            'sk' => '',
        ]);
        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect('/cek-permohonan/' . $user);
    }
}
