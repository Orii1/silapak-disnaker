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
