<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Program;
use App\Models\Relawan;
use App\Models\Gallery;
use App\Models\Histori;

class AdminController extends Controller
{
    public function index(){
        
        return view('admin.index');
    }

    public function relawan(){
        $relawans = Relawan::with('programs')->paginate(5);
        return view('admin.relawan', compact('relawans'));
    }

    public function Program(){
        $programs = Program::latest()->paginate(5);
        return view('admin.program', compact('programs'));
    }

    public function Galeri(){
        $galeries = Gallery::latest()->paginate(5);
        return view('admin.galeri', compact('galeries'));
    }

    public function Histori(){
        $historis = Histori::latest()->paginate(5);
        return view('admin.histori', compact('historis'));
    }

    public function create()
    {
        $relawans = Relawan::with(['programs' => function ($query) {
            $query->wherePivot('diterima', 1);
        }])->where('kategori', 'Dokumentator')->get();

        // Filter relawan yang punya program dengan status diterima
        $relawans = $relawans->filter(function ($relawan) {
            return $relawan->programs->isNotEmpty();
        });

        return view('admin.create', compact('relawans'), ['title' => 'Tambah Admin']);
    }

    public function store(Request $request)
    {
        $request->validate([
            'relawan_id' => 'required|exists:relawans,id'
        ]);

        $relawan = Relawan::findOrFail($request->relawan_id);

        // Cek apakah email sudah ada di tabel user
        if (User::where('email', $relawan->email)->exists()) {
            return back()->with('error', 'Email relawan ini sudah menjadi admin.');
        }

        User::create([
            'name' => $relawan->nama,
            'email' => $relawan->email,
            'role' => 'admin-dokumentator', // Pastikan role ini kamu kelola sesuai kebutuhan
            'password' => bcrypt('defaultpassword'), // Optional karena kamu pakai login Google
            'google_id' => '12n4n1b4kjbwqk341k34k',
        ]);

        return redirect()->route('admin.index')->with('success', 'Admin berhasil ditambahkan.');
    }
}
