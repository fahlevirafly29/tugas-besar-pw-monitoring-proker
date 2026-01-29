<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProkerController;

Route::get('/', function () {
    return view('welcome');
});

// Baris ini yang paling penting agar /proker bisa diakses
Route::resource('proker', ProkerController::class);