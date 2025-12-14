<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index()
    {
        $matakuliah = MataKuliah::latest()->get();
        return view('matakuliah.index', compact('matakuliah'));
    }

    // Form tambah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required|string|unique:mata_kuliahs,kode_mk',
            'nama_mk' => 'required|string|max:255',
            'sks'     => 'required|integer|min:1|max:6',
            'semester'=> 'required|integer|min:1|max:8',
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan!');
    }

    // Form edit
    public function edit(MataKuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // Update data
    public function update(Request $request, MataKuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required|string|unique:mata_kuliahs,kode_mk,' . $matakuliah->id,
            'nama_mk' => 'required|string|max:255',
            'sks'     => 'required|integer|min:1|max:6',
            'semester'=> 'required|integer|min:1|max:8',
        ]);

        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diperbarui!');
    }

    // Hapus data
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus!');
    }
}