<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        //opsi 1
        // Jika ada pencarian
        // $search = $request->query('search');

        // $query = Program::query();

        // if ($search) {
        //     $query->where('title', 'like', "%$search%")
        //           ->orWhere('location', 'like', "%$search%");
        // }

        // Pagination dan sorting by date (default DESC)
        // $programs = $query->orderBy('date', 'desc')->paginate(6);

        // return view('program.index', compact('programs', 'search'), ['title' => 'Program']);

        //opsi 2
        // $search = $request->input('search');

        // Ambil program berdasarkan status, urutkan:
        // 1. Sedang Berlangsung
        // 2. Segera Dimulai
        // 3. Selesai
        // $statusOrder = [
        //     'Sedang Berlangsung' => 1,
        //     'Segera Dimulai' => 2,
        //     'Selesai' => 3
        // ];

        // $programs = Program::when($search, function ($query) use ($search) {
        //         $query->where('title', 'like', "%$search%")
        //               ->orWhere('description', 'like', "%$search%")
        //               ->orWhere('location', 'like', "%$search%");
        //     })
        //     ->get()
        //     ->sortBy(function ($item) use ($statusOrder) {
        //         return $statusOrder[$item->status] ?? 99;
        //     });

        // return view('program.index', [
        //     'programs' => $programs,
        //     'search' => $search,
        //     'title' => 'Program'
        // ]);

        //opsi 3
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
}
