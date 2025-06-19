<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        // Jika ada pencarian
        $search = $request->query('search');

        $query = Program::query();

        if ($search) {
            $query->where('title', 'like', "%$search%")
                  ->orWhere('location', 'like', "%$search%");
        }

        // Pagination dan sorting by date (default DESC)
        $programs = $query->orderBy('date', 'desc')->paginate(6);

        return view('program.index', compact('programs', 'search'), ['title' => 'Program']);
    }
}
