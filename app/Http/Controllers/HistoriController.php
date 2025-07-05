<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histori;
use App\Models\Program;

class HistoriController extends Controller
{
    public function index()
    {
        $histories = Histori::with('program')->latest()->paginate(6);
        // $histories = Histori::whereHas('program')->with('program')->latest()->paginate(6);

        return view('histori.index', [
            'histories' => $histories,
            'title' => 'Histori'
        ]);
    }

    public function create()
    {
        // Ambil semua program yang statusnya sudah "Selesai" dan belum ada histori-nya
        $programs = Program::where('status', 'Selesai')
            ->whereDoesntHave('histori')
            ->get();

        return view('histori.create', [
            'programs' => $programs,
            'title' => 'Buat Histori Baru'
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'program_id' => 'required|exists:programs,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tanggal_selesai' => 'required|date',
            'image_path' => 'nullable|image|max:3072',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('historis', 'public');
        }

        Histori::create($validated);

        return redirect()->route('admin.histori')->with('success', 'Histori berhasil ditambahkan.');
    }

    public function show($id)
    {
        $histori = Histori::with('program')->findOrFail($id);

        // Ambil relawan dari program yang terkait dengan histori
        $relawans = $histori->program->relawan;

        return view('histori.show', [
            'title' => 'Detail Histori',
            'histori' => $histori,
            'relawans' => $relawans,
        ]);
    }

    public function edit($id)
    {
        $histori = Histori::with('program')->findOrFail($id);
        $programs = Program::where('status', 'Selesai')->get();

        return view('histori.edit', [
            'histori' => $histori,
            'programs' => $programs,
            'title' => 'Edit Histori'
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'program_id' => 'required|exists:programs,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tanggal_selesai' => 'required|date',
            'image_path' => 'nullable|image|max:3072',
        ]);

        $histori = Histori::findOrFail($id);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('historis', 'public');
        }

        $histori->update($validated);

        return redirect()->route('admin.histori')->with('success', 'Histori berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $histori = Histori::findOrFail($id);
        $histori->delete();

        return redirect()->route('histori.index')->with('success', 'Histori berhasil dihapus.');
    }

}
