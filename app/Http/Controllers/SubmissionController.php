<?php

namespace App\Http\Controllers;

use App\Models\Pencatatanspsb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function serikat_kerja()
    {
        
        $user = Auth::user();
        return view('/perusahaan/permohonan/pencatatan-serikat-kerja', compact('user'));
    }

    public function serikat_kerja_store(Request $request)
    {
        $user = Auth::user();
        Pencatatanspsb::create([
            'user_id' => $user->id,
            'surat_permohonan' => $request->surat_permohonan,
            'ad_art' => $request->ad_art,
            'nama_pembentuk' => $request->nama_pembentuk,
            'nama_pengurus' => $request->nama_pengurus,
            'ba_pembentukan' => $request->ba_pembentukan
        ]);

        return redirect('/dashboard');
    }
}
