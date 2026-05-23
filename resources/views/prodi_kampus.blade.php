@extends('layouts.app')

@section('content')
<!-- Tombol Kembali ke Profil -->
<div class="mb-4">
    <a href="{{ route('kampus.profil') }}" class="btn btn-sm btn-outline-secondary">← Kembali ke Profil & Jurusan</a>
</div>

<!-- Header Detail Prodi -->
<div class="p-4 p-md-5 mb-4 text-white rounded bg-primary shadow-sm">
    <div class="col-md-8 px-0">
        <h1 class="display-5 fw-bold font-italic">{{ $detail['nama'] }}</h1>
        <p class="lead my-3">Program Studi Pilihan Unggulan Terakreditasi dengan Kurikulum Berbasis Kompetensi Industri.</p>
        <div class="badge bg-light text-primary py-2 px-3 fw-bold">Ketua Prodi: {{ $detail['kaprodi'] }}</div>
    </div>
</div>

<div class="row g-5">
    <!-- Konten Utama Detail -->
    <div class="col-md-8">
        <div class="p-4 bg-white rounded shadow-sm border mb-4">
            <h4 class="fw-bold text-secondary mb-3">👁️ Visi Program Studi</h4>
            <p class="text-muted mb-0">{{ $detail['visi'] }}</p>
        </div>

        <div class="p-4 bg-white rounded shadow-sm border mb-4">
            <h4 class="fw-bold text-secondary mb-3">🛠️ Fasilitas Pendukung Khusus</h4>
            <ul class="list-group list-group-flush">
                @foreach($detail['fasilitas'] as $fasilitas)
                    <li class="list-group-item text-muted ps-0">✓ {{ $fasilitas }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Sidebar Prospek Kerja -->
    <div class="col-md-4">
        <div class="position-sticky" style="top: 2rem;">
            <div class="p-4 mb-3 bg-white rounded shadow-sm border">
                <h4 class="fw-bold text-primary mb-3">💼 Prospek Karir</h4>
                <p class="text-muted small">Lulusan dari program studi ini dirancang untuk dapat menempati posisi-posisi strategis seperti:</p>
                <div class="text-secondary fw-semibold small mt-2">
                    {{ $detail['prospek'] }}
                </div>
            </div>

            <div class="p-4 mb-3 bg-light rounded border text-center">
                <h5 class="fw-bold text-dark">Tertarik Bergabung?</h5>
                <p class="text-muted small">Pendaftaran mahasiswa baru gelombang utama masih dibuka.</p>
                <a href="{{ route('kampus.kontak') }}" class="btn btn-sm btn-success w-100">Hubungi Admin Pendaftaran</a>
            </div>
        </div>
    </div>
</div>
@endsection