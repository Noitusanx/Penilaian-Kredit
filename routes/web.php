<?php

use App\Http\Controllers\PenilaianKreditController;
use App\Http\Controllers\PengajuanController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/", [PenilaianKreditController::class,"index"]);

Route::get('/masuk', function () {
    return view('pages.LoginRegister.login');
})->middleware('guest');

Route::post('/masuk', [PenilaianKreditController::class, 'authenticate']);

Route::get('/daftar', function () {
    return view('pages.LoginRegister.register');
});

Route::post('/daftar', [PenilaianKreditController::class, 'storeReg']);


Route::post('/keluar', [PenilaianKreditController::class, 'logout']);



Route::get('/pengajuan', [PengajuanController::class, 'index'])->middleware('auth');
Route::post('/pengajuan', [PengajuanController::class, 'ajukan'])->middleware('auth');

Route::get('/profil', function () {
    return view('user/profil');
});

Route::get('/hasil-setuju', function () {
    return view('user/hasil_setuju');
});

Route::get('/hasil-tolak', function () {
    return view('user/hasil_tolak');
});

Route::get('/admin-data-pengajuan', function () {
    return view('admin/all_data_pengajuan');
})->middleware('admin');

Route::get('/admin-detail-pengajuan', function () {
    return view('admin/informasi_detail');
})->middleware('admin');


