<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\HariBelajarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InisiasiJadwalController;
use App\Http\Controllers\JamBelajarController;
use App\Http\Controllers\JenisSanksiController;
use App\Http\Controllers\KategoriPelanggaranController;
use App\Http\Controllers\ListPelanggaranController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SlotJadwalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:guru'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/data-siswa', [StudentController::class, 'index'])->name('guru.data-siswa.index');
    Route::get('/kategori-pelanggaran', [KategoriPelanggaranController::class, 'index'])->name('guru.kategori-pelanggaran.index');
    Route::get('/jenis-sanksi', [JenisSanksiController::class, 'index'])->name('guru.jenis-sanksi.index');
    Route::get('/list-pelanggaran', [ListPelanggaranController::class, 'listPelanggaran'])->name('guru.list-pelanggaran.index');
    Route::get('/list-pelanggaran/create', [ListPelanggaranController::class, 'create'])->name('guru.list-pelanggaran.create');
    Route::delete('/list-pelanggaran/{id}', [ListPelanggaranController::class, 'destroy'])->name('guru.list-pelanggaran.destroy');
    Route::get('/list-pelanggaran/get/{id}/data', [ListPelanggaranController::class,'getData'])->name('guru.list-pelanggaran.get_data');
    Route::post('/list-pelanggaran', [ListPelanggaranController::class, 'store'])->name('guru.list-pelanggaran.store');
    Route::match(['put'],'/list-pelanggaran/update/{id}', [ListPelanggaranController::class, 'update'])->name('guru.list-pelanggaran.update');
    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::prefix('admin')->middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resource('data-guru', TeacherController::class);
    Route::get('data-guru/get/{id}/data', [TeacherController::class,'getData'])->name('data-guru.get_data');
    Route::resource('data-siswa', StudentController::class);
    Route::get('data-siswa/get/{id}/data', [StudentController::class,'getData'])->name('data-siswa.get_data');
    Route::resource('data-kelas', ClassController::class);
    Route::get('data-kelas/get/{id}/data', [ClassController::class,'getData'])->name('data-kelas.get_data');
    Route::resource('kategori-pelanggaran', KategoriPelanggaranController::class);
    Route::get('kategori-pelanggaran/get/{id}/data', [KategoriPelanggaranController::class,'getData'])->name('kategori-pelanggaran.get_data');
    Route::resource('jenis-sanksi', JenisSanksiController::class);
    Route::get('jenis-sanksi/get/{id}/data', [JenisSanksiController::class,'getData'])->name('jenis-sanksi.get_data');
    Route::resource('list-pelanggaran', ListPelanggaranController::class);
    Route::match(['put'],'/list-pelanggaran/{id}/validate', [ListPelanggaranController::class, 'validatePelanggaran'])->name('guru.list-pelanggaran.validate');

});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:headmaster'])->group(function () {
  
    Route::get('/headmaster/home', [HomeController::class, 'headmasterHome'])->name('headmaster.home');
});
