<?php

namespace App\Http\Controllers;

use App\Models\Pelaporanphk;
use App\Models\Pencatatanperselihan;
use App\Models\Pencatatanspsb;
use App\Models\Pendaftaranlks;
use App\Models\Pendaftaranpkb;
use App\Models\Pendaftaranpkwt;
use App\Models\Pengesahanpp;
use App\Models\Perusahaan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user=Auth::user();
        $perusahaan = Perusahaan::find($id);
        $pp_submission = Pengesahanpp::where('id_perusahaan', $id)->get();
        $pkb_submission = Pendaftaranpkb::where('id_perusahaan', $id)->get();
        $pkwt_submission = Pendaftaranpkwt::where('id_perusahaan', $id)->get();
        $spsb_submission = Pencatatanspsb::where('id_perusahaan', $id)->get();
        $lks_submission = Pendaftaranlks::where('id_perusahaan', $id)->get();
        $hi_submission = Pencatatanperselihan::where('id_perusahaan', $id)->get();
        $phk_submission = Pelaporanphk::where('id_perusahaan', $id)->get();
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
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-pp', compact('pengesahanpp', 'user'));
    }

    public function edit_pkb_submission($id)
    {

        $pendaftaranpkb = Pendaftaranpkb::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-pkb', compact('pendaftaranpkb', 'user'));
    }

    public function edit_pkwt_submission($id)
    {

        $pendaftaranpkwt = Pendaftaranpkwt::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-pkwt', compact('pendaftaranpkwt', 'user'));
    }

    public function edit_spsb_submission($id)
    {
        $pencatatanspsb = Pencatatanspsb::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-spsb', compact('pencatatanspsb', 'user'));
    }

    public function edit_lks_submission($id)
    {
        $pendaftaranlks = Pendaftaranlks::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-lks', compact('pendaftaranlks', 'user'));
    }

    public function edit_hi_submission($id)
    {
        $pencatatanhi = Pencatatanperselihan::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-hi', compact('pencatatanhi', 'user'));
    }

    public function edit_phk_submission($id)
    {
        $pelaporanphk= Pelaporanphk::find($id);
        $user = Auth::user();
        return view('perusahaan/cek-permohonan/edit-permohonan-phk', compact('pelaporanphk', 'user'));
    }


    public function index()
    {
        $user = Auth::user();

        $now = Carbon::now();
        $now->setLocale('id');
        $datestring = $now->isoFormat('D MMMM Y');
        $dayname = $now->translatedFormat('l');

        // dd($user->user_perusahaan->nama_perusahaan);
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
        $data->user_perusahaan->update($request->all());
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
