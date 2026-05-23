<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        // Mengarah ke file resources/views/beranda_kampus.blade.php
        return view('beranda_kampus');
    }

    public function profil()
    {
        $fakultas = [
            [
                'nama' => "Fakultas Keguruan dan Ilmu Pendidikan (FKIP)",
                'prodi' => ['S1 Pendidikan Bahasa Indonesia', 'S1 Pendidikan Bahasa Inggris', 'S1 Pendidikan Guru PAUD', 'S1 Pendidikan Olahraga']
            ],
            [
                'nama' => 'Fakultas Teknik',
                'prodi' => ['S1 Teknik Informatika', 'S1 Teknik Sipil']
            ],
            [
                'nama' => 'Fakultas Pertanian dan Peternakan',
                'prodi' => ['S1 Agroteknologi', 'S1 Peternakan']
            ]
        ];

        // Mengarah ke file resources/views/profil_kampus.blade.php
        return view('profil_kampus', compact('fakultas'));
    }

    public function kontak()
    {
        // Mengarah ke file resources/views/kontak_kampus.blade.php
        return view('kontak_kampus');
    }

    public function prodi($nama_prodi)
    {
        $all_prodi = [
            's1-teknik-informatika' => [
                'nama' => 'S1 Teknik Informatika',
                'fakultas' => 'Fakultas Teknik',
                'visi' => 'Menjadi Program Studi Teknik Informatika yang unggul dalam menghasilkan lulusan di bidang rekayasa perangkat lunak berlandaskan nilai-nilai Ahlussunnah wal Jamaah.',
                'prospek' => 'Web/Mobile Developer, Software Engineer, IT Administrator, Data Analyst.',
                'fasilitas' => ['Laboratorium Komputer & Jaringan', 'E-Library', 'Ruang Kuliah Multimedia']
            ],
            's1-teknik-sipil' => [
                'nama' => 'S1 Teknik Sipil',
                'fakultas' => 'Fakultas Teknik',
                'visi' => 'Menghasilkan sarjana teknik sipil yang kompeten dalam perencanaan, perancangan, dan pengelolaan infrastruktur.',
                'prospek' => 'Kontraktor, Konsultan Konstruksi, Project Manager.',
                'fasilitas' => ['Laboratorium Bahan & Beton', 'Studio Gambar Teknik']
            ],
            's1-pendidikan-bahasa-indonesia' => [
                'nama' => 'S1 Pendidikan Bahasa Indonesia',
                'fakultas' => 'FKIP',
                'visi' => 'Menghasilkan pendidik Bahasa dan Sastra Indonesia yang profesional, inovatif, dan berkarakter mulia.',
                'prospek' => 'Guru Bahasa Indonesia, Jurnalis, Penulis, Penyunting Bahasa.',
                'fasilitas' => ['Laboratorium Microteaching', 'Perpustakaan Bahasa']
            ],
            's1-pendidikan-bahasa-inggris' => [
                'nama' => 'S1 Pendidikan Bahasa Inggris',
                'fakultas' => 'FKIP',
                'visi' => 'Menjadi pusat keunggulan pendidikan bahasa Inggris yang menghasilkan lulusan berdaya saing global.',
                'prospek' => 'Guru Bahasa Inggris, Penerjemah, Instruktur Bahasa.',
                'fasilitas' => ['Laboratorium Bahasa Komputerisasi']
            ],
            's1-pendidikan-guru-paud' => [
                'nama' => 'S1 Pendidikan Guru PAUD',
                'fakultas' => 'FKIP',
                'visi' => 'Mencetak pendidik anak usia dini yang kreatif, kompeten, dan memahami tumbuh kembang anak secara islami.',
                'prospek' => 'Guru PAUD/TK, Pengelola Yayasan Pendidikan Anak.',
                'fasilitas' => ['Ruang Simulasi Mengajar & Alat Peraga Edukatif']
            ],
            's1-pendidikan-olahraga' => [
                'nama' => 'S1 Pendidikan Olahraga',
                'fakultas' => 'FKIP',
                'visi' => 'Menghasilkan tenaga pendidik jasmani dan olahraga yang profesional, bugar, dan berprestasi.',
                'prospek' => 'Guru Olahraga, Pelatih Fisik, Instruktur Kebugaran.',
                'fasilitas' => ['Sarana Lapangan Olahraga, Alat Ukur Kebugaran']
            ],
            's1-agroteknologi' => [
                'nama' => 'S1 Agroteknologi',
                'fakultas' => 'Fakultas Pertanian dan Peternakan',
                'visi' => 'Mengembangkan ilmu pertanian berkelanjutan berbasis sumber daya lokal untuk kedaulatan pangan.',
                'prospek' => 'Agribisnis, Ahli Agronomi, Peneliti Tanaman.',
                'fasilitas' => ['Laboratorium Pertanian, Kebun Percobaan Kampus']
            ],
            's1-peternakan' => [
                'nama' => 'S1 Peternakan',
                'fakultas' => 'Fakultas Pertanian dan Peternakan',
                'visi' => 'Menghasilkan sarjana peternakan yang ahli dalam teknologi budidaya dan pemuliaan ternak modern.',
                'prospek' => 'Wirausaha Peternakan, Supervisor Industri Pakan.',
                'fasilitas' => ['Kandang Percobaan, Lab Nutrisi Ternak']
            ]
        ];

        if (!array_key_exists($nama_prodi, $all_prodi)) {
            abort(404);
        }

        $detail = $all_prodi[$nama_prodi];

        // Mengarah ke file resources/views/prodi_kampus.blade.php
        return view('prodi_kampus', compact('detail'));
    }
}