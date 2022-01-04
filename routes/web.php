<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PermohonanController;
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
    return view('login');
});

Route::get('/forgotpass', function () {
    return view('forgotpassword');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard-validasi-sic1', [PermohonanController::class, 'indexc1']);
Route::get('/dashboard-validasi-sic2', [PermohonanController::class, 'indexc2']);
Route::get('/dashboard-validasi-sic3', [PermohonanController::class, 'indexc3']);

Route::post('/approve/{id}', [PermohonanController::class, 'approve']);
Route::post('/decline/{id}', [PermohonanController::class, 'decline']);
