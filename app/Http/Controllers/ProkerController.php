<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function index(Request $request)
    {
    $search = $request->get('search');

    $prokers = Proker::when($search, function($query) use ($search) {
        return $query->where('nama_proker', 'like', "%{$search}%")
                     ->orWhere('divisi', 'like', "%{$search}%");
    })->get();

    return view('prokers.index', compact('prokers'));
}

    public function create() {
        return view('prokers.create'); 
    }

    public function store(Request $request) {
        $request->validate([
            'nama_proker' => 'required|string|min:5|unique:prokers,nama_proker',
            'divisi'      => 'required',
            'deskripsi'   => 'required|min:10',
        ]); 

        $proker = new Proker(); 
        $proker->nama_proker = $request->nama_proker; 
        $proker->divisi      = $request->divisi;
        $proker->deskripsi   = $request->deskripsi;
        $proker->status      = 'Belum';
        $proker->save();

        return redirect()->route('proker.index')->with('success', 'Proker berhasil disimpan!'); 
    }

    public function edit($id) {
        $proker = Proker::find($id); 
        return view('prokers.edit', compact('proker')); 
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_proker' => 'required|string|min:5',
            'divisi'      => 'required',
            'deskripsi'   => 'required|min:10',
        ]);

        $proker = Proker::find($id); 
        $proker->nama_proker = $request->nama_proker;
        $proker->divisi      = $request->divisi;
        $proker->deskripsi   = $request->deskripsi;
        $proker->status      = $request->status;
        $proker->save(); 

        return redirect('/proker')->with('success', 'Data diperbarui!'); 
    }

    public function destroy($id) {
        $proker = Proker::find($id); 
        $proker->delete(); 
        return redirect('/proker')->with('success', 'Data dihapus!'); 
    }
}