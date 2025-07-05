<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoriController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RelawanController;

Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

Route::get('/tentang', [TentangController::class, 'index'])->name('tentang.index');

Route::get('/program', [ProgramController::class, 'index'])->name('program.index');

Route::get('/program/register/{id}', [ProgramController::class, 'register'])->name('program.register');

Route::post('/program/register/{id}', [ProgramController::class, 'storeRegistration'])->name('program.register.store');

Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri.index');

Route::get('/histori', [HistoriController::class, 'index'])->name('histori.index');

Route::get('/histori/{id}', [HistoriController::class, 'show'])->name('histori.show');

Route::get('/auth', [AuthController::class, 'redirect'])->name('login');

Route::get('/auth/callback', [AuthController::class, 'callback']);

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin.index');

// Route Admin Relawan
Route::get('/admin/relawan', [AdminController::class, 'relawan'])->middleware('auth')->name('admin.relawan');
Route::post('/relawan/terima/{id}', [RelawanController::class, 'terima'])->middleware('auth')->name('relawan.terima');
Route::post('/relawan/tolak/{id}', [RelawanController::class, 'tolak'])->middleware('auth')->name('relawan.tolak');
Route::get('/admin/tambah', [AdminController::class, 'create'])->middleware('auth')->name('admin.create');
Route::post('/admin/tambah', [AdminController::class, 'store'])->middleware('auth')->name('admin.store');

// Route Admin Program
Route::get('/admin/program', [AdminController::class, 'program'])->middleware('auth')->name('admin.program');
Route::get('/admin/program/create', [ProgramController::class, 'create'])->middleware('auth')->name('program.create');
Route::post('/admin/program/store', [ProgramController::class, 'store'])->middleware('auth')->name('program.store');
Route::get('/admin/program/edit/{id}', [ProgramController::class, 'edit'])->middleware('auth')->name('program.edit');
Route::put('/admin/program/{id}', [ProgramController::class, 'update'])->middleware('auth')->name('program.update');
Route::delete('/admin/program/{id}', [ProgramController::class, 'destroy'])->middleware('auth')->name('program.destroy');

// Route Admin Galeri
Route::get('/admin/galeri', [AdminController::class, 'galeri'])->middleware('auth')->name('admin.galeri');
Route::get('/admin/galeri/create', [GalleryController::class, 'create'])->middleware('auth')->name('galeri.create');
Route::post('/admin/galeri/store', [GalleryController::class, 'store'])->middleware('auth')->name('galeri.store');
Route::get('/admin/galeri/edit/{id}', [GalleryController::class, 'edit'])->middleware('auth')->name('galeri.edit');
Route::put('/admin/galeri/{id}', [GalleryController::class, 'update'])->middleware('auth')->name('galeri.update');
Route::delete('/admin/galeri/{id}', [GalleryController::class, 'destroy'])->middleware('auth')->name('galeri.destroy');

// Route Admin Histori
Route::get('/admin/histori', [AdminController::class, 'histori'])->middleware('auth')->name('admin.histori');
Route::get('/admin/histori/create', [HistoriController::class, 'create'])->middleware('auth')->name('histori.create');
Route::post('/admin/histori/store', [HistoriController::class, 'store'])->middleware('auth')->name('histori.store');
Route::get('/admin/histori/edit/{id}', [HistoriController::class, 'edit'])->name('histori.edit');
Route::put('/admin/histori/{id}', [HistoriController::class, 'update'])->name('histori.update');
Route::delete('/admin/histori/{id}', [HistoriController::class, 'destroy'])->name('histori.destroy');

