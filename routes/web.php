<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/siswa/create', [HomeController::class, 'create'])->name('siswa.create');
Route::post('/siswa/store', [HomeController::class, 'store'])->name('siswa.store');

use App\Http\Controllers\SiswaController;

Route::resource('siswa', SiswaController::class);
