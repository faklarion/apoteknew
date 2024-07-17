<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\ObatController;

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

//Obat
// Create
Route::get('/create-obat', [ObatController::class, 'createObat'])->name('create_obat');
Route::post('/insert-obat', [ObatController::class, 'insertObat'])->name('insert_obat');

// Read
Route::get('/', [ObatController::class, 'getObat'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [ObatController::class, 'getObat'])->middleware(['auth'])->name('dashboard');

// Update
Route::patch('/save-obat/{obat_id}', [ObatController::class, 'updateObat'])->name('save_obat');
Route::get('/update-obat/{obat_id}', [ObatController::class, 'showFormUpdate'])->name('update_obat');

// Delete
Route::delete('/delete-obat/{obat_id}', [ObatController::class, 'deleteObat'])->name('delete_obat');

// Pegawai
// Create
Route::get('/create-pegawai', [PegawaiController::class, 'createPegawai'])->name('create');
Route::post('/insert-pegawai', [PegawaiController::class, 'insertPegawai'])->name('insert');

// Read
Route::get('/', [PegawaiController::class, 'getPegawai'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', [PegawaiController::class, 'getPegawai'])->middleware(['auth'])->name('dashboard');

// Update
Route::patch('/save-pegawai/{pegawai_id}', [PegawaiController::class, 'updatePegawai'])->name('save');
Route::get('/update-pegawai/{pegawai_id}', [PegawaiController::class, 'showFormUpdate'])->name('update');

// Delete
Route::delete('/delete-pegawai/{pegawai_id}', [PegawaiController::class, 'deletePegawai'])->name('delete');

Route::get('/', function () {
    return view('welcome');
});

// Halaman Pegawai
Route::get('/pegawai', [PegawaiController::class, 'getPegawai'])->middleware(['auth'])->name('pegawai');

// Halaman Obat
Route::get('/obat', [ObatController::class, 'getObat'])->middleware(['auth'])->name('obat');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
