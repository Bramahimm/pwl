<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// contoh route profile (modul 1)
Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

// ==== ROUTE UNTUK USER ====
Route::get('/users', [UserController::class, 'index'])->name('user.index');   // GET daftar user
Route::get('/users/create', [UserController::class, 'create'])->name('user.create'); // GET form tambah user
Route::post('/users', [UserController::class, 'store'])->name('user.store'); // POST simpan user baru
