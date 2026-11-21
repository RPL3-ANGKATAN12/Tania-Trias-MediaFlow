<?php

namespace App\Http\Controllers;

use App\Models\AnggotaTim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaTimController extends Controller
{
   
    // Memastikan hanya Admin yang bisa mengelola data anggota
    private function cekAdmin()
    {
        $user = Auth::user();

        if (!$user || $user->role !== 'admin') {
            abort(403, 'Kamu tidak memiliki akses.');
        }
    }

    // Menampilkan daftar anggota
    public function index()
    {
        $anggota = AnggotaTim::all();

        return view('anggota.index', compact('anggota'));
    }

    // Menampilkan form tambah anggota
    public function create()
    {
        $this->cekAdmin();

        return view('anggota.create');
    }

    // Menyimpan anggota baru
    public function store(Request $request)
    {
        $this->cekAdmin();

        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:100',
        ]);

        AnggotaTim::create($request->only('nama', 'jabatan'));

        return redirect('/anggota')
            ->with('success', 'Anggota tim berhasil ditambahkan!');
    }

    // Menampilkan form edit anggota
    public function edit(int $id)
    {
        $this->cekAdmin();

        $anggota = AnggotaTim::findOrFail($id);

        return view('anggota.edit', compact('anggota'));
    }

    // Memperbarui data anggota
    public function update(Request $request, int $id)
    {
        $this->cekAdmin();

        $request->validate([
            'nama' => 'required|max:100',
            'jabatan' => 'required|max:100',
        ]);

        $anggota = AnggotaTim::findOrFail($id);

        $anggota->update($request->only('nama', 'jabatan'));

        return redirect('/anggota')
            ->with('success', 'Data anggota berhasil diperbarui!');
    }

    // Menghapus anggota
    public function destroy(int $id)
    {
        $this->cekAdmin();

        $anggota = AnggotaTim::findOrFail($id);

        $anggota->delete();

        return redirect('/anggota')
            ->with('success', 'Data anggota berhasil dihapus!');
    }
}
