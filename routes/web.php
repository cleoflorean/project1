<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('login');
});

Route::get('/Barang', [BarangController::class, 'index'])->name('Barang');