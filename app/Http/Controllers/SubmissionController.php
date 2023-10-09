<?php

namespace App\Http\Controllers;

use App\Models\Pencatatanspsb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

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

        // Validator::validate($request, [
        //     'attachment' => [
        //         'required',
        //         File::types(['pdf', 'png', 'jpg'])
        //     ],
        // ]);

        $extension1 = $request->file('surat_permohonan')->getClientOriginalExtension();
        $file1 = $user->id . 'surat_permohonan' . now()->timestamp . '.' . $extension1;
        $request->file('surat_permohonan')->storeAs('spsb', $file1);


        $extension2 = $request->file('ad_art')->getClientOriginalExtension();
        $file2 = $user->id . 'ad_art' . now()->timestamp . '.' . $extension2;
        $request->file('ad_art')->storeAs('spsb', $file2);

        $extension3 = $request->file('nama_pembentuk')->getClientOriginalExtension();
        $file3 = $user->id . 'nama_pembentuk' . now()->timestamp . '.' . $extension3;
        $request->file('nama_pembentuk')->storeAs('spsb', $file3);

        $extension4 = $request->file('nama_pengurus')->getClientOriginalExtension();
        $file4 = $user->id . 'nama_pengurus' . now()->timestamp . '.' . $extension4;
        $request->file('nama_pengurus')->storeAs('spsb', $file4);

        $extension5 = $request->file('ba_pembentukan')->getClientOriginalExtension();
        $file5 = $user->id . 'ba_pembentukan' . now()->timestamp . '.' . $extension5;
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

    public function pengesahan_pp()
    {
        $user = Auth::user();
        return view('/perusahaan/permohonan/pengesahan-peraturan-perusahaan', compact('user'));
    }
}
