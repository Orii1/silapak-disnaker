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
Route::get('/admin/detail-perusahaan/{id}', [AdminController::class, 'detail_perusahaan']);



Route::get('/admin/permohonan-pengesahan-pp', [AdminController::class, 'permohonan_pp']);
Route::get('/permohonan-pengesahan-pp/{id}', [AdminController::class, 'permohonan_pp_show']);
Route::get('/permohonan-pp/terima/{id}', [AdminController::class, 'permohonan_pp_terima']);
Route::get('/permohonan-pp/tolak/{id}', [AdminController::class, 'permohonan_pp_tolak']);

Route::get('/admin/permohonan-pendaftaran-pkb', [AdminController::class, 'pendaftaran_pkb']);
