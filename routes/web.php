<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\HistoriController;

Route::get('/', function () {
    return view('beranda.index', ['title' => 'Beranda']);
});

Route::get('/tentang', function () {
    return view('tentang.index', ['title' => 'Tentang']);
});

Route::get('/program', [ProgramController::class, 'index'])->name('program.index');

Route::get('/program/{id}/register', [ProgramController::class, 'register'])->name('program.register');

Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri.index');;

Route::get('/histori', [HistoriController::class, 'index'])->name('histori.index');
