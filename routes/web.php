<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\ReportMasukController;
use App\Http\Controllers\ReportKeluarController;
use App\Http\Controllers\EditDataMasukController;
use App\Http\Controllers\EditDataKeluarController;
use App\Http\Controllers\TambahDataMasukController;
use App\Http\Controllers\TambahDataKeluarController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PDFController;

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

Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::get('suratmasuk', [SuratMasukController::class, 'index'])->name('suratmasuk');

Route::get('suratkeluar', [SuratKeluarController::class, 'index'])->name('suratkeluar');

Route::get('reportsuratmasuk', [ReportMasukController::class, 'index'])->name('reportmasuk');
Route::get('surat/masuk/pdf', [ReportMasukController::class, 'pdf'])->name('suratmasuk.pdf');

Route::get('reportsuratkeluar', [ReportKeluarController::class, 'index'])->name('reportkeluar');

Route::get('editdatamasuk/{id_arsip}', [EditDataMasukController::class, 'index'])->name('editdatamasuk');
Route::post('edit/masuk/{id_arsip}', [EditDataMasukController::class, 'post'])->name('masuk.update');
Route::post('hapus/masuk/{id_arsip}', [EditDataMasukController::class, 'hapus'])->name('hapusmasuk');

Route::get('editdatakeluar/{id}', [EditDataKeluarController::class, 'index'])->name('editdatakeluar');
Route::get('hapus/keluar/{id}', [EditDataKeluarController::class, 'delete'])->name('hapuskeluar');

Route::get('tambahdatamasuk', [TambahDataMasukController::class, 'index'])->name('tambahdatamasuk');

Route::post('/createdatamasuk', [TambahDataMasukController::class, 'create'])->name('/createdatamasuk');
Route::post('createdatakeluar', [TambahDataKeluarController::class, 'create'])->name('createdatakeluar');

Route::get('tambahdatakeluar', [TambahDataKeluarController::class, 'index'])->name('tambahdatakeluar');
Route::get('surat/keluar/pdf', [PDFController::class, 'pdfkeluar'])->name('suratkeluar.pdf');
Route::get('surat/masuk/pdf', [PDFController::class, 'pdfmasuk'])->name('suratmasuk.pdf');

Route::get('editprofile', [EditProfileController::class, 'index'])->name('editprofile');

Route::get('password', [PasswordController::class, 'index'])->name('password');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('/auth/login',[
        'title' => 'Login Page'
    ]);
} )->name('login');

Route::post('auth', [LoginController::class, 'auth'])->name('proses.auth');

Route::get('registration', function() {
    return view('auth.registration');
});
Route::get('registeration', [LoginController::class, 'register'])->name('registration');
Route::post('register', [LoginController::class, 'register'])->name('register'); 



Route::get('temp', function() {
    return view('temp');
});