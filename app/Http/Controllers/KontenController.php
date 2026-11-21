<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konten;
use App\Models\Platform;
use App\Models\AnggotaTim;

class KontenController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->bulan ?? date('m');
        $tahun = $request->tahun ?? date('Y');

        $konten = Konten::with(['platform', 'anggota'])
            ->whereMonth('tanggal_target', $bulan)
            ->whereYear('tanggal_target', $tahun)
            ->orderBy('tanggal_target')
            ->get();

        // Data platform untuk popup tambah dan edit
        $platform = Platform::all();

        return view('konten.index', compact(
            'konten',
            'bulan',
            'tahun',
            'platform'
        ));
    }

    public function create()
    {
        $platform = Platform::all();
        $anggota = AnggotaTim::all();

        return view('konten.create', compact(
            'platform',
            'anggota'
        ));
    }

    // TAMBAH KONTEN
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'jenis' => 'required|string|max:50',
            'platform_id' => 'required',
            'pic_nama' => 'required|string|max:100',
            'tanggal_target' => 'required|date',
            'status' => 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
        ]);

        Konten::create([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'platform_id' => $request->platform_id,
            'pic_id' => null,
            'pic_nama' => $request->pic_nama,
            'tanggal_target' => $request->tanggal_target,
            'status' => $request->status,
        ]);

        return redirect('/konten')->with(
            'success',
            'Konten berhasil ditambahkan!'
        );
    }

    // EDIT KONTEN
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:150',
            'jenis' => 'required|string|max:50',
            'platform_id' => 'required',
            'pic_nama' => 'required|string|max:100',
            'tanggal_target' => 'required|date',
            'status' => 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
        ]);

        $konten = Konten::findOrFail($id);

        $konten->update([
            'judul' => $request->judul,
            'jenis' => $request->jenis,
            'platform_id' => $request->platform_id,
            'pic_nama' => $request->pic_nama,
            'tanggal_target' => $request->tanggal_target,
            'status' => $request->status,
        ]);

        return redirect('/konten')->with(
            'success',
            'Konten berhasil diperbarui!'
        );
    }

    // HAPUS KONTEN
    public function destroy($id)
    {
        $konten = Konten::findOrFail($id);
        $konten->delete();

        return redirect('/konten')->with(
            'success',
            'Konten berhasil dihapus!'
        );
    }

    // UBAH STATUS
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Belum Dikerjakan,Sedang Dikerjakan,Selesai',
        ]);

        $konten = Konten::findOrFail($id);

        $konten->update([
            'status' => $request->status,
        ]);

        return redirect('/konten')->with(
            'success',
            'Status berhasil diperbarui!'
        );
    }
}
