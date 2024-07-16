<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

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

// Menjadi baris berikut
Route::get('/pegawai', [PegawaiController::class, 'getPegawai'])->middleware(['auth'])->name('pegawai');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
