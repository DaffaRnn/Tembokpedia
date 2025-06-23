<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

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

        return view('program.register', compact('program'), ["title" => "Registrasi"]);
    }
}
