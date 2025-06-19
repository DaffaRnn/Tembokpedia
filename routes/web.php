<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;

Route::get('/', function () {
    return view('beranda.index', ['title' => 'Beranda']);
});

Route::get('/tentang', function () {
    return view('tentang.index', ['title' => 'Tentang']);
});

Route::get('/program', [ProgramController::class, 'index'])->name('program.index');

Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri.index');;

Route::get('/histori', function () {
    return view('histori.index', ['title' => 'Histori']);
});
