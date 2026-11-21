<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\VideoArsip;

class VideoArsipController extends Controller
{
    // Menampilkan daftar arsip video
    public function index(Request $request)
    {
        $video = VideoArsip::query()
            ->when($request->cari, function ($query, $cari) {
                $query->where('judul', 'like', '%' . $cari . '%');
            })
            ->when($request->bulan, function ($query, $bulan) {
                $query->whereMonth('created_at', $bulan);
            })
            ->when($request->tahun, function ($query, $tahun) {
                $query->whereYear('created_at', $tahun);
            })
            ->latest()
            ->get();

        return view('video.index', compact('video'));
    }

    // Menampilkan halaman tambah video
    public function create()
    {
        return view('video.create');
    }

    // Menyimpan video baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'caption' => 'nullable|string',
            'video' => 'required|mimes:mp4,mov,avi,mkv|max:102400',
        ]);

        $file = $request->file('video');

        $namaFile = $file->getClientOriginalName();

        $path = $file->store('videos', 'public');

        VideoArsip::create([
            'judul' => $request->judul,
            'nama_file' => $namaFile,
            'path' => $path,
            'deskripsi' => $request->deskripsi,
            'caption' => $request->caption,
        ]);

        return redirect('/video')->with('success', 'Video berhasil disimpan!');
    }

    // Menampilkan halaman edit video
    public function edit($id)
    {
        $item = VideoArsip::findOrFail($id);

        return view('video.edit', compact('item'));
    }

    // Menyimpan perubahan video
    public function update(Request $request, $id)
    {
        $item = VideoArsip::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'caption' => 'nullable|string',
            'video' => 'nullable|mimes:mp4,mov,avi,mkv|max:102400',
        ]);

        $item->judul = $request->judul;
        $item->deskripsi = $request->deskripsi;
        $item->caption = $request->caption;

        if ($request->hasFile('video')) {

            // Simpan informasi file lama
            $pathLama = $item->path;

            // Upload video baru
            $file = $request->file('video');

            $item->nama_file = $file->getClientOriginalName();
            $item->path = $file->store('videos', 'public');

            // Hapus video lama setelah video baru berhasil disimpan
            if ($pathLama) {
                Storage::disk('public')->delete($pathLama);
            }
        }

        $item->save();

        return redirect('/video')->with('success', 'Video berhasil diperbarui!');
    }

    // Menghapus video
    public function destroy($id)
    {
        $item = VideoArsip::findOrFail($id);

        // Hapus file video dari penyimpanan
        if ($item->path) {
            Storage::disk('public')->delete($item->path);
        }

        // Hapus data video dari database
        $item->delete();

        return redirect('/video')->with('success', 'Video berhasil dihapus!');
    }
}
