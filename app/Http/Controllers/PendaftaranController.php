<?php
// Pada PendaftaranController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.create');
    }

    public function store(Request $request)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric',
            'jurusan' => 'required|string',
            'fakultas' => 'required|string',
            'total_sks' => 'required|numeric',
            'ipk' => 'required|numeric',
        ]);

        // Simpan data ke database menggunakan model
        Pendaftaran::create($validatedData);

        // Redirect dengan pesan sukses
        return redirect('/')->with('success', 'Pendaftaran berhasil disimpan');
    }
}