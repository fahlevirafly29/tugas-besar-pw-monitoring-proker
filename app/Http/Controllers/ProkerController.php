<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class ProkerController extends Controller
{
    public function index()
    {
        // Mengambil data dari tabel 'prokers'
        $prokers = DB::table('prokers')->get();
        
        // Memanggil file di resources/views/proker/index.blade.php
        return view('proker.index', compact('prokers'));
    }

    // ... fungsi lainnya (store, destroy) tetap seperti yang kamu punya
}