<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});

Route::get('/tentang', function () {
    return view('tentang', ['title' => 'Tentang']);
});

Route::get('/program', function () {
    return view('program', ['title' => 'Program']);
});

Route::get('/galeri', function () {
    return view('galeri', ['title' => 'Galeri']);
});

Route::get('/histori', function () {
    return view('histori', ['title' => 'Histori']);
});
