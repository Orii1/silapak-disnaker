<?php

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

Route::post('/register', [UserController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticating']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [CompanyController::class, 'index']);
Route::get('/profileperusahaan/{id}', [CompanyController::class, 'profile']);

Route::put('/dashboard/profileperusahaan/{id}', [CompanyController::class, 'update']);

Route::get('/permohonan/pencatatan-serikat-kerja', [SubmissionController::class, 'serikat_kerja']);
Route::post('/permohonan/pencatatan-serikat-kerja', [SubmissionController::class, 'serikat_kerja_store']);



