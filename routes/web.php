<?php

use App\Http\Controllers\PenilaianKreditController;
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

Route::get('/login', function () {
    return view('pages.LoginRegister.login');
});

Route::get('/register', function () {
    return view('pages.LoginRegister.register');
});

Route::get('/form', function () {
    return view('pengajuan');
});

Route::get('/profil', function () {
    return view('user/profil');
});

Route::get('/hasil-setuju', function () {
    return view('user/hasil_setuju');
});


