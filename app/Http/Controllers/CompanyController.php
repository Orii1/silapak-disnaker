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
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function profile($id)
    {
        $user = User::find($id);
        return view('/perusahaan/profileperusahaan', compact('user'));
    }

    public function submission_check($id)
    {
        $user = User::find($id);
        $pp_submission = Pengesahanpp::where('user_id', $id)->get();
        $pkb_submission = Pendaftaranpkb::where('user_id', $id)->get();
        $pkwt_submission = Pendaftaranpkwt::where('user_id', $id)->get();
        $spsb_submission = Pencatatanspsb::where('user_id', $id)->get();
        $lks_submission = Pendaftaranlks::where('user_id', $id)->get();
        $hi_submission = Pencatatanperselihan::where('user_id', $id)->get();
        $phk_submission = Pelaporanphk::where('user_id', $id)->get();
        return view('/perusahaan/cek-permohonan/cek-permohonan', compact(
            'pp_submission',
            'pkb_submission',
            'pkwt_submission',
            'spsb_submission',
            'lks_submission',
            'hi_submission',
            'phk_submission',
            'user'
        ));
    }

    public function edit_pp_submission($id)
    {

        $pengesahanpp = Pengesahanpp::find($id);
        $user = $pengesahanpp->pp_user;
        return view('perusahaan/cek-permohonan/edit-permohonan-pp', compact('pengesahanpp', 'user'));
    }

    public function edit_pkb_submission($id)
    {

        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $user = $pendaftaranpkb->pkb_user;
        return view('perusahaan/cek-permohonan/edit-permohonan-pkb', compact('pendaftaranpkb', 'user'));
    }

    public function edit_pkwt_submission($id)
    {

        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $user = $pendaftaranpkwt->pkwt_user;
        return view('perusahaan/cek-permohonan/edit-permohonan-pkwt', compact('pendaftaranpkwt', 'user'));
    }

    public function update_pp_submission(Request $request, $id)
    {
        $pp = Pengesahanpp::find($id);
        $user = $pp->user_id;

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

        $pp->update([
            'fc_wlkp' => $request->$file1,
            'fc_akta_pendirian_perusahaan' => $request->$file2,
            'fc_sertifikat_peserta_bpjs_ketenagakerjaan' => $request->$file3,
            'permohonan_pengesahan_pp' => $request->$file4,
            'surat_pernyataan_saran_spsb' => $request->$file5,
            'surat_pernyataan_belum_terbentuk_spsb' => $request->$file6,
            'surat_pernyataan_struktur_skala_upah' => $request->$file7,
            'struktur_skala_upah_asli' => $request->$file8,
            'draf_pp' => $request->$file9,
            'status' => '0',
            'pesan' => '',
            'sk' => '',
        ]);
        toastr()->success('Permohonan Berhasil Dikirim Ulang');
        return redirect()->back();
    }

    public function index()
    {
        $user = Auth::user();

        $now = Carbon::now();
        $now->setLocale('id');
        $datestring = $now->isoFormat('D MMMM Y');
        $dayname = $now->translatedFormat('l');
        return view('/perusahaan/dashboard', compact('user', 'dayname', 'datestring'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);

        $data->update($request->all());
        toastr()->success('Data Berhasil Disimpan!');
        return redirect('/perusahaan/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
