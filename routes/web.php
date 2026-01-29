<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProkerController;

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan ini untuk akses halaman proker
Route::resource('proker', ProkerController::class);