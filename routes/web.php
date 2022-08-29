<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SeminarController;

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

// Route::get('/', function () {
//     return view('Mahasiswa.login');
// });

// Route::get('/reset-password', function () {
//     return view('Mahasiswa.reset-password');
// });

// Route::get('/index', function () {
//     return view('Mahasiswa.index');
// });

Route::get('/informasi-seminar', function () {
    return view('Mahasiswa.informasi-seminar');
});

Route::get('/jadwal-saya', function () {
    return view('Mahasiswa.jadwal-saya');
});

Route::get('/kontak-admin', function () {
    return view('Mahasiswa.kontak-admin');
});

Route::get('/mhs-form-edit-hasil', function () {
    return view('Mahasiswa.mhs-form-edit-hasil');
});

Route::get('/mhs-form-edit-kkp', function () {
    return view('Mahasiswa.mhs-form-edit-kkp');
});

Route::get('/mhs-form-edit-proposal', function () {
    return view('Mahasiswa.mhs-form-edit-proposal');
});

Route::get('/mhs-form-edit-sidang', function () {
    return view('Mahasiswa.mhs-form-edit-sidang');
});

// Route::get('/mhs-form-jadwal', function () {
//     return view('Mahasiswa.mhs-form-jadwal');
// });

// Route::get('/login', function () {
//     return view('Mahasiswa.login');
// });

// Route::get('/register', function () {
//     return view('Mahasiswa.register');
// });

//New Route
//Auth Route
Route::get('/',[AuthController::class,'index'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login.mhs');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('register',[AuthController::class,'Registration']);

//Seminar Route
Route::get('/beranda',[SeminarController::class,'index'])->name('beranda');
Route::post('proposal',[SeminarController::class,'store'])->name('proposal');

Route::post('hasil',[SeminarController::class,'seminarhasil'])->name('seminarhasil');

Route::post('sidang',[SeminarController::class,'sidang'])->name('sidang');

Route::get('/mhs-form-jadwal',[SeminarController::class,'seminar']);

