<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function store(Request $request)
    {
        $user = User::create([
            'id_role' => '4',
            'email' => $request->email,
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'pemilik' => $request->pemilik,
            'alamat' => $request->alamat,
            'id_tipe_perusahaan' => $request->id_tipe_perusahaan,
            'sektor' => $request->sektor,
            'id_status_perusahaan' => $request->id_status_perusahaan,
            'id_modal' => $request->id_modal,
            'nomor_surat_izin_usaha' => $request->nomor_surat_izin_usaha,
            'tgl_surat_izin_usaha' => $request->tgl_surat_izin_usaha,
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'pkwt' => $request->pkwt,
            'outsourcing' => $request->outsourcing,
            'wna' => $request->wna,
            'no_bpjs_ketenagakerjaan' => $request->no_bpjs_ketenagakerjaan,
            'no_bpjs_kesehatan' => $request->no_bpjs_kesehatan,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'id_user' => $user->id,
        ]);

        return redirect('/perusahaan/dashboard');
    }


}
