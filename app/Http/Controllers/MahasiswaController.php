<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    // Menampilkan halaman form pendaftaran
    public function create()
    {
        return view('tambah_mahasiswa');
    }

    // Memproses penyimpanan data dari form ke database
    public function store(Request $request)
    {
        // Validasi inputan data
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim'  => 'required|string|unique:mahasiswa,nim',
            'prodi' => 'required|string',
        ]);

        // Menyimpan ke database
        Mahasiswa::create([
            'nama' => $request->nama,
            'nim'  => $request->nim,
            'prodi' => $request->prodi,
            'alamat' => $request->alamat,
        ]);

        // Jika sukses, kembali ke halaman dengan pesan sukses
        return redirect()->back()->with('sukses', 'Data Mahasiswa Baru UMNU Berhasil Disimpan!');
    }
}