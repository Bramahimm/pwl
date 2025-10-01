<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;


Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']) -> name('user.create');
Route::get('/user', [UserController::class, 'store']) -> name('user.store');


Route::get('/', function () {
    return view('welcome');
});
