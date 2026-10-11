<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo/{nama}', function (string $nama) {
    return "Halo, {$nama}! Selamat datang di praktikum Laravel.";
});

Route::get('/mahasiswa/{nim}/{nama}', function (string $nim, string $nama) {
    return "NIM: {$nim} | Nama: {$nama}";
});

Route::get('/kampus/{nama?}', function (string $nama = 'Universitas') {
    return "Selamat datang di {$nama}";
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->middleware('log.request');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show']);

Route::post('/mahasiswa', function (Request $request) {
    return response()->json([
        'message' => 'Data mahasiswa berhasil diterima',
        'data' => [
            'nim' => $request->input('nim'),
            'nama' => $request->input('nama'),
            'jurusan' => $request->input('jurusan'),
        ],
    ]);
});