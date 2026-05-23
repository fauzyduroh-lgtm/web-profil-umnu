@extends('layouts.app')

@section('content')
<!-- Tambahan Style Khusus untuk Background Modern Efek Kaca (Glassmorphism) -->
<style>
    .hero-modern {
        background: linear-gradient(135deg, #115e59 0%, #047857 50%, #15803d 100%);
        position: relative;
        overflow: hidden;
    }
    /* Efek lingkaran abstrak di background agar lebih modern */
    .hero-modern::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }
    .hero-modern::after {
        content: '';
        position: absolute;
        bottom: -20%;
        left: -5%;
        width: 250px;
        height: 250px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
    }
    .card-custom {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card-custom:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
</style>

<div class="container">
    <!-- Hero Section dengan Background Gradasi Modern -->
    <div class="p-5 mb-5 text-white rounded-4 shadow-sm hero-modern">
        <div class="container-fluid py-5 position-relative" style="z-index: 2;">
            <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-semibold mb-3 shadow-sm">Portal Akademik Resmi</span>
            <h1 class="display-4 fw-bold text-white mb-3">Selamat Datang di Portal Kampus</h1>
            <p class="col-md-8 fs-5 text-white-50 mb-4">Mengembangkan potensi akademik dan kreativitas mahasiswa berbasis nilai-nilai luhur dan teknologi informasi modern.</p>
            <a href="{{ route('campuses.profile') }}" class="btn btn-white btn-light btn-lg px-4 fw-bold text-success shadow">
                Lihat Profil & Jurusan
            </a>
        </div>
    </div>

    <!-- Informasi Singkat Sekilas Kampus (Card Hover Efek) -->
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 card-custom">
                <div class="card-body p-4">
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-mortarboard fs-3"></i> <!-- Icon Akademik -->
                    </div>
                    <h4 class="fw-bold text-dark">Akademik</h4>
                    <p class="text-muted mb-0">Kurikulum berbasis kompetensi kerja yang siap menghadapi perkembangan zaman di era digital.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 card-custom">
                <div class="card-body p-4">
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-building fs-3"></i> <!-- Icon Fasilitas -->
                    </div>
                    <h4 class="fw-bold text-dark">Fasilitas</h4>
                    <p class="text-muted mb-0">Laboratorium komputer modern, ruang kelas multimedia, dan perpustakaan digital yang lengkap.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 card-custom">
                <div class="card-body p-4">
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle d-inline-block mb-3">
                        <i class="bi bi-person-plus fs-3"></i> <!-- Icon Pendaftaran -->
                    </div>
                    <h4 class="fw-bold text-dark">Pendaftaran</h4>
                    <p class="text-muted mb-0">Bergabunglah bersama kami menjadi bagian dari generasi unggul yang menguasai sains dan teknologi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection