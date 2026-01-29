<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Tambahkan ini untuk akses database

class ProkerController extends Controller
{
    /**
     * TAMPILKAN DATA (Read)
     */
    public function index()
    {
        // Mengambil semua data dari tabel prokers
        $prokers = DB::table('prokers')->get();
        
        // Mengirim data ke view proker/index.blade.php
        return view('proker.index', compact('prokers'));
    }

    /**
     * FORM TAMBAH DATA
     */
    public function create()
    {
        return view('proker.create');
    }

    /**
     * SIMPAN DATA BARU (Create)
     */
    public function store(Request $request)
    {
        // Validasi form (Syarat di PDF poin 26)
        $request->validate([
            'nama_proker' => 'required',
            'status' => 'required',
        ]);

        DB::table('prokers')->insert([
            'nama_proker' => $request->nama_proker,
            'status' => $request->status,
        ]);

        return redirect()->route('proker.index')->with('success', 'Proker berhasil ditambah!');
    }

    /**
     * HAPUS DATA (Delete)
     */
    public function destroy(string $id)
    {
        DB::table('prokers')->where('id', $id)->delete();
        return redirect()->route('proker.index')->with('success', 'Proker berhasil dihapus!');
    }

    // Fungsi show, edit, dan update bisa diisi nanti oleh teman kelompokmu
}