<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Relawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Buat query builder untuk program
        $query = Program::query();

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%$search%")
                ->orWhere('description', 'like', "%$search%")
                ->orWhere('location', 'like', "%$search%");
            });
        }

        // Gunakan CASE untuk sorting berdasarkan status
        $query->orderByRaw("CASE 
            WHEN status = 'Sedang Berlangsung' THEN 1 
            WHEN status = 'Segera Dimulai' THEN 2 
            WHEN status = 'Selesai' THEN 3 
            ELSE 4 END");

        // Paginasi 6 item per halaman (bisa disesuaikan)
        $programs = $query->paginate(3)->withQueryString();

        return view('program.index', [
            'programs' => $programs,
            'search' => $search,
            'title' => 'Program'
        ]);


    }

    public function register($id){
        $program = Program::findOrFail($id); // cari berdasarkan id, akan error 404 jika tidak ditemukan
        // @dd($id, $program);
        return view('program.register', compact('program'), ["title" => "Registrasi"]);
    }

    public function storeRegistration(Request $request, $programId){
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'kategori' => 'required|string|max:100',
        ]);

        DB::beginTransaction();

        try {
            // Simpan data relawan
            $relawan = Relawan::create([
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'kategori' => $validated['kategori'],
            ]);

            // Daftarkan relawan ke program melalui tabel registrasi (pivot)
            $relawan->programs()->attach($programId, [
                'diterima' => null,
                'alasan' => null,
            ]);

            DB::commit();

            return redirect()->route('program.index')->with('success', 'Pendaftaran berhasil. Silakan tunggu konfirmasi dari admin.');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan pendaftaran.' . $e->getMessage());
        }
    }

    public function create(){
        return view('program.create', ['title' => 'Tambah Program']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:200',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'status' => 'required|in:Sedang Berlangsung,Segera Dimulai,Selesai',
            'image_path' => 'nullable|image|max:3072',
            'activities' => 'nullable|array',
            'activities.*' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('programs', 'public');
        }

        Program::create($validated);

        return redirect()->route('admin.program')->with('success', 'Program berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $program = Program::findOrFail($id);
        return view('program.edit', [
            'program' => $program,
            'title' => 'Edit Program'
        ]);
    }

    public function update(Request $request, $id)
    {
        $program = Program::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'status' => 'required|in:Sedang Berlangsung,Segera Dimulai,Selesai',
            'image_path' => 'nullable|image|max:3072',
            'activities' => 'nullable|array',
            'activities.*' => 'nullable|string|max:255',
        ]);

        // Jika gambar baru diupload
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('programs', 'public');
        }

        $program->update($validated);

        return redirect()->route('admin.program')->with('success', 'Program berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return redirect()->route('admin.program')->with('success', 'Program berhasil dihapus.');
    }
}
