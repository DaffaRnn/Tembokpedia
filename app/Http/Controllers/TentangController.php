<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index(){
        return view('tentang.index', ['title' => 'Tentang']);
    }
}
