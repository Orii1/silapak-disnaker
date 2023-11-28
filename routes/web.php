<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EditSubmissionController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/dashboard/home');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/login', function () {
    return view('/login/login');
})->name('login');
Route::get('/register', function () {
    return view('/login/register');
});

Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticating']);

Route::middleware(['auth', 'UserAkses:2'])->group(function () {
    // COMPANY ROUTE
    Route::get('/perusahaan/dashboard', [CompanyController::class, 'index']);
    Route::get('/profileperusahaan/{id}', [CompanyController::class, 'profile']);
    Route::put('/dashboard/profileperusahaan/{id}', [CompanyController::class, 'update']);
    Route::get('/cek-permohonan/{id}', [CompanyController::class, 'submission_check']);
    Route::get('/edit-permohonan-pp/{id}', [CompanyController::class, 'edit_pp_submission']);
    Route::put('/edit-permohonan-pp/{id}', [EditSubmissionController::class, 'update_pp_submission']);
    Route::get('/edit-permohonan-pkb/{id}', [CompanyController::class, 'edit_pkb_submission']);
    Route::get('/edit-permohonan-pkwt/{id}', [CompanyController::class, 'edit_pkwt_submission']);
    Route::get('/edit-permohonan-spsb/{id}', [CompanyController::class, 'edit_spsb_submission']);
    Route::get('/edit-permohonan-lks/{id}', [CompanyController::class, 'edit_lks_submission']);
    Route::get('/edit-permohonan-hi/{id}', [CompanyController::class, 'edit_hi_submission']);
    Route::get('/edit-permohonan-phk/{id}', [CompanyController::class, 'edit_phk_submission']);
    Route::get('/permohonan/pencatatan-serikat-kerja', [SubmissionController::class, 'serikat_kerja']);
    Route::post('/permohonan/pencatatan-serikat-kerja', [SubmissionController::class, 'serikat_kerja_store']);
    Route::get('/permohonan/pengesahan-peraturan-perusahaan', [SubmissionController::class, 'pengesahan_pp']);
    Route::post('/permohonan/pengesahan-peraturan-perusahaan', [SubmissionController::class, 'pengesahan_pp_store']);
    Route::get('/permohonan/pendaftaran-pkb', [SubmissionController::class, 'pendaftaran_pkb']);
    Route::post('/permohonan/pendaftaran-pkb', [SubmissionController::class, 'pendaftaran_pkb_store']);
    Route::get('/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu', [SubmissionController::class, 'perjanjian_pkwt']);
    Route::post('/permohonan/pendaftaran-perjanjian-kerja-waktu-tertentu', [SubmissionController::class, 'perjanjian_pkwt_store']);
    Route::get('/permohonan/pendaftaran-lks-bipartit', [SubmissionController::class, 'pendaftaran_lks']);
    Route::post('/permohonan/pendaftaran-lks-bipartit', [SubmissionController::class, 'pendaftaran_lks_store']);
    Route::get('/permohonan/pencatatan-penyelesaian-perselisihan-internal', [SubmissionController::class, 'pencatatan_perselisihan_internal']);
    Route::post('/permohonan/pencatatan-penyelesaian-perselisihan-internal', [SubmissionController::class, 'pencatatan_perselisihan_internal_store']);
    Route::get('/permohonan/pelaporan-pemutusan-hubungan-kerja', [SubmissionController::class, 'pelaporan_phk']);
    Route::post('/permohonan/pelaporan-pemutusan-hubungan-kerja', [SubmissionController::class, 'pelaporan_phk_store']);

    // COMPANY DOWNLOAD
    Route::get('/download/sk/pp/{id}', [FileController::class, 'download_sk_pp'])->name('sk-pp-download');
    Route::get('/download/sk/pkb/{id}', [FileController::class, 'download_sk_pkb'])->name('sk-pkb-download');
    Route::get('/download/sk/pkwt/{id}', [FileController::class, 'download_sk_pkwt'])->name('sk-pkwt-download');
    Route::get('/download/sk/spsb/{id}', [FileController::class, 'download_sk_spsb'])->name('sk-spsb-download');
    Route::get('/download/sk/lks/{id}', [FileController::class, 'download_sk_lks'])->name('sk-lks-download');
    Route::get('/download/sk/hi/{id}', [FileController::class, 'download_sk_hi'])->name('sk-hi-download');
    Route::get('/download/sk/phk/{id}', [FileController::class, 'download_sk_phk'])->name('sk-phk-download');

    // END COMPANY DOWNLOAD
    // END COMPANY ROUTE

});

Route::middleware(['auth', 'UserAkses:1'])->group(function () {
    // ADMIN ROUTE
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/data-perusahaan', [AdminController::class, 'company']);
    Route::get('/admin/profile', [AdminController::class, 'profile']);
    Route::post('/admin/change-password/{id}', [AdminController::class, 'change_password']);
    Route::get('/admin/detail-perusahaan/{id}', [AdminController::class, 'detail_perusahaan']);
    Route::get('/admin/delete-perusahaan/{id}', [AdminController::class, 'delete_perusahaan']);

    // PP
    Route::get('/admin/permohonan-pengesahan-pp', [AdminController::class, 'permohonan_pp']);
    Route::get('/konfirmasi/permohonan-pengesahan-pp/{id}', [AdminController::class, 'permohonan_pp_konfir']);
    Route::post('/konfirmasi/permohonan-pp/{id}', [AdminController::class, 'permohonan_pp_proses']);
    Route::get('/permohonan-pengesahan-pp/{id}', [AdminController::class, 'permohonan_pp_show']);
    Route::post('/permohonan-pp/update/{id}', [AdminController::class, 'permohonan_pp_update']);
    Route::post('/permohonan-pp/terima/{id}', [AdminController::class, 'permohonan_pp_terima']);
    Route::post('/permohonan-pp/tolak/{id}', [AdminController::class, 'permohonan_pp_tolak']);
    // END PP

    // PKB
    Route::get('/admin/permohonan-pendaftaran-pkb', [AdminController::class, 'pendaftaran_pkb']);
    Route::get('/konfirmasi/permohonan-pendaftaran-pkb/{id}', [AdminController::class, 'pendaftaran_pkb_konfir']);
    Route::post('/konfirmasi/permohonan-pkb/{id}', [AdminController::class, 'pendaftaran_pkb_proses']);
    Route::get('/permohonan-pendaftaran-pkb/{id}', [AdminController::class, 'pendaftaran_pkb_show']);
    Route::post('/permohonan-pkb/update/{id}', [AdminController::class, 'pendaftaran_pkb_update']);
    Route::post('/permohonan-pkb/terima/{id}', [AdminController::class, 'pendaftaran_pkb_terima']);
    Route::post('/permohonan-pkb/tolak/{id}', [AdminController::class, 'pendaftaran_pkb_tolak']);
    // END PKB

    // PKWT
    Route::get('/admin/permohonan-pendaftaran-pkwt', [AdminController::class, 'pendaftaran_pkwt']);
    Route::get('/permohonan-pendaftaran-pkwt/{id}', [AdminController::class, 'pendaftaran_pkwt_show']);
    Route::post('/permohonan-pkwt/terima/{id}', [AdminController::class, 'pendaftaran_pkwt_terima']);
    Route::post('/permohonan-pkwt/tolak/{id}', [AdminController::class, 'pendaftaran_pkwt_tolak']);
    // END PKWT

    // SPSB
    Route::get('/admin/permohonan-pencatatan-spsb', [AdminController::class, 'pencatatan_spsb']);
    Route::get('/permohonan-pencatatan-spsb/{id}', [AdminController::class, 'pencatatan_spsb_show']);
    Route::post('/permohonan-spsb/terima/{id}', [AdminController::class, 'pencatatan_spsb_terima']);
    Route::post('/permohonan-spsb/tolak/{id}', [AdminController::class, 'pencatatan_spsb_tolak']);
    // END SPSB

    // LKS
    Route::get('/admin/permohonan-pendaftaran-lks', [AdminController::class, 'pendaftaran_lks']);
    Route::get('/permohonan-pendaftaran-lks/{id}', [AdminController::class, 'pendaftaran_lks_show']);
    Route::post('/permohonan-lks/terima/{id}', [AdminController::class, 'pendaftaran_lks_terima']);
    Route::post('/permohonan-lks/tolak/{id}', [AdminController::class, 'pendaftaran_lks_tolak']);
    // END LKS

    // HI
    Route::get('/admin/permohonan-pencatatan-hi', [AdminController::class, 'pencatatan_hi']);
    Route::get('/permohonan-penyelesaian-hi/{id}', [AdminController::class, 'pencatatan_hi_show']);
    Route::post('/permohonan-hi/terima/{id}', [AdminController::class, 'pencatatan_hi_terima']);
    Route::post('/permohonan-hi/tolak/{id}', [AdminController::class, 'pencatatan_hi_tolak']);
    // HI

    // PHK
    Route::get('/admin/permohonan-pelaporan-phk', [AdminController::class, 'pelaporan_phk']);
    Route::get('/permohonan-pelaporan-phk/{id}', [AdminController::class, 'pelaporan_phk_show']);
    Route::post('/permohonan-phk/terima/{id}', [AdminController::class, 'pelaporan_phk_terima']);
    Route::post('/permohonan-phk/tolak/{id}', [AdminController::class, 'pelaporan_phk_tolak']);
        // END PHK


    Route::get('/admin/asset', [AdminController::class, 'asset']);
    // END ADMIN ROUTE
});

Route::get('/map', function () {
    return view('/map');
});
Route::get('/logout', [LoginController::class, 'logout']);

