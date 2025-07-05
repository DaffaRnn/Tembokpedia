<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $items = Gallery::latest()->paginate(8); // Pagination
        return view('galeri.index', compact('items'), ['title' => 'Galeri']);
    }

    public function create()
    {
        return view('galeri.create', [
            'title' => 'Tambah Galeri'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:3072',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('gallery', 'public');
        }

        Gallery::create($validated);

        return redirect()->route('admin.galeri')->with('success', 'Gambar galeri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $galeri = Gallery::findOrFail($id);

        return view('galeri.edit', [
            'title' => 'Edit Galeri',
            'galeri' => $galeri
        ]);
    }

    public function update(Request $request, $id)
    {
        $galeri = Gallery::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image_path' => 'nullable|image|max:3072'
        ]);

        if ($request->hasFile('image_path')) {
            // Hapus gambar lama
            if ($galeri->image_path && \Storage::disk('public')->exists($galeri->image_path)) {
                \Storage::disk('public')->delete($galeri->image_path);
            }

            // Upload gambar baru
            $validated['image_path'] = $request->file('image_path')->store('gallery', 'public');
        }

        $galeri->update($validated);

        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Gallery::findOrFail($id);

        // Hapus gambar dari storage
        if ($galeri->image_path && \Storage::disk('public')->exists($galeri->image_path)) {
            \Storage::disk('public')->delete($galeri->image_path);
        }

        $galeri->delete();

        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil dihapus.');
    }

}
