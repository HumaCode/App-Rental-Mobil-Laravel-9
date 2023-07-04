<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminMobilController;
use App\Http\Controllers\Backend\AdminProfilController;
use App\Http\Controllers\Backend\AdminSettingController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin_logout');

    Route::get('/data-admin', [AdminController::class, 'data_admin'])->name('data.admin');
    Route::get('/data-admin/tambah', [AdminController::class, 'tambah_admin'])->name('tambah.admin');
    Route::post('/data-admin/tambah', [AdminController::class, 'store_admin'])->name('store.admin');
    Route::get('/data-admin/edit/{id}', [AdminController::class, 'edit_admin'])->name('edit.admin');
    Route::post('/data-admin/update/{id}', [AdminController::class, 'update_admin'])->name('update.admin');
    Route::get('/data-admin/delete/{id}', [AdminController::class, 'delete_admin'])->name('delete.admin');

    Route::get('/setting', [AdminSettingController::class, 'edit'])->name('setting');
    Route::post('/setting-update', [AdminSettingController::class, 'update'])->name('setting.update');


    Route::get('/profil', [AdminProfilController::class, 'edit'])->name('profile.edit');
    Route::post('/profil', [AdminProfilController::class, 'update'])->name('profile.update');
    Route::get('/profil-password', [AdminProfilController::class, 'ubahPassword'])->name('ubah.password');
    Route::post('/profil-password-update', [AdminProfilController::class, 'updatePassword'])->name('update.password');

    Route::get('/data-mobil', [AdminMobilController::class, 'index'])->name('mobil');
});

require __DIR__ . '/auth.php';
