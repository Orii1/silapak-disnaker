<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
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

// Route Login-Register-Forget Password
Route::get('/login', function () {
    return view('/login/login');
});

Route::get('/register', function () {
    return view('/login/register');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);


Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticating']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [CompanyController::class, 'index']);
Route::get('/profileperusahaan/{id}', [CompanyController::class, 'profile']);

Route::put('/dashboard/profileperusahaan/{id}', [CompanyController::class, 'update']);


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


Route::get('/admin/data-perusahaan', [AdminController::class, 'company']);
Route::get('/admin/profile', [AdminController::class, 'profile']);
Route::post('/admin/change-password/{id}', [AdminController::class, 'change_password']);
Route::get('/admin/detail-perusahaan/{id}', [AdminController::class, 'detail_perusahaan']);
Route::get('/admin/delete-perusahaan/{id}', [AdminController::class, 'delete_perusahaan']);


Route::get('/admin/permohonan-pengesahan-pp', [AdminController::class, 'permohonan_pp']);
Route::get('/permohonan-pengesahan-pp/{id}', [AdminController::class, 'permohonan_pp_show']);
Route::get('/permohonan-pp/terima/{id}', [AdminController::class, 'permohonan_pp_terima']);
Route::get('/permohonan-pp/tolak/{id}', [AdminController::class, 'permohonan_pp_tolak']);

Route::get('/admin/permohonan-pendaftaran-pkb', [AdminController::class, 'pendaftaran_pkb']);
Route::get('/permohonan-pendaftaran-pkb/{id}', [AdminController::class, 'pendaftaran_pkb_show']);
Route::get('/permohonan-pkb/terima/{id}', [AdminController::class, 'pendaftaran_pkb_terima']);
Route::get('/permohonan-pkb/tolak/{id}', [AdminController::class, 'pendaftaran_pkb_tolak']);

Route::get('/admin/permohonan-pendaftaran-pkwt', [AdminController::class, 'pendaftaran_pkwt']);
Route::get('/permohonan-pendaftaran-pkwt/{id}', [AdminController::class, 'pendaftaran_pkwt_show']);
Route::get('/permohonan-pkwt/terima/{id}', [AdminController::class, 'pendaftaran_pkwt_terima']);
Route::get('/permohonan-pkwt/tolak/{id}', [AdminController::class, 'pendaftaran_pkwt_tolak']);

Route::get('/admin/permohonan-pencatatan-spsb', [AdminController::class, 'pencatatan_spsb']);
Route::get('/permohonan-pendaftaran-pkb/{id}', [AdminController::class, 'pencatatan_spsb_show']);
Route::get('/permohonan-spsb/terima/{id}', [AdminController::class, 'pencatatan_spsb_terima']);
Route::get('/permohonan-spsb/tolak/{id}', [AdminController::class, 'pencatatan_spsb_tolak']);

Route::get('/admin/permohonan-pendaftaran-lks', [AdminController::class, 'pendaftaran_lks']);
Route::get('/permohonan-pendaftaran-lks/{id}', [AdminController::class, 'pendaftaran_lks_show']);
Route::get('/permohonan-lks/terima/{id}', [AdminController::class, 'pendaftaran_lks_terima']);
Route::get('/permohonan-lks/tolak/{id}', [AdminController::class, 'pendaftaran_lks_tolak']);

Route::get('/admin/permohonan-pencatatan-hi', [AdminController::class, 'pencatatan_hi']);
Route::get('/permohonan-penyelesaian-hi/{id}', [AdminController::class, 'pencatatan_hi_show']);
Route::get('/permohonan-hi/terima/{id}', [AdminController::class, 'pencatatan_hi_terima']);
Route::get('/permohonan-hi/tolak/{id}', [AdminController::class, 'pencatatan_hi_tolak']);

Route::get('/admin/permohonan-pelaporan-phk', [AdminController::class, 'pelaporan_phk']);
Route::get('/permohonan-pelaporan-phk/{id}', [AdminController::class, 'pelaporan_phk_show']);
Route::get('/permohonan-phk/terima/{id}', [AdminController::class, 'pelaporan_phk_terima']);
Route::get('/permohonan-phk/tolak/{id}', [AdminController::class, 'pelaporan_phk_tolak']);
