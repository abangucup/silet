<?php

use App\Http\Controllers\Admin\AdminContoller;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\MasyarakatController;
use App\Http\Controllers\Admin\PengaduanController;
use App\Http\Controllers\Admin\PermintaanController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\TanggapanController;
use App\Http\Controllers\User\MailController;
use App\Http\Controllers\User\SmsController;
use App\Http\Controllers\User\UserController;
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

Route::get('/', [UserController::class, 'index'])->name('silat.index');

Route::middleware(['isMasyarakat'])->group(function () {

    Route::post('/store', [UserController::class, 'storePengaduan'])->name('silat.store');
    Route::post('/simpan', [UserController::class, 'storePermintaan'])->name('silat.simpan');
    Route::get('/laporan/{siapa?}', [UserController::class, 'laporan'])->name('silat.laporan');

    // logout
    Route::get('/logout', [UserController::class, 'logout'])->name('silat.logout');
});

Route::middleware(['guest'])->group(function () {

    // Login
    Route::post('/login/auth', [UserController::class, 'login'])->name('silat.login');

    // Register
    Route::get('/register', [UserController::class, 'formRegister'])->name('silat.formRegister');
    Route::post('/register/auth', [UserController::class, 'register'])->name('silat.register');
});

Route::prefix('admin')->group(function () {

    Route::middleware(['isAdmin'])->group(function () {
        // Petugas
        Route::resource('petugas', PetugasController::class);

        // Masyarakat
        Route::resource('masyarakat', MasyarakatController::class);
    });

    Route::middleware(['isPetugas'])->group(function () {
        // dashboard
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

        // Permintaan
        Route::resource('permintaan', PermintaanController::class);

        // Pengaduan
        Route::resource('pengaduan', PengaduanController::class);

        // Tanggapan
        Route::post('tanggapan/createOrUpdatePengaduan', [TanggapanController::class, 'createOrUpdatePengaduan'])->name('tanggapan.coruPengaduan');
        Route::post('tanggapan/createOrUpdatePermintaan', [TanggapanController::class, 'createOrUpdatePermintaan'])->name('tanggapan.coruPermintaan');

        // laporan cetak pengaduan
        // Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/cetakPengaduan', [LaporanController::class, 'cetakPengaduan'])->name('laporan.cetakPengaduan');

        // laporan cetak permintaan
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
        Route::get('/laporan/cetakPermintaan', [LaporanController::class, 'cetakPermintaan'])->name('laporan.cetakPermintaan');

        // Cetak Laporan Masyarakat
        Route::get('/laporan/cetakMasyarakat', [LaporanController::class, 'cetakDataMasyarakat'])->name('laporan.cetakDataMasyarakat');

        // Logout
        Route::get('/logout', [AdminContoller::class, 'logout'])->name('admin.logout');
    });

    Route::middleware(['isGuest'])->group(function () {
        Route::get('/', [AdminContoller::class, 'formLogin'])->name('admin.formLogin');
        Route::post('/login', [AdminContoller::class, 'login'])->name('admin.login');
    });
});

// Route::get('/kirim-pesan', [SmsController::class, 'sendMessage']);
// Route::get('/kirim-email', [MailController::class, 'sendEmail']);