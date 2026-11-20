<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SapaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'  => 'Veyrani Aisyah',
        'nim'   => '0123456789',
        'kelas' => 'TRM-00',
    ]);
});

Route::get('/latihan', function () {
    $matakuliah = ['Pemrograman Web', 'Basis Data', 'UI/UX'];

    return view('pages.latihan', [
        'matakuliah' => $matakuliah
    ]);
});

Route::post('/product', [ProductController::class, 'store']);
Route::get('/sapa', [SapaController::class, 'index']);
Route::view('/contact', 'pages.contact');
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);