<?php

use App\Http\Controllers\LoginController;
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
Route::post('/', [LoginController::class, 'authenticating']);

Route::post('/login', function () {
    return view('/dashboard/home');
});
