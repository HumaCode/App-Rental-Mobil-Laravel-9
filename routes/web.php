<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminMerekMobilController;
use App\Http\Controllers\Backend\AdminMobilController;
use App\Http\Controllers\Backend\AdminProfilController;
use App\Http\Controllers\Backend\AdminSettingController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backend\AdminMerekMotorController;
use App\Http\Controllers\Backend\AdminMotorController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TestimoniController;
// use App\Http\Controllers\DetailController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/client', [ClientController::class, 'index'])->name('client');

Route::get('detailmobil/{slug}', [DetailController::class, 'index'])->name('detailmobil');

Route::post('/testimoni', [TestimoniController::class, 'store'])->name('testimoni');
Route::post('/penawaran', [TestimoniController::class, 'penawaran'])->name('penawaran');

Route::post('/penawaran2', [TestimoniController::class, 'penawaran2'])->name('penawaran2');



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

    Route::get('/merek/view', [AdminMerekMobilController::class, 'index'])->name('merek');
    Route::get('/merek/create', [AdminMerekMobilController::class, 'create'])->name('tambah.merek');
    Route::post('/merek/store', [AdminMerekMobilController::class, 'store'])->name('store.merek');
    Route::get('/merek/edit/{id}', [AdminMerekMobilController::class, 'edit'])->name('edit.merek');
    Route::post('/merek/update/{id}', [AdminMerekMobilController::class, 'update'])->name('update.merek');
    Route::get('/merek/hapus/{id}', [AdminMerekMobilController::class, 'hapus'])->name('hapus.merek');

    Route::get('/admin/testimoni', [TestimoniController::class, 'index'])->name('admin.testimoni');
    Route::get('/admin/delete-testimoni/{id}', [TestimoniController::class, 'delete'])->name('admin.delete_testimoni');

    Route::get('/mobil/view', [AdminMobilController::class, 'index'])->name('mobil');
    Route::get('/mobil/create', [AdminMobilController::class, 'create'])->name('create.mobil');
    Route::get('/mobil/checkSlug', [AdminMobilController::class, 'checkSlug']);
    Route::post('/mobil/store', [AdminMobilController::class, 'store'])->name('store.mobil');
    Route::get('/mobil/edit/{slug}', [AdminMobilController::class, 'edit'])->name('edit.mobil');
    Route::post('/mobil/update/{slug}', [AdminMobilController::class, 'update'])->name('update.mobil');
    Route::get('/mobil/delete/{slug}', [AdminMobilController::class, 'delete'])->name('delete.mobil');

    Route::get('/motor/view', [AdminMotorController::class, 'index'])->name('motor');
    Route::get('/motor/create', [AdminMotorController::class, 'create'])->name('create.motor');
    Route::get('/motor/checkSlug', [AdminMotorController::class, 'checkSlug']);
    Route::post('/motor/store', [AdminMotorController::class, 'store'])->name('store.motor');
    Route::get('/motor/edit/{slug}', [AdminMotorController::class, 'edit'])->name('edit.motor');
    Route::post('/motor/update/{slug}', [AdminMotorController::class, 'update'])->name('update.motor');
    Route::get('/motor/delete/{slug}', [AdminMotorController::class, 'delete'])->name('delete.motor');

    Route::get('/merek-motor/view', [AdminMerekMotorController::class, 'index'])->name('merek_motor');
    Route::get('/merek-motor/create', [AdminMerekMotorController::class, 'create'])->name('tambah.merek_motor');
    Route::post('/merek-motor/store', [AdminMerekMotorController::class, 'store'])->name('store.merek_motor');
    Route::get('/merek-motor/edit/{id}', [AdminMerekMotorController::class, 'edit'])->name('edit.merek_motor');
    Route::post('/merek-motor/update/{id}', [AdminMerekMotorController::class, 'update'])->name('update.merek_motor');
    Route::get('/merek-motor/hapus/{id}', [AdminMerekMotorController::class, 'hapus'])->name('hapus.merek_motor');
});

require __DIR__ . '/auth.php';
