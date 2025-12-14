<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    // Tampilkan daftar kelas
    public function index()
    {
        $kelas = Kelas::latest()->get();
        return view('kelas.index', compact('kelas'));
    }

    // Form tambah kelas
    public function create()
    {
        return view('kelas.create');
    }

    // Simpan data kelas
    public function store(Request $request)
    {
        $request->validate([
            'kode_kelas' => 'required|string|unique:kelas,kode_kelas',
            'nama_kelas' => 'required|string|max:255',
            'kapasitas'  => 'required|integer|min:1',
        ]);

        Kelas::create($request->all());

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan!');
    }

    // Form edit kelas
    public function edit(Kelas $kelas) // Model binding otomatis
    {
        return view('kelas.edit', compact('kelas'));
    }

    // Update data kelas
    public function update(Request $request, Kelas $kelas)
    {
        $request->validate([
            'kode_kelas' => 'required|string|unique:kelas,kode_kelas,' . $kelas->id,
            'nama_kelas' => 'required|string|max:255',
            'kapasitas'  => 'required|integer|min:1',
        ]);

        $kelas->update($request->all());

        return redirect()->route('kelas.index')->with('success', 'Data kelas berhasil diperbarui!');
    }

    // Hapus kelas
    public function destroy(Kelas $kelas)
    {
        $kelas->delete();
        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus!');
    }
}