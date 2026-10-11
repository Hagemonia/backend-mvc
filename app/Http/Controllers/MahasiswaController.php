<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nim' => '12345', 'nama' => 'Andi', 'jurusan' => 'Teknik Informatika'],
            ['nim' => '12346', 'nama' => 'Budi', 'jurusan' => 'Sistem Informasi'],
            ['nim' => '12347', 'nama' => 'Citra', 'jurusan' => 'Teknik Komputer'],
        ];

        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    public function show(string $nim)
    {
        return "Detail mahasiswa dengan NIM: {$nim}";
    }

    public function create()
    {
        return view('mahasiswa.create');
    }
}