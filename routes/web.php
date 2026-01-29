<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProkerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Menghubungkan URL /proker ke ProkerController
Route::resource('proker', ProkerController::class);