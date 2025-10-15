<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\UserController;
use App\Models\Matakuliah;

Route::get('/', function () {
    return view('welcome');
});

// contoh route profile (modul 1)
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

// ==== ROUTE UNTUK USER ====
Route::get('/users', [UserController::class, 'index'])->name('user.index');   // GET daftar user
Route::get('/users/create', [UserController::class, 'create'])->name('user.create'); // GET form tambah user
Route::post('/users', [UserController::class, 'store'])->name('user.store'); // POST simpan user baru

Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MataKuliahController::class, 'create']) -> name('matakuliah.create');
Route::post('/matakuliah', [MataKuliahController::class, 'store']) -> name('matakuliah.store');

Route::get('/mata-kuliah/{id}/edit', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/mata-kuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/mata-kuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
