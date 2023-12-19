<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function asset_pp(Request $request)
    {
        $pp = Asset::find('1');
        $pp->alur_perizinan = $request->alur_perizinan;
        $pp->dasar_hukum = $request->dasar_hukum;
        $pp->durasi_pemrosesan = $request->durasi_pemrosesan;
        $pp->kontak = $request->kontak;
        $pp->retribusi = $request->retribusi;
        $pp->maklumat = $request->maklumat;
        $pp->visi_misi = $request->visi_misi;
        $pp->motto = $request->motto;

        $pp->template_1 = $request->template_1;
        $pp->template_2 = $request->template_2;
        $pp->template_3 = $request->template_3;

        $pp->save();

        toastr()->success('Asset Berhasil Diperbaharui!');
        return redirect('');
    }
}
