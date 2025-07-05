<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Histori;

class BerandaController extends Controller
{
    public function index(){
        $histories = Histori::latest()->take(3)->get();
        return view('beranda.index', compact('histories'), ['title' => 'Beranda']);
    }
}
