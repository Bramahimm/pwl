<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/profile/{nama?}/{kelas?}/{npm?}', [ProfileController::class, 'profile']);

Route::get('/', function () {
    return view('welcome');
});
