@extends('layouts.app')

@section('content')
<!-- Bagian Header Utama + Logo -->
<div class="row mb-5">
    <div class="col-md-12 text-center">
        <!-- Menyisipkan Logo Kampus Modern -->
        <div class="mb-3">
            <img src="{{ asset('img/logo.png') }}" alt="Logo UMNU Kebumen" height="100" class="img-fluid drop-shadow">
        </div>
        <h2 class="fw-bold text-success">Profil Fakultas & Program Studi</h2>
        <p class="text-muted fs-5">Universitas Ma'arif Nahdlatul Ulama (UMNU) Kebumen</p>
        <hr class="w-25 mx-auto text-success border-2" style="height: 3px;">
    </div>
</div>

<!-- Tambahan Style Efek Hover Kartu (Biar Senada dengan Beranda) -->
<style>
    .drop-shadow {
        filter: drop-shadow(0px 4px 6px rgba(0, 0, 0, 0.1));
    }
    .card-fakultas {
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .prodi-box {
        transition: all 0.2s ease;
        border-radius: 10px;
    }
    .prodi-box:hover {
        background-color: #f0fdf4 !important; /* Hijau soft saat kursor menyentuh prodi */
        border-color: #bbf7d0 !important;
    }
</style>

<div class="row">
    {{-- Perulangan untuk memisahkan setiap Fakultas --}}
    @foreach($fakultas as $f)
    <div class="col-md-12 mb-4">
        <div class="card shadow-sm border-0 card-fakultas">
            <!-- Header Fakultas Menggunakan Warna Sukses/Hijau -->
            <div class="card-header bg-success text-white py-3">
                <h5 class="mb-0 fw-bold">🏛️ {{ $f['nama'] }}</h5>
            </div>
            <div class="card-body bg-white p-4">
                <div class="row">
                    {{-- Perulangan untuk memunculkan Prodi yang ada di dalam Fakultas tersebut --}}
                    @foreach($f['prodi'] as $p)
                    <div class="col-md-6 mb-3">
                        <div class="p-3 border d-flex justify-content-between align-items-center bg-light prodi-box">
                            <div>
                                <h6 class="fw-bold text-dark mb-1">{{ $p }}</h6>
                                <small class="text-muted">
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary px-2 py-1 rounded">Strata-1 (S1)</span>
                                </small>
                            </div>
                            {{-- Mengarahkan link URL dinamis sesuai dengan nama prodi --}}
                            <a href="{{ route('kampus.prodi', Str::slug($p)) }}" class="btn btn-sm btn-outline-success fw-semibold px-3 rounded-pill">
                                Lihat Detail <i class="bi bi-arrow-right-short"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection