<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RewardingController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', [LandingController::class, "index"])->name('landing-page');

Route::get('/login', function () {
    return view('logged.login');
})->middleware('guest')->name('login');

Route::get('/', [LandingPageController::class, "landing"])->name('landing');
Route::get('/profil', [LandingPageController::class, "profil"])->name('profil');
Route::get('/monitor', [LandingPageController::class, "monitor"])->name('monitor');
Route::get('/reward', [LandingPageController::class, "reward"])->name('reward');
Route::get('/pesan', [LandingPageController::class, "pesan"])->name('pesan');
Route::get('/tautan', [LandingPageController::class, "tautan"])->name('tautan');

// Login
Route::post('/login', [LoginController::class, "authenticate"])->name('logon');

// Logout
Route::get('/logout', [LoginController::class, "logout"])->name('logout');

// Dashboard
Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/arsip/importview', [ArsipController::class, 'importView'])->name('arsip.importView');
Route::post('/arsip/import', [ArsipController::class, 'import'])->name('arsip.import');

Route::resource('/ruangan', RuanganController::class);
Route::resource('/video', VideoController::class);
Route::resource('/gambar', GambarController::class);
Route::resource('/informasi', InformasiController::class);
Route::resource('/monitoring', MonitoringController::class);
Route::resource('/arsip', ArsipController::class);
Route::resource('/rewarding', RewardingController::class);
Route::resource('/testimoni', TestimoniController::class);
Route::resource('/pegawai', PegawaiController::class);


// User
Route::patch('/user/{user}/reset', [UserController::class, "resetPassword"])->name('user.reset');
Route::resource('/user', UserController::class, ['except' => ['show']]);
