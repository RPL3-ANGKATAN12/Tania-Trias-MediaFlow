<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use App\Models\AnggotaTim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AktivitasController extends Controller
{
    // Menampilkan daftar anggota
    public function index()
    {
        $anggota = AnggotaTim::all();

        return view('aktivitas.index', compact('anggota'));
    }

    // Menampilkan halaman tambah aktivitas
    public function create()
    {
        $anggota = AnggotaTim::all();

        return view('aktivitas.create', compact('anggota'));
    }

    // Menampilkan aktivitas berdasarkan anggota, bulan, dan tahun
    public function show(Request $request, int $id)
    {
        $anggota = AnggotaTim::findOrFail($id);

        $bulan = $request->input('bulan', date('n'));
        $tahun = $request->input('tahun', date('Y'));

        $aktivitas = Aktivitas::where('anggota_id', $id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->orderBy('tanggal', 'asc')
            ->get();

        return view('aktivitas.show', compact(
            'anggota',
            'aktivitas',
            'bulan',
            'tahun'
        ));
    }

    // Menampilkan form tambah aktivitas anggota
    public function createActivity(int $id)
    {
        $anggota = AnggotaTim::findOrFail($id);

        return view('aktivitas.create', compact('anggota'));
    }

    // Menyimpan aktivitas baru
    public function storeActivity(Request $request, int $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'week_timeline' => 'required',
            'keterangan_pekerjaan' => 'required',
            'kategori_target' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'hasil' => 'nullable',
        ]);

        AnggotaTim::findOrFail($id);

        Aktivitas::create([
            'anggota_id' => $id,
            'konten_id' => null,
            'tanggal' => $request->tanggal,
            'week_timeline' => $request->week_timeline,
            'keterangan_pekerjaan' => $request->keterangan_pekerjaan,
            'kategori_target' => $request->kategori_target,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'hasil' => $request->hasil,
            'validasi' => 0,
        ]);

        return redirect('/aktivitas/anggota/' . $id)
            ->with('success', 'Pekerjaan berhasil disimpan!');
    }

    // Menampilkan form edit aktivitas
    public function edit(int $anggotaId, int $aktivitasId)
    {
        $anggota = AnggotaTim::findOrFail($anggotaId);

        $item = Aktivitas::where('anggota_id', $anggotaId)
            ->findOrFail($aktivitasId);

        return view('aktivitas.edit', compact('anggota', 'item'));
    }

    // Memperbarui aktivitas
    public function updateActivity(
        Request $request,
        int $anggotaId,
        int $aktivitasId
    ) {
        $request->validate([
            'tanggal' => 'required|date',
            'week_timeline' => 'required',
            'keterangan_pekerjaan' => 'required',
            'kategori_target' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'hasil' => 'nullable',
        ]);

        $item = Aktivitas::where('anggota_id', $anggotaId)
            ->findOrFail($aktivitasId);

        $item->update([
            'tanggal' => $request->tanggal,
            'week_timeline' => $request->week_timeline,
            'keterangan_pekerjaan' => $request->keterangan_pekerjaan,
            'kategori_target' => $request->kategori_target,
            'status' => $request->status,
            'deskripsi' => $request->deskripsi,
            'hasil' => $request->hasil,
        ]);

        return redirect('/aktivitas/anggota/' . $anggotaId)
            ->with('success', 'Pekerjaan berhasil diperbarui!');
    }

    // Menghapus aktivitas
    public function deleteActivity(int $anggotaId, int $aktivitasId)
    {
        $item = Aktivitas::where('anggota_id', $anggotaId)
            ->findOrFail($aktivitasId);

        $item->delete();

        return redirect('/aktivitas/anggota/' . $anggotaId)
            ->with('success', 'Pekerjaan berhasil dihapus!');
    }

    // Validasi aktivitas khusus Admin
    public function validasi(int $anggotaId, int $aktivitasId)
    {
        if (!Auth::check() || Auth::user()?->role !== 'admin') {
            abort(403, 'Kamu tidak memiliki akses.');
        }

        $aktivitas = Aktivitas::where('anggota_id', $anggotaId)
            ->where('id', $aktivitasId)
            ->firstOrFail();

        $aktivitas->validasi = !$aktivitas->validasi;
        $aktivitas->save();

        return back();
    }
}
