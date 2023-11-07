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

class FileController extends Controller
{
    public function download_sk_pp($id)
    {
        $sk_pp = Pengesahanpp::find($id);
        $downloadFileName = $sk_pp->sk;
        $filePath = storage_path('app/public/pp/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_pkb($id)
    {
        $sk_pkb = Pendaftaranpkb::find($id);
        $downloadFileName = $sk_pkb->sk;
        $filePath = storage_path('app/public/pkb/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_pkwt($id)
    {
        $sk_pkwt = Pendaftaranpkwt::find($id);
        $downloadFileName = $sk_pkwt->sk;
        $filePath = storage_path('app/public/pkwt/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_spsb($id)
    {
        $sk_spsb = Pencatatanspsb::find($id);
        $downloadFileName = $sk_spsb->sk;
        $filePath = storage_path('app/public/spsb/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_lks($id)
    {
        $sk_lks = Pendaftaranlks::find($id);
        $downloadFileName = $sk_lks->sk;
        $filePath = storage_path('app/public/lks/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_hi($id)
    {
        $sk_hi = Pencatatanperselihan::find($id);
        $downloadFileName = $sk_hi->sk;
        $filePath = storage_path('app/public/hi/sk/' . $downloadFileName);

        return response()->download($filePath);
    }

    public function download_sk_phk($id)
    {
        $sk_phk = Pelaporanphk::find($id);
        $downloadFileName = $sk_phk->sk;
        $filePath = storage_path('app/public/phk/sk/' . $downloadFileName);

        return response()->download($filePath);
    }
}
