<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProkerController;

Route::get('/', function () {
    return view('welcome');
});

// Pastikan baris ini tertulis lengkap dan diakhiri titik koma (;)
Route::resource('proker', ProkerController::class);