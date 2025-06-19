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
}
